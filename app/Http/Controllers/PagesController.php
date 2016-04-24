<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class PagesController extends Controller
{

    public function index()
    {


        return view('pages.index');
    }

    public function about()
    {


        return view('pages.about');
    }

    public function product()
    {

        return view('pages.product');
    }

    public function contact()
    {

        return view('pages.contact');
    }

    public function news()
    {
        return view('pages.news');
    }

}
