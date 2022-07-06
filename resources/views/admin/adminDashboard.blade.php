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
                <img src="img/admin-views.svg" alt="views">
                <img src="img/admin-stats.png" alt="stats">
            </div>
            <h5>Total Views</h5>
            <h3>1,234</h3>
            <p>Start from Jan 1, 2021</p>
        </div>
        <div class="info-2">
            <div class="info-images">
                <img src="img/admin-products.svg" alt="views">
            </div>
            <h5>Total Products</h5>
            <h2>1,234</h2>
            <p>+Add new products</p>
        </div>
        <div class="info-3">
            <div class="info-images">
                <img src="img/admin-vector.png" alt="views">
            </div>
            <h5>Total Users</h5>
            <h2>376</h2>
            <p>New user noted every week</p>
        </div>
        <div class="info-4">
            <div class="info-images">
                <img src="img/admin-cart.png" alt="stats">
            </div>
            <h5>Total Sales</h5>
            <h2>456</h2>
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
                <div>View</div>
            </div>
            <div class="views-sell-container"></div>
            <div class="product-list-container">
                <div class="product-list">
                    <div>1</div>
                    <div class="product-list-grid">
                        <img src="img/unsplash_CCxWLAx0qmk.png" alt="onions">
                        <p>Onions</p>
                    </div>
                    <div class="admin-active">active</div>
                    <div class="admin-sold">10</div>
                    <div class="admin-view">38</div>
                </div>

                <div class="product-list">
                    <div>2</div>
                    <div class="product-list-grid">
                        <img src="img/unsplash_CCxWLAx0qmk.png" alt="onions">
                        <p>Potatoes</p>
                    </div>
                    <div class="admin-active">active</div>
                    <div class="admin-sold">10</div>
                    <div class="admin-view">38</div>
                </div>

                <div class="product-list">
                    <div>3</div>
                    <div class="product-list-grid">
                        <img src="img/unsplash_CCxWLAx0qmk.png" alt="onions">
                        <p>Pepper</p>
                    </div>
                    <div class="admin-active">active</div>
                    <div class="admin-sold">10</div>
                    <div class="admin-view">38</div>
                </div>

                <div class="product-list">
                    <div>4</div>
                    <div class="product-list-grid">
                        <img src="img/unsplash_CCxWLAx0qmk.png" alt="onions">
                        <p>Tomatoes</p>
                    </div>
                    <div class="admin-inactive">Inactive</div>
                    <div class="admin-sold">10</div>
                    <div class="admin-view">38</div>
                </div>

                <div class="product-list">
                    <div>5</div>
                    <div class="product-list-grid">
                        <img src="img/unsplash_CCxWLAx0qmk.png" alt="onions">
                        <p>Beef</p>
                    </div>
                    <div class="admin-active">active</div>
                    <div class="admin-sold">10</div>
                    <div class="admin-view">38</div>
                </div>

            </div>
        </div>
        <img src="img/views-sells.png" alt="chart" class="admin-view-sell">
    </div>
</div>
@endsection