<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        $array = [
            ['id' => 1, 'title' => 'Смартфон', 'price' => 19990, 'path' => 'img/iphone.jpg'],
            ['id' => 2, 'title' => 'Ноутбук', 'price' => 700, 'path' => 'img/laptop.jpg'],
            ['id' => 1, 'title' => 'Наушники', 'price' => 500, 'path' => 'img/headphones.jpg'],
            ['id' => 2, 'title' => 'Кофеварка', 'price' => 700, 'path' => 'img/coffee_maker.jpg'],
            ['id' => 2, 'title' => 'Фитнес-браслет', 'price' => 700, 'path' => 'img/fitness bracelet.png'],
        ];
        return view('array', compact('array'));
    }
}
