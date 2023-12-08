<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Exception;


class UserPostController extends Controller
{
    public function index(){
        return view('frontend.posts.all-posts');
    }

   public function create(){
    return view('frontend.posts.create');
   }

   public function store(Request $request){
    $validator = Validator::make($request->all(), [
        "title" => "required",
        "image" => "required|image|mimes:jpeg,jpg,png,gif,svg|max:2048",

    ]);
    try{

        $post = new Post();
    
        if ($request->image) {
            
            $image = $request->file('image');
            $img = time() . Str::random(12) . '.' . $image->getClientOriginalExtension();
            $location = public_path('frontend/assets/task_img/' . $img);
            Image::make($image)->save($location);
            $post->image = $img;
        }
        
    }catch(Exception $e){
        return response()->json(['success' => 'Post Created'], 200);

    }
    return view('frontend.posts.create');
   }
   public function update(Request $request){
    $validator = Validator::make($request->all(), [
        "title" => "required",
        "image" => "required|image|mimes:jpeg,jpg,png,gif,svg|max:2048",

    ]);
    if ($request->image) {
        if (File::exists('frontend/assets/task_img/' . $patient->image)) {
            File::delete('frontend/assets/task_img/' . $patient->image);
        }
        $image = $request->file('image');
        $img = time() . Str::random(12) . '.' . $image->getClientOriginalExtension();
        $location = public_path('frontend/assets/task_img/' . $img);
        Image::make($image)->save($location);
        $patient->image = $img;
    }
    return view('frontend.posts.create');
   }
}
