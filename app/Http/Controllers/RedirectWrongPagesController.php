<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectWrongPagesController extends Controller
{

    public function fakeShowcaseStuffing(Request $request)
    {
        return redirect()->route('showcase.stuffing', $request->all());
    }

}