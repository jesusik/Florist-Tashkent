@extends('layouts.app.appLayout')


@section('title')
Florist-tashkent
@endsection

@section('content')
@include('layouts.app.partials.appNavbar')
@foreach($categories as $category)
@if($category->products->isEmpty()==true)

@else
<div id="{{$category->id}}" class="products">
    <div class="container">
        <h2>{{$category->name}}</h2>
        <hr />
        <div class="row">
            @foreach($category->products->take(8) as $product)
            <div class="column">
                <img src="{{$product->getPhotoUrl()}}" alt="" class="product" />
                <div class="product-info">
                    <p class="product-name">{{$product->name}}</p>
                    <div class="product-row">
                        <p class="product-price" style="font-weight: 800;">{{$product->price}}</p>
                        <div class="cart-btn-box">
                            <button type="submit" form="product_{{$product->id}}">
                                <p class="d-cart-button">В корзину</p>
                            </button>
                        </div>
                    </div>
                </div>
                <form action="{{route('app.cart.add')}}" method="post" id="product_{{$product->id}}">
                    {{csrf_field()}}
                    <input type="hidden" name="product" value="{{$product->id}}">
                </form>
            </div>
            @endforeach
        </div>
        @if(count($category->products) < 8)

        @else
        <div class="watch-more-con">
            <button class="watch-more-but" onclick="loadMore({{$category->id}})">
                Смотреть еще...
            </button>
        </div>
        @endif
    </div>
</div>
@endif
@endforeach
@include('layouts.app.partials.appContact')


@endsection
@push('scripts')
<script>
    let categoryPages = {}

    function loadMore(category) {
        const page = categoryPages[category] || 2;
        $.ajax(`{{route('app.products')}}?category_id=${category}&page=${page}`, {
            success: (data) => {
                let prod = $(`#${category}`);
                
                    let row = "";
                    
                for (const product of data.data) {
                    row += "<div class='column'><img src=" + product.photo + "  class='product' />" +
                        " <div class='product-info'>  ";
                    row += "<p class='product-name'>" + product.name + " </p>" +
                        "<div class='product-row'>";
                    row += "<p class='product-price' style='font-weight: 800;'>" + product.price + "</p>" +
                        "<div class='cart-btn-box'>";
                    row += "<button type='submit' form='product_" + product.id + "'> <p class='d-cart-button'>В корзину</p>" 
                    + "</button> </div> </div></div>";
                    row += " <form action='{{route('app.cart.add')}}' method='post' id='product_" + product.id + "'>";
                    row += "<input type='hidden' name='product' value=" + product.id + `>{{csrf_field()}}`;
                    row+="</form>  </div>";
                }
                
                let rowContainer = prod.children().children()[2];
                
                rowContainer.innerHTML = rowContainer.innerHTML+row;

                categoryPages[category] = page + 1
            }
        })
    }
</script>
@endpush