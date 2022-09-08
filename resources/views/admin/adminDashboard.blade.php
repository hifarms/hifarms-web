<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <meta name="_token" content="{{ csrf_token() }}" />
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <title>Admin Dashboard</title>    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">


</head>
<body>
        <!--Dashboard Hamburger Starts-->
      <div class="dashboard-hamburger">
        <div class="dash-hamb-img-name">
        <img src="../img/dashboard-hamburger-profile.png" alt="profile" class="profile-header ham">
        <h2>Welcome, <br>
            {{ Auth::user()->username }}
        </h2>
        </div>
        <div class="input-search ham">
            <input type="text" placeholder="search for">
            <img src="../img/Vector (8).png" alt="search-icon">
        </div>
        <div class="side-ar">
        <h3>General</h3>
        <div class="second-se-bar">
            <a href="{{ url('admin/adminDashboard')}}"> <img src="../img/Dashboard.svg" alt="dashboard" class="current"> <p>Dashboard</p></a>
            <a href="{{ url('admin/adminMarketplace')}}"><img src="../img/marketplace.svg" alt="marketplace"> <p>Marketplace</p></a>
            <a href="{{ url('admin/adminMyFarm')}}"><img src="../img/livestock-dashboard.svg" alt="livestock"> <p>Manage my farm</p></a>
            <a href="{{ url('admin/adminInvest')}}"><img src="../img/invest.svg" alt="marketplace"> <p>Invest In a Project</p></a>
            <a href="{{ url('admin/adminInvestReturns')}}"><img src="../img/history.svg" alt="history"> <p>ROI</p></a>
            <a href="{{ url('admin/adminWithraw')}}"><img src="../img/wallet.svg" alt="wallet"> <p>Wallet</p></a>
            <a href="{{ url('admin/adminBlog') }}"><img src="../img/blog-pin.png" alt="blog-pin"> <p>Blog</p></a>
        </div>
    </div>
    <div class="third-se-bar">
            <a href="{{ url('admin/adminSettings')}}"><img src="../img/settings.png" alt="settings"> <p>Settings</p></a>
            <a href="{{ url('logout') }}"><img src="../img/log out.svg" alt="settings"> <p>Logout</p></a>
    </div>
    <div class="guide-dash">
        <img src="../img/Notifications.png" alt="notifications" class="notifications">
        <img src="../img/Guides.png" alt="guides" width="32">
    </div>
      </div>
    <!--Dashboard Hamburger Ends-->
    <div class="added-successfully">
        Added Successfully!!!
    </div>
    <div class="network-error">
        Error!! 
        <br> Something went wrong.
    </div>
    @if(Session('success_message'))
    <div class="added-successfully-blade">
        {{Session('success_message')}}
    </div>
    @endif

  @if(Session('warning_message') || $errors->any())
    <div class="added-successfully deleted-successfully-blade">
        <ul style="">
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
            @if(Session('warning_message'))
            <li>{{Session('warning_message')}}</li>
            @endif
        </ul>
       
    </div>
    @endif
    <header class="dashbrd-header">
        <div class="dashboard-header">
            <img src="../img/hamburger.svg" alt="#" id="hamburger" class="hamburger1">
            <div class="header-img">
                <img src="../img/logo.png" class="logo1x" alt="logo" width="113">
            </div>
            <div class="header-icons">
                <div class="cart-whatsapp cart-whatsapp-dash">
                    <a href='{{url('/cart')}}'><img src="../img/Group 51.png" alt="cart" class="cart"></a>
                       <span class="cart-counter"></span>
                </div>
                <div class="input-search">
                    <input type="text" placeholder="search for">
                    <img src="../img/Vector (8).png" alt="search-icon">
                </div>
                <div class="notifs">
                    <img src="../img/Notifications.png" alt="notifications" class="notifications">
                    <div class="notification-modal">
                        <div class="notif-head">
                            <div class="ntf">
                                <p>Notifications</p>
                                <div class="line"></div>
                            </div>
                            <button>Mark all as read</button>
                        </div>
                        
                    </div>
                </div>
                 <div class="guides">
                    <img src="../img/Guides.png" alt="guides" width="32">
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
                    <img src="{{url(auth()->user()->avatar)}}" alt="profile" class="profile-header" style="width:50px;height:50px;border-radius:50%;">
                    <div class="my-profile-log-out">
                        <button><a href="{{ url('admin/adminProfile') }}">My Profile</a></button>
                        <a href="{{ url('logout') }}"><button>Log Out</button></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="side-bar">
                <div class="first-side-bar">
            <img src="../img/side-bar.svg" alt="side-bar">
        </div>
        <div class="second-side-bar admin">
            <a href="{{ url('admin/adminDashboard')}}"> <img src="../img/Dashboard.svg" alt="dashboard" class="current"></a>
            <a href="{{ url('admin/adminMarketplace')}}"><img src="../img/marketplace.svg" alt="marketplace"></a>
            <a href="{{ url('admin/adminMyFarm')}}"><img src="../img/livestock-dashboard.svg" alt="livestock"></a>
            <a href="{{ url('admin/adminInvest')}}"><img src="../img/invest.svg" alt="marketplace"></a>
            <a href="{{ url('admin/adminInvestReturns')}}"><img src="../img/history.svg" alt="history"></a>
            <a href="{{ url('admin/adminWithraw')}}"><img src="../img/wallet.svg" alt="wallet"></a>
            <a href="{{ url('admin/adminBlog') }}"><img src="../img/blog-pin.png" alt="blog-pin> </a>
        </div>
        <div class="third-side-bar" style="display: flex;flex-direction: column; align-items: center;margin-bottom: 0px;">
         <a href="{{ url('admin/adminSettings')}}"><img src="../img/settings.png" alt="settings"></a>
            <img src="../img/log out.svg" alt="log-out">
        </div>
    </div>
    <div class="dashboard-container admin-dash">
        <h1>Dashboard.</h1>
       <div class="general-information">
           
           <div class="info-1 diff">
               <div class="info-images">
                   <img src="../img/admin-views.svg" alt="views">
                   <img src="../img/admin-stats.png" alt="stats">
               </div>
               <h5>Total Views</h5>
               <h3>128</h3>
               <p>Start from Jan 1, 2021</p>
           </div>
           <div class="info-2">
            <div class="info-images">
                <img src="../img/admin-products.svg" alt="views">
            </div>
            <h5>Total Products</h5>
            <h2>{{ $products }}</h2>
            <p class="add-new-product">+Add new products</p>
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
            <h2>{{ $orders }}</h2>
            <p>Start from Jan 1, 2022</p>
        </div>
       </div>    
        <div class="entry-search admin-search ad-dsh"> 
            <form type="" > 
        <div class="input-search">
            
           <input type="text" placeholder="search for product" value="{{old('search')}}" name="search">
           <button type="submit" class='remove-boring-border'><img src="../img/Vector (8).png" style="cursor: pointer;" alt="search-icon"></button>
           
       </div>
    </form>
       </div>
       <!---Double Side-->

       <div class="admin-outer-container">
        
        <div class="scroll-table-prdct-table">
       <div class="product-table dash">
           
           <div class="product-names">
               <div>No</div>
               <div>Product Name</div>
               <div>Status</div>
               <div>Sold</div>
               <div class="admin-status">Action</div>
           </div>
           <div class="views-sell-container"></div>
           <div class="product-list-container">
		   
                @foreach($product as $prods)
              <div class="product-list">
                  <div>{{ $prods->id }}</div>
                  <div class="product-list-grid">
                      <img src="{{ url($prods->image) }}" alt="onions">
                      <p>{{ $prods->name }}</p>
                  </div>
                  <div class="admin-active">
                    @if($prods->active == true)
                     Activated 
                     @else 
                     
                    Not Activated
                    @endif</div>
                  <div class="admin-sold">{{ $prods->unit_sold }}</div>
                  <div class="admin-view">
                    @if($prods->active == true)
                    <form action="{{route('activate-product',$prods->id)}}">
                    <button type="submit" id="" class="btn">Deactivate Now</button>
                    </form>
                    @else 
                    <form action="{{route('activate-product',$prods->id)}}">
                   <button type="submit" id="" class="btn">Activate Now</button>
                    </form>
                    @endif
                  </div>
              </div>
                @endforeach            
           </div>
       </div>
       </div>
       <img src="../img/views-sells.png" alt="chart" class="admin-view-sell">
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
                <input type="text"placeholder="Enter item name" class="name" name="name">
                <div class="category-percentage-flex">
                    <div class="category" style="width:55%; margin-right: 20px;">
                        <label>Status</label> <br> 
                        <select class="category-select add-item" name="label_id">
                        <option selected disabled>Select Status</option>
                        @foreach($label as $lab)
                        <option value="{{ $lab->id }}">{{ $lab->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="percentage">
                        <label>Percentage Sold(%)</label>  <br>
                        <select name="unit">
                            <option>10</option>
                            <option>40</option>
                            <option>60</option>
                            <option>80</option>
                            <option>100</option>
                        </select>
                    </div>
                </div>
                <div class="price-image-flex">
                    <div class="price">
                        <label>Item Price(₦)</label> <br>
                         <input type="text" placeholder="Enter Price..." name="price">
                    </div>
                    <div class="image">
                        <label class="label-img" style="margin-left: 20px;">Image</label> <br>
                        <input type="file" class="category-select" name="image">
                    </div>
                </div>
                <label class="admin-location">Location</label> <br>
                <select class="admin-location-input" name="location">
                    <option>Select Location</option>
                    <option>Sokoto</option>
                    <option>Kebbi</option>
                    <option>Zamfara</option>
                </select> <br>
                <div class="button-admin-container">
                    <button class="add-item-submit admin-dash-submit" type="submit"><span class="span-class">Submit</span>  <img class="loader" src="../img/loader-hifarm.gif" alt="#"> </button>
                </div>
            </form>
        </div>
</div>
        <!--Add Item Modal ends-->
        <div class="overlay"></div>
    <script src="../js/dashboardHamburger.js"></script>
    <script src="../js/adminDashboard.js"></script>
    <script>
              function getNotification() {
            jQuery.ajax({
                    url: "https://hifarms.ng/user/messages",
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
</body>
</html>