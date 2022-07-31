@extends('layout.masterAdmin')
@section('title')
Admin Invest
@endsection
@section('content')

<div class="dashboard-container">
    <h1>Invest In A Project.</h1>
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
                        <input type="checkbox" class="check" name='crop'>
                        <p class="sponsor-crop dashboard">Crop</p>
                        <P>0</P>
                    </div>
                    <div class="flex dashboard">
                        <input type="checkbox" name="cattle">
                        <p class="sponsor-crop dashboard">Cattles</p>
                        <P>0</P>
                    </div>
                    <div class="flex dashboard">
                        <input type="checkbox" class="poultry">
                        <p class="sponsor-crop dashboard">Poultry</p>
                        <P>0</P>
                    </div>
                    <div class="flex dashboard">
                        <input type="checkbox" name="livestock">
                        <p class="sponsor-crop dashboard">Livestock</p>
                        <P>0</P>
                    </div>
                </div>
            </div>

            <div class="sponsor-data dashboard">
                @foreach($farmproduct as $prod)
                <div class="grid dashboard">
                    <div class="label-edit">
                        <img src="../img/edit-fade.png" alt="edit-icon" class="edit-icon" width="28">
                        <p class="label">New</p>
                    </div>
                    <img src="{{ url($prod->image) }}" alt="image" class="marketplace-image">
                    <h1>{{ $prod->name }}</h1>
                    <div class="sponsor-inner-flex">
                        <img src="../img/location.svg" alt="">
                        <p class="location">{{ $prod->location }}</p>
                    </div>
                    <div class="sponsor-inner-flex">
                        <img src="../img/sponsor-cart.svg" alt="">
                        <p class="percentage-sold">{{ $prod->c_units }}% sold</p>
                    </div>
                    <h3 class="h3-dashboard">₦{{ number_format($prod->unit_price, 0,'.',',') }}</h3>
                    <div class="purchase-div dashboard">
                        <img src="../img/delete-edit.png" class="delete-admin" alt="delete" width="20" style="cursor: pointer;">
                        <button>Invest</button>
                    </div>
                </div>
                @endforeach


                <div class="grid dashboard add-new-product">
                    <img src="../img/admin-add.svg" alt="admin-add" class="admin-add-pic invest">
                </div>


            </div>
        </div>
    </div>

    <!--Add Item Modal Begins-->
    <div class="admin-add-item">
        <div class="admin-add-item-container">
            <div class="close-add-item">x</div>
            <h1>Add Item</h1>
            <form method="POST" action="{{ url('admin/add-sell-product') }}" enctype="multipart/form-data">
                @csrf
                <label class="class-name">Name</label> <br>
                <input type="text" placeholder="Enter item name" class="name" name="name">
                <div class="category-percentage-flex">
                    <div class="category" style="width:55%; margin-right: 20px;">
                        <label>Category</label> <br>
                        <select class="category-select add-item" name="category_id">
                            <option selected disabled>Select Category</option>
                            @foreach($category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="percentage">
                        <label>Percentage Sold(%)</label> <br>
                        <select name="unit">
                            <option selected disabled>Choose Percentage</option>
                            <option value="10">10%</option>
                            <option value="40">40%</option>
                            <option value="60">60%</option>
                            <option value="80">80%</option>
                            <option value="100">100%</option>
                        </select>
                    </div>
                </div>
                <div class="price-image-flex">
                    <div class="price">
                        <label>Item Price(₦)</label> <br>
                        <input type="text" placeholder="Enter Price..." name="price">
                    </div>
                    <div class="image">
                        <label style="margin-left: 20px;">Image</label> <br>
                        <input type="file" class="category-select" name="image">
                    </div>
                </div>
                <label class="admin-location">Location</label> <br>
                <select class="admin-location-input" name="location">
                    <option selected disabled>Select Location</option>
                    <option value="Sokoto">Sokoto</option>
                    <option value="Kebbi">Kebbi</option>
                    <option value="Zamfara">Zamfara</option>
                </select> <br>
                <div class="button-admin-container">
                    <button type="submit" class="add-item-submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!--Add Item Modal ends-->

    <div class="edit-add-item"></div>

    <!--Delete Item starts-->
    <div class="delete-modal invest">
        <div class="delete-modal-container">
            <div class="close-delete-modal">x</div>
            <h1>Are you sure?🙁</h1>
            <div class="yes-no-delete-modal">
                <button class="yes-delete-modal">Yes</button>
                <button class="no no-delete-modal">No</button>
            </div>
        </div>
    </div>
    <div class="overlay"></div>

    <!--Delete item ends-->
    <script src="js/adminInvest.js"></script>
    @endsection>