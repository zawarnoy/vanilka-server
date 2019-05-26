<?php

namespace App\Http\Controllers;

use App\PersonItem;

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
                'title' => 'Любой каприз за ваши деньги!',
                'linkText' => 'Что у вас есть?',
                'linkHref' => route('gallery.cakes'),
            ],
            [
                'img' => 'img/processed/slide3.jpg',
                'title' => 'Пряники по индивидуальному заказу',
                'linkText' => 'Пряники',
                'linkHref' => route('gallery.cakes', ['sortByTag' => 'Пряники']),
            ],
        ];

        $params = [
            'sliderPosts' => $sliderPosts,
        ];

        return view('main', $params);
    }

    public function entity()
    {
        $items = PersonItem::all();

        $params =
            [
                'items' => $items,
            ];

        return view('entity', $params);
    }
}