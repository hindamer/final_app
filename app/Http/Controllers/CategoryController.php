<?php

namespace App\Http\Controllers;

use App\Models\Beverage;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.addCategory');
    }
    public function categorylist()
    {
        $cat = Category::get();
        return view('admin.categories', compact('cat'));
    }
    public function category(Request $request)
    {
        $cat = new category;
        $cat->category_name = $request->category_name;
        $cat->save();
        return redirect('categorylist');
    }
    public function showcategory(string $id)
    {
        $cat = Category::findOrFail($id);
        return view('admin.showcategory', compact('cat'));
    }
    public function editcategory(string $id)
    {
        $cat = Category::findOrFail($id);
        return view('admin.editCategory', compact('cat'));
    }
    public function updatecategory(Request $request, string $id)
    {
        Category::where('id', $id)->update([
            'category_name' => $request->category_name
        ]);
        return redirect()->route('categorylist');
    }
    public function deletecategory(string $id)
    {
        $cat=Beverage::where('category_id',$id)->count();
        if($cat > 0){
            return back()->with('message', 'This category cannot be deleted!');
        }
        else{
        Category::findOrFail($id)->delete();
        return redirect('categorylist');
        }
   
    }
}
