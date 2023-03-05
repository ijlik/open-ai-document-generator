@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div
                        class="card-header">{{ __('List Judul') }} {{ Queue::size() > 0 ? '(Loading '.number_format((100-(Queue::size()/(\App\Models\Article::count())*100)),2).'%)':'' }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Opening</th>
                                <th scope="col">Content</th>
                                <th scope="col">Conclusion</th>
                                <th scope="col">Key Points</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($keywords as $keyword)
                                <tr>
                                    <th scope="row">{{ $keyword['id'] }}</th>
                                    <td>{{ $keyword['title'] }}</td>
                                    <td>
                                        @if($keyword->article !== null)
                                            @if($keyword->article['opening'] !== null)
                                                <span class="text-success">o</span>
                                            @else
                                                <span class="text-danger">x</span>
                                            @endif
                                        @else
                                            <span class="text-danger">x</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($keyword->article !== null)
                                            @if($keyword->article['content'] !== null)
                                                <span class="text-success">o</span>
                                            @else
                                                <span class="text-danger">x</span>
                                            @endif
                                        @else
                                            <span class="text-danger">x</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($keyword->article !== null)
                                            @if($keyword->article['conclusion'] !== null)
                                                <span class="text-success">o</span>
                                            @else
                                                <span class="text-danger">x</span>
                                            @endif
                                        @else
                                            <span class="text-danger">x</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($keyword->article !== null)
                                            @if($keyword->article['key_point'] !== null)
                                                <span class="text-success">o</span>
                                            @else
                                                <span class="text-danger">x</span>
                                            @endif
                                        @else
                                            <span class="text-danger">x</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($keyword['is_ready'])
                                            @if(!$keyword['is_downloaded'])
                                                <a href="/home/generate/{{ $keyword['id'] }}?format=pdf"
                                                   class="btn btn-danger btn-sm">.pdf</a>
{{--                                                <a href="/home/generate/{{ $keyword['id'] }}?format=docx"--}}
{{--                                                   class="btn btn-info btn-sm">.docx</a>--}}
                                            @endif
                                        @else
                                            <a href="/home/generate/{{ $keyword['id'] }}"
                                               class="btn btn-success btn-sm">Generate</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $keywords->links() }}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Entry Judul') }}</div>

                    <div class="card-body">
                        <form action="/home/add-keyword" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Masukan Judul Artikel <br>(pisahkan dengan semicolon ;)</label>
                                <textarea class="form-control" rows="10" name="title"></textarea>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary mt-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
