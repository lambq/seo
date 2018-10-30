<?php

namespace App\Http\Controllers;

use App\Site;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    //
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
            return response()->json(['msg' => '您需要的数据!出现问题,正在修理过程中……请稍候重试!……', 'code' => '1'],200);
        }else{
            $response   = json_decode($res->getBody());
            if($response->code == 0) {
                return response()->json(['msg' => '数据已经获取成功!3秒后,刷新页面', 'code' => '0'],200);
            }else{
                return response()->json(['msg' => '您需要的数据!出现问题,正在修理过程中……请稍候重试!……', 'code' => '1'],200);
            }
        }
    }
    public function icp($url)
    {
        $client = new Client;
        $res = $client->request('POST','http://api.webshowu.com/api/icp',[
            'headers' => [
                'Authorization' => 'Bearer '.env('SEO_TOKEN'),
            ],
            'form_params' => [
                'name'  => $url,
            ]
        ]);
        if($res->getStatusCode() != 200){
            return response()->json(['msg' => '您需要的备案数据!出现问题,正在修理过程中……请稍候重试!……', 'code' => '1'],200);
        }else{
            $response   = json_decode($res->getBody());
            if($response->code == 0) {
                $data   = json_encode([
                    'name'          => $response->body->name,
                    'type'          => $response->body->type,
                    'now_icp'       => $response->body->now_icp,
                    'check_date'    => $response->body->check_date,
                ]);
                Site::where('url',$url)->update(['icp' => $data]);
                return response()->json(['msg' => '备案信息获取成功!', 'code' => '0'],200);
            }else{
                return response()->json(['msg' => '您需要的备案数据!出现问题,正在修理过程中……请稍候重试!……', 'code' => '1'],200);
            }
        }
    }
    public function rank($url)
    {
        $client = new Client;
        $res = $client->request('POST','http://api.webshowu.com/api/rank',[
            'headers' => [
                'Authorization' => 'Bearer '.env('SEO_TOKEN'),
            ],
            'form_params' => [
                'name'  => $url,
            ]
        ]);
        if($res->getStatusCode() != 200){
            return response()->json(['data' => '您需要的权重数据!出现问题,正在修理过程中……请稍候重试!……', 'code' => 1],200);
        }else{
            $response   = json_decode($res->getBody());
            if($response->code == 0) {
                $data   = json_encode([
                    'br' => $response->body->br,
                    'mbr' => $response->body->mbr,
                    'pr' => $response->body->pr,
                    'sbr' => $response->body->sbr,
                ]);
                Site::where('url',$url)->update(['rank' => $data]);
                return response()->json(['msg' => '权重信息获取成功!', 'code' => '0'],200);
            }else{
                return response()->json(['data' => '您需要的权重数据!出现问题,正在修理过程中……请稍候重试!……', 'code' => 1],200);
            }
        }
    }
    public function snapshot($url)
    {
        $client = new Client;
        $res = $client->request('POST','http://api.webshowu.com/api/shot',[
            'headers' => [
                'Authorization' => 'Bearer '.env('SEO_TOKEN'),
            ],
            'form_params' => [
                'name'  => $url,
            ]
        ]);
        if($res->getStatusCode() != 200){
            return response()->json(['msg' => '您需要的缩率图数据!出现问题,正在修理过程中……请稍候重试!……', 'code' => '1'],200);
        }else{
            $response   = json_decode($res->getBody());
            if($response->code == 0) {
                return response()->json(['msg' => '缩率图获取成功!3秒后,刷新页面', 'code' => '0'],200);
            }else{
                return response()->json(['msg' => '您需要的缩率图数据!出现问题,正在修理过程中……请稍候重试!……', 'code' => '1'],200);
            }
        }
    }
}
