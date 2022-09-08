<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <meta name="_token" content="{{ csrf_token() }}" />
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <title>Livestock</title>    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">


</head>
<body>
    <!--Dashboard Hamburger Starts-->
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
    <!--Dashboard Hamburger Ends-->
    <header class="dashbrd-header">
        <div class="dashboard-header">
        <img src="../img/hamburger.svg" alt="#" id="hamburger" class="hamburger1">
            <div class="header-img">
                <img src="../img/logo.png" class="logo1x" alt="logo" width="113">
            </div>
            <div class="header-icons">
            <div class="cart-whatsapp cart-whatsapp-dash">
                    <a href='{{url('/cart')}}'><img src='../img/Group 51.png' alt="cart" class="cart"></a>
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
                        <button><a href="profile">My Profile</a></button>
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
        <div class="second-side-bar admin" style="margin-top: 27px;">
            <a href="{{ url('admin/adminDashboard')}}"> <img src="../img/Dashboard (1).svg" alt="dashboard"></a>
            <a href="{{ url('admin/adminMarketplace')}}"><img src="../img/marketplace.svg" alt="marketplace"></a>
            <a href="{{ url('admin/adminMyFarm')}}"><img src="../img/livestock-current.svg" class="current" alt="livestock"></a>
            <a href="{{ url('admin/adminInvest')}}"><img src="../img/invest.svg" alt="marketplace"></a>
            <a href="{{ url('admin/adminInvestReturns')}}"><img src="../img/history.svg" alt="history"> </a>
            <a href="{{ url('admin/adminWithraw')}}"><img src="../img/wallet.svg" alt="wallet"></a>
            <a href="{{ url('admin/adminBlog') }}"><img src="../img/blog-pin.png" alt="blog-pin" > </a>
        </div>
        <div class="third-side-bar" style="display: flex;flex-direction: column; align-items: center;margin-bottom: 10px;">
            <a href="{{ url('admin/adminSettings')}}"><img src="../img/settings.png" style="margin-bottom: 30px;" alt="settings"></a>
            <a href="{{ url('logout') }}"><img src="../img/log out.svg" alt="log-out"></a>
        </div>
    </div>
    <div class="dashboard-container livestock">
      <h1>My Farm</h1>
      <div class="my-farm-1">
        <img src="../img/Farmer Icon (1).svg" alt="farm-icon" width="130" class="farm-icon">
    <div class="displ">
        <div class="weatherflex">
            <div class="weather-2">
                <div class="flex-1">
                    <p>Weather</p>
                    <img src="../img/clouds.png" alt="clouds">
                    <img src="../img/temprature.png" alt="celsius"  class="celsius-1">
                </div>
                <div class="flex-2">
                    <img src="../img/options.png" alt="" class="optin">
                </div>
            </div>
            <div class="weather-2">
                <div class="flex-1">
                    <p>Humidity</p>
                    <img src="../img/clouds.png" alt="clouds">
                    <img src="{{asset('img/16º.svg')}}" alt="celsius" class="celsius">
                </div>
                <div class="flex-2">
                    <img src="../img/options.png" class="optin" alt="">
                </div>
            </div>
        </div>
          <img src="../img/Farm chart.svg" alt="farm-chart" class="farm-chart">
      </div>
</div>

        <div class="dashboard-flex livestock">
       <div class="marketplace-flex manage-your-farm livestock">
                <div class="top-marketplace-flex">
                    <p>Manage Your Farm</p>
                    <img src="../img/livestock-dashboard.svg" alt="icon">
                </div>
                  <div class="marketplace-body">
                    <p>Livestock Farming</p>
                  </div>
                <div class="views-numbers">
                    <p>{{ $livestock }}</p>
                    <!--Icon to show when an existing user sign in to the dashboard-->
                    <img src="../img/play-button.svg" style="cursor:pointer" class="eye-icon" alt="eye-icon" width="23">
                    <!--Icon to show when a new user sign in to the dashboard-->
                   <!-- <img src="../img/Add.png" style="cursor:pointer" alt="eye-icon" width="23"> -->
                </div>
            </div>
            <div class="marketplace-flex invest-your-farm livestock">
                <div class="top-marketplace-flex">
                    <p>Manage Your Farm</p>
                    <img src="../img/manage-farm.svg" alt="icon">
                </div>
                  <div class="marketplace-body">
                    <p>Crops Farming</p>
                  </div>
                <div class="views-numbers">
                    <p>{{ $crops }}</p>
                    <img src="../img/play-button.svg" alt="eye-icon" width="23">
                </div>
            </div>  
        </div>
   
        <div class="define-height" style="height: 350px">
        <p class="livestock-bottom">Livestock Farming</p>
        <div class="add-farm-view-farm">
            <div class="add-new-farm">
                <img src="../img/add2.png" class="add-new-farm-item" alt="add-new-farm">
                <p>Add new farm</p>
            </div>
            <div class="view-existing-farm">
                <div class="arrow-right"> 
                    <img src="../img/arrow-left.png" class="arrow-left-user" alt="arrow">
                    <img src="../img/arrow-right-farm.png" class="arrow-right-user" alt="arrow">
                </div>
                <img src="../img/existing-farm.png" alt="existing-farm" class="existing-farm">
                <p class="blab">View Existing Farms</p>
            </div>
            <div class="line-add"></div>
            <div class="types-farming">
                <div>Poultry Farm</div>
                <div>Fish Farm</div>
                <div>Ruminants</div>
                <div>Others</div>
            </div>
        </div>
    </div>
    </div>


    <div class="overlay"></div>

<div class="admin-add-item livestock">
    <div class="admin-add-item-container">
        <div class="close-add-item">x</div>
        <h1 style="margin-top: 4px;margin-bottom: 20px;" class="cst-bnft">COST BENEFIT ANALYSIS</h1>
        <div class="product-name-category">
            <div class="product-name-dash">
                <div class="tooltip-flex">
                <label>Farm Type</label>
                <div class="tooltip">? <span class="tooltiptext">Farm type</span></div>
                </div> <br>
                <select id="type" class="type">
                     <option value="1">Broiler Chicken</option>
                 </select>
            </div>
            <div class="product-category-dash" style="margin-bottom:3px">
            <div class="tooltip-flex">
                <label>Budget</label>
                <div class="tooltip">? <span class="tooltiptext">Amount you want to start the farm</span></div>
                </div> <br>
                <input type="number" id="amount" placeholder="Enter amount Budgeted" style="height: 30px">
            </div>
        </div>
        <p style="text-align:center; padding:2px;">Total Sales(₦) <span id="sales">0.00</span></p>
        <p style="text-align:center;padding:2px;">Gross Profit(₦) <span id="cross">0.00</span></p>
       <p style="text-align:center;padding:2px;">Net Profit(₦) <span id="net">0.00</span></p>
        <div class="warning-button compute">
            <button>Compute</button>
        </div>

</div>
</div>
<script src="../js/Livestock.js"></script>
<script src="../js/adminMyFarm.js"></script>
<script src="../js/dashboardHamburger.js"></script>
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