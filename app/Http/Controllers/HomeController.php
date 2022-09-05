<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\View;

class HomeController extends Controller
{
    public function index()
    {
        date_default_timezone_set("Asia/Karachi");
        $date = date("Y-m-d h:i a");
        
        View::create([
            'date_time' => $date
        ]);

        return view('pages.index');
    }

    public function getRecords()
    {
        $views = View::get();

        return view('pages.records',compact('views'));
    }
}
