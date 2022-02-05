<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Laurel\LardiTrans\App\Services\LardiTransService;

class LardiController extends Controller
{

    public function testlardi()
    {

        $service = new LardiTransService;
//        dd($service);
        $countries = $service->fetchCountries();
        dd($countries);


//        $apiClient = '2TOJ23W7WSD000002609';
//        $token = '2TOJ23W7WSD000002609';
//        $method = 'GET';
//
//
//        $parameters = [
//            'Accept: application/json',
//            'Authorization:' . $token,
//        ];
//
//        $client = new LardiTrans();
//        $assa = $client->sendRequest($method, $parameters);
//
//        dd($assa);
//        sendRequest(string $method, array $parameters)


//        $client = new LardiTrans();
//        $client->setUid('test uid');
//        $this->assertSame('test uid', $client->getUid());
//        dd($assa);
//        $token = '2TOJ23W7WSD000002609';
//        $parameters = [
//            'Accept: application/json',
//            'Authorization:'. $token,
//        ];
//
//        $client = new LardiTrans();
//        dd($client);
//        $apiClient = '2TOJ23W7WSD000002609';
//        $assa = testSendSystemTestRequestInMetod();
//        dd($assa);
    }


    public function lardi()
    {
        $token = '2TOJ23W7WSD000002609';
        $url = "https://api.lardi-trans.com/v2/references/countries";
        $parameters = [
            'Accept: application/json',
            'Authorization:' . $token,
        ];

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $parameters);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        $content = json_decode($response);

        dd($content);

//        curl -X GET -H "Accept: application/json" -H "Authorization: 2TOJ23W7WSD000002609" "https://api.lardi-trans.com/v2/references/countries?signs=JP,TZ"

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
