<?php

namespace App\Http\Controllers;

use App\Helpers\ImageFileHelper;
use App\Models\CategoryTajweed;
use Illuminate\Http\Request;

class CategoryTajweedController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
           'title' => ['required', 'string'],
           'icon' => ['required', 'mimes:png,jpg,jpeg','max:1000'],
        ]);
        $validatedData['icon'] = ImageFileHelper::instance()->upload($request->icon,'images');
        CategoryTajweed::create($validatedData);
        return 'created successfully';
    }

    public function delete($id)
    {
        $category_tajweed = CategoryTajweed::find($id);
        if (!$category_tajweed){
            return 'data not found';
        }
        ImageFileHelper::instance()->delete($category_tajweed->icon);
        $category_tajweed->delete();
        return 'deleted successfully';
    }

}
