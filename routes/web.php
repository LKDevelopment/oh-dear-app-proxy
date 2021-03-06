<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/', function () {
    return response()->json(['response' => 'ok']);
});
$router->get('/api/me', function (\Illuminate\Http\Request $request) {
    if ($request->hasHeader('Authorization')) {
        $guzzle = new \GuzzleHttp\Client();
        try {
            return response((string)$guzzle->get('https://ohdearapp.com/api/me', [
                'headers' => [
                    'Authorization' => $request->header('Authorization'),
                ],
            ])->getBody());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            return response()->make((string)$e->getResponse()->getBody());
        }
    }
});
$router->get('/api/sites', function (\Illuminate\Http\Request $request) {
    if ($request->hasHeader('Authorization')) {
        $guzzle = new \GuzzleHttp\Client();
        try {
            return response((string)$guzzle->get('https://ohdearapp.com/api/sites', [
                'headers' => [
                    'Authorization' => $request->header('Authorization'),
                ],
            ])->getBody());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            return response()->make((string)$e->getResponse()->getBody());
        }
    }
});
$router->post('/api/sites', function (\Illuminate\Http\Request $request) {
    if ($request->hasHeader('Authorization')) {
        $guzzle = new \GuzzleHttp\Client();
        try {
            return response((string)$guzzle->post('https://ohdearapp.com/api/sites', [
                'headers' => [
                    'Authorization' => $request->header('Authorization'),
                ],
                'json' => ['team_id' => $request->get('team_id'), 'url' => $request->get('url')],
            ])->getBody());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            return response()->make((string)$e->getResponse()->getBody());
        }
    }
});
$router->delete('/api/sites/{site}', function (\Illuminate\Http\Request $request, $site) {
    if ($request->hasHeader('Authorization')) {
        $guzzle = new \GuzzleHttp\Client();
        try {
            return response((string)$guzzle->delete('https://ohdearapp.com/api/sites/' . $site, [
                'headers' => [
                    'Authorization' => $request->header('Authorization'),
                ],
                'json' => ['team_id' => $request->get('team_id'), 'url' => $request->get('url')],
            ])->getBody());
        } catch
        (\GuzzleHttp\Exception\ClientException $e) {
            return response()->make((string)$e->getResponse()->getBody());
        }
    }
});
$router->post('/api/checks/{check}/enable', function (\Illuminate\Http\Request $request, $check) {
    if ($request->hasHeader('Authorization')) {
        $guzzle = new \GuzzleHttp\Client();
        try {
            return response((string)$guzzle->post('https://ohdearapp.com/api/checks/' . $check . '/enable', [
                'headers' => [
                    'Authorization' => $request->header('Authorization'),
                ],
            ])->getBody());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            return response()->make((string)$e->getResponse()->getBody());
        }
    }
});
$router->post('/api/checks/{check}/disable', function (\Illuminate\Http\Request $request, $check) {
    if ($request->hasHeader('Authorization')) {
        $guzzle = new \GuzzleHttp\Client();
        try {
            return response((string)$guzzle->post('https://ohdearapp.com/api/checks/' . $check . '/disable', [
                'headers' => [
                    'Authorization' => $request->header('Authorization'),
                ],
            ])->getBody());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            return response()->make((string)$e->getResponse()->getBody());
        }
    }
});