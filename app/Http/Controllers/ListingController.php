<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use App\Models\category;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Category $category,Request $request)
    {
        $search =$request->search;
        if($request->search == "")
        {
            return view('listings.show',
        [
            'search'=> $request->search,
            'listings' => Listing::latest()->where('cat_id', $category->id)->paginate(9)
        ]);
        }

        else
        {
            return view('listings.show',
        [
            'search'=> $request->search,
            'listings' => Listing::latest()->where('cat_id', $category->id)->where(function($query) use ($search)
            {
                $query->where('brand','LIKE', "%$search%")->orwhere('title','LIKE', "%$search%");
            })->get() 
            ]);
        }


    }
       

    public function shows(Category $category, $listing)
    {
        $listingx = Listing::find($listing);
        if(is_null( $listingx))
        {
            return redirect('/category/'.$category->id);
        }
        return view('listings.single',
    [
        'category' => $category->id,
        'listings' => Listing::latest()->where('cat_id', $category->id)->where('id', $listing)->get(),
        'users' => User::where('id',$listingx->user_id)->get()
        
        
    ]);
    }

    public function manage()
    {
        return view('listings.manage',
        [
            'categorys' => category::all(),
            'listings' => Listing::where('user_id',auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $user = User::find(2);
        // $listing = $user->listings;
        // dd($listing);

        return view('listings.create',
        [
            'categorys' => category::all()
            // 'listings' => $user->listings()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->file('file')); 
        $formFields = $request->validate([
            'cat_id' => 'required |not_in:0',
            'brand' => 'required',
            'title' => ['required','min:5'],
            'description' => ['required','min:10','max:150'],
            'price' => 'required | integer',
            'location' => 'required',
            'file' => 'image'
        ],
        [
            'cat_id.not_in'=> "Please select a category"
        ]);

          if($request->hasFile('file')){
            $formFields['file'] = $request->file('file')->store('logos', 'public');
        }


        // dd($formFields);
        $formFields['user_id'] = auth()->user()->id;

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing Created Successfully');
    }

    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {   
        return view('listings.edit',
    [
        'listings' => $listing,
        'categorys' => category::all()
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Listing $listing,Request $request)
    {
        $formFields = $request->validate([
            'cat_id' => 'required |not_in:0',
            'brand' => 'required',
            'title' => ['required','min:5'],
            'description' => ['required','min:10'],
            'price' => 'required | integer',
            'location' => 'required',
            'file' => 'required'
        ],
        [
            'cat_id.not_in'=> "Please select a category"
        ]);

        // dd($formFields);
        $listing->update($formFields);

        return back()->with('message', 'Listing Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();
        return back()->with('message', 'Listing Deleted Successfully');
    }

    public function about()
    {
      return view('partials.about');
    }
    public function contact()
    {
      return view('partials.contact');
    }

}



