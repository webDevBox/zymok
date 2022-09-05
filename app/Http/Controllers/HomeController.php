<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\View;

class HomeController extends Controller
{
    public function index()
    {
        if(isset($_SERVER['HTTP_CLIENT_IP']))
        {
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
        }

        $ip=get_ip();
        $query=@unserialize(file_get_contents('http://ip-api.com/php/'.$ip));

        $country = null;
        $city = null;

        if($query && $query['status'] == 'success'){
            $country = $query['country'];
            $city = $query['city'];
         }
            dd($country.' '.$city);

        date_default_timezone_set("Asia/Karachi");
        $date = date("Y-m-d h:i a");
        
        View::create([
            'date_time' => $date,
            'country' => $country,
            'city' => $city
        ]);

        return view('pages.index');
    }

    public function getRecords()
    {
        $views = View::get();

        return view('pages.records',compact('views'));
    }
}
