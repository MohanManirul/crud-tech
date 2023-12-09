<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostCrudRequest;
use App\Models\Post;
use App\Services\PostCrudService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Exception;


class UserPostController extends Controller
{
    protected $folderPath;
    protected $PostCrudService;
    public function __construct(PostCrudService $PostCrudService)
    {
        $this->folderPath = 'frontend.posts.';
        $this->PostCrudService = $PostCrudService ;
    }
    public function index(){
        return view($this->folderPath.'all-posts');
    }

   public function create(){
    return view($this->folderPath.'create');
   }

   public function store(Request $request){
   
    try{

        $post = new Post();
    
        if ($request->image) {
            
            $image = $request->file('image');
            $img = time() . Str::random(12) . '.' . $image->getClientOriginalExtension();
            $location = public_path('frontend/assets/task_img/' . $img);
            Image::make($image)->save($location);
            $post->image = $img;
        }
        $post->title = $request->title;
        $post->created_by = getAuthUserId();
        $post->created_user_type = getAuthUserType();
        if($post->save()) {
            $redirectRoute = route('user.post.all');
            return response()->json(['redirect' => $redirectRoute , 'redirectMessage' => 'Post Created Successfully'],200);               
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
