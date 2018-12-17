<?php

namespace App\ViewComposer;


use App\Model\Category;
use Illuminate\View\View;

class MainMenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $categories = Category::where('deleted', 0)->get();

        $view->with('categories', $categories);
    }
}
