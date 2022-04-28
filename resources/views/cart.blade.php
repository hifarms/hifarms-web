@extends('layout.app')

@section('content')
  <!--Cart starts here-->
  <img src="img/Flower.svg" alt="flower" class="flower cart">
  <div class="cart-section">Cart</div>
  <div class="cart-container">
      <p class="info">You can add item up to ₦2,000,000.00</p>
      <div class="cart-flex">
          <p>Name</p>
          <p>Units</p>
          <p>Rate</p>
          <p>Amount</p>
          <p>Remove</p>
      </div>
      @foreach($farms as $cart)
      <div class="cart-content">
          <div class="image-name">
              <p class="hide-id">{{$cart->id}}</p>
              <img src={{url($cart->farm->image)}} alt="image">
              <p>{{$cart->farm->name}}</p>
          </div>
          <div class="add-to-cart">
            <div class="cart-items">
                <button class="add" style="color:#6E7A89;">+</button> <br>
                <button class="minus" style="color:#6E7A89;">-</button>
            </div>
            <p id="unit">{{$cart->unit}}</p>
        </div>
        <div class="rate">
            <p>{{$cart->farm->unit_price}}</p>
        </div>
        <div class="amount">
            <p>₦ {{$cart->farm->unit_price * $cart->unit}}</p>
        </div>
        <div class="remove" style="color:#FF3D00;">Remove</div>
      </div>
      @endforeach
      <div class="checkout">
        <p>Total: ₦ 10,000.00</p>
        <button>CHECK OUT</button>
    </div>
  </div>
  <!--Cart page end-->
@endsection('content')

@section('js')
<script src="../public/js/main.js"></script>
<script>
    $.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
  }
});
    
    
    function getCartNum(){
        jQuery.ajax({
                    url: "http://127.0.0.1:8000/cartnum",
                    method: "get",
                    success: function (data) {
                    alert(data.cartNumber)
                    },
                    error: function (e) {
                        console.log(e);
                    },
                });
    }
    
    function update(id,qauntity){
        console.log(qauntity);
        jQuery.ajax({
                    url: `http://127.0.0.1:8000/cart/${id}`,
                    method: "put",
                    data:{
                    unit:qauntity
                    },
                    success: function (data) {
                    alert(data);
                    },
                    error: function (e) {
                        console.log(e);
                    },
                });
    }

    function getCartNum(){
        jQuery.ajax({
                    url: "http://127.0.0.1:8000/cartnum",
                    method: "get",
                    success: function (data) {
                    const cartCounter = document.querySelector('.cart-counter');
                    cartCounter.innerHTML = data.cartNumber;
                    },
                    error: function (e) {
                        console.log(e);
                    },
                });
    }
    getCartNum()

    function remove(id, cart){
        jQuery.ajax({
                    url: `http://127.0.0.1:8000/cart/${id}`,
                    method: "delete",
                    success: function (data) {
                    cart.remove();
                    getCartNum()
                    },
                    error: function (e) {
                        console.log(e);
                    },
                });
    }

    const addNumber = document.querySelector('.add');
    const substractNumber = document.querySelector('.minus');

    addNumber.addEventListener('click', ()=>{
         let unit = document.querySelector('#unit');
         unit.innerHTML = Number(unit.innerHTML) + 1;
         let id = document.querySelector('.hide-id').innerHTML;
         id = Number(id)
         unit = unit.innerHTML;
        update(id,unit);
    })

    substractNumber.addEventListener('click', ()=>{
         let unit = document.querySelector('#unit');
         unit.innerHTML = `${unit.innerHTML - 1}`;
         
         if(unit.innerHTML <= 0){
            alert("You can't add '0' unit");
             unit.innerHTML = 1;
         }

         let id = document.querySelector('.hide-id').innerHTML;
        id = Number(id)
        unit = unit.innerHTML
        console.log(typeof(id));
        update(id,unit)
    })
    
    const cartContent = document.querySelectorAll ('.cart-content');
    cartContent.forEach((cart)=>{
        let removeCart = cart.querySelector('.remove');
        removeCart.addEventListener('click', ()=>{
            cart.remove();
            let id = cart.querySelector('.hide-id').innerHTML;
            id = Number(id)
            remove(id, cart)
        })
    })
</script>
@endsection('js')
</body>
</html>