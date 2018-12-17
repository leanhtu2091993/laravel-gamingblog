<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

	public function index()
	{
        $cats = Category::where('deleted', 0)->get();

		return view('admin.pages.list_category', ['cats' => $cats]);
	}


	public function add(Request $request)
	{
		$name = $request->input('cat-name');
		$cat = new Category();

		if ($name) {
			$cat->name = $name;
			$cat->deleted = 0;
			$cat->created_by = 'System'; // system as string
			$cat->updated_by = 'System';
			$cat->save();
		}

		return redirect()->route('admin.list_category');
	}

    public function update(Request $request, $id = null)
    {
        if ($request->method() == 'POST') {
            $catId = $request->input('cat-id');
            $cat = Category::find($catId);

            if ($cat) {
                $cat->name = $request->input('cat-name');
                $cat->save();
            }

            return redirect()->route('admin.list_category');
        }

        $cats = Category::all();
        $updateCat = Category::find($id);

        return view('admin.pages.update_category', [
            'cats' => $cats,
            'updateCat' => $updateCat
        ]);
    }


    public function delete($idcat)
    {
        $cat = Category::find($idcat);
        $cat->deleted = 1;
        $cat->save();

        return redirect()->route('admin.list_category');
    }


}
