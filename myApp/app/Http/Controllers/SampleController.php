<?php

namespace App\Http\Controllers;

use App\Http\Requests\SmapleRequest;
use Illuminate\Validation\Factory;
use Illuminate\Support\Facades\Input;

class SampleController extends Controller
{
    public function index() {
        $name = Input::get('name','endo');
        $body = Input::get('body','futoshi');
        return view('smaple',[
            'name' => $name,
            'body'=> $body
        ]);
    }

    public function store(SmapleRequest $request) {
        $name = Input::get('name','Okazaki');
//        $post = \Request::all();
        $name = $request->input('name');
        $body = $request->input('body');

        return view('smaple',[
            'name' => $name,
            'body' => $body,
//            'posts' => $post
        ]);
    }

}
