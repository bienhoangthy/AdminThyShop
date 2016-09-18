<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Category;
use App\ImageDetail;

class ProductController extends Controller
{
    public function getList() {
    	$products = Product::all();
    	return view('admin.product.list', compact('products'));
    }

    public function getAdd() {
    	$categories = Category::all();
    	return view('admin.product.add', compact('categories'));
    }

    public function postAdd(ProductRequest $request) {
    	$product = new Product();
    	$product->name = $request->txtName;
    	$product->slug = str_slug($request->txtName);
    	$product->price = $request->txtPrice;
    	$product->newPrice = $request->txtPrice;
    	$product->qty = $request->txtQty;
    	$product->intro = $request->txtIntro;
    	$product->keywords = $request->txtKeywords;
    	$product->description = $request->txtDescription;
    	$product->cate_id = $request->sltCate;
    	if ($request->hasFile('fImage')) {
    		$image = $request->file('fImage');
    		$image_name = time().$image->getClientOriginalName();
    		$product->image = $image_name;
    		$image->move('upload/products',$image_name);

    	}
    	$product->save();

    	if ($request->hasFile('fProductDetail')) {
    		foreach ($request->fProductDetail as $file) {
    			$img_detail = new ImageDetail();
    			if (isset($file)) {
    				$img_detail->image = time().$file->getClientOriginalName();
    				$img_detail->product_id = $product->id;
    				$file->move('upload/products/detail',$img_detail->image);
    				$img_detail->save();
    			}
    		}
    	}


    }
}
