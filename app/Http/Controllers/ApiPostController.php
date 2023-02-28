<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiPostController extends Controller
{
    public function index(){
        $request= Http::get('https://jsonplaceholder.typicode.com/posts');

        if($request->successful())
       {
         $posts=json_decode($request->body());
         return view('posts.index',compact('posts'));
        }
    }

    public function create()
    {
        return view('posts.create');

    }

    public function store(Request $request)
    {
        $data=$request->all();
        $data['userId']=1;

        $request= Http::acceptJson()->asForm()->post('https://jsonplaceholder.typicode.com/posts',$data);

        if($request->successful())
       {
        //  return "Data Successfully Save to JsonPlaceHolder API";
        return $request->body();
        }else{
            return "Somthing Went Wrong!";
        }

    }
}
