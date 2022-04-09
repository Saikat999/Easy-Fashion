@extends('welcome')
@section('content')

    
       <img src="{{asset('/images/banner-final.jpg')}}" alt="">
   
       <div class="product-section">
              <h1 class="text-center mt-5 mb-4">Feature products</h1>
              <div class="card-group">
                     <div class="card">
                     <img class="card-img-top" src="{{asset('/images/product/img1.png')}}" alt="Card image cap">
                     <div class="card-body">
                     <h5 class="card-title text-center">Black T-shirt</h5>
                     </div>
                     </div>
                     <div class="card">
                     <img class="card-img-top" src="{{asset('/images/product/img2.png')}}" alt="Card image cap">
                     <div class="card-body">
                     <h5 class="card-title text-center">Red T-shirt</h5>
                     </div>
                     </div>
                     <div class="card">
                     <img class="card-img-top" src="{{asset('/images/product/img3.png')}}" alt="Card image cap">
                     <div class="card-body">
                     <h5 class="card-title text-center">Blue T-shirt</h5>
                     </div>
                     </div>
              </div>
       </div>
   
@endsection