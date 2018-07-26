<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowProfilController extends Controller
{
    
    public $_items = [

        1=> [
            'id' => 1,
            'name' => 'aaagh',
            'price' => 8888
        ],

        2=> [
            'id' => 2,
            'name' => 'aaagh',
            'price' => 7213
        ],
        3 => [
            'id' => 3,
            'name' => 'aaagh',
            'price' => 765
        ],
        4 => [
            'id' => 4,
            'name' => 'aaagh',
            'price' => 755
        ],
    ];


    public function index(){
        return view('products.index', ['items' => $this->_items]);

    }

    public function show($id){
        $item = $this->items[$id];
        return view('products.show',compact('item'));

    }
}
