<?php

namespace App\Http\Controllers;

class GalleryController extends Controller
{
    public function cakes()
    {
        return view('gallery.cakes');
    }

    public function deserts()
    {
        return view('gallery.desserts');
    }
}