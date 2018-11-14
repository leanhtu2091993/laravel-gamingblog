<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class ProductController extends Controller
{
	public function index()
	{
		return view('admin.pages.list_product');
	}

	public function add()
	{
		return view('admin.pages.add_product');
	}
}