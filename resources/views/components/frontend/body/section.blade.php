@php
$sliders = App\Models\Slider::orderBy('id','ASC')->limit(10)->get();
@endphp

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      @foreach ($sliders as $slider)
      <div class="carousel-item active">
        <img src="/storage/slider/{{$slider->slider_image}}" class="d-block w-100" alt="...">
      </div>          
      @endforeach
            
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
<section class="py-5">
    @php
$products = App\Models\Product::where('status',1)->orderBy('id','ASC')->limit(10)->get();
@endphp
    @foreach ($products as $product)
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src={{$product->product_image}} alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">{{$product->product_name}}</h5>
                    <!-- Product price-->
                    {{$product->product_price}}
                </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
            </div>
        </div>
    </div>
    
    @endforeach

</section>


<section class="py-5">
    @php
$categories = App\Models\Category::orderBy('id','ASC')->limit(10)->get();
@endphp
    @foreach ($categories as $category)
        <div class="col mb-5">
        <div class="card h-100">
        <!-- Category image-->
        <img class="card-img-top" src={{$category->category_image}} alt="..." />
        <!-- category details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- category name-->
                <h5 class="fw-bolder">{{$category->category_name}}</h5>
                <!-- category price-->
                {{$category->category_price}}
            </div>
        </div>
        <!-- category actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
        </div>
    </div>
</div>
@endforeach


</section>

