<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function choice()
    {
        return view('choice');
    }

    public function main()
    {
        $sliderPosts = [
            [
                'img' => 'img/processed/slide1.jpg',
                'title' => 'Хотите попробовать лучший чизкейк в городе?',
                'linkText' => 'Хочу! Как мне вас найти?',
                'linkHref' => 'https://goo.gl/maps/HQuajyDebbo',
            ],
            [
                'img' => 'img/processed/slide2.jpg',
                'title' => 'Хотите попробовать лучший чизкейк в городе?',
                'linkText' => 'Хочу! Как мне вас найти?',
                'linkHref' => 'https://goo.gl/maps/HQuajyDebbo',
            ],
            [
                'img' => 'img/processed/slide3.jpg',
                'title' => 'Хотите попробовать лучший чизкейк в городе?',
                'linkText' => 'Хочу! Как мне вас найти?',
                'linkHref' => 'https://goo.gl/maps/HQuajyDebbo',
            ],
        ];

        $params = [
            'sliderPosts' => $sliderPosts,
        ];

        return view('main', $params);
    }

    public function entity()
    {
        return view('entity');
    }

}