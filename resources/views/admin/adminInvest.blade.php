<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Admin Invest</title>
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
                <a href="{{ url('admin/adminDashboard')}}"> <img src="../img/Dashboard.svg" alt="dashboard" class="current">
                    <p>Dashboard</p>
                </a>
                <a href="{{ url('admin/adminMarketplace')}}"><img src="../img/marketplace.svg" alt="marketplace">
                    <p>Marketplace</p>
                </a>
                <a href="{{ url('admin/adminMyFarm')}}"><img src="../img/livestock-dashboard.svg" alt="livestock">
                    <p>Manage my farm</p>
                </a>
                <a href="{{ url('admin/adminInvest')}}"><img src="../img/invest.svg" alt="marketplace">
                    <p>Invest In a Project</p>
                </a>
                <a href="{{ url('admin/adminInvestReturns')}}"><img src="../img/history.svg" alt="history">
                    <p>ROI</p>
                </a>
                <a href="{{ url('admin/adminWithraw')}}"><img src="../img/wallet.svg" alt="wallet">
                    <p>Wallet</p>
                </a>
                <a href="{{ url('admin/adminBlog') }}"><img src="../img/blog-pin.png" alt="blog-pin">
                    <p>Blog</p>
                </a>
            </div>
        </div>
        <div class="third-se-bar">
            <a href="{{ url('admin/adminSettings')}}"><img src="../img/settings.png" alt="settings">
                <p>Settings</p>
            </a>
            <a href="{{ url('logout') }}"><img src="../img/log out.svg" alt="settings">
                <p>Logout</p>
            </a>
        </div>
        <div class="guide-dash">
            <img src="../img/Notifications.png" alt="notifications" class="notifications">
            <img src="../img/Guides.png" alt="guides" width="32">
        </div>
    </div>
    <!--Dashboard Hamburger Ends-->
    <div class="added-successfully category-added">
        Added Successfully!!!
    </div>
    <div class="added-successfully purcahsed-successful">
        Purchase Processed!!!
    </div>
    <div class="network-error category-error">
        Error!!
        <br> Something went wrong.
    </div>
    <div class="edited-successfully">
        Edited Successfully!!!
    </div>
    <div class="deleted-successfully">
        Deleted Successfully!!!
    </div>
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
                        <div class="notif-1">
                            <p>New products arrival at Hi Marketplace.</p>
                            <p>12mins ago</p>
                        </div>
                        <div class="notif-2">
                            <p>Let's get started {{ Auth::user()->username }}.</p>
                            <p>3hrs ago</p>
                        </div>
                        <div class="notif-3">
                            <p>Welcome to Hi Farm.</p>
                            <p>3hrs ago</p>
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
                    <img src="../img/Profile.png" alt="profile" class="profile-header">
                    <div class="my-profile-log-out">
                        <button><a href="{{ url('admin/adminProfile') }}">My Profile</a></button>
                        <button><a href="{{ url('logout') }}">Log Out</a></button>
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
            <a href="{{ url('admin/adminDashboard')}}"><img src="../img/Dashboard (1).svg" alt="dashboard"></a>
            <a href="{{ url('admin/adminMarketplace')}}"><img src="../img/marketplace.svg" alt="marketplace"></a>
            <a href="{{ url('admin/adminMyFarm')}}"><img src="../img/livestock-dashboard.svg" alt="livestock"></a>
            <a href="{{ url('admin/adminInvest')}}"><img src="../img/invest-current.svg" alt="marketplace" class="current"></a>
            <a href="{{ url('admin/adminInvestReturns')}}"> <img src="../img/history.svg" alt="history"> </a>
            <a href="{{ url('admin/adminWithraw')}}"><img src="../img/wallet.svg" alt="wallet"> </a>
            <a href="{{ url('admin/adminBlog') }}"><img src="../img/blog-pin.png" alt="blog-pin"> </a>
        </div>
        <div class="third-side-bar" style="display: flex;flex-direction: column; align-items: center;">
                <a href="{{ url('admin/adminSettings')}}"><img src="../img/settings.png" alt="settings"></a>
                <a href="{{ url('logout') }}"><img src="../img/log out.svg" alt="log-out"></a>
        </div>
    </div>
    <div class="dashboard-container admn-invst">
        <h1>Invest In A Project.</h1>
        <div class="sponsor-container">

            <div class="sponsors-flex dashboard">
                <p class="filter-heading dashboard">FILTER BY PRICE</p>
                <p class="showing-result">{{ $farmproduct->links() }}</p>
                <select class="sponsor-option dashboard">
                    <option value="all">Sort By</option>
                    <form method="GET" role="search">
                        <button type="submit">
                            <option value="search" on>Newest</option>
                        </button>
                    </form>
                    <option value="old">Oldest</option>
                </select>
            </div>
            <div class="sponsor-grid dashboard">
                <div class="sponsor-option">
                    <div class="sponsor-checkbox dashboard">
                        <div class="sponsors-flex dashboard show-this">
                            <p class="showing-result">{{ $farmproduct->links() }}</p>
                            <select class="sponsor-option dashboard">
                                <option value="all">Sort By</option>
                                <form method="GET" role="search">
                                    <button type="submit">
                                        <option value="search" on>Newest</option>
                                    </button>
                                </form>
                                <option value="old">Oldest</option>
                            </select>
                        </div>
                        <div class="filter">
                            <form>
                                <div class="mobile-category">
                                    <h2 class="filter-mobile">Filter By Price</h2>
                                    <div class="line" style="height: 1px;width: 100%;background: #c4c4c4;margin-bottom: 10px;"></div>
                                </div>
                                <input type="range" min="0" max="80000" step="0.1" value="{{old('range')==null? 0 :old('range')}}" name='range' class="rate">
                                <input type="submit" class="button-filter" value='FILTER'>
                                <p class="filter-price">Price: ₦ 0 - ₦ 100</p>
                                <h3 class="sponsor-categories mobile-hide">CATEGORIES</h3>
                        </div>
                        <div class="line mobile-hide" style="height: 1px;width: 300px;background: #c4c4c4;margin-bottom: 10px;"></div>
                        <div id="flex-dashboard-container">
                            @foreach($category as $cat)
                            <div class="mobile-category">
                                <h3 class="sponsor-categories">CATEGORIES</h3>
                                <div class="line" style="height: 1px;width: 100%;background: #c4c4c4;margin-bottom: 10px;"></div>
                            </div>
                            <div class="flex dashboard">
                                <input type="checkbox" class="check" name='{{ $cat->name }}'>
                                <p class="sponsor-crop dashboard">{{ $cat->name }}</p>
                                <P class="quant">0</P>
                            </div>
                            @endforeach

                            </form>
                        </div>
                        
                        <div class="mobile-category">
                            <h3 class="sponsor-categories">CATEGORIES</h3>
                            <div class="line" style="height: 1px;width: 100%;background: #c4c4c4;margin-bottom: 10px;"></div>
                        </div>
                        <div class="add-category invst">
                            <p>Add Status</p>
                            <button class="add-status-btn">Add Status</button>
                        </div>
                    </div>
                </div>

                <div class="sponsor-data dashboard admn-invst">
                    @foreach($farmproduct as $prod)
                    <div class="grid dashboard">
                        <div class="label-edit">
                            <div class="ed-del">

                                <img src="../img/edit-fade.png" alt="edit-icon" style="margin-right: 15px;" class="edit-hover edit-icon" width="28">
                                <a href="{{ route('deletefarm', $prod->id) }}"><img src="../img/delete-edit.png" alt="delete" width="20" style="cursor: pointer;"></a>
                            </div>
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
                        <div class="purchase-div dashboard invest">
                            <h3 class="h3-dashboard invest">₦{{ number_format($prod->unit_price, 0,'.',',') }}</h3>
                            <button class="button-invest">Invest</button>
                        </div>
                    </div>
                    @endforeach


                    <div class="grid dashboard add-new-product invst" style="height:522px">
                        <img src="../img/admin-add.svg" style="margin-top:75px;padding-left: 20px;padding-right: 20px;" alt="admin-add" class="admin-add-pic invest">
                    </div>
                </div>
            </div>
        </div>

        <!--Add Item Modal Begins-->
        <div class="admin-add-item">
            <div class="admin-add-item-container">
                <div class="close-add-item">x</div>
                <h1 style="margin-top: 4px;margin-bottom: 15px;">Add Item</h1>
                <form method="POST" action="{{ url('admin/add-farm') }}" enctype="multipart/form-data">
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
                            <select name="c_units">
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
                            <input type="text" placeholder="Enter Price..." name="unit_price">
                        </div>
                        <div class="image">
                            <label style="margin-left: 20px;">Image</label> <br>
                            <input type="file" class="category-select" name="image">
                        </div>
                    </div>
                    <div class="category-percentage-flex">
                        <div class="category" style="width:55%; margin-right: 20px;">
                            <label>Farm Type</label> <br>
                            <select class="admin-location-input" name="farm_type_id">
                                <option selected disabled>Select Farm Type</option>
                                @foreach($farmtype as $farm)
                                <option value="{{ $farm->id }}">{{ $farm->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="percentage">
                            <label class="admin-location">Location</label> <br>
                            <select class="admin-location-input" name="location">
                                <option selected disabled>Select Location</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Zamfara">Zamfara</option>
                            </select>
                        </div>
                    </div>

                    <br>
                    <div class="button-admin-container">
                        <button style="height: 42px;" class="add-item-submit admin-dash-submit" type="submit"><span style="padding-left:40px ;padding-right: 40px;" class="add-admin-dash">Submit</span> <img class="loader loader-add" src="../img/loader-hifarm.gif" alt="#"> </button>
                    </div>
            </div>
        </div>
        <!--Add Item Modal ends-->
        <div class="edit-add-item invest"></div>

        <!--Delete Item starts-->
        <div class="delete-modal invest">
            <div class="delete-modal-container">
                <div class="close-delete-modal">x</div>
                <h1 style="margin-bottom: 50px;margin-top: 60px;text-align: center;">Are you sure?🙁</h1>
                <div class="yes-no-delete-modal">
                    <button class="yes-delete-modal main-delete">Yes</button>
                    <button class="no no-delete-modal">No</button>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
        <!--Delete item ends-->

        <!--Add status starts-->
        <div class="delete-modal add-status-modal">
            <div class="delete-modal-container">
                <div class="close-delete-modal close-status">x</div>
                <h1 style="padding: 5px;font-size: 23px;text-align: center;margin-bottom:10px;margin-top: 25px;">ADD STATUS</h1>
                <label style="color:#cccccc;font-size: 20px;">Name:</label> <br>
                <input type="text" placeholder="Enter here..." class="category-value" style="border: 1px solid #cccccc;margin-top: 10px;padding: 15px;width: 100%;">

                <div class="button-admin-container" style="margin-top: 30px;">
                    <button class="add-item-submit admin-dash-submit"><span style="padding-left:50px ;padding-right: 50px;" class="span-class">Add</span> <img class="loader loader-span" src="../img/loader-hifarm.gif" alt="#"> </button>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
        <!--Add status ends-->
        <script src="../js/dashboardHamburger.js"></script>
        <script src="../js/adminInvest.js"></script>
</body>

</html>