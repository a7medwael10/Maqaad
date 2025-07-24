<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContributeController extends Controller
{
    public function contribute()
    {
        return view('site.contribute');
    }

}
