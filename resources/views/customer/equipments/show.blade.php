
@extends('layouts.customer.app')
@section('css')
<style>

input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input[type="number"] {
    -moz-appearance: textfield;
}

</style>
@endsection
@section('content')
<section class="portfolio_details_area section-gap">
    <div class="container">
        <div class="portfolio_details_inner">
            <div class="row">
                <div class="col-md-6">
                    <div class="left_img">
                        <img class="img-fluid" style="height:500px; display: block;margin: 0 auto;" src="{{asset('storage/uploads/equipments/'.$equipment->image)}}" alt="">
                    </div>
                </div>
                <div class="offset-md-1 col-md-5">
                    <div class="portfolio_right_text mt-30">
                        <h4>{{ucfirst($equipment->name)}}</h4>
                        <p>{{$equipment->description}}.</p>
                        <ul class="list">
                            <li><span>Price</span>: P{{$equipment->price}}</li>
                            <li><span>Available Qty:</span>: {{$equipment->quantity}}</li>
                            <form action="{{route('cart.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$equipment->id}}">
                                <input type="hidden" name="name" value="{{$equipment->name}}">
                                <input type="hidden" name="price" value="{{$equipment->price}}">
                                <input type="number" name="quantity" id="qty" required style="padding:5px;">
                                <button type="submit" class="btn btn-primary" id="addToCart"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="work-area section-gap-top" id="work">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2><span>Check</span> Our Rentals</h2>
                </div>
            </div>

            <div class="col-lg-12 d-none">
                <div class="filters">
                    <ul>
                        <li class="active" data-filter=".all"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="filters-content">
            <div class="row grid">
                <div class="col-lg-4 col-md-6 grid-sizer"></div>
                @foreach ($suggests as $product)
                    <div class="col-lg-4 grid-item col-md-6 all wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="single-work">
                            <div class="relative">
                                <div class="thumb">
                                    <img class="image img-fluid" src="{{asset('storage/uploads/equipments/'.$product->image)}}" alt="">
                                </div>
                                <div class="middle">
                                    <h4>{{$product->name}}</h4>
                                    <div class="cat">Client Project</div>
                                </div>
                                <a class="overlay" href="{{route('shop.show',$product->slug)}}"></a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-4 text-center grid-item col-md-12 all creative wow fadeIn" data-wow-duration="2s">
                    <a href="{{route('shop.index')}}" class="primary-btn" data-text="View More">
                        <span>V</span>
                        <span>i</span>
                        <span>e</span>
                        <span>w</span>
                        <span> </span>
                        <span>M</span>
                        <span>o</span>
                        <span>r</span>
                        <span>e</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@stop

@section('scripts')
    <script>
        var prod_qty = '{{$equipment->quantity}}';
        var qty = parseFloat(prod_qty);
        $('#qty').on('keyup',function(){
            if($('#qty').val() > qty){
                $('#addToCart').attr('disabled', 'disabled');
                alert('Product input is greater than Product Quantity');
                
            }else{
                $('#addToCart').removeAttr('disabled');
            }
        });
    </script>
@stop

