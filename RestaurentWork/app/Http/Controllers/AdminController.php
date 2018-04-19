<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Validator;
use App\Models\Category;
use App\Models\Food;
use App\Models\Event;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin(){

        return view('admin.admin');
    }

    //start category work...........................................................................................

    public function category(){
        $post['categories'] = Category::whereNull('parent_id')->get();
//        dd($post);
//      $post['cat1'] = Category::select('parent_id')->get();
        return view('backend.category.addEdit',$post);
    }
    public function categoryList(){
        $posts = Category::all();
        return view('backend.category.list', compact('posts'));
    }
    public function store(Request $request){
        $post['title'] = $request->title;
        $post['parent_id'] = $request->parent_id;
        if(!empty($request->fileToUpload)) {
            $file = Input::file('fileToUpload');
            $image = $file->getClientOriginalName();
            $file->move('postImage', $image);
            $post['image'] = $image;
        }
//        Category::create($post);
        Category::updateOrCreate(['id'=>$request->id],$post);
        return redirect()->route('categoryList');
    }
    public function categoryEdit($id){
        $post['categories'] = Category::whereNull('parent_id')->get();
        $post['value'] = Category::find($id);
        return view('backend.category.edit', $post);
    }
    public function deletepost($id){
        Category::where('id',$id)->delete();
        return redirect()->route('categoryList')->with(['message'=>'successfully deleted']);

    }
    //start food item............................................................................................

    public function fooditem(){
        $posts = Food::all();
        return view('backend.food.addEdit', compact('posts'));
    }
    public function foodList(){
        $post['categories'] = DB::table('categories')->get();
//      dd($post['categories']);
        return view('backend.food.list', $post);
    }
    public function foodsave(Request $request){
        $post['name'] = $request->name;
        $post['description'] = $request->description;
        $post['price'] = $request->price;
        $post['discount'] = $request->discount;
        $post['category_id'] = $request->category_id;

        if(!empty($request->fileToUpload)) {
            $file = Input::file('fileToUpload');
            $imgName = uniqid() . '.' . $file->getClientOriginalExtension();
            $makeImg = Image::make($file);
            $makeImg->fit(400, 343);
            $path = public_path('FoodImage/'. $imgName);
            $makeImg->save($path);
            $post['image'] = $imgName;
        }
//        Food::create($post);
        Food::updateOrCreate(['id'=>$request->id],$post);
        return redirect()->route('fooditem');
    }
        public function foodEdit($id){
            $post['categories'] = DB::table('categories')->get();
            $post['value'] = Food::find($id);
            return view('backend.food.edit', $post);
        }
    public function delete($id){
        Food::where('id',$id)->delete();
           return redirect()->route('fooditem')->with(['message'=>'successfully deleted']);
    }

    //start event work............................................................................................

    public function eventPage(){
        $events = Event::all();
        return view('backend.event.event', compact('events'));
    }
    public function AddEventPage(){
        return view('backend.event.addEvent');
    }
    public function addEvent(Request $request){
        $event['name'] = $request->name;
        $event['details'] = $request->details;
        $event['date'] = $request->date;

        if(!empty($request->fileToUpload)) {
            $file = Input::file('fileToUpload');
            $imgName = uniqid() . '.' . $file->getClientOriginalExtension();
            $makeImg = Image::make($file);
            $makeImg->fit(600, 321);
            $path = public_path('EventImage/'. $imgName);
//            dd($path);
            $makeImg->save($path);
            $event['image'] = $imgName;
        }
//        Event::create($event);
        Event::updateOrCreate(['id'=>$request->id],$event);
        return redirect()->route('eventPage');
    }
    public function EditEvent($id){
        $event['value'] = Event::find($id);
        return view('backend.event.edit', $event);
    }

    public function deleteEvent($id){
        Event::where('id',$id)->delete();
        return redirect()->route('eventPage')->with(['message'=>'successfully deleted']);
    }

}
