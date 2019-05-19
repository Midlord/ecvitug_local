@extends('layouts.customer.app')

@section('css')
    <style>
    .table>tbody>tr>td, .table>tfoot>tr>td{
        vertical-align: middle;
    }
    @media screen and (max-width: 600px) {
        table#cart tbody td .form-control{
            width:20%;
            display: inline !important;
        }
        .actions .btn{
            width:36%;
            margin:1.5em 0;
        }
        
        .actions .btn-info{
            float:left;
        }
        .actions .btn-danger{
            float:right;
        }
        
        table#cart thead { display: none; }
        table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
        table#cart tbody tr td:first-child { background: #333; color: #fff; }
        table#cart tbody td:before {
            content: attr(data-th); font-weight: bold;
            display: inline-block; width: 8rem;
        }
        table#cart tfoot td{display:block; }
        table#cart tfoot td .btn{display:block;}
        
    }
    </style>
@endsection
@section('content')
<div class="container" style="margin-bottom: 6rem !important;">
        <h3>My Cart</h3>
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </thead>
        <tbody>
        @foreach ($items as $item)
            <tr>
                <td>
                    <div class="row">
                        <div class="col-sm-2 hidden-xs">
                            <img src="{{ asset('storage/uploads/equipments/' . $item->model->image) }}" height="100" width="100" alt="..." class="img-responsive"/>
                        </div>
                        <div class="col-sm-10">
                            <h4 class="text-center"><a href="{{ route('shop.show', [$item->model->slug]) }}">{{ $item->name }}</a></h4>
                        </div>
                    </div>
                </td>
                <td>P{{ $item->price }}</td>
                <td>
                    <input type="number" name="quantity" class="form-control text-center quantity" data-method="PUT" data-href="{{route('cart.update', $item->rowId)}}" data-id="{{ $item->rowId }}" value="{{$item->qty}}">

                </td>
                <td  class="text-center">P{{ $item->subtotal }}</td>
                <td class="actions text-center">
                    <form action="{{ url('cart', [$item->rowId]) }}" method="POST" class="side-by-side">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>	
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td><a href="{{ url('/shop') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="1" class="hidden-xs"></td>
                <td>            
                <div style="float:right">
                <form action="{{ url('/emptyCart') }}" method="POST">
                    @csrf
                    <input type="submit" class="btn btn-danger btn-lg" value="Empty Cart">
                </form>
                </div>
                </td>
                <td class="hidden-xs text-center"><strong>Total P{{ $subtotal }}</strong></td>
                @if (Auth::check())
                <form action="{{route('checkout')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <td><button class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></button></td>
                </form>
                @else
                <td><a href="{{route('login')}}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                @endif
            </tr>
        </tfoot>
    </table>
</div>
@endsection

@section('scripts')
    <script>
        $(document).on('keyup', '.quantity', function(e) {
            e.preventDefault();
            var $this = $(this);
                $.ajax({
                    type: $this.data('method'),
                    url: $this.data('href'),
                    data: {
                        'quantity': this.value,
                      },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(result) {
                        console.log(result);
                            location.reload();
                    }
                })
        });

    </script>
@endsection
