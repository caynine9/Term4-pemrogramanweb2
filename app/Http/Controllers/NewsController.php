<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Categories;

class NewsController extends Controller
{

    // --------------- NEWS SECTION START ----------------

    public function createNews()
    {
        $categories = Categories::all();

        return view('create-news', ['categories' => $categories]);
    }

    public function storeNews(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $news = new News();
        $news->title = $validatedData['title'];
        $news->content = $validatedData['content'];
        $news->category_id = $validatedData['category_id'];
        $news->save();

        return redirect ('/');


    }

    // ------------ NEWS SECTION END --------------------

    // ------------ CATEGORIES SECTION START --------------------

    public function createCategories()
    {
        return view('create-category');
    }

    public function storeCategories(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories',
        ]);

        Categories::create([
            'name' => $validatedData['name'],
        ]);

        return redirect ('/');
    }

    public function displayCategories()
    {
        $categories = Categories::all();
        return view('categories', ['categories' => $categories]);
    }

    public function deleteCategories($id)
    {
            $categories = Categories::findOrFail($id);
            $categories->delete();
            return back();
    }


    // ------------ CATEGORIES SECTION END --------------------



}
