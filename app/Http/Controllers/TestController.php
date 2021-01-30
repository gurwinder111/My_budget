<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function __construct()
    {
       
    }

    public function aws_signed_request()
	{
		// die("test");
		$private_key = "qdogCtc+x5i9QYi3ZTSWGIVUdt1MIpoGd4eaZLOE";
		$params = array();
		$method = "GET";
		$host = "https://www.desidime.com/";
		$uri = "/onca/xml";
		$params["Service"] = "AKIAIV2WIAQB32YFFTOQ";
		$params["AWSAccessKeyId"] = $private_key;
		$params["Timestamp"] = gmdate("Y-m-d\TH:i:s\Z",time()); //may not be more than 15 minutes out of date!
		// $params["Version"] = "2009-03-31";
		ksort($params);
		$canonicalized_query = array();
		foreach ($params as $param=>$value)
		{
			$param = str_replace("%7E", "~", rawurlencode($param));
			$value = str_replace("%7E", "~", rawurlencode($value));
			$canonicalized_query[] = $param."=".$value;
		}
		$canonicalized_query = implode("&", $canonicalized_query);
		$string_to_sign = $method."\n".$host."\n".$uri."\n".$canonicalized_query;
		$signature = base64_encode(hash_hmac("sha256", $string_to_sign, $private_key, True));
		$signature = rawurlencode($signature);
		$request = "http://".$host.$uri."?".$canonicalized_query."&Signature=".$signature;
		echo "<pre>";
		print_r($canonicalized_query);
		return $request;
	}
}