<x-layout>


    <div class="container col-xl-4 col-lg-6  border mt-5 bg-body-tertiary">
        <h2 class="text-center ">Post an Ad</h2>
        <div class="mb-3">
            <form action="/" method="POST" enctype="multipart/form-data">
                @csrf
            <label for="exampleFormControlInput1" class="form-label required">Category</label>
            <select name="cat_id" class="form-select" aria-label="Default select example">
                <option selected value= "0">Open this select menu</option>
                @foreach ($categorys as $category)
                    
                <option value="{{$category->id}}" {{ old('cat_id') == $category->id ? 'selected' : '' }}>{{$category->category}}</option>
                @endforeach
            </select>
             @error('cat_id')
               <p class="text-danger text-sm mt-1">{{$message}} </p> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label required">Brand</label>
            <input type="text" name="brand" class="form-control" id="exampleFormControlInput1" value="{{old('brand')}}">
            @error('brand')
               <p class="text-danger text-sm mt-1">{{$message}} </p> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label required">Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1"  value="{{old('title')}}">
            @error('title')
               <p class="text-danger text-sm mt-1">{{$message}} </p> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label required">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="4" maxlength="150">{{old('description')}}</textarea>
            @error('description')
               <p class="text-danger text-sm mt-1">{{$message}} </p> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label required">Price ₹</label>
            <input type="number" class="form-control" name="price" id="exampleFormControlInput1"  value="{{old('price')}}">
            @error('price')
               <p class="text-danger text-sm mt-1">{{$message}} </p> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label required">Location</label> 
            <input type="text" class="form-control" name="location" id="exampleFormControlInput1"  value="{{old('location')}}">
            @error('location')
               <p class="text-danger text-sm mt-1">{{$message}} </p> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload Image:</label>
            <input class="form-control" name="file" type="file" id="formFile">
              @error('file')
               <p class="text-danger text-sm mt-1">{{$message}} </p> 
            @enderror
        </div>
       
            
            {{-- <input type="hidden" name="file" value="testing"> --}}
            {{-- <input type="hidden" name="user_id" > --}}
        

        <button type="submit" class="btn btn-primary mb-3">Post ad</button>
        </form>

    </div>


</x-layout>
