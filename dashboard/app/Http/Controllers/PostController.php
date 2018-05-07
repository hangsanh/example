<?php

namespace App\Http\Controllers;
use App\Post;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Session;

class PostsController extends Controller
{
    
    public function index(){
        //fetch all posts data
        $crudsv = Post::orderBy('created','desc')->get();
        
        //pass posts data to view and load list view
        return view('crudsv.post', ['crudsv' => $crudsv]);
    }
    
    
    
    public function add(){
        //load form view
        return view('crudsv.add');
    }
    
    public function insert(Request $request){
        //validate post data
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        
        //get post data
        $postData = $request->all();
        
        //insert post data
        Post::create($postData);
        
        //store status message
        Session::flash('success_msg', 'Post added successfully!');

        return redirect()->route('crudsv.post');
    }
    
    public function edit($id){
        //get post data by id
        $post = Post::find($id);
        
        //load form view
        return view('crudsv.edit', ['post' => $post]);
    }
    
    public function update($id, Request $request){
        //validate post data
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        
        //get post data
        $postData = $request->all();
        
        //update post data
        Post::find($id)->update($postData);
        
        //store status message
        Session::flash('success_msg', 'Post updated successfully!');

        return redirect()->route('crudsv.post');
    }
    
    public function delete($id){
        //update post data
        Post::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('crudsv.post');
    }
    
}