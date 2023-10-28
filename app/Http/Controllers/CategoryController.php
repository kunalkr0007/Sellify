<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search ?? "";

        if($search == "")
        {
            return view('listings.index',
            [
                'search' => $search,
                'categorys' => Category::all()
            ]);
        }
        else
        {
            return view('listings.show',
            [
                'search' => $search,
                'listings' => Listing::latest()->where('brand','LIKE', "%$search%")->orwhere('title','LIKE', "%$search%")->get()
            ]);
        }
    }

    
}
