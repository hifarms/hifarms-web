@extends('layout.app')

@section('content')
  <!--Sponsors Page starts here-->
  <div class="showcase-img sponsor">
    <div class="showcase-content">
     <h1>Sponsors</h1>
    </div>
</div>
<div class="about-description">
    Home <img src={{url("img/Arrow%201.svg")}} width="12" style="margin-left: 4px;margin-right: 4px;"> Services  <img src={{url("img/Arrow%201.svg")}} width="12" style="margin-left: 4px;margin-right: 4px;">  Sponsors
</div>
<div class="sponsor-container">
<div class="sponsors-flex">
    <p class="filter-heading">FILTER BY PRICE</p>
    <p class="showing-result">Showing 1-42</p>
    <form>
    <select name="sort" class="sponsor-option">
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
                <input type="range" min="0" max="2000000" step="0.1" value="{{old('range')}}" name='range' class="rate">
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
            <div class="search-div">
                <img src={{url("img/search.png")}} alt="search-icon">
            </div>
        </div>
        @endforeach

        <div class="grid">
            <p class="label">New</p>
            <img src="img/unsplash_CCxWLAx0qmk.png" alt="">
            <h1>Onions</h1>
            <div class="sponsor-inner-flex">
                <img src="img/location.svg" alt="">
                <p>Birnin Kebbi, Central Market</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/graph.svg" alt="">
                <p>10%</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/calendar.svg" alt="">
                <p>6 months</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/sponsor-cart.svg" alt="">
                <p>74% sold</p>
            </div>
            <h3>$10,000</h3>
            <div class="search-div">
                <img src="img/search.png" alt="search-icon">
            </div>
        </div>

        <div class="grid">
            <p class="label sold-out">Sold Out</p>
            <img src="img/unsplash_yFU8qIDo9s4.png" alt="">
            <h1>Fish Farm</h1>
            <div class="sponsor-inner-flex">
                <img src="img/location.svg" alt="">
                <p>Birnin Kebbi, Central Market</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/graph.svg" alt="">
                <p>10%</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/calendar.svg" alt="">
                <p>6 months</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/sponsor-cart.svg" alt="">
                <p>74% sold</p>
            </div>
            <h3>$10,000</h3>
            <div class="search-div">
                <img src="img/search.png" alt="search-icon">
            </div>
        </div>


        <div class="grid">
            <p class="label sold-out">Sold Out</p>
            <img src="img/unsplash_484GsKrL5r8.png" alt="">
            <h1>Fish Farm</h1>
            <div class="sponsor-inner-flex">
                <img src="img/location.svg" alt="">
                <p>Birnin Kebbi, Central Market</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/graph.svg" alt="">
                <p>10%</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/calendar.svg" alt="">
                <p>6 months</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/sponsor-cart.svg" alt="">
                <p>74% sold</p>
            </div>
            <h3>$10,000</h3>
            <div class="search-div">
                <img src="img/search.png" alt="search-icon">
            </div>
        </div>


        <div class="grid">
            <p class="label sold-out">Sold Out</p>
            <img src="img/unsplash_CCxWLAx0qmk.png" alt="">
            <h1>Fish Farm</h1>
            <div class="sponsor-inner-flex">
                <img src="img/location.svg" alt="">
                <p>Birnin Kebbi, Central Market</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/graph.svg" alt="">
                <p>10%</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/calendar.svg" alt="">
                <p>6 months</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/sponsor-cart.svg" alt="">
                <p>74% sold</p>
            </div>
            <h3>$10,000</h3>
            <div class="search-div">
                <img src="img/search.png" alt="search-icon">
            </div>
        </div>


        <div class="grid">
            <p class="label sold-out">Sold Out</p>
            <img src="img/unsplash_yFU8qIDo9s4.png" alt="">
            <h1>Fish Farm</h1>
            <div class="sponsor-inner-flex">
                <img src="img/location.svg" alt="">
                <p>Birnin Kebbi, Central Market</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/graph.svg" alt="">
                <p>10%</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/calendar.svg" alt="">
                <p>6 months</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/sponsor-cart.svg" alt="">
                <p>74% sold</p>
            </div>
            <h3>$10,000</h3>
            <div class="search-div">
                <img src="img/search.png" alt="search-icon">
            </div>
        </div>


        <div class="grid">
            <p class="label out-of-stock">Out Of Stock</p>
            <img src="img/unsplash_484GsKrL5r8.png" alt="">
            <h1>Fish Farm</h1>
            <div class="sponsor-inner-flex">
                <img src="img/location.svg" alt="">
                <p>Birnin Kebbi, Central Market</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/graph.svg" alt="">
                <p>10%</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/calendar.svg" alt="">
                <p>6 months</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/sponsor-cart.svg" alt="">
                <p>74% sold</p>
            </div>
            <h3>$10,000</h3>
            <div class="search-div">
                <img src="img/search.png" alt="search-icon">
            </div>
        </div>


        <div class="grid">
            <p class="label out-of-stock">Out Of Stock</p>
            <img src="img/unsplash_CCxWLAx0qmk.png" alt="">
            <h1>Fish Farm</h1>
            <div class="sponsor-inner-flex">
                <img src="img/location.svg" alt="">
                <p>Birnin Kebbi, Central Market</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/graph.svg" alt="">
                <p>10%</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/calendar.svg" alt="">
                <p>6 months</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/sponsor-cart.svg" alt="">
                <p>74% sold</p>
            </div>
            <h3>$10,000</h3>
            <div class="search-div">
                <img src="img/search.png" alt="search-icon">
            </div>
        </div>


        <div class="grid">
            <p class="label out-of-stock">Out Of Stock</p>
            <img src="img/unsplash_aIghKsc3H34.png" alt="">
            <h1>Fish Farm</h1>
            <div class="sponsor-inner-flex">
                <img src="img/location.svg" alt="">
                <p>Birnin Kebbi, Central Market</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/graph.svg" alt="">
                <p>10%</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/calendar.svg" alt="">
                <p>6 months</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/sponsor-cart.svg" alt="">
                <p>74% sold</p>
            </div>
            <h3>$10,000</h3>
            <div class="search-div">
                <img src="img/search.png" alt="search-icon">
            </div>
        </div>


        <div class="grid">
            <p class="label out-of-stock">Out Of Stock</p>
            <img src="img/unsplash_leOh1CzRZVQ.png" alt="">
            <h1>Fish Farm</h1>
            <div class="sponsor-inner-flex">
                <img src="img/location.svg" alt="">
                <p>Birnin Kebbi, Central Market</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/graph.svg" alt="">
                <p>10%</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/calendar.svg" alt="">
                <p>6 months</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/sponsor-cart.svg" alt="">
                <p>74% sold</p>
            </div>
            <h3>$10,000</h3>
            <div class="search-div">
                <img src="img/search.png" alt="search-icon">
            </div>
        </div>


        <div class="grid">
            <p class="label sold-out">Sold Out</p>
            <img src="img/unsplash_eOktYr3tAMo.png" alt="">
            <h1>Fish Farm</h1>
            <div class="sponsor-inner-flex">
                <img src="img/location.svg" alt="">
                <p>Birnin Kebbi, Central Market</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/graph.svg" alt="">
                <p>10%</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/calendar.svg" alt="">
                <p>6 months</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/sponsor-cart.svg" alt="">
                <p>74% sold</p>
            </div>
            <h3>$10,000</h3>
            <div class="search-div">
                <img src="img/search.png" alt="search-icon">
            </div>
        </div>

        <div class="grid">
            <p class="label sold-out">Sold Out</p>
            <img src="img/unsplash_eOktYr3tAMo.png" alt="">
            <h1>Meat Breeding</h1>
            <div class="sponsor-inner-flex">
                <img src="img/location.svg" alt="">
                <p>Birnin Kebbi, Central Market</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/graph.svg" alt="">
                <p>10%</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/calendar.svg" alt="">
                <p>6 months</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/sponsor-cart.svg" alt="">
                <p>74% sold</p>
            </div>
            <h3>$10,000</h3>
            <div class="search-div">
                <img src="img/search.png" alt="search-icon">
            </div>
        </div>


        <div class="grid">
            <p class="label sold-out">Sold Out</p>
            <img src="img/unsplash_yFU8qIDo9s4.png" alt="">
            <h1>Fish Farm</h1>
            <div class="sponsor-inner-flex">
                <img src="img/location.svg" alt="">
                <p>Birnin Kebbi, Central Market</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/graph.svg" alt="">
                <p>10%</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/calendar.svg" alt="">
                <p>6 months</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/sponsor-cart.svg" alt="">
                <p>74% sold</p>
            </div>
            <h3>$10,000</h3>
            <div class="search-div">
                <img src="img/search.png" alt="search-icon">
            </div>
        </div>

        <div class="grid">
            <p class="label sold-out">Sold Out</p>
            <img src="img/unsplash_yFU8qIDo9s4.png" alt="">
            <h1>Fish Farm</h1>
            <div class="sponsor-inner-flex">
                <img src="img/location.svg" alt="">
                <p>Birnin Kebbi, Central Market</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/graph.svg" alt="">
                <p>10%</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/calendar.svg" alt="">
                <p>6 months</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src="img/sponsor-cart.svg" alt="">
                <p>74% sold</p>
            </div>
            <h3>$10,000</h3>
            <div class="search-div">
                <img src="img/search.png" alt="search-icon">
            </div>
        </div>
    </div>
</div>
</div>
<!--Sponsors page end-->
@endsection('content')

@section('js')
<script src="../public/js/sponsor.js"></script>
@endsection('js')  
</body>
</html>