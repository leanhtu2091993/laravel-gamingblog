<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\Category;

class ProductController extends Controller
{
	public function index()
	{
		return view('admin.pages.list_product');
	}

	public function add()
	{
		$cats = Category::all();

		return view('admin.pages.add_product', [
			'cats' => $cats
		]);
	}
}