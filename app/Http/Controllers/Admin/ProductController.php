<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use App\Model\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('deleted', 0)->get();

        return view('admin.pages.list_product', ['products' => $products]);
    }

    public function add(Request $request)
    {
        $cats = Category::where('deleted', 0)->get();

        if ($request->method() == 'POST') {
            $rule = [
                'name' => 'required',
                'category' => 'required',
                'feature-image' => 'required',
                'description' => 'required',
                'properties' => 'required',
            ];

            $validator = Validator::make($request->all(), $rule);

            if ($validator->fails()) {
                $error = $validator->errors();
                $request->flash();

                return view('admin.pages.add_product', [
                    'cats' => $cats,
                    'errors' => $error
                ]);
            }

            $product = new Product();
            $product->name = $request->input('name');
            $product->category_id = $request->input('category');
            $product->description = $request->input('description');
            $product->properties = $request->input('properties');
            $product->deleted = 0;
            $product->created_by = 'System';
            $product->updated_by = 'System';

            // Insert feature image
            $img = $request->file('feature-image');
            $name = time() . '.' . $img->getClientOriginalExtension();
            $img->move('upload/product/', $name);
            $product->image = $name;
            $product->save();


            return redirect()->route('admin.list_product');
        }

        return view('admin.pages.add_product', [
            'cats' => $cats
        ]);
    }

    public function update(Request $request, $id = null)
    {
        if ($request->method() == 'POST') {
            $proId = $request->input('pro-id');
            $product = Product::find($proId);

            if ($product) {
                $product->name = $request->input('name');
                $product->category = $request->input('category');
//                $product->feature-image = $request->input('feature-image');
                $product->description = $request->input('description');
                $product->save();
            }

            return redirect()->route('admin.list_product');
        }

        $products = Product::all();
        $updatePro = Product::find($id);

        return view('admin.pages.update_product', [
            'products' => $products,
            'updatePro' => $updatePro
        ]);
    }

    /**
     * Delete product
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $product = Product::find($id);
        $product->deleted = 1;
        $product->save();

        return redirect()->route('admin.list_product');
    }
}
