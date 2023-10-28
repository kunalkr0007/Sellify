@props(['category'])




            <div class="col">
                <div class="card shadow-sm ">
                    <a href="/category/{{$category->id}}"
                        class="link-secondary link-underline-opacity-0 link-underline-opacity-100-hover">
                    <img src="{{asset('images/category'.$category->id.'.jpeg')}}" class="bd-placeholder-img card-img-top"
                    width="100%" height="225" alt="">
                    <div class="card-body py-2">
                            <h4 class="card-title text-center ">{{$category->category}}</h4>
                        </div>
                    </a>
                </div>
            </div>


   