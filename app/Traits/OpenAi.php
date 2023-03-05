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
            return '"Write a maximum 3000-word, Human-Written lecture notes in Indonesian with at least 5 headings and subheadings (including I, II, III, IV, and V headings) that covers the topic provided in the Prompt. Do not include the outline. Use formal language and detailed paragraphs. End with a conclusion paragraph. Now Write a Lecture Notes on Topic \\"' . $title . '\\""';
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
            return 4000;
        } else if ($field === 'conclusion') {
            return 2000;
        } else if ($field === 'key_point') {
            return 1000;
        } else {
            return 500;
        }
    }

    public function formatHeadingUpper($text): array|string
    {
        $text = str_replace('A. ', '&nbsp;&nbsp;&nbsp;A. ', $text);
        $text = str_replace('B. ', '&nbsp;&nbsp;&nbsp;B. ', $text);
        $text = str_replace('C. ', '&nbsp;&nbsp;&nbsp;C. ', $text);
        $text = str_replace('D. ', '&nbsp;&nbsp;&nbsp;D. ', $text);
        $text = str_replace('E. ', '&nbsp;&nbsp;&nbsp;E. ', $text);
        $text = str_replace('F. ', '&nbsp;&nbsp;&nbsp;F. ', $text);
        $text = str_replace('G. ', '&nbsp;&nbsp;&nbsp;G. ', $text);

        return $text;
    }
}
