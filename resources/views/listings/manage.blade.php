<x-layout>

    {{-- @php
      echo "<pre>";
      echo count($listings);
      echo "</pre>";
      die;
  @endphp --}}

  <div class="container mt-3 min-vh-100 overflow-auto table-responsive">
        @unless ($listings->isEmpty())
        <h3>All Listings</h3>
        <table class="table  table-striped align-middle ">
            <thead class="">
                <tr>
                    <th scope="col">Sno</th>
                    {{-- <th scope="col">Id</th> --}}
                    <th scope="col">Category </th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            @php
                $sno = 1;
            @endphp
       
       <tbody class="table-group-divider">
                    @foreach ($listings as $listing)
                    <tr>
                        <th scope="row">{{$sno}}</th> 
                         
                        {{-- <td scope="row">
                            {{$listing->cat_id }} 
                            </td>  --}}
                <td>
                    @foreach ($categorys as $category)
                    @if ($category->id == $listing->cat_id)
                    {{$category->category}}
                    @endif
                    @endforeach
                </td>

                        <td style="min-width: 120px"> <a href="/category/{{$listing->cat_id}}/{{$listing->id}}">{{ $listing->title }}</a> </td>

                        <td><img src="{{$listing->file ? asset('storage/'. $listing->file) :asset('images/default/default.jpg')}}"  style="width: 120px;height: 100px"
                          alt=""></td>
                        
                        <td>{{ substr($listing->description,0,100) }}</td>
                        <td style="min-width: 90px">₹{{ $listing->price }} </td>
                        <td>
                            <div class="d-flex">
                            <a href="/edit/{{$listing->id}}" class="btn btn-success mx-2">Edit</a>
                            <form action="/delete/{{$listing->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete </button>
                            </div>
                            </form>
                        </td>
                    </tr>
                    @php $sno++; @endphp
                    @endforeach
                         @else
                    <div>
                       <h3>No Listing Found!</h3></div>
                @endunless
            </tbody>
        </table>
    </div>


</x-layout>
