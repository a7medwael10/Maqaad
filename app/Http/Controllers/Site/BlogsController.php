<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        return view('site.blogs.index');
    }

    public function show($slug)
    {
        return view('site.blogs.show');
    }

}
