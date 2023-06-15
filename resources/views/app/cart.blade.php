@extends('layouts.app.appLayout')

@section('title')
Корзина
@endsection
@section('content')

<div class="products">
  <div class="container">
    <div class="row">
      @foreach($products as $product)
      <div class="column">
        <img src="{{$product->getPhotoUrl()}}" alt="" class="product" />
        <div class="product-info">
          <p class="product-name">{{$product->name}}</p>
          <div class="product-row">
            <p class="product-price" style="font-weight: 800;">{{$product->price}}</p>
            <div class="cart-btn-box">
              <form action="{{route('app.cart.remove')}}" method="post" id="product_{{$product->id}}">
                @method('DELETE')
                {{csrf_field()}}
                <input type="hidden" name="product" value="{{$product->id}}">
                <button type="submit" form="product_{{$product->id}}">
                  <p class="d-cart-button">Удалить</p>
                </button>
              </form>
            </div>
          </div>

        </div>

      </div>

      @endforeach
    </div>
  </div>
</div>
<div class="container">
  <button class="d-cart-button" style="float: right ; font-size: 15px" onclick="modalOpen()" id="modBtn">Заказать</button>
</div>
<div id="modal" class="modal">
  <div class="modal-content">
    <form onsubmit="alert('Ваш заказ принят')" action="{{route('app.cart.order')}}" method="post" class="order-form">
      {{csrf_field()}}
      <h2>Заказать</h2>
      <input required placeholder="Имя" type="text" name="name" />
      <input pattern="[0-9]{9}" maxlength="9" required placeholder="Номер телефона" type="tel" maxlength="9" name="phone" />
      <button class="" id="orderBut" type="submit">Заказать</button>
    </form>
  </div>
</div>

@endsection


<script>
  function modalOpen(){
    document.getElementById("modal").style.display = "block";
  }
</script>