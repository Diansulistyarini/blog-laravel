<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs=\App\Blog::all();
        return $blogs;
    }

    public function store(Request $request){
        $validateData=$request->validate(
            [
                'title'=>'required',
                'content'=>'required',
                'author'=>'required'
            ]
        );
        $project = \App\Blog::create(
            [
                'title'=>$validateData['title']
            ]
        );
    }
}
