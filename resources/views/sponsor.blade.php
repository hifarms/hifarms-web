@extends('layout.app')

@section('content')                                                
  <div class="showcase-img sponsor">
    <div class="showcase-content">
     <h1>Sponsors</h1>
    </div>
</div>
<div class="dashboard-container sponsor">
        <h1>Hi Farms Marketplace.</h1>
        <div class="sponsor-container">
            
            <div class="sponsors-flex dashboard">
                <p class="filter-heading dashboard">FILTER BY PRICE</p>
                <p class="showing-result">Showing 1-42</p>
                <select class="sponsor-option dashboard">
                    <option value="all">Sort By</option>
                    <option value="new">Newest</option>
                    <option value="old">Oldest</option>
                </select>
            </div>
            <div class="sponsor-grid dashboard">
                <div class="sponsor-option">
<div class="spd">                    
                    <div class="sponsor-checkbox dashboard">
                    <div class="filter">
                            <form>
                                <input type="range" min="0" max="80000" step="0.1" value="{{old('range')==null? 0 :old('range')}}" name='range' class="rate">
                                <input type="submit" class="button-filter" value='FILTER'>
                                <p class="filter-price">Price: ₦ 0 - ₦ 100</p>
                                 <h3 class="sponsor-categories">CATEGORIES</h3>
                            </div>
                        <div class="line" style="height: 1px;width: 300px;background: #c4c4c4;margin-bottom: 10px;"></div>
                        <div class="flex dashboard">
                            <input type="checkbox" class="check" name='crop' {{ (old('crop'))=='on' ?"checked":null}}>
                            <p class="sponsor-crop dashboard">Crop</p>
                            <P>0</P>
                        </div>
                        <div class="flex dashboard">
                            <input type="checkbox" name="cattle" {{ (old('cattle'))=='on' ?"checked":null}}>
                            <p class="sponsor-crop dashboard">Cattles</p>
                            <P>0</P>
                        </div>
                        <div class="flex dashboard">
                            <input type="checkbox" class="poultry" {{ (old('poultry'))=='on' ?"checked":null}}>
                            <p class="sponsor-crop dashboard">Poultry</p>
                            <P>0</P>
                        </div>
                        <div class="flex dashboard">
                            <input type="checkbox" name="livestock" {{ (old('livestock'))=='on' ?"checked":null}}>
                            <p class="sponsor-crop dashboard">Livestock</p>
                            <P>0</P>
                        </div>
                    </form>
                    </div>
</div>
                    <div class="farmer-section" style="cursor:pointer">
                       <div class="i-want-to-sell">
                        <img src="img/Farmer Icon.svg" alt="farmer">
                        <p>I want to sell</p>
                        <img src="img/Chevron.svg" alt="chevron" class="chevron" style="cursor: pointer;">
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
            
                <div class="sponsor-data dashboard">
                    
                    @foreach($products as $product)
                    <div class="grid dashboard" style="height:575px">
                        <p class="label">{{$product->label->name}}</p>
                        <img src="img/" alt="image" class="marketplace-image">
                        <h1>{{$product->name}}</h1>
                        <div class="sponsor-inner-flex">
                            <img src="img/location.svg" alt="">
                            <p>{{$product->location}}</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p>74% sold</p>
                        </div>
                        <h3 class="h3-dashboard">₦ {{$product->price}}</h3>

                        <div class="purchase-div dashboard" style="justify-content: right;">
                            <button class="purchaseBtn add-card" id="{{$product->id}}">Add to cart</button>
                        </div>
                    </div>
                    @endforeach
            
                    <div class="grid dashboard" style="height:575px">
                        <p class="label">New</p>
                        <img src="img/unsplash_leOh1CzRZVQ.png" alt="image" class="marketplace-image">
                        <h1>Fish Farm</h1>
                        <div class="sponsor-inner-flex">
                            <img src="img/location.svg" alt="">
                            <p>Birnin Kebbi, Central Market</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p>74% sold</p>
                        </div>
                        <h3 class="h3-dashboard">₦ 10,000</h3>
                        <div class="purchase-div dashboard" style="justify-content: right;">
                            <button class="add-card">Add to cart</button>
                        </div>
                    </div>
            
            
                    <div class="grid dashboard" style="height:575px">
                        <p class="label">New</p>
                        <img src="img/unsplash_eOktYr3tAMo.png" alt="image" class="marketplace-image">
                        <h1>Fish Farm</h1>
                        <div class="sponsor-inner-flex">
                            <img src="img/location.svg" alt="">
                            <p>Birnin Kebbi, Central Market</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p>74% sold</p>
                        </div>
                        <h3 class="h3-dashboard">₦ 10,000</h3>
                      
                    </div>
            
                    <div class="grid dashboard" style="height:575px">
                        <p class="label sold-out">Sold Out</p>
                        <img src="./img/unsplash_eOktYr3tAMo.png" alt="image" class="marketplace-image">
                        <h1>Meat Breeding</h1>
                        <div class="sponsor-inner-flex">
                            <img src="img/location.svg" alt="">
                            <p>Birnin Kebbi, Central Market</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p>74% sold</p>
                        </div>
                        <h3 class="h3-dashboard">₦ 10,000</h3>
                        <div class="purchase-div dashboard" style="justify-content: right;">
                           <button  class="add-card">Add to cart</button>
                        </div>
                    </div>
                    <div class="grid dashboard" style="height:575px">
                        <p class="label sold-out">Sold Out</p>
                        <img src="img/unsplash_yFU8qIDo9s4.png" alt="image" class="marketplace-image">
                        <h1>Fish Farm</h1>
                        <div class="sponsor-inner-flex">
                            <img src="img/location.svg" alt="">
                            <p>Birnin Kebbi, Central Market</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p>74% sold</p>
                        </div>
                        <h3 class="h3-dashboard">₦ 10,000</h3>
                        
                    </div>
            
                    <div class="grid dashboard" style="height:575px">
                        <p class="label out-of-stock">Out Of Stock</p>
                        <img src="img/unsplash_yFU8qIDo9s4.png" alt="image" class="marketplace-image">
                        <h1>Fish Farm</h1>
                        <div class="sponsor-inner-flex">
                            <img src="img/location.svg" alt="">
                            <p>Birnin Kebbi, Central Market</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p>74% sold</p>
                        </div>
                        <h3 class="h3-dashboard">₦ 10,000</h3>
                       
                    </div>
                </div>
            </div>
            </div>
    </div>




































