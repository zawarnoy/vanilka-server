<?php

namespace App\Http\Controllers;

use App\ProductsCategory;
use App\Services\ShowcaseHandleService;

class ShowcaseController extends Controller
{

    protected $handleService;

    public function __construct(ShowcaseHandleService $handleService)
    {
        $this->handleService = $handleService;
    }

    public function candybar()
    {
        return view('showcase.candybar');
    }

    public function dessert()
    {
        $categories = $this->handleService->transformToJsonForFrontend(ProductsCategory::where('type', 'desserts')->get());

        $params = [
            'categories' => $categories,
        ];

        return view('showcase.dessert', $params);
    }

    public function stuffing()
    {
        $categories = $this->handleService->transformToJsonForFrontend(ProductsCategory::where('type', 'stuffing')->get());

        $params = [
            'categories' => $categories,
        ];

        return view('showcase.stuffing', $params);
    }

}