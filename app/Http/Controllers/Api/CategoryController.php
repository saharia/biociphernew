<?php

namespace App\Http\Controllers\Api;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAll()
    {
      $categories = Category::all();

      return response([ 'categories' => $categories ]);
    }

    public function save(Request $request)
    {
       $validated_data = $request->validate([
        "name" => "required|max:55",
      ]);
       
      $category = Category::create($validated_data);

      return response([ 'category' => $category ]);
    }
}
