@extends('layout.masterAdmin')
@section('title')
Admin dashboard
@endsection
@section('content')
<div class="dashboard-container">
    <h1>Dashboard.</h1>
    <div class="general-information">
        <div class="info-1 diff">
            <div class="info-images">
                <img src="../img/admin-views.svg" alt="views">
                <img src="../img/admin-stats.png" alt="stats">
            </div>
            <h5>Total Views</h5>
            <h3>0</h3>
            <p>Start from Jan 1, 2021</p>
        </div>
        <div class="info-2">
            <div class="info-images">
                <img src="../img/admin-products.svg" alt="views">
            </div>
            <h5>Total Products</h5>
            <h2>{{ $products }}</h2>
            <p>+Add new products</p>
        </div>
        <div class="info-3">
            <div class="info-images">
                <img src="../img/admin-vector.png" alt="views">
            </div>
            <h5>Total Users</h5>
            <h2>{{ $users }}</h2>
            <p>New user noted every week</p>
        </div>
        <div class="info-4">
            <div class="info-images">
                <img src="../img/admin-cart.png" alt="stats">
            </div>
            <h5>Total Sales</h5>
            <h2>0</h2>
            <p>Start from Jan 1, 2022</p>
        </div>
    </div>

    <!---Double Side-->
    <div class="admin-outer-container">
        <div class="product-table">
            <div class="product-names">
                <div>No</div>
                <div>Product Name</div>
                <div class="admin-status">Status</div>
                <div>Sold</div>
            </div>
            <div class="views-sell-container"></div>
            <div class="product-list-container">
            <?php $number = 1; ?>
                @foreach($product as $prods)
                <div class="product-list">
                    <div>{{ $number }}</div>
                    <div class="product-list-grid">
                        <img src="../img/unsplash_CCxWLAx0qmk.png" alt="onions">
                        <p>{{ $prods->name }}</p>
                    </div>
                    <div class="admin-active">@if($prods->active = 1) Actvive @endif</div>
                    <div class="admin-sold">{{ $prods->unit_sold }}</div>
                </div>
                <?php $number++; ?>
                @endforeach

            </div>
        </div>
        <img src="../img/views-sells.png" alt="chart" class="admin-view-sell">
    </div>
</div>
@endsection