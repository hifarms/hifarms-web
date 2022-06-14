@extends('layout.app')

@section('content')
  <!--Single sponsors Page starts here-->
  <div class="showcase-img sponsor">
    <div class="showcase-content">
     <h1>Sponsors</h1>
    </div>
</div>
<div class="about-description">
   <a href="services.html">Services</a> <img src="{{asset('img/Arrow 1.svg')}}" width="12"> <a href="single-product.html">Single Product</a>
</div>

<div class="sponsor-services">
    <div class="sponsor-service-grid">
        <img src={{url($farm->image)}} alt="product-image">
        <div class="sponsor-service-content">
            <h1 class="farmid" id="{{$farm->id}}">{{$farm->name}}</h1>
            <h3>₦{{$farm->unit_price}}</h3>
            <h4>Fish Farming</h4>
            <p style="color: #404a3d; padding-bottom: 10px; border-bottom: 1.55px solid #c4c4c4;">{{$farm->description}}<br> <br>
                
                Duration - {{$farm->returns[0]->duration}} <br><br>
                
                Return – {{$farm->returns[0]->percentage}}% <br> <br>
                
                Location - {{$farm->location}}. <br><br>
                
                
                Unit price: N{{$farm->unit_price}}</p> <br><br>
            <p style="color: #404a3d;">Return: {{$farm->returns[0]->percentage}} <br><br>
                Location: {{$farm->location}} <br><br>
                Available Units: {{$farm->c_units}} from {{$farm->i_units}}</p> <br>
            <h4 class="profit" style="text-align: center;padding-top: 10px;color: #ff3d00;">Min Value of ₦ 5000 expected </h4>
            <p class="amount"><input type="text" placeholder="Amount"></p>
            <div class="add-to-cart">
                <div class="cart-items">
                    <button class="add">+</button> <br>
                    <button class="minus">-</button>
                </div>
                <p class="q" id="unit">1</p>
                <button class="add-to-cart-button">ADD TO CART</button>
            </div>
        </div>
    </div>
</div>
<div class="project-milestone">
    <h1>Project Milestone</h1>
    <div class="line"></div> <br><br>
    <p>null.</p>
</div>
<!--Single sponsor page end-->

@endsection('content')

@section('js')
<script src="/js/main.js"></script>
<script>
    $.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
  }
});
jQuery.ajax({
                url: "http://127.0.0.1:8000/check-in-cart/"+$('.farmid')[0].id,
                method: "get",
                success: function (data) {
                    if(data.status){
                        const addToCart = document.querySelector('.add-to-cart-button');
                       addToCart.innerHTML = 'Added'
                       addToCart.style.backgroundColor = '#FEE565';
                       addToCart.style.fontSize = '16px';
                    }
                },
                error: function (e) {
                    console.log(e);
                },
            });

$('.add-to-cart-button').on('click',()=>{
        // add your logic before ajax
        jQuery.ajax({
                    url: "http://127.0.0.1:8000/addcart/investment",
                    method: "post",
                    data: {
                        id:$('.farmid')[0].id,
                        unit:$('#unit').text()
                    },
                    success: function (data) {
                       console.log(data.responseJSON);
                       const addToCart = document.querySelector('.add-to-cart-button');
                       addToCart.innerHTML = 'Added'
                       addToCart.style.backgroundColor = '#FEE565';
                       addToCart.style.fontSize = '16px';
                       getCartNum()
                    },
                    error: function (e) {
                       alert(e.responseJSON.error);
                    },
                });
    })

    
    
    const addNumber = document.querySelector('.add');
    const substractNumber = document.querySelector('.minus');

    addNumber.addEventListener('click', ()=>{
         let unit = document.querySelector('#unit');
         unit.innerHTML = Number(unit.innerHTML) + 1;
    })

    substractNumber.addEventListener('click', ()=>{
         let unit = document.querySelector('#unit');
         unit.innerHTML = `${unit.innerHTML - 1}`;
         
         if(unit.innerHTML <= 0){
            alert("You can't add '0' unit");
             unit.innerHTML = 1;
         }
    })
        
</script>
@endsection('js')

</body>
</html>