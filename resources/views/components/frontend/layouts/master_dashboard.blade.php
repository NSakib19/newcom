<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/assets/css/animate.css')}}">
	    <link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/assets/css/font-awesome.min.css')}}">
	    <link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/assets/css/bootstrap.min.css')}}">
	    <link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/assets/css/owl.carousel.min.css')}}">
	    <link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/assets/css/chosen.min.css')}}">
	    <link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/assets/css/style.css')}}">
	    <link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/assets/css/color-01.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/assets/css/styles.css')}}">
    </head>
    <body>
        <!-- Navigation-->
        <x-frontend.body.navigation/>
        <!-- Header-->
        <x-frontend.body.header/>
        <!-- Section-->
        <section class="py-5">
			<div class="container px-4 px-lg-5 mt-5">
				<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
					{{-- <x-frontend.body.section>
						{{$slot}}
					</x-frontend.body.section> --}}
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
		
				</div>
			</div>
		</section>

        <section class="py-5">
			<div class="container px-4 px-lg-5 mt-5">
				<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
					{{-- <x-frontend.body.section>
						{{$slot}}
					</x-frontend.body.section> --}}
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
		
				</div>
			</div>
		</section>
        <!-- Footer-->
        <x-frontend.body.footer/>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>