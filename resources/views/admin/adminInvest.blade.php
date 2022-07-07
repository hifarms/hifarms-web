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
                    <div class="grid dashboard">
                        <div class="label-edit">
                            <div class="ed-del">
                                 
                            <img src="img/edit-admin-dashboard.png" alt="edit-icon" style="margin-right: 15px;" class="edit-icon" width="28">
                            <img src="img/admin-delete.png" class="delete-admin" alt="delete" width="20" style="cursor: pointer;">
                            </div>
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
                        <div class="purchase-div dashboard invest">
                            <h3 class="h3-dashboard invest">₦ 10,000</h3>
                            <button>Invest</button>
                        </div>
                    </div>
            
                    <div class="grid dashboard">
                        <div class="label-edit">
                            <div class="ed-del">
                                 
                            <img src="img/edit-admin-dashboard.png" alt="edit-icon" style="margin-right: 15px;" class="edit-icon" width="28">
                            <img src="img/admin-delete.png" class="delete-admin" alt="delete" width="20" style="cursor: pointer;">
                            </div>
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
                        <div class="purchase-div dashboard invest">
                            <h3 class="h3-dashboard invest">₦ 10,000</h3>
                            <button>Invest</button>
                        </div>
                    </div>
                    
                    <div class="grid dashboard">
                        <div class="label-edit">
                            <div class="ed-del">
                                 
                            <img src="img/edit-admin-dashboard.png" alt="edit-icon" style="margin-right: 15px;" class="edit-icon" width="28">
                            <img src="img/admin-delete.png" class="delete-admin" alt="delete" width="20" style="cursor: pointer;">
                            </div>
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
                        <div class="purchase-div dashboard invest">
                            <h3 class="h3-dashboard invest">₦ 10,000</h3>
                            <button>Invest</button>
                        </div>
                    </div>

                    <div class="grid dashboard add-new-product">
                        <img src="img/admin-add.svg" alt="admin-add" class="admin-add-pic invest">
                    </div>    
                    
                    <div class="grid dashboard">
                        <div class="label-edit">
                            <div class="ed-del">
                                 
                            <img src="img/edit-admin-dashboard.png" alt="edit-icon" style="margin-right: 15px;" class="edit-icon" width="28">
                            <img src="img/admin-delete.png" class="delete-admin" alt="delete" width="20" style="cursor: pointer;">
                            </div>
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
                        <div class="purchase-div dashboard invest">
                            <h3 class="h3-dashboard invest">₦ 10,000</h3>
                            <button>Invest</button>
                        </div>
                    </div>

                    <div class="grid dashboard">
                        <div class="label-edit">
                            <div class="ed-del">
                                 
                            <img src="img/edit-admin-dashboard.png" alt="edit-icon" style="margin-right: 15px;" class="edit-icon" width="28">
                            <img src="img/admin-delete.png" class="delete-admin" alt="delete" width="20" style="cursor: pointer;">
                            </div>
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
                        <div class="purchase-div dashboard invest">
                            <h3 class="h3-dashboard invest">₦ 10,000</h3>
                            <button>Invest</button>
                        </div>
                    
                </div>
            </div>
            </div>
    </div>

    <!--Add Item Modal Begins-->
    <div class="admin-add-item">
        <div class="admin-add-item-container">
            <div class="close-add-item">x</div>
            <h1>Add Item</h1>
            <label class="class-name">Name</label> <br>
            <input type="text"placeholder="Enter item name" class="name">
            <div class="category-percentage-flex">
                <div class="category">
                    <label>Category</label> <br> 
                    <select class="category-select">
                        <option>Select Category</option>
                        <option>Livestock</option>
                        <option>Meat Breeding</option>
                        <option>Cattle Farming</option>
                    </select>
                </div>
                <div class="percentage">
                    <label>Percentage Sold(%)</label>  <br>
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
                <option>Select Location</option>
                <option>Sokoto</option>
                <option>Kebbi</option>
                <option>Zamfara</option>
            </select> <br>
            <div class="button-admin-container">
                <button class="add-item-submit">Submit</button>
            </div>
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