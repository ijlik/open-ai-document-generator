<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait OpenAi
{
    public function generateText($field, $title)
    {
        $json_request = '{
              "model": "text-davinci-003",
              "prompt": ' . $this->makePrompt($title, $field) . ',
              "temperature": 0.7,
              "max_tokens": ' . $this->getMaxToken($field) . ',
              "top_p": 1,
              "frequency_penalty": 0,
              "presence_penalty": 0
            }';

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.openai.com/v1/completions',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER =>false,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $json_request,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . env('OPEN_AI_API_KEY')
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response, true);
    }

    private function makePrompt($title, $field): string
    {
        if ($field === 'opening') {
            return '"Please write in Indonesian language only. Make me opening article with title \\"' . $title . '\\""';
        } else if ($field === 'content') {
            return '"Please write in Indonesian language only. Make me main content article with title \\"' . $title . '\\". Please include complete example and clean explanation."';
        } else if ($field === 'conclusion') {
            return '"Please reply in Indonesian language only. Make me conclusion article with title \\"' . $title . '\\""';
        } else if ($field === 'key_point') {
            return '"Please reply in Indonesian language only. What are 5 key points I should know when writing article with title \\"' . $title . '\\"?"';
        } else {
            return $title;
        }
    }

    private function getMaxToken($field): int
    {
        if ($field === 'opening') {
            return 1000;
        } else if ($field === 'content') {
            return 3000;
        } else if ($field === 'conclusion') {
            return 2000;
        } else if ($field === 'key_point') {
            return 1000;
        } else {
            return 500;
        }
    }

    public function formatNumber($text): array|string
    {
        $text = str_replace('1.', '<br>1.', $text);
        $text = str_replace('2.', '<br>2.', $text);
        $text = str_replace('3.', '<br>3.', $text);
        $text = str_replace('4.', '<br>4.', $text);
        $text = str_replace('5.', '<br>5.', $text);
        $text = str_replace('6.', '<br>6.', $text);
        $text = str_replace('7.', '<br>7.', $text);
        $text = str_replace('8.', '<br>8.', $text);
        $text = str_replace('9.', '<br>9.', $text);
        $text = str_replace('10.', '<br>10.', $text);

        return $text;
    }
}
