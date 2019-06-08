<?php

namespace App\Http\Controllers;

use App\Category;
use App\Services\GalleryHandleService;

class GalleryController extends Controller
{

    protected $handleService;

    public function __construct(GalleryHandleService $handleService)
    {
        $this->handleService = $handleService;
    }

    public function cakes()
    {
        $categories = $this->handleService->transformToJsonForFrontend(Category::where('type', 'cakes')->get());

        $params = [
            'categories' => $categories,
        ];

        return view('gallery.cakes', $params);
    }

    public function deserts()
    {
        $categories = $this->handleService->transformToJsonForFrontend(Category::where('type', 'desserts')->get());

        $params = [
            'categories' => $categories,
        ];

        return view('gallery.desserts', $params);
    }
}