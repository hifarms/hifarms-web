<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Marketplace</title>
</head>
<body>
    <header>
        <div class="dashboard-header">
            <div class="header-img">
                <img src="img/logo.png" alt="logo" width="113">
            </div>
            <div class="header-icons">
                <div class="input-search">
                    <input type="text" placeholder="search for">
                    <img src="img/Vector (8).png" alt="search-icon">
                </div>
                <div class="notifs">
                    <img src="img/Notifications.png" alt="notifications" class="notifications">
                    <div class="notification-modal">
                        <div class="notif-head">
                            <div class="ntf">
                                <p>Notifications</p>
                                <div class="line"></div>
                            </div>
                            <button>Mark all as read</button>
                        </div>
                        <div class="notif-1">
                            <p>New products arrival at Hi Marketplace.</p>
                             <p>12mins ago</p>
                        </div>
                        <div class="notif-2">
                            <p>Let's get started Hafiz.</p>
                             <p>3hrs ago</p>
                        </div>
                        <div class="notif-3">
                            <p>Welcome to Hi Farm.</p>
                             <p>3hrs ago</p>
                        </div>
                    </div>
                </div>
                 <div class="guides">
                    <img src="img/Guides.png" alt="guides" width="32">
                      <div class="guide-download">
                        <h2>Help & Guide</h2>
                        <div class="line"></div>
                        <p>Help & Guide
                            Click Here to download 
                            Hi Farms instruction 
                            Manual.</p>
                      </div>
                 </div>
                <div class="profile-inclusive">
                    <img src="img/Profile.png" alt="profile" class="profile-header">
                    <div class="my-profile-log-out">
                        <button><a href="profile">My Profile</a></button>
                        <button><a href="logout">Log Out</a></button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="side-bar">
        <div class="first-side-bar">
            <img src="img/side-bar.svg" alt="side-bar">
        </div>
        <div class="second-side-bar">
            <a href="dashboard"><img src="img/Dashboard (1).svg" alt="dashboard"></a>
            <a href="marketplace"><img src="img/marketplaces-current.svg" alt="marketplace" class="current"></a>
             <a href="user-farms"><img src="img/livestock-dashboard.svg" alt="livestock"></a>
             <a href="farm-invest"><img src="img/invest.svg" alt="marketplace"></a>
             <a href="investment"> <img src="img/history.svg" alt="history"> </a>
             <a href="wallet"><img src="img/wallet.svg" alt="wallet"> </a>
        </div>
        <div class="third-side-bar">
            <img src="img/log out.svg" alt="log-out">
        </div>
    </div>
    <div class="dashboard-container">
        <h1>Hi Farms Marketplace.</h1>
        <div class="sponsor-container">
            
            <div class="sponsors-flex dashboard">
                <p class="filter-heading dashboard">CATEGORIES</p>
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


                    <div class="farmer-section" style="cursor:pointer">
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
                    
                    @foreach($products as $product)
                    <div class="grid dashboard">
                        <p class="label">{{$product->label->name}}</p>
                        <img src="img/unsplash_aIghKsc3H34.png" alt="image" class="marketplace-image">
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
                            <button>Purchase</button>
                        </div>
                    </div>
                    @endforeach
            
                    <div class="grid dashboard">
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
                            <button>Purchase</button>
                        </div>
                    </div>
            
            
                    <div class="grid dashboard">
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
                        <div class="purchase-div dashboard" style="justify-content: right;">
                            <button>Purchase</button>
                        </div>
                    </div>
            
                    <div class="grid dashboard">
                        <p class="label sold-out">Sold Out</p>
                        <img src="img/unsplash_eOktYr3tAMo.png" alt="image" class="marketplace-image">
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
                           <button>Purchase</button>
                        </div>
                    </div>
            
            
                    <div class="grid dashboard">
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
                        <div class="purchase-div dashboard" style="justify-content: right;">
                            <button>Purchase</button>
                        </div>
                    </div>
            
                    <div class="grid dashboard">
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
                        <div class="purchase-div dashboard" style="justify-content: right;">
                            <button>Purchase</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
    <div class="overlay"></div>

    <div class="admin-add-item">
        <div class="admin-add-item-container">
            <div class="close-add-item">x</div>
            <h1 style="margin-top: 4px;margin-bottom: 15px;font-size:30px">Sell Product</h1>
            <div class="product-name-category" style="margin-bottom: 10px">
                <div class="product-name-dash">
                    <div class="tooltip-flex">
                    <label>Product Name</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                    </div> <br>
                    <input type="text" placeholder="Enter product name">
                </div>
                <div class="product-category-dash">
                <div class="tooltip-flex">
                    <label>Product Category</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                    </div> <br>
                     <select>
                         <option>Catfish</option>
                     </select>
                </div>
            </div>
            <div class="qty-item-image" style="margin-bottom: 10px">
                <div class="qty">
                <div class="tooltip-flex">
                    <label>Qty</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                    </div> <br>
                <input type="number" min='0' placeholder="Quantity">
                </div>
                 <div class="item-price">
                 <div class="tooltip-flex" style="margin-left:-70px">
                    <label>Item Price</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                    </div> <br>
                <input type="text" placeholder="Enter item price"> 
                 </div>
                 <div class="img-dash">
                 <div class="tooltip-flex">
                    <label>Image</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                    </div> <br>
                <input type="file">
                 </div>
                
            </div>
            <div class="acc-name-number" style="margin-bottom: 10px">
                <div class="bank-name">
                <div class="tooltip-flex">
                    <label>Bank Name</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                    </div> <br>
                <select>
                    <option>Access Bank</option>
                </select>
                </div>
                <div class="acc-name">
                <div class="tooltip-flex">
                <label style="padding-left: 20px;" for="">Acc. Name</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                    </div> <br>
                
                <input type="text" placeholder="Enter your account name">
                </div>
                <div class="acc-number">
                <div class="tooltip-flex">
                    <label>Acc. Name</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                    </div> <br>
                <input type="text" placeholder="Enter your account number">
                </div>
            </div>
            <div class="location-dash">
            <div class="tooltip-flex">
                    <label>Location</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                    </div> <br>
                <select name="" id="">
                    <option value="">Arkilla, Federal Lowcost</option>
                </select>
            </div>
            <div class="warning-button">
                <div class="warning">
                    <img src="img/Warning.png" alt="warning">
                    <p>All application to sell a product will be reviewed and processed within
24hrs. And further details will be notified to you. A re-negotiation 
clause also applies.</p>
                </div>
                <button>Proceed to Sell</button>
            </div>
    </div>
 </div>
</div>
    <script src="js/userMarketplace.js"></script>
    <script src="js/marketplace.js"></script>
</body>
</html>