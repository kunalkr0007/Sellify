<x-layout>

    <div class="container p-4 bg-body-secondary form-signin col-xl-4 col-lg-6  m-auto mt-5">


        <form action="/signup/user" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Sign Up</h1>

            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{old('name')}}">
                <label for="floatingInput">Name</label>
                @error('name')
                     <small class="text-danger text-sm ">{{$message}} </small> 
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{old('email')}}">
                <label for="floatingInput">Email address</label>
                @error('email')
                     <small class="text-danger ">{{$message}} </small> 
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="contact" class="form-control" id="floatingInput" placeholder="name@example.com" maxlength=10 value="{{old('contact')}}">
                <label for="floatingInput">Contact Number</label>
                @error('contact')
                     <small class="text-danger ">{{$message}} </small> 
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                     <small class="text-danger ">{{$message}} </small> 
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password_confirmation" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Confirm Password</label>
                @error('password_confirmation')
                     <small class="text-danger ">{{$message}} </small> 
                @enderror
            </div>
            <div class="form-floating mb-4">
                <small>Already have an account? <a href="/login" class="text-decoration-none">Login Here </a></small>
            </div>

            <button class="btn btn-primary w-100 py-2 mb-3" type="submit">Sign Up</button>
          

        </form>

    </div>

</x-layout>
