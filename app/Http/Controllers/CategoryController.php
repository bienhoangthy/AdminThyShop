<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function getList() {
    	$categories = Category::all();
    	return view('admin.category.list', compact('categories'));
    }

    public function getAdd() {
    	$categories = Category::all();
    	return view('admin.category.add',compact('categories'));
    }

    public function postAdd(CategoryRequest $request) {
    	$cate = new Category();
    	$cate->parent_id = $request->sltCate;
    	$cate->name = $request->txtName;
    	if ($request->has('txtSlug')) {
    		$cate->slug = $request->txtSlug;
    	} else {
    		$cate->slug = str_slug($request->txtName);
    	}
    	$cate->save();
    	return redirect()->route('detailcategory', ['slug'=>$cate->slug,'id'=>$cate->id])->with(['flash_status'=>'success','flash_message'=>'Category Added']);
    }

    public function getEdit($id) {
    	$category = Category::find($id);
    	$categories = Category::all();
    	return view('admin.category.edit', compact('category','categories'));
    }

    public function postEdit($id, Request $request) {
    	$this->validate($request, [
    			'txtName'=>'required|unique:categories,name,'.$id
    		],
        [
          'txtName.required' => 'Please Inter Category Name!',
          'txtName.unique'=>'This Name Already Exists!'
        ]);
        $cate = Category::find($id);
        $cate->parent_id = $request->sltCate;
    	$cate->name = $request->txtName;
    	if ($request->has('txtSlug')) {
    		$cate->slug = $request->txtSlug;
    	} else {
    		$cate->slug = str_slug($request->txtName);
    	}
    	$cate->save();
    	return redirect()->route('detailcategory', ['slug'=>$cate->slug,'id'=>$cate->id])->with(['flash_status'=>'success','flash_message'=>'Category Updated']);
    }

    public function getDetail($slug, $id) {
    	$cate = Category::find($id);
    	return view('admin.category.detail', compact('cate'));
    }

    public function getDelete(Request $request) {
    	if ($request->ajax()) {
    		if (Category::destroy($request->id)) {
    			return "ok";
    		}

    	}
    }
}
