<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Food;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Image;



class MenuController extends Controller
{
    public function menu(Request $request){
//      dd($request->all());
        $data['cat_id'] = $request->parent_id;
        $data['categories'] = Category::whereNull('parent_id')->get();
        $data['posts'] = Food::leftJoin('categories', 'categories.id', '=', 'foods.category_id');
        if($data['cat_id']) $data['posts']=$data['posts']->where('categories.id',$data['cat_id']);
            $data['posts']=$data['posts']->select('foods.*')->OrderBy('foods.created_at','desc')->paginate(10);
//            ->where('category_id')->get();
//            ->paginate(10);
//      dd($data);
        return view('menu.menu',$data);
     }

//     public function menuShow(Request $request){
//        $cat = $request->name;
//        $data['posts']= DB::table('foods')->leftJoin('categories', 'categories.id', '=', 'foods.category_id')
//            ->where('categories.title',$cat)->get();
//        dd($data);
//              return view('menu.menu', $data);
//
//     }

//    public function store(Request $request){
//        $post['name'] = $request->name;
//        $post['description'] = $request->description;
//        $post['price'] = $request->price;
//        $post['discount'] = $request->discount;
//        dd($request->all());
//        if(!empty($request->fileToUpload)) {
//            $file = Input::file('fileToUpload');
//            $imgName = uniqid() . '.' . $file->getClientOriginalExtension();
//            $makeImg = Image::make($file);
//            $makeImg->fit(10, 20);
//            $makeImg->move('FoodImage', $imgName);
//            $post['image'] = $imgName;
//        }
//        Food::create($post);
//    }
}
