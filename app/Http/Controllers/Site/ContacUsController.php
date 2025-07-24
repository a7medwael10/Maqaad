<?php

namespace App\Http\Controllers\Site;


use App\Http\Controllers\Controller;


class ContacUsController extends Controller
{
    public function index()
    {
        return view('site.contact');
    }

}
