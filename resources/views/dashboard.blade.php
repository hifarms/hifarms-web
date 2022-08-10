<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <title>Dashboard</title>
</head>
<body>
    <!--Dashboard Hamburger Starts-->
      <div class="dashboard-hamburger">
        <div class="dash-hamb-img-name">
        <img src="img/dashboard-hamburger-profile.png" alt="profile" class="profile-header ham">
        <h2>Welcome, <br>
            Hafiz
        </h2>
        </div>
        <div class="input-search ham">
            <input type="text" placeholder="search for">
            <img src="img/Vector (8).png" alt="search-icon">
        </div>
        <div class="side-ar">
        <h3>General</h3>
        <div class="second-se-bar">
            <a href="dashboard"> <img src="img/Dashboard.svg" alt="dashboard" class="current"> <p>Dashboard</p></a>
            <a href="marketplace"><img src="img/marketplace.svg" alt="marketplace"> <p>Marketplace</p></a>
            <a href="user-farms"><img src="img/livestock-dashboard.svg" alt="livestock"> <p>Manage my farm</p></a>
            <a href="farm-invest"><img src="img/invest.svg" alt="marketplace"> <p>Invest In a Project</p></a>
            <a href="investment"><img src="img/history.svg" alt="history"> <p>ROI</p></a>
            <a href="wallet"><img src="img/wallet.svg" alt="wallet"> <p>Wallet</p></a>
        </div>
    </div>
    <div class="third-se-bar">
            <a href="user-settings"><img src="img/settings.png" alt="settings"> <p>Settings</p></a>
            <a href=""><img src="img/log out.svg" alt="settings"> <p>Logout</p></a>
    </div>
    <div class="guide-dash">
        <img src="img/Notifications.png" alt="notifications" class="notifications">
        <img src="img/Guides.png" alt="guides" width="32">
    </div>
      </div>
    <!--Dashboard Hamburger Ends-->
    <header class="dashbrd-header">
        <div class="dashboard-header">
        <img src="img/hamburger.svg" alt="#" id="hamburger" class="hamburger1">
            <div class="header-img">
                <img src="img/logo.png" class="logo1x" alt="logo" width="113">
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
                            <button>Mark all as read</button>
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
            <a href="dashboard"> <img src="img/Dashboard.svg" alt="dashboard" class="current"></a>
            <a href="marketplace"><img src="img/marketplace.svg" alt="marketplace"></a>
            <a href="user-farms"><img src="img/livestock-dashboard.svg" alt="livestock"></a>
            <a href="farm-invest"><img src="img/invest.svg" alt="marketplace"></a>
            <a href="investment"><img src="img/history.svg" alt="history"></a>
            <a href="wallet"><img src="img/wallet.svg" alt="wallet"></a>
        </div>
        <div class="third-side-bar" style="display: flex;flex-direction: column; align-items: center;margin-bottom: 10px;">
            <a href="user-settings"><img src="img/settings.png" style="margin-bottom: 30px;" alt="settings"></a>
            <img src="img/log out.svg" alt="log-out">
        </div>
    </div>
    <div class="dashboard-container dash">
        <h1>Dashboard.</h1>
        <div class="dashboard-flex">
        <div class="first">
        <a href="/marketplace">
            <div class="marketplace-flex">
                <div class="top-marketplace-flex">
                    <p>Marketplace</p>
                    <img src="img/marketplace.svg" alt="icon">
                </div>
                  <div class="marketplace-body">
                    <p>Hi Farms Products</p>
                  </div>
                <div class="views-numbers">
                    <p>{{$product}}</p>
                    <img src="img/eye-icon.svg" alt="eye-icon" width="23">
                </div>
            </div>
            </a>
            <div class="weather">
                <div class="weather-2 dashboard">
                    <div class="flex-1">
                        <p>Weather</p>
                        <img src="img/clouds.png" alt="clouds">
                        <img src="img/temprature.png" alt="celsius">
                    </div>
                    <div class="flex-2">
                        <img src="img/options.png" alt="">
                    </div>
                </div>
                <div class="referral">
                    <h1>Referral link</h1>
                    <p class="copy" id="ref-link">https://hifarms.com.ng/home/signup?ref={{auth()->user()->username}}</p>
                    <div class="ref- tooltip-ref">
                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                        <img src="img/copy-paste.svg" alt="copy-icon" class="ref-icon">
                    </div>
                </div>
            </div>
            </div>
            <div class="second">
            <div class="marketplace-flex manage-your-farm">
                <a href="user-farms">
                <div class="top-marketplace-flex">
                    <p>Manage Your Farm</p>
                    <img src="img/livestock-dashboard.svg" alt="icon">
                </div>
                  <div class="marketplace-body">
                    <p>My Farm</p>
                  </div>
                <div class="views-numbers">
                    <p></p>
                    <img src="img/add-my-farm.svg" alt="eye-icon" width="23">
                </div>
                </a>
            </div>
            <div class="marketplace-flex invest-your-farm">
                <a href="farm-invest">
                <div class="top-marketplace-flex">
                    <p>Invest In A Project</p>
                    <img src="img/invest-dashboard.svg" alt="icon">
                </div>
                  <div class="marketplace-body">
                    <p>Active Projects</p>
                  </div>
                <div class="views-numbers">
                    <p>{{$active}}</p>
                    <img src="img/add-my-farm.svg" alt="eye-icon" width="23">
                </div>
            </div>
            </div>
        </div>
        </a>
    </div>
    <script>
               function getNotification() {
            jQuery.ajax({
                    url: "http://127.0.0.1:8000/user/messages",
                    method: "get",
                    success: function (data) {
                        data.messages.forEach(message => {
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
    <script src="js/userDashboard.js"></script>
</body>
</html>