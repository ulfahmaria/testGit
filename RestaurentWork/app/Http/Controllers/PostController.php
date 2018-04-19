<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Food;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function post(){
        return view('post');
    }

    public function single($id){
        $data['event']=Event::find($id);
        $data['post']=Food::find($id);
//        dd($request->all());
//        $data['event']= DB::table('events')->take(2)->get();
//        dd($data);
        return view('single', $data);
    }

}
