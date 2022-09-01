@extends('layout.app')

@section('content')
    <!--Cart starts here-->
    <img src="img/Flower.svg" alt="flower" class="flower cart">
    <div class="cart-section">Cart</div>
    <div class="cart-container">
        <p class="info">You can add item up to ₦2,000,000.00</p>
        <div class="cart-flex">
            <p>Name</p>
            <p class="cart-unit">Units</p>
            <p class="cart-rate">Rate</p>
            <p>Amount</p>
            <p>Remove</p>
        </div>
        @foreach ($farms as $cart)
        @if($cart->farm)
            <div class="cart-content">
                <div class="image-name">
                    <p class="hide-id">{{ $cart->id }}</p>
                    <img src={{ url($cart->farm->image) }} alt="image">
                    <p>{{ $cart->farm->name }}</p>
                </div>
                <div class="add-to-cart">
                    <div class="cart-items">
                        <button class="add" style="color:#6E7A89;">+</button> <br>
                        <button class="minus" style="color:#6E7A89;">-</button>
                    </div>
                    <p id="unit">{{ $cart->unit }}</p>
                </div>
                <div class="rate">
                    <p>{{ number_format($cart->farm->unit_price,0,'.',',') }}</p>
                </div>
                <div class="amount">
                    <p>₦ {{  number_format($cart->farm->unit_price * $cart->unit,0,'.',',') }}</p>
                </div>
                <div class="remove" style="color:#FF3D00;">Remove</div>
            </div>
        @else
        <div class="cart-content">
                <div class="image-name">
                    <p class="hide-id">{{ $cart->id }}</p>
                    <img src={{ url($cart->product->image) }} alt="image">
                    <p>{{ $cart->product->name }}</p>
                </div>
                <div class="add-to-cart">
                    <div class="cart-items">
                        <button class="add" style="color:#6E7A89;">+</button> <br>
                        <button class="minus" style="color:#6E7A89;">-</button>
                    </div>
                    <p id="unit">{{ $cart->unit }}</p>
                </div>
                <div class="rate">
                    <p>{{ number_format($cart->product->price,0,'.',',') }}</p>
                </div>
                <div class="amount">
                    <p>₦ {{ number_format($cart->product->price * $cart->unit,0,'.',',') }}</p>
                </div>
                <div class="remove" style="color:#FF3D00;">Remove</div>
            </div>
            @endif
        @endforeach
        <div class="checkout">
            <p>Total: ₦<span class="total-price">0.00</span></p>
            <button class="checkout-btn">CHECK OUT</button>
        </div>
    </div>
    <!--Cart page end-->
@endsection('content')

@section('js')
<script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="/js/main.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });




        function update(id, qauntity) {
            console.log(qauntity);
            jQuery.ajax({
                url: `http://127.0.0.1:8000/cart/${id}`,
                method: "put",
                data: {
                    unit: qauntity
                },
                success: function(data) {
                    getCartNum()
                    alert("Update sucessfully");
                },
                error: function(e) {
                    console.log(e);
                },
            });
        }


        function remove(id, cart) {
            jQuery.ajax({
                url: `http://127.0.0.1:8000/cart/${id}`,
                method: "delete",
                success: function(data) {
                    cart.remove();
                    getCartNum()
                },
                error: function(e) {
                    console.log(e);
                },
            });
        }

        const addNumber = document.querySelector('.add');
        const substractNumber = document.querySelector('.minus');




        const cartContent = document.querySelectorAll('.cart-content');
        cartContent.forEach((cart) => {
            let removeCart = cart.querySelector('.remove');
            let addNumber = cart.querySelector('.add');
            let substractNumber = cart.querySelector('.minus');
            removeCart.addEventListener('click', () => {
                cart.remove();
                let id = cart.querySelector('.hide-id').innerHTML;
                id = Number(id)
                remove(id, cart)
            })

            substractNumber.addEventListener('click', () => {
                let unit = cart.querySelector('#unit');
                unit.innerHTML = `${unit.innerHTML - 1}`;

                if (unit.innerHTML <= 0) {
                    alert("You can't add '0' unit");
                    unit.innerHTML = 1;
                }

                let id = cart.querySelector('.hide-id').innerHTML;
                id = Number(id)
                unit = unit.innerHTML
                console.log(typeof(id));
                update(id, unit)
            })

            addNumber.addEventListener('click', () => {
                let unit = cart.querySelector('#unit');
                unit.innerHTML = Number(unit.innerHTML) + 1;
                let id = cart.querySelector('.hide-id').innerHTML;
                id = Number(id)
                unit = unit.innerHTML;
                update(id, unit);
            })

        })

        checkoutBtn = document.querySelector('.checkout-btn')
        checkoutBtn.addEventListener('click', () => {

            jQuery.ajax({
                    url: `http://127.0.0.1:8000/checkout`,
                    method: "get",
                    success: function(data) {
                        console.log(data)
                        var handler = PaystackPop.setup({
                            key: 'pk_test_d31a3ad9815642087a323749cd60597aad8f7a73',
                            email: data.user.email,
                            amount: data.total_amount * 100,
                            metadata: {
                                custom_fields: [{
                                    display_name: "order_id",
                                    variable_name: "order_id",
                                    value: data.id
                                },
                                {
                                    display_name: "first_name",
                                    variable_name: "first_name",
                                    value:data.user.fullname.split[0]
                                },
                                {
                                    display_name: "last_name",
                                    variable_name: "last_name",
                                    value:data.user.fullname.split[1]
                                },
                            ]
                            },
                            callback: function(response) {

                                let message = 'Payment complete! Reference: ' + response.reference;
                                console.log(response);
                                alert(message);
                                window.location.replace(response.redirecturl);

                            },
                            onClose: function() {
                                alert('window closed');
                            }
                        });
                        handler.openIframe();
                    
                },
                error: function(e) {
                    if(e.status==401){
                    alert("Login/Register To CheckOut Cart")
                    window.location.replace('/signin');
                    }

                    if(e.status==419){
                        alert('Cart Empty, Nothing to checkout')
                    }

                }
            });
        })
    </script>
   
@endsection('js')
</body>

</html>
