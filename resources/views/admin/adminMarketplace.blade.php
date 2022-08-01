@extends('layout.masterAdmin')
@section('title')
Admin Marketplace
@endsection
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
@section('content')
<div class="dashboard-container">
<<<<<<< HEAD
    <h1>Hi Farms Marketplace.</h1>
    @include('include.success')
    @include('include.warning')
    @include('include.error')
    <div class="sponsor-container">
=======
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
                
                    <div class="farmer-section">
                       <h3>Farmer</h3>
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
                  
            
                    <div class="grid dashboard">
                        <div class="label-edit">
                            <img src="img/edit-admin-dashboard.png" alt="edit-icon" class="edit-icon" width="28">
                            <p class="label">New</p>
                        </div>
                        <img src="img/unsplash_leOh1CzRZVQ.png" alt="image" class="marketplace-image">
                        <h1>Fish Farm</h1>
                        <div class="sponsor-inner-flex">
                            <img src="img/location.svg" alt="">
                            <p class="location">Birnin Kebbi, Central Market</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p class="percentage-sold">74% sold</p>
                        </div>
                        <h3 class="h3-dashboard">₦ 10,000</h3>
                        <div class="purchase-div dashboard">
                            <img src="img/admin-delete.png" class="delete-admin" alt="delete" width="20" style="cursor: pointer;">
                            <button>Purchase</button>
                        </div>
                    </div>
            
            
                    <div class="grid dashboard">
                        <div class="label-edit">
                            <img src="img/edit-admin-dashboard.png" class="edit-icon" alt="edit-icon" width="28">
                            <p class="label">New</p>
                        </div>
                        <img src="img/unsplash_eOktYr3tAMo.png" alt="image" class="marketplace-image">
                        <h1>Fish Farm</h1>
                        <div class="sponsor-inner-flex">
                            <img src="img/location.svg" alt="">
                            <p class="location">Birnin Kebbi, Central Market</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p class="percentage-sold">74% sold</p>
                        </div>
                        <h3 class="h3-dashboard">₦ 10,000</h3>
                        <div class="purchase-div dashboard">
                            <img src="img/admin-delete.png"  class="delete-admin" alt="delete" width="20" style="cursor: pointer;">
                            <button>Purchase</button>
                        </div>
                    </div>
            
                    <div class="grid dashboard">
                        <div class="label-edit">
                            <img src="img/edit-admin-dashboard.png" class="edit-icon" alt="edit-icon" width="28">
                            <p class="label sold-out">Sold out</p>
                        </div>
                        <img src="img/unsplash_eOktYr3tAMo.png" alt="image" class="marketplace-image">
                        <h1>Meat Breeding</h1>
                        <div class="sponsor-inner-flex">
                            <img src="img/location.svg" alt="">
                            <p class="location">Birnin Kebbi, Central Market</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p class="percentage-sold">74% sold</p>
                        </div>
                        <h3 class="add-hover">₦ 10,000</h3>
                        <div class="purchase-div dashboard">
                            <img src="img/admin-delete.png"  class="delete-admin" alt="delete" width="20" style="cursor: pointer;">
                           <button>Purchase</button>
                        </div>
                    </div>
>>>>>>> b90a65175454720ebd6f6d79846c71d2b83fdefa

        <div class="sponsors-flex dashboard">
            <p class="filter-heading dashboard">FILTER BY PRICE</p>
            <p class="showing-result">{{ $products->links() }}</p>
            <select class="sponsor-option dashboard">
                <option value="all">Sort By</option>
                <form method="GET" role="search">
                    <button type="submit"><option value="search" on>Newest</option></button>
                </form>
                <option value="old">Oldest</option>
            </select>
        </div>
        <div class="sponsor-grid dashboard">
            <div class="sponsor-option">
                <div class="sponsor-checkbox dashboard">
                    <div class="filter">
                        <input type="range" min="0" max="80000" step="0.1" value="{{old('range')==null? 0 :old('range')}}" name='range' class="rate">
                        <input type="submit" class="button-filter" value='FILTER'>
                        <p class="filter-price">Price: ₦ 0 - ₦ 100</p>
                        <h3 class="sponsor-categories">CATEGORIES</h3>
                    </div>
                    <div class="line" style="height: 1px;width: 300px;background: #c4c4c4;margin-bottom: 10px;"></div>
                    <div id="flex-dashboard-container">
                        @foreach($category as $cat)
                        <div class="flex dashboard">
                            <input type="checkbox" class="check" name='{{ $cat->name }}'>
                            <p class="sponsor-crop dashboard">{{ $cat->name }}</p>
                            <P>0</P>
                        </div>
                        @endforeach
                    </div>
                    <div class="add-category">
                        <p>Add Status</p>
                        <button class="add-status-btn">Add Status</button>
                    </div>
                    <div class="add-category">
                        <p>Add Category</p>
                        <button class="add-category-btn">Add Category</button>
                    </div>
                    <div class="add-category">
                        <p>Farmer</p>
                        <div class="i-want-to-sell">
                            <img src="../../img/admin-farmer-icon.svg" alt="icon">
                            <p>I want to sell</p>
                            <div class="misc">
                                <img src="../../img/admin-edit-marketplace.svg" alt="icon" class="edit-hover">
                                <img src="../../img/admin-add-market.svg" alt="icon" class="add-hover">
                                <img src="../../img/D.svg" alt="icon" class="delete-hover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sponsor-data dashboard">
                @foreach($products as $prod)
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
                        <p class="percentage-sold">{{ $prod->unit }}% sold</p>
                    </div>
                    <h3 class="h3-dashboard">₦{{ number_format($prod->price, 0,'.',',') }}</h3>
                    <div class="purchase-div dashboard">
                        <a href="{{ route('deleteproduct', $prod->id) }}"><img src="../img/delete-edit.png" class="delete-admin" alt="delete" width="20" style="cursor: pointer;"></a>
                        <button class="added-cart">Add to Cart</button>
                    </div>
                </div>
                @endforeach

                <div class="grid dashboard add-new-product" style="height:575px">
                    <img src="../img/admin-add.svg" style="margin-top:110px;padding-left: 20px;padding-right: 20px;" alt="admin-add" class="admin-add-pic">
                </div>
            </div>
        </div>
    </div>
</div>

<!--Add Item Modal Begins-->
<div class="admin-add-item">
    <div class="admin-add-item-container">
        <div class="close-add-item">x</div>
        <h1 style="margin-top: 4px;margin-bottom: 15px;">Add Item</h1>
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

<!---Edit item modal for i want to sell starts-->
<div class="edit-add-item edit-item-i-want-to-sell">
    <div class="admin-add-item-container">
        <div class="close-edit-item close-edit-want-to-sell">x</div>
        <h1>Edit Item</h1>
        <label class="class-name">Name</label> <br>
        <input type="text" placeholder="Enter item name" class="name">
        <div class="category-percentage-flex">
            <div class="category" style="width:55%; margin-right: 20px;">
                <label>Category</label> <br>
                <select class="category-select add-item">
                    <option>Fish Farming</option>
                    <option>Livestock</option>
                    <option>Meat Breeding</option>
                    <option>Cattle Farming</option>
                </select>
            </div>
            <div class="percentage">
                <label>Percentage Sold(%)</label> <br>
                <select>
                    <option>10%</option>
                    <option>40%</option>
                    <option>60%</option>
                    <option>80%</option>
                    <option>100%</option>
                </select>
            </div>
        </div>
        <div class="price-image-flex">
            <div class="price">
                <label>Item Price(₦)</label> <br>
                <input type="text" placeholder="Enter Price...">
            </div>
            <div class="image">
                <label style="margin-left: 20px;">Image</label> <br>
                <input type="file" class="category-select">
            </div>
        </div>
        <label class="admin-location">Location</label> <br>
        <select class="admin-location-input">
            <option>Sokoto</option>
            <option>Kebbi</option>
            <option>Zamfara</option>
        </select> <br>
        <div class="button-admin-container">
            <button class="add-item-submit">Update</button>
        </div>
    </div>
</div>
<!---Edit item modal for i wanr to sell ends-->

<!--Delete Item starts-->
<div class="delete-modal">
    <div class="delete-modal-container">
        <div class="close-delete-modal">x</div>
        <h1 style="margin-bottom: 50px;margin-top: 60px;text-align: center;">Are you sure?1🙁</h1>
        <div class="yes-no-delete-modal">
            <button class="yes-delete-modal">Yes</button>
            <button class="no no-delete-modal">No</button>
        </div>
    </div>
</div>
<div class="overlay"></div>
<!--Delete item ends-->


<!--Delete Item starts for 'I want to sell'-->
<div class="delete-modal i-want-to-sell-delete">
    <div class="delete-modal-container">
        <div class="close-delete-modal i-want-to-delete">x</div>
        <h1 style="margin-bottom: 50px;margin-top: 60px;text-align: center;">Are you sure?🙁</h1>
        <div class="yes-no-delete-modal">
            <button class="yes-delete-modal">Yes</button>
            <button class="no no-delete-modal">No</button>
        </div>
    </div>
</div>
<div class="overlay"></div>
<!--Delete item ends-->

