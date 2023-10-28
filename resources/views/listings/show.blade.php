<x-layout>

    @include('partials.search')
<div class="container mt-3">
    <a href="/" class="inline-block text-black ml-4 mb-4 link-underline link-underline-opacity-0 fs-5 "><i class="fa-solid fa-arrow-left"></i> Back  </a>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-1">
    
    @unless (count($listings) == 0)

        @foreach ($listings as $listing)
      
             <div class="col">
                <div class="card shadow-sm">
                    <a href="/category/{{$listing->cat_id}}/{{$listing->id}}"
                        class="link-secondary link-underline-opacity-0 link-underline-opacity-100-hover">

                        {{-- {{$listing->logo ? asset('storage/'. $listing->logo) : asset('images/default/default.jpg')}}" --}}

                    <img src="{{$listing->file ? asset('storage/'. $listing->file) :asset('images/default/default.jpg')}}" style="width:300px;height:200px" class="shadow-sm bd-placeholder-img card-img-top w-50 d-block mx-auto"
                          alt="">
                    <div class="card-body">
                            <h4 class="card-title"> {{$listing->title}} </h4>
                        </a>
                        <h5 class="card-subtitle mb-2 text-body-secondary">₹ {{$listing->price}}</h5>
                        <p class="card-text">{{substr($listing->description,0,45)}}...</p>
                        <div class="d-flex justify-content-between align-items-center">

                            <small class="text-body-secondary">{{$listing->location}} </small>
                            <small class="text-body-secondary">{{ date('d-M-Y h:ia',strtotime($listing->created_at)) }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
         
    @else
   

      <h3>No Listing Found</h3>
      
 
    @endunless

    
</div>
<div class="container rows">
        {{$search == "" ? $listings->links('pagination::bootstrap-5'): "" }}
    </div>
    </div>
    </div>
    </div>


    

           


            

            


</x-layout>
