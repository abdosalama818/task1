<?php

namespace App\Http\Controllers\Home;

use session;
use App\Models\Cat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Commnet;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(){
        return view("admin.index");
    }

    public function show_post(){
        $posts = Post::all();
        return view('admin.post',[
            'posts'=>$posts
        ]);
    }


    public function add_post(){
        $Cat = Cat::all();

        return view('admin.add-post',[
            'cats'=>$Cat
        ]);
    }

    public function save_post(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|min:20',
            'cat_id' => 'required|numeric',
        ]);

        Post::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'cat_id'=>$request->cat_id
        ]);
        return redirect(url('/post'));
    }


    public function edit_post($id){
        $post = Post::findOrFail($id);
        $cats = Cat::all();

        return view('admin.edit-post',[
            'post'=>$post,
            'cats' =>  $cats
        ]);
    }



    public function save_edit_post($id,Request $request){

        $post = Post::findOrFail($id);
        $post->update([
            'title'=>$request->title,
            'content'=>$request->content,
            'cat_id'=>$request->cat_id,
        ]);
        $request->session()->flash('msg-update-post','Post updated successfully');
        return redirect(url('/post'));

    }


    public function delete_post($id){
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/post');
    }



    public function cat(){
        return view('admin.categories');
    }




  //show and add category
// this method used to return view
    public function show_cat(){
        return view('admin.add-category');
    }

// this method used to create&validate cat is database

    public function add_cat(Request $request){
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

       $cat = Cat::create([
           'name'=>$request->name
       ]);
       $request->session()->flash('msg','Category added successfully');
       return redirect('/show_cat');

    }
// end and add category

//this method show all category

public function show_all_cat(){
    $cats = Cat::all();
    return view('admin.categories',[
        'cats'=>$cats
    ]);
}

// this method edit show edit view
    public function show_edit_cat($id){
        $cat = Cat::findOrFail($id);

        return view('admin.edit-category',[
            'cat'=>$cat
        ]);
    }

//this method edit category

public function update_cat($id ,Request $request){

    $cat = Cat::findOrFail($id);
    $cat->update([
        'name'=>$request->name
    ]);
    $request->session()->flash('msg-update','Category updated successfully');
    return redirect(url('/cat'));
}


///this method delete category

public function delete_cat($id , Request $request){
    Cat::findOrFail($id)->delete();

    return redirect(url('/cat'));

}





public function show_comment(){
    $comment = Commnet::all();
    return view('admin.comments',[
        'comments'=>$comment
    ]);
}

public function show_comment_action($id){
    $comment = Commnet::findOrFail($id);

    return view('admin.comment',[
        'comment'=>  $comment
    ]);
}

public function approved_commnet($id){
    $comment = Commnet::findOrFail($id);
    $comment->update([
        'status'=>'approved'
    ]);
    return redirect(url('/comments'));
}


public function canceled_commnet($id){
    $comment = Commnet::findOrFail($id);
    $comment->update([
        'status'=>'canceled'
    ]);
    return redirect(url('/comments'));
}

public function show_profile(){
    $user = User::all();
  return view('admin.profile',[
      'user'=> $user
  ]);
}



public function edit_profile(Request $request){
    $user = User::findOrFail(Auth::id());
    $user-> update([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
    ]);
    $user = Auth::user();
    $user_email = $user->email;
    $request->session()->put('user_name',$user_email);

    return redirect(url('/'));
}



}



