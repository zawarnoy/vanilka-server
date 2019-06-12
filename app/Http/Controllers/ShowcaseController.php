<?php

namespace App\Http\Controllers;

use App\ProductsCategory;
use App\Services\ShowcaseHandleService;
use App\Services\StuffingHandleService;

class ShowcaseController extends Controller
{

    protected $handleService;

    protected $stuffingHandleService;

    public function __construct(ShowcaseHandleService $handleService, StuffingHandleService $stuffingHandleService)
    {
        $this->stuffingHandleService = $stuffingHandleService;
        $this->handleService = $handleService;
    }

    public function candybar()
    {
        return view('showcase.candybar');
    }

    public function dessert()
    {
        $categories = $this->handleService->transformToJsonForFrontend(
            ProductsCategory::where('type', 'desserts')->with('galleryItems')->get()
        );

        $params = [
            'categories' => $categories,
        ];

        return view('showcase.dessert', $params);
    }

    public function stuffing()
    {
        $categories = $this->stuffingHandleService->transformToJsonForFrontend(
            ProductsCategory::where('type', 'stuffing')->with('galleryItems')->get()
        );

        $params = [
            'categories' => $categories,
        ];

        return view('showcase.stuffing', $params);
    }

}