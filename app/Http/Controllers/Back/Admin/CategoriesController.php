<?php

namespace App\Http\Controllers\Back\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
    	$categories = Category::paginate(10);

    	return view('back.pages.categories.index', ['categories' => $categories, 'pagination' => $categories]);
    }
}
