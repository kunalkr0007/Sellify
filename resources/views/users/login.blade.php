<x-layout>

    <div class="container p-4 bg-body-secondary form-signin  col-xl-4 col-lg-6  m-auto mt-5">


        <form action="/login/authenticate" method="POST">
            @csrf
            <h1 class="h3 mb-4 fw-normal">Please sign in</h1>

            <div class="form-floating mb-2 ">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com"value="{{old('email')}}" >
                <label for="floatingInput" >Email address</label>
                 @error('email')
                     <small class="text-danger text-sm ">{{$message}} </small> 
                @enderror

            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                 @error('password')
                     <small class="text-danger text-sm ">{{$message}} </small> 
                @enderror
            </div>
            <div class="form-floating mb-4">
                <small>Don't have an account? <a href="/signup" class="text-decoration-none">Create Here </a></small>
            </div>

            <button class="btn btn-primary w-100 py-2  mb-3" type="submit">Sign in</button>


        </form>

    </div>

</x-layout>
