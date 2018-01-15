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

        return response((string)$guzzle->get('https://ohdearapp.com/api/me', [
            'headers' => [
                'Authorization' =>$request->header('Authorization')
            ],
        ]));
    }
});
$router->get('/api/sites', function (\Illuminate\Http\Request $request) {
    if ($request->hasHeader('Authorization')) {
        $guzzle = new \GuzzleHttp\Client();

        return response((string)$guzzle->get('https://ohdearapp.com/api/sites', [
            'headers' => [
                'Authorization' =>$request->header('Authorization')
            ],
        ]));
    }
});
