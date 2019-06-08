<?php

namespace App\Http\Controllers;

use App\Page;

class PagesController extends Controller
{
    public function page($slug)
    {
        if (!$page = Page::where('slug', '=', $slug)->first()) {
            abort(404);
        }

        $params = [
            'page' => $page,
        ];

        return view('pages.show', $params);
    }
}