@extends('layouts.app.appLayout')

@section('title')
Поиск
@endsection
@section('content')


  <div class="container">
  @if($products->isEmpty()==true)
    <p class="error">По вашему запросу ничего не найдено</p>
  @else
    <div class="row">
      @foreach($products as $product)
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
    @endif
  </div>
</div>



@endsection