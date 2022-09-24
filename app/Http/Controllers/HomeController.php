<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\View;
use App\Models\contact;
use App\Models\Link;
use App\Http\Requests\ContactRequest;

class HomeController extends Controller
{

    public static function getIp()
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
    }

    public function link()
    {
        date_default_timezone_set("Asia/Karachi");
        $date = date("Y-m-d h:i a");

        Link::create(['date_time' => $date]);

        return view('pages.link');
    }

    public function index()
    {
        $ip = self::getIp();
        $query=@unserialize(file_get_contents('http://ip-api.com/php/'.$ip));

        $country = null;
        $city = null;
        $ip = 'null';

        if($query && $query['status'] == 'success'){
            $country = $query['country'];
            $city = $query['city'];
            $ip = $query['query'];
         }

        date_default_timezone_set("Asia/Karachi");
        $date = date("Y-m-d h:i a");

        $gohead = true;
        $checkIps = View::whereIp($ip)->get();

        foreach($checkIps as $checkIp)
        {
            if($checkIp->ip == $ip && $date == $checkIp->date_time)
                $gohead = false;
        }

        if($gohead)
        {
            View::create([
                'date_time' => $date,
                'country' => $country,
                'city' => $city
            ]);
        }

        return view('pages.index');
    }

    public function contact(ContactRequest $request)
    {
        $ip = self::getIp();
        $query=@unserialize(file_get_contents('http://ip-api.com/php/'.$ip));

        $country = null;
        $city = null;

        if($query && $query['status'] == 'success'){
            $country = $query['country'];
            $city = $query['city'];
         }

         date_default_timezone_set("Asia/Karachi");
        $date = date("Y-m-d h:i a");

         contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'country' => $country,
            'city' => $city,
            'subject' => $request->subject,
            'message' => $request->message,
            'date_time' => $date
         ]);

         return response()->json([
            'status' => 'success',
            'message' => 'Data Sent! Thanks'
         ]);

    }

}
