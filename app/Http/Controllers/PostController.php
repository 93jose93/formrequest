<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function store(PostRequest $request)
    {
          //en el controlador no se coloca las validaciones
          dd($request->all());
    }
}
