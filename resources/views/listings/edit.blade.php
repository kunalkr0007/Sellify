<x-layout>
    <div class="container col-xl-4 col-lg-6 mt-5">
        <a href="/manage" class="inline-block text-black ml-4 mb-4 link-underline link-underline-opacity-0 fs-5 "><i class="fa-solid fa-arrow-left"></i> Back  </a>

    </div>
    <div class="container col-xl-4 col-lg-6  border ">
        <h2 class="text-center">Edit Ad: {{$listings->title}}</h2>
        <div class="mb-3">
            <form action="/edit/{{$listings->id}}" method="POST">
                @csrf
                @method('PUT')

            <label for="exampleFormControlInput1" class="form-label required">Category</label>
            <select name="cat_id" class="form-select" aria-label="Default select example">
                <option selected  value= "0">Open this select menu</option>
                @foreach ($categorys as $category)
                    
                <option {{$listings->cat_id == $category->id ? "selected" : ""}} value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
            </select>
             @error('cat_id')
               <p class="text-danger text-sm mt-1">{{$message}} </p> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label required">Brand</label>
            <input type="text" name="brand" class="form-control" id="exampleFormControlInput1" value= "{{$listings->brand}}">
             @error('brand')
               <p class="text-danger text-sm mt-1">{{$message}} </p> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label required">Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" value= "{{$listings->title}}">
              @error('title')
               <p class="text-danger text-sm mt-1">{{$message}} </p> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label required">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" maxlength="150" rows="3">{{$listings->description}}</textarea>
             @error('description')
               <p class="text-danger text-sm mt-1">{{$message}} </p> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label required">Price ₹</label>
            <input type="text" name="price" class="form-control" id="exampleFormControlInput1" value= "{{$listings->price}}">
            @error('price')
               <p class="text-danger text-sm mt-1">{{$message}} </p> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label required">Location</label>
            <input type="text" name="location" class="form-control" id="exampleFormControlInput1" value= "{{$listings->location}}">
              @error('location')
               <p class="text-danger text-sm mt-1">{{$message}} </p> 
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload Image:</label>
            <input class="form-control" name="file" type="file" id="formFile">
            <img src="{{$listings->file ? asset('storage/'. $listings->file) :asset('images/default/default.jpg')}}" style="width:300px;height:200px"  class="mx-auto shadow-sm mt-2"  alt="...">
              @error('file')
               <p class="text-danger text-sm mt-1">{{$message}} </p> 
            @enderror

        </div>

        {{-- <input type="hidden" name="file" value="testing"> --}}

        {{-- <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile">
        </div> --}}

        <button type="submit" class="btn btn-success">Edit ad</button>
            </form>

    </div>


</x-layout>