<!--
<div class="about-description">
    Home <img src={{url("img/Arrow%201.svg")}} width="12" style="margin-left: 4px;margin-right: 4px;"> Services  <img src={{url("img/Arrow%201.svg")}} width="12" style="margin-left: 4px;margin-right: 4px;">  Sponsors
</div>
<div class="sponsor-container">
<div class="sponsors-flex">
    <p class="filter-heading">FILTER BY PRICE</p>
    <p class="showing-result">Showing 1-42</p>
    <form>
    <select name="sort" class="sponsor-option sort">
        <option value="all">Sort By</option>
        <option value="new">Newest</option>
        <option value="old">Oldest</option>
    </select>
</div>
<div class="sponsor-grid">
    <div class="sponsor-option">
        <div class="sponsor-checkbox">
            <div class="filter">
            <form>
                <input type="range" min="0" max="80000" step="0.1" value="{{old('range')==null? 0 :old('range')}}" name='range' class="rate">
                <input type="submit" class="button-filter" value='FILTER'>
                <p class="filter-price">Price: ₦ 0 - ₦ 100</p>
                 <h3 class="sponsor-categories">CATEGORIES</h3>
                 <div class="filter-line"></div>
            </div>
            <div class="flex">
                <input type="checkbox" name="crop" class="check" {{ (old('crop'))=='on' ?"checked":null}}>
                <p class="sponsor-crop">Crop</p>
                <P>0</P>
            </div>
            <div class="flex">
                <input type="checkbox" name="cattle" {{ (old('cattle'))=='on' ?"checked":null}}>
                <p class="sponsor-crop">Cattles</p>
                <P>0</P>
            </div>
            <div class="flex">
                <input type="checkbox" name="poultry" {{ (old('poultry'))=='on' ?"checked":null}}>
                <p class="sponsor-crop">Poultry</p>
                <P>0</P>
            </div>
            <div class="flex">
                <input type="checkbox" name="livestock" {{ (old('livestock'))=='on' ?"checked":null}}>
                <p class="sponsor-crop">Livestock</p>
                <P>0</P>
            </div>
            <form>
        </div>
    </div>
    <div class="sponsor-data">
        @foreach($products as $product)
        <div class="grid">
            <p class="label {{$product->label->color}}">{{$product->label->name}}</p>
            <img src={{url($product->image)}} alt="">
            <h1>{{$product->name}}</h1>
            <div class="sponsor-inner-flex">
                <img src={{url("img/location.svg")}} alt="">
                <p>{{$product->location}}</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src={{url("img/graph.svg")}} alt="">
                <p>{{$product->returns[0]->percentage}}%</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src={{url("img/calendar.svg")}} alt="">
                <p>{{$product->returns[0]->duration}}</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src={{url("img/sponsor-cart.svg")}} alt="">
                <p>74% sold</p>
            </div>
            <h3>${{$product->unit_price}}</h3>
            <a href="{{url('services/sponsor/'.$product->id)}}" class="search-div">
                <img src={{url("img/search.png")}} alt="search-icon">
            </a>
        </div>
        @endforeach

       
    </div>
</div>
</div>-->
<!--Sponsors page end--  -->
@endsection('content')

@section('js') -->





<script src="/js/sponsor.js"></script>
<script>
    $('.sort').on('change',()=>{
        $('form')[0].submit()
    })
</script>
@endsection('js')  
</body>
</html>