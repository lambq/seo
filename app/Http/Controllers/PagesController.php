<?php

namespace App\Http\Controllers;

use App\Site;
use GuzzleHttp\Client;

class PagesController extends Controller
{
    //
    public function index(){
        $sites  = Site::orderBy('updated_at', 'desc')->take(100)->get();
        return view('seo.index',compact('sites'));
    }
    public function show($url){

        $site   = Site::where('url',$url)->first();
        if($site){

        }else{
            $meta   = $this->meta($url);
            if($meta){
                $site = new Site;
                $site->url            = $url;
                $site->title          = $meta->title;
                $site->keywords       = $meta->keywords;
                $site->description    = $meta->description;
                $site->save();
            }else{
                $site = new Site;
                $site->url            = $url;
                $site->save();
            }
            $api_array  = 'icp,rank,snapshot';
        }
        $sites  = Site::orderBy('updated_at', 'desc')->take(100)->get();
        return view('seo.show',compact('url','site','sites','api_array'));
    }

    public function meta($url)
    {
        $client = new Client;
        $res = $client->request('POST','http://api.webshowu.com/api/meta',[
            'headers' => [
                'Authorization' =>  'Bearer '.env('SEO_TOKEN'),
            ],
            'form_params' => [
                'name'  => $url,
            ]
        ]);
        if($res->getStatusCode() != 200){
            return false;
        }else{
            $response   = json_decode($res->getBody());
            if($response->code == 0) {
                return $response->body;
            }else{
                return false;
            }
        }
    }
}
