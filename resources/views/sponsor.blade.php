@extends('layout.app')

@section('title')
<title>Hifarms | Marketplace</title>
@endsection

@section('content')                                                
  <div class="showcase-img sponsor">
    <div class="showcase-content">
     <h1>Marketplace</h1>
    </div>
</div>
<div class="dashboard-container sponsor">
        <h1>Hi Farms Marketplace.</h1>
        <div class="sponsor-container">
            <form>
            <div class="sponsors-flex dashboard">
                <p class="filter-heading dashboard">FILTER BY PRICE</p>
                <p class="showing-result">Showing {{$products->currentPage()}}-{{$products->lastPage()}}</p>
                <select class="sponsor-option dashboard sort" name="sort">
                    <option value="all">Sort By</option>
                    <option value="new">Newest</option>
                    <option value="old">Oldest</option>
                </select>
            </div>
            <div class="sponsor-grid dashboard">
                <div class="sponsor-option">
<div class="spd">                    
                    <div class="sponsor-checkbox dashboard">
                       
                    <div class="sponsors-flex dashboard show-this">
                        <p class="showing-result">Showing {{$products->currentPage()}}-{{$products->lastPage()}}</p>
                        <select class="sponsor-option dashboard">
                            <option value="all">Sort By</option>
                            <option value="new">Newest</option>
                            <option value="old">Oldest</option>
                        </select>
                    </div>

                    <div class="filter">
                            
                                <div class="mobile-category">
                                <h2 class="filter-mobile">Filter By Price</h2>
                                 <div class="line" style="height: 1px;width: 100%;background: #c4c4c4;margin-bottom: 10px;"></div>
                                </div>
                                <input type="range" min="0" max="50000" step="0.1" value="{{old('range')==null? 0 :old('range')}}" name='range' class="rate">
                                <input type="submit" class="button-filter" value='FILTER'>
                                <p class="filter-price">Price: ₦ 0 - ₦ 50,000</p>
                                 <h3 class="sponsor-categories mobile-hide">CATEGORIES</h3>
                                 <div class="line hide" style="height: 1px;width: 100%;background: #c4c4c4;margin-bottom: 10px;"></div>
                            </div>
                        <div class="line mobile-hide" style="height: 1px;width: 300px;background: #c4c4c4;margin-bottom: 10px;"></div>
                        @foreach($category as $cat)
                        <div class="flex dashboard">
                            <input type="checkbox" class="check" name="category[]" value="{{$cat->id}}" name='{{ $cat->name }}' {{old('category')  && in_array($cat->id,old('category')) ? 'checked':null}}>
                            <p class="sponsor-crop dashboard">{{ $cat->name }}</p>
                            <P class="quant">0</P>
                        </div>
                        @endforeach
                        
                    </form>
                    <div class="mobile-category">
                    <h3 class="sponsor-categories">CATEGORIES</h3>
                    <div class="line" style="height: 1px;width: 100%;background: #c4c4c4;margin-bottom: 10px;"></div>
                    </div>
                    </div>
</div>
                    <div class="farmer-section" style="cursor:pointer">
                       <div class="i-want-to-sell">
                        <img src='{{asset("img/Farmer Icon.svg")}}' alt="farmer">
                        <p>I want to sell</p>
                        <img src='{{asset("img/Chevron.svg")}}' alt="chevron" class="chevron" width="1px" style="cursor: pointer;">
                        </div>
                        <div class="add-product-modal">
                            <div class="product-quantity">
                                <p>Produt list</p>
                                <p>Qty</p>
                            </div>
                            <div class="cattle">
                                <p>Cattle</p>
                                <input type="number">
                            </div>
                            <div class="crops">
                                <p>Crops</p>
                                <input type="number">
                            </div>
                            <div class="livestock">
                                <p>Livestock</p>
                                <input type="number">
                            </div>
                            <div class="poultry">
                                <p>Poultry</p>
                                <input type="number">
                            </div>
                        </div>
                           <div class="total-item">
                               <p>Total items: 0</p>
                           </div>
                           <div class="sell-button">
                               <button>Sell</button>
                           </div>
                    </div>
                </div>
            
                <div class="sponsor-data dashboard marketplace">
                    
                    @foreach($products as $product)
                    <div class="grid dashboard">
                        <p class="label">{{$product->label->name}}</p>
                        <img src="{{url($product->image)}}" alt="image" class="marketplace-image">
                        <h1>{{$product->name}}</h1>
                        <div class="sponsor-inner-flex">
                            <img src={{url("img/location.svg")}} alt="">
                            <p>{{$product->location}}</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p>{{round(($product->unit_sold/$product->unit)*100)}}% sold</p>
                        </div>
                        <h3 class="h3-dashboard">₦ {{$product->price}}</h3>

                        @if($product->label->name=="New")
                        <div class="purchase-div dashboard" style="justify-content: right;">
                            <button class="purchaseBtn add-card" id="{{$product->id}}">Add to cart</button>
                        </div>
                        @endif
                    </div>
                    @endforeach
            

                </div>
            </div>
            </div>
    </div>

@endsection('content')

@section('js')





<script src="/js/sponsor.js"></script>
<script>
    $('.sort').on('change',()=>{
        $('form')[0].submit()
    })
</script>
<script>
    $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
       }
   });

   $('.purchaseBtn').on('click',function(){
       jQuery.ajax({
               url: "http://127.0.0.1:8000/addcart/product",
               method: "post",
               data: {
                   id:this.id,
                   unit:1
               },
               success: function (data) {
                   console.log(data)
                   getCartNum();
                   alert('added to cart')

               },
               error: function (e) {
                  console.log(e);
               },
           });
  
   })
</script>
@endsection('js')  
</body>
</html>