<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Livestock</title>
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
            <a href="dashboard"> <img src="img/Dashboard (1).svg" alt="dashboard"></a>
            <a href="marketplace"><img src="img/marketplace.svg" alt="marketplace"></a>
            <a href="user-farms"><img src="img/livestock-current.svg" alt="livestock" class="current"> </a>
            <a href="farm-invest"><img src="img/invest.svg" alt="marketplace"></a>
            <a href="investment"> <img src="img/history.svg" alt="history"> </a>
            <a href="wallet"><img src="img/wallet.svg" alt="wallet"> </a>
        </div>
        <div class="third-side-bar">
            <img src="img/log out.svg" alt="log-out">
        </div>
    </div>
    <div class="dashboard-container livestock">
      <h1>My Farm</h1>
      <div class="my-farm-1">
        <img src="img/Farmer Icon (1).svg" alt="farm-icon" width="130" class="farm-icon">
        <div class="weatherflex">
            <div class="weather-2">
                <div class="flex-1">
                    <p>Weather</p>
                    <img src="img/clouds.png" alt="clouds">
                    <img src="img/temprature.png" alt="celsius">
                </div>
                <div class="flex-2">
                    <img src="img/options.png" alt="">
                </div>
            </div>
            <div class="weather-2">
                <div class="flex-1">
                    <p>Humidity</p>
                    <img src="img/clouds.png" alt="clouds">
                    <img src="img/16º.svg" alt="celsius">
                </div>
                <div class="flex-2">
                    <img src="img/options.png" alt="">
                </div>
            </div>
        </div>
          <img src="img/Farm chart.svg" alt="farm-chart" class="farm-chart">
      </div>
        <div class="dashboard-flex livestock">
       <div class="marketplace-flex manage-your-farm livestock">
                <div class="top-marketplace-flex">
                    <p>Manage Your Farm</p>
                    <img src="img/livestock-dashboard.svg" alt="icon">
                </div>
                  <div class="marketplace-body">
                    <p>Livestock Farming</p>
                  </div>
                <div class="views-numbers">
                    <p>{{$livestock}}</p>
                    <img src="img/play-button.svg" alt="eye-icon" width="23">
                </div>
            </div>
            <div class="marketplace-flex invest-your-farm livestock">
                <div class="top-marketplace-flex">
                    <p>Manage Your Farm</p>
                    <img src="img/manage-farm.svg" alt="icon">
                </div>
                  <div class="marketplace-body">
                    <p>Crops Farming</p>
                  </div>
                <div class="views-numbers">
                    <p>{{ $crop}}</p>
                    <img src="img/play-button.svg" alt="eye-icon" width="23">
                </div>
            </div>  
        </div>
   
        <p class="livestock-bottom">Livestock Farming</p>
    </div>
</body>
</html>