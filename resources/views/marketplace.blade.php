<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta name="_token" content="{{ csrf_token() }}" />
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <title>Marketplace</title>
</head>
<body>
       <!--Dashboard Hamburger Starts-->
       <div class="dashboard-hamburger">
        <div class="dash-hamb-img-name">
        <img src="img/dashboard-hamburger-profile.png" alt="profile" class="profile-header ham">
        <h2>Welcome, <br>
            {{auth()->user()->username}}
        </h2>
        </div>
        <div class="input-search ham">
            <input type="text" placeholder="search for">
            <img src="img/Vector (8).png" alt="search-icon">
        </div>
        <div class="side-ar">
        <h3>General</h3>
        <div class="second-se-bar">
            <a href="dashboard"> <img src="img/Dashboard (1).svg" alt="dashboard" > <p>Dashboard</p></a>
            <a href="marketplace"><img  src="img/marketplaces-current.svg" alt="marketplace" class="current"> <p>Marketplace</p></a>
            <a href="user-farms"><img src="img/livestock-dashboard.svg" alt="livestock"> <p>Manage my farm</p></a>
            <a href="farm-invest"><img src="img/invest.svg" alt="marketplace"> <p>Invest In a Project</p></a>
            <a href="investment"><img src="img/history.svg" alt="history"> <p>ROI</p></a>
            <a href="wallet"><img src="img/wallet.svg" alt="wallet"> <p>Wallet</p></a>
        </div>
    </div>
    <div class="third-se-bar">
            <a href="user-settings"><img src="img/settings.png" alt="settings"> <p>Settings</p></a>
            <a href="logout"><img src="img/log out.svg" alt="settings"> <p>Logout</p></a>
    </div>
    <div class="guide-dash">
        <img src="img/Notifications.png" alt="notifications" class="notifications">
        <img src="img/Guides.png" alt="guides" width="32">
    </div>
      </div>
    <!--Dashboard Hamburger Ends-->
<div class="added-successfully">
        Added to Cart!!
    </div>
    <div class="added-successfully sell-successfully">
        Added Successfully!!
    </div>
    @if(Session('success_message'))
    <div class="added-successfully-blade">
        {{Session('success_message')}}
    </div>
    @endif

    @if(Session('warning_message'))
    <div class="deleted-successfully-blade">
        {{Session('warning_message')}}
    </div>
    @endif
    <header class="dashbrd-header">
        <div class="dashboard-header">
        <img src="img/hamburger.svg" alt="#" id="hamburger" class="hamburger1">
            <div class="header-img">
                <img src="img/logo.png" alt="logo"  class="logo1x" width="113">
            </div>
            <div class="header-icons">
            <div class="cart-whatsapp cart-whatsapp-dash">
                    <a href='{{url('/cart')}}'><img src="{{asset('img/Group 51.png')}}" alt="cart" class="cart"></a>
                       <span class="cart-counter"></span>
                </div>
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
                            <button class="marked-all">Mark all as read</button>
                        </div>
                        {{-- <div class="notif-1">
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
                        </div> --}}
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
                    <img src="{{auth()->user()->avatar}}" style="width:50px;height:50px;border-radius:50%;" alt="profile" class="profile-header">
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
        <div class="third-side-bar" style="display: flex;flex-direction: column; align-items: center;margin-bottom: 10px;">
            <a href="user-settings"><img src="img/settings.png" style="margin-bottom: 30px;" alt="settings"></a>
            <img src="img/log out.svg" alt="log-out">
        </div>
    </div>

    <div class="dashboard-container sponsor mrkt-plc">
        <h1 class="h1">Hi Farms Marketplace.</h1>
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
                        <select class="sponsor-option dashboard " name="">
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
                        <img src="img/Farmer Icon.svg" alt="farmer">
                        <p>I want to sell.</p>
                        <img src="img/Chevron.svg" alt="chevron" width="1px" class="chevron" style="cursor: pointer;">
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
                        <p class="label {{$product->label->color}}">{{$product->label->name}}</p>
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
                        <h3 class="h3-dashboard">₦{{number_format($product->price,0,'.',',')}}</h3>
                        @if($product->label->name=="New")
                        <div class="purchase-div dashboard" style="justify-content: right;">
                            <button class="purchaseBtn add-card" id="{{$product->id}}">Add to cart</button>
                        </div>
                        @endif
                    </div>
                    @endforeach
                    {{-- <div>
                        {{$products->links()}}
                    </div> --}}
                </div>
                
            </div>
            </div>
    </div>


    <div class="overlay"></div>
    <form method="post" action="{{route('sell-product')}}" enctype="multipart/form-data">
    <div class="admin-add-item">
        <div class="admin-add-item-container">
            <div class="close-add-item">x</div>
            <h1 style="margin-top: 4px;margin-bottom: 15px;">Sell Product</h1>
            <div class="product-name-category" style="margin-bottom: 10px">
                <div class="product-name-dash">
                    <div class="tooltip-flex">
                    <label>Product Name</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                    </div> <br>
                    <input type="text" name="name" placeholder="Enter product name" required>
                </div>
                <div class="product-category-dash">
                <div class="tooltip-flex">
                    <label>Product Category</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                    </div> <br>
                     <select name="category_id" required>
                         @foreach($category as $cat)
                         <option value="{{$cat->id}}">{{$cat->name}}</option>
                         @endforeach
                     </select>
                </div>
            </div>
            <div class="qty-item-image" style="margin-bottom: 10px">
                <div class="qty">
                <div class="tooltip-flex">
                    <label>Qty</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                    </div> <br>
                <input type="number" min='0' placeholder="Quantity" name="unit" required>
                </div>
                 <div class="item-price">
                 <div class="tooltip-flex">
                    <label>Item Price</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                    </div> <br>
                <input type="text" placeholder="Enter item price" name="price" required> 
                 </div>
                 <div class="img-dash">
                 <div class="tooltip-flex">
                    <label>Image</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                    </div> <br>
                <input type="file" name="image" required>
                 </div>
                
            </div>

            <div class="location-dash">
            <div class="tooltip-flex">
                    <label>Location</label>
                    <div class="tooltip">? <span class="tooltiptext">Input Product type</span></div>
                    </div> <br>
                    <input type="text" name="location" required>

            </div>
            @csrf
            <div class="warning-button">
                <div class="warning">
                    <img src="img/Warning.png" alt="warning">
                    <p>All application to sell a product will be reviewed and processed within
24hrs. And further details will be notified to you. A re-negotiation 
clause also applies.</p>
                </div>
                <div class="button-admin-container"  style="margin-top: 0px;">
                    <button type="submit" class="add-item-submit admin-dash-submit"><span style="padding-left:48px ;padding-right: 49px;" class="span-class">Sell</span>  <img class="loader loader-span" src="img/loader-hifarm.gif" alt="#"> </button>
                </div>
            </div>
    </div>
</form>
 </div>
</div>
    <script src="js/userMarketplace.js"></script>
    <script src="js/marketplace.js"></script>
    <script>
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $('.purchaseBtn').on('click',function(e){
            e.preventDefault();
            jQuery.ajax({
                    url: "http://127.0.0.1:8000/addcart/product",
                    method: "post",
                    data: {
                        id:this.id,
                        unit:1
                    },
                    success: function (data) {
                        alert(data.success)
                        getCartNum()
                    },
                    error: function (e) {
                        alert(e.responseJSON.error)
                    },
                });
       
        })
        $('.sort').on('change',()=>{
        $('form')[0].submit()
    })
    function getNotification() {
            jQuery.ajax({
                    url: "http://127.0.0.1:8000/user/messages",
                    method: "get",
                    success: function (data) {
                        data.messages.data.forEach(message => {
                            $('.notification-modal').append(`
                                <div class="notif-${message.seen==0?'1':'2'}">
                                <p>${message.message_body}.</p>
                                <p>${message.created_at.split('T')[0]}</p>
                                </div>`
                            )
                        });
                    },
                    error: function (e) {
                       console.log(e)
                    },
                });
            }
    getNotification();

      
    </script>
    <script src="js/dashboardHamburger.js"></script>
</body>
</html>