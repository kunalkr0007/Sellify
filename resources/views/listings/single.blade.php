<x-layout>

    {{-- @php
      echo "<pre>";
      echo count($listings);
      echo "</pre>";
      die;
  @endphp --}}

    {{-- {{dd($user->name)}} --}}




    <div class="container mt-4 " >

        <a href="/category/{{ $category }}"
            class="inline-block text-black ml-4 mb-4 link-underline link-underline-opacity-0 fs-5"><i
                class="fa-solid fa-arrow-left"></i> Back </a>
        @unless (count($listings) == 0)

            @foreach ($listings as $listing)
                <div class="card shadow-sm" >
                    <img src="{{$listing->file ? asset('storage/'. $listing->file) :asset('images/default/default.jpg')}}" style="width:400px;height:400px"  class="img-fluid card-img-top mx-auto shadow-sm"  alt="...">
                    <div class="card-body border" style="width: 100%">
                        <h4 class="card-title text-capitalize">{{ $listing->title }} </h4>
                        <h5 class="card-subtitle mb-2 text-body-secondary">₹{{ $listing->price }} </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary mt-3">{{ $listing->location }}</h6>
                        <hr>


                        <h4 class="py-2 ">Brand : <span class="text-capitalize card-subtitle mb-2 text-body-secondary h5">
                                {{ $listing->brand }} </span></h4>
                        <hr>
                       

                            <h3>Description:</h3>
                        <p class="card-text" style="max-width: 100px">
                            <pre class="fs-6 text-wrap">{{ $listing->description }}. </pre>
                        </p>
                        <hr>
                    

                        <h4>Posted By: <span>
                                @foreach ($users as $user)
                                    {{ $user->name }}
                                @endforeach
                            </span></h4>
                        @auth
                            <h6>Contact Details: <span class="badge text-bg-primary p-2 fs-6">
                              @foreach ($users as $user)
                                    {{ $user->contact }}
                                @endforeach</h6>
                        @else
                            <h6>Contact Details: <a href="/login"><span class="badge text-bg-primary p-2 fs-6"> Login/signup </span></a> to view
                                details</h6>
                        @endauth


                        <p class="card-text"><small
                                class="text-body-secondary">{{ date('d-M-Y h:ia', strtotime($listing->created_at)) }}</small>
                        </p>
                    </div>
                </div>
            @endforeach
        @else
            <h3>Invalid Parameter</h3>

            @php
                header('location: / ');
                die();
            @endphp



        @endunless

    </div>

</x-layout>
