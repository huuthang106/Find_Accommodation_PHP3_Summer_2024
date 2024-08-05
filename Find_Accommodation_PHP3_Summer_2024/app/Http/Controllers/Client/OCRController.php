<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class OCRController extends Controller
{
    //
    public function processOCR(Request $request)
    {
        $client = new Client();
        $images = $request->file('images');
        $responses = [];

        foreach ($images as $image) {
            $image_base64 = base64_encode(file_get_contents($image->getPathname()));

            try {
                $response = $client->post('https://api.fpt.ai/vision/idr/vnm', [
                    'headers' => [
                        'api_key' => 'KqNocx5pH0H7oNq9HVq0JatzmwqfkpwY',
                    ],
                    'form_params' => [
                        'image_base64' => $image_base64,
                    ],
                ]);

                $resData = json_decode($response->getBody(), true);

                if (isset($resData['data'][0])) {
                    $responses[] = [
                        'message' => 'OK',
                        'data' => $resData['data'][0],
                    ];
                } else {
                    $responses[] = ['message' => 'Not OK'];
                }
            } catch (\Exception $e) {
                $responses[] = ['message' => $e->getMessage()];
            }
        }

        return response()->json($responses);
    }

}
