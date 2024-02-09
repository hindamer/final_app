<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Beverage;
use App\Models\Category;

class IndexController extends Controller
{
    public function index(){
        $ber=Beverage::get();
        $ber1=Beverage::get()->where('category_id','=',1);
        $cat1=Category::get()->where('id','=',1);
        $ber2=Beverage::get()->where('category_id','=',2);
        $cat2=Category::get()->where('id','=',2);
        $ber3=Beverage::get()->where('category_id','=',3);
        $cat3=Category::get()->where('id','=',3);
        $cat=Category::get();
        $special=Beverage::get()->where('special','=',1);
        return view('index',compact('cat','ber','special','ber1','cat1','ber2','cat2','ber3','cat3'));
    }
}
