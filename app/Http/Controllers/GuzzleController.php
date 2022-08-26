<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class GuzzleController extends Controller
{
    public function index(){

        // $client = new Client([
        //     // Base URI is used with relative requests
        //     'base_uri' => 'http://jservice.io/api/random',
        //     // You can set any number of default request options.
        //     'timeout'  => 2.0,
        // ]);

        // // Create a client with a base URI
        // $client = new Client(['base_uri' => 'http://jservice.io/api/random']);
        // // Send a request to https://foo.com/api/final
        // $response = $client->request('GET', 'final');
        // // Send a request to https://foo.com/categories
        // $response = $client->request('GET', 'categories');
        // // Send a request to https://foo.com/category
        // $response = $client->request('GET', 'category');

        // // Sending Requests
        // $response = $client->get('https://foo.com/api/final');

        // // Async Requests
        // $promise = $client->getAsync('https://foo.com/api/final');

        $url = 'https://jservice.io/api/final?count=10';
        //$url = 'https://jservice.io/api/final';

        $collections = Http::get($url);
        $decode = json_decode($collections);
        //return $decode;
        //return Http::get($url);
        //return view('test',['collections' => $collections]);
        return view('test',['collections' => $decode]);
    }
}
