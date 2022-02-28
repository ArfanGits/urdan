<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categories;
    public function addCategory()
    {
        $data = [
            'title' => 'Add Category'
        ];
        return view('backend.pages.category.add-category',$data);
    }
    public function newCategory(Request $request)
    {
        Category::newCategory($request);
        return redirect()->back()->with('message', 'Category saved successfully');
    }
    public function manageCategory()
    {
        $data = [
            'title' => 'Manage Category'
        ];
        $this->categories = Category::orderBy('id','DESC')->get();
        return view('backend.pages.category.manage-category',['categories' => $this->categories], $data);
    }
    public function editCategory($id)
    {
        $data = [
            'title' => 'Edit Category'
        ];
        return view('backend.pages.category.edit-category',$data);
    }
    public function updateCategory(Request $request)
    {
        return redirect('/update-category')->with('message', 'Category updated successfully');
    }
    public function deleteCategory($id)
    {
        return redirect()->back()->with('message', 'Category deleted successfully');
    }
}
