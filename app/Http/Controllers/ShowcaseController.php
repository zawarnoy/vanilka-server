<?php

namespace App\Http\Controllers;

class ShowcaseController extends Controller
{

    public function candybar()
    {
        return view('showcase.candybar');
    }

    public function dessert()
    {
        return view('showcase.dessert');
    }

    public function stuffing()
    {
        return view('showcase.stuffing');
    }

}