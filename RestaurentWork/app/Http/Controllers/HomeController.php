<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Food;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){
        $data['eve']= DB::table('events')->take(2)->get();
        $data['foods']=DB::table('foods')->take(3)->get();
        return view('home.home', $data);
    }

    public function slider(){
        return view('slider');
    }
}
