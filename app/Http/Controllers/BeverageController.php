<?php

namespace App\Http\Controllers;

use App\Models\Beverage;
use App\Models\Category;
use Illuminate\Http\Request;

class BeverageController extends Controller
{

    public function addBeverage(){
        $category=Category::get();
        return view('admin.addBeverage',compact('category'));
     }
     public function data(){
        $ber=Beverage::get();
        return view('admin.beverages',compact('ber'));
     }
    public function insertbeverage(Request $request){
        $request->validate([
            'title'=>'required|max:255|string',
            'content'=>'required|max:255|string',
            'price'=>'required',
            'image'=>'nullable|mimes:png,jpg,jpeg,webp',
        ],[
            'title'=>'title error',
            'content'=>'content error',
            'price'=>'price error',
            'image'=>'image error',
        ]);
        if($request->has('image')){
            $file=$request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $path='uploads';
            $file->move($path,$filename);
        }
        $beverage=new Beverage();
        $beverage->title=$request->title;
        $beverage->content=$request->content;
        $beverage->price=$request->price;
        $beverage->Published=isset($request['published']);
        $beverage->special=isset($request['special']);
        $beverage->image=$filename;
        $beverage->category_id=$request->category_id;
        $beverage->save();
        return redirect('data');
    }
    public function edit(string $id){
        $ber=Beverage::findOrFail($id);
        $cat=Category::select('id','category_name')->get();
        return view('admin.editBeverage',compact('ber','cat'));
    }
    public function update(Request $request,string $id){
        $request->validate([
            'title'=>'required|max:255|string',
            'content'=>'required|max:255|string',
            'price'=>'required',
            'image'=>'sometimes|mimes:png,jpg,jpeg,webp',
        ],[
            'title'=>'title error',
            'content'=>'content error',
            'price'=>'price error',
            'image'=>'image error',
        ]);
        if($request->hasFile('image')){
            $path='uploads';
            $file=$request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $path='uploads';
            $file->move($path,$filename);
        }
        Beverage::where('id',$id)->update([
            'title'=>$request->title,
            'content'=>$request->content,
            'price'=>$request->price,
            'Published'=>isset($request['published']),
            'special'=>isset($request['special']),
            'image'=>$file,
            'category_id'=>$request->category_id,
        ]);
        return redirect('data');
    }
    public function deletebeverage(string $id){
        Beverage::where('id',$id)->delete();
        return redirect('data');
    }
   
    
}
