<x-layout>

    @include('partials.banner')
    @include('partials.search')

    {{-- {{Listing::category()}} --}}

    <div class="album py-4 bg-body-tertiary">
        <div class="container">
            <h2 class="text-center">Categories</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-1">

                @unless (count($categorys) == 0)

                    @foreach ($categorys as $category)
                        <x-listing-card :category="$category" />
                    @endforeach
                @else
                    <p>No Listing Found</p>

                @endunless

            </div>
            
        </div>

        <div class="container">
            
        </div>
    </div>




</x-layout>