<!--Add categories starts-->
<div class="delete-modal add-category-modal">
    <div class="delete-modal-container add-category-mdl">
        <div class="close-delete-modal close-category">x</div>
        <h1 style="padding: 5px;font-size: 23px;text-align: center;margin-bottom:10px;margin-top: 25px;">ADD CATEGORY</h1>
        <form method="post" action="{{ url('/admin/post-category') }}">
            @csrf
            <label style="color:#cccccc;font-size: 20px;">Name:</label> <br>
            <input type="text" placeholder="Enter here..." name="name" class="category-value" style="border: 1px solid #cccccc;margin-top: 10px;padding: 15px;width: 100%;">
            <div class="button-admin-container" style="margin-top: 30px;">
                <button type="submit" class="add-item-submit">Add</button>
            </div>
        </form>
    </div>
</div>
<div class="overlay"></div>
<!--Add categories ends-->

<!--Sell product modal starts-->
<div class="overlay"></div>
<form method="post" action="/add-sell-product" enctype="multipart/form-data">
    <div class="admin-add-item want-to-sell-admin"">
           <div class=" admin-add-item-container">
        <div class="close-add-item sell-item-class">x</div>
        <h1 style="margin-top: 4px;margin-bottom: 15px;font-size:30px">Sell New Product</h1>
        <div class="product-name-category" style="margin-bottom: 10px">
            <div class="product-name-dash">
                <div class="tooltip-flex">
                    <label>Product Name</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                </div> <br>
                <input type="text" name="name" placeholder="Enter product name">
            </div>
            <div class="product-category-dash">
                <div class="tooltip-flex">
                    <label>Product Category</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                </div> <br>
                <select name="product_type">
                    <option>Fish Farm</option>
                    <option>Livestock</option>
                    <option>Cattles</option>
                    <option>Crop</option>
                </select>
            </div>
        </div>
        <div class="qty-item-image" style="margin-bottom: 10px">
            <div class="qty">
                <div class="tooltip-flex">
                    <label>Qty</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                </div> <br>
                <input type="number" min='0' placeholder="Quantity" name="unit">
            </div>
            <div class="item-price">
                <div class="tooltip-flex" style="margin-left:-70px">
                    <label>Item Price</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                </div> <br>
                <input type="text" placeholder="Enter item price" name="price">
            </div>
            <div class="img-dash">
                <div class="tooltip-flex">
                    <label>Image</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                </div> <br>
                <input type="file" name="image">
            </div>

        </div>
        <div class="acc-name-number" style="margin-bottom: 10px">
            <div class="bank-name">
                <div class="tooltip-flex">
                    <label>Bank Name</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                </div> <br>
                <select name="bank-name">
                    <option name="access">Access Bank</option>
                </select>
            </div>
            <div class="acc-name">
                <div class="tooltip-flex">
                    <label style="padding-left: 20px;" for="">Acc. Name</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                </div> <br>

                <input type="text" name="accName" placeholder="Enter your account name">
            </div>
            <div class="acc-number">
                <div class="tooltip-flex">
                    <label>Acc. Name</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                </div> <br>
                <input type="text" name="accNumber" placeholder="Enter your account number">
            </div>
        </div>
        <div class="location-dash">
            <div class="tooltip-flex">
                <label>Location</label>
                <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
            </div> <br>
            <select name="location" id="">
                <option value="Arkilla">Arkilla, Federal Lowcost</option>
            </select>
        </div>
        <div class="warning-button">
            <div class="warning">
                <img src="../img/Warning.png" alt="warning">
                <p>All application to sell a product will be reviewed and processed within
                    24hrs. And further details will be notified to you. A re-negotiation
                    clause also applies.</p>
            </div>
            <button>Add</button>
        </div>
    </div>
</form>
</div>
</div>
<!--Sell product modal ends-->

<!--Add status starts-->
<div class="delete-modal add-status-modal">
    <div class="delete-modal-container">
        <div class="close-delete-modal close-status">x</div>
        <h1 style="padding: 5px;font-size: 23px;text-align: center;margin-bottom:10px;margin-top: 25px;">ADD STATUS</h1>
        <label style="color:#cccccc;font-size: 20px;">Name:</label> <br>
        <input type="text" placeholder="Enter here..." class="category-value" style="border: 1px solid #cccccc;margin-top: 10px;padding: 15px;width: 100%;">

        <div class="button-admin-container" style="margin-top: 30px;">
            <button class="add-item-submit admin-dash-submit"><span class="span-class">Add</span> <img class="loader" src="../img/loader-hifarm.gif" alt="#"> </button>
        </div>
    </div>
</div>
<div class="overlay"></div>
<!--Add status ends-->

<!--Delete item ends-->
<script src="../js/adminMarketplace.js"></script>
<script src="../js/marketplace.js"></script>

@endsection