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
</div>
<!--Sponsors page end-->
@endsection('content')

@section('js')

<script src="/js/sponsor.js"></script>
<script>
    $('.sort').on('change',()=>{
        $('form')[0].submit()
    })
</script>
@endsection('js')  
</body>
</html>