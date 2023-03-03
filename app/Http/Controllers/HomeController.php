<?php

namespace App\Http\Controllers;

use App\Jobs\GenerateArticle;
use App\Models\Keyword;
use App\Traits\OpenAi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpWord\Element\Section;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;

class HomeController extends Controller
{
    use OpenAi;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $currentUser = $request->user();
        $keywords = $currentUser->keywords()->where('is_downloaded', 0)->with('article')->paginate(10);
        return view('home', compact('keywords'));
    }

    public function generate($id)
    {
        $keyword = Keyword::find($id);
        if (!$keyword['is_ready']) {
            dispatch(new GenerateArticle($keyword));
            return redirect('/home');
        } else {
            $keyword->load('article');
            $keyword['is_downloaded'] = 1;
            $keyword->save();
            if (isset($_GET['format'])) {
                if ($_GET['format'] === 'docx') {
                    $phpWord = new PhpWord();
                    $section = $phpWord->addSection();
                    $section->addText(
                        $keyword['title'],
                        array('name' => 'Times New Roman', 'size' => 14, 'bold' => true)
                    );
                    $section->addText(
                        '',
                        array('name' => 'Times New Roman', 'size' => 12)
                    );
                    $section->addText(
                        '',
                        array('name' => 'Times New Roman', 'size' => 12)
                    );
                    $section->addText(
                        $keyword['article']['content'],
                        array('name' => 'Times New Roman', 'size' => 12)
                    );
                    $filename = $keyword['id'] . '. ' . $keyword['title'] . '.docx';
                    $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
                    $objWriter->save($filename);

                    return response()->download($filename)->deleteFileAfterSend();
                }
            }
            return Pdf::loadView('article', [
                'title' => $keyword['title'],
                'article' => $keyword['article']
            ])->download($keyword['id'] . '. ' . $keyword['title'] . '.pdf');
        }
    }

    public function addKeywords(Request $request)
    {
        $bulkTitle = $request['title'];
        $titles = explode(';', $bulkTitle);
        $currentUser = $request->user();
        $data = [];
        foreach ($titles as $title) {
            $data[] = [
                'user_id' => $currentUser['id'],
                'title' => $title
            ];
        }
        DB::table('keywords')->insert($data);

        return redirect('/home');
    }
}
