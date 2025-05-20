<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionContoller extends Controller
{
    public function  index()
    {
        // $items = collect(['one','two', 'three','sort', "ant"]);

        // dd($items->sort());

        // dd($items->toArray());

        // it will return all the elements in the uppercase
        // $result = $items->map(function($item){
        //     return strtoupper($item);
        // }); 

        // return $result;

        $items =  collect([
            ['name'=> 'apple', 'price' => 10, 'sales' => 234],
            ['name'=> 'orange', 'price' => 10, 'sales' => 26],
            ['name'=> 'mango', 'price' => 10, 'sales' => 24],
        ]);
       
        // dd($items->sortby('name'));
        
        // dd($items->avg('sales'),$items->avg('price'));

        $result = $items->where('sales', '>', 100);

        dd($result);
        // return ($items->sort());
    }
    

}
