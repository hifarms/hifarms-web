<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
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
            <a href="dashboard"> <img src="img/Dashboard (1).svg" alt="dashboard" > <p>Dashboard</p></a>
            <a href="marketplace"><img  src="img/marketplace.svg"  alt="marketplace"> <p>Marketplace</p></a>
            <a href="user-farms"><img src="img/livestock-dashboard.svg" alt="livestock"> <p>Manage my farm</p></a>
            <a href="farm-invest"><img src="img/invest.svg" alt="marketplace"> <p>Invest In a Project</p></a>
            <a href="investment"><img src="img/history.svg" alt="history"> <p>ROI</p></a>
            <a href="wallet kun"><img src="img/wallet-active.svg" class="current" alt="wallet"> <p>Wallet</p></a>
        </div>
    </div>
    <div class="third-se-bar">
            <a href="userSettings.html"><img src="img/settings.png" alt="settings"> <p>Settings</p></a>
            <a href=""><img src="img/log out.svg" alt="settings"> <p>Logout</p></a>
    </div>
    <div class="guide-dash">
        <img src="img/Notifications.png" alt="notifications" class="notifications">
        <img src="img/Guides.png" alt="guides" width="32">
    </div>
      </div>
    <!--Dashboard Hamburger Ends-->
<div class="added-successfully">
        Profile Updated!!
    </div>
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
            <a href="user-farms"><img src="img/livestock-dashboard.svg" alt="livestock"></a>
            <a href="farm-invest"><img src="img/invest.svg" alt="marketplace"></a>
            <a href="investment"><img src="img/history.svg" alt="history"></a>
            <a href="wallet"><img src="img/wallet.svg" alt="wallet"></a>
        </div>
        <div class="third-side-bar" style="display: flex;flex-direction: column; align-items: center;margin-bottom: 10px;">
            <a href="adminSettings.html"><img src="img/settings.png" style="margin-bottom: 30px;" alt="settings"></a>
            <img src="img/log out.svg" alt="log-out">
        </div>
    </div> 
    <div class="dashboard-container profile">
        <h1>My Profile.</h1>
        <p class="use-pro">Hello {{ explode(' ',$user->fullname)[0]}}</p>
        <div class="profile-hero">
            <img src="img/Image icon.png" alt="profile-image">
            <p>{{ $user->fullname }}</p>
            <input type="file" hidden class="file">
            <button class="upload-img">Upload Image</button>
        </div>
        <div class="profile-details">
            <div class="contact">Contact: <span>{{$user->phone}}</span></div>
            <div class="gender">Gender: <span>{{$user->gender}}</span></div>
            <div class="email">Email: <span>{{$user->email}}</span></div>
            <div class="soo">State of Origin: <span>{{$user->State}}</span></div>
            <div class="email">Bank Name: </div>
            <div class="soo">Account Number:</div>
            <div class="occupation">Occupation: <span>{{$user->occupation}}</span></div>
            <div class="address">Residence Address: <span>{{$user->address}}</span></div>
        </div>
        <div class="buttons-profile">
            <button class="edit-profile">Edit Profile</button>
        </div>
    </div>

    
       <!--edit profile Modal Begins-->
       <div class="admin-add-item edit-profile-modal">
        <div class="admin-add-item-container">
            <div class="close-add-item">x</div>
            <h1 style="text-transform: unset;margin-bottom: 10px;">Edit Profile</h1>
            <label class="class-name">Full Name</label> <br>
            <input type="text"placeholder="Enter your name" class="name">
            <div class="category-percentage-flex" style="justify-content:left;">
                <div class="percentage">
                    <label>Contact</label>  <br>
                    <input type="text" class="contact-input" placeholder="Enter your contact">
                </div>
                <div class="category">
                    <label>Email</label> <br> 
                    <input class="category-select contact-input" placeholder="Enter your email">    
                </div>
            </div>
            <div class="category-percentage-flex" style="justify-content:left;">
                <div class="percentage">
                    <label>Bank Name</label>  <br>
                    <input type="text" class="contact-input" placeholder="Enter your contact">
                </div>
                <div class="category">
                    <label>Account Number</label> <br> 
                    <input class="category-select contact-input" placeholder="Enter your email">    
                </div>
            </div>
            <div class="category-percentage-fle" style="margin-bottom: 10px;justify-content:left;">
                <div class="percentage">
                    <label>Occupation</label>  <br>
                    <input type="text" class="contact-input" placeholder="Enter your occupation">
                </div>
                <div class="category">
                    <label>State Of Origin</label> <br> 
                    <select class="this-select" >
                        <option>Sokoto</option>
                        <option>Kebbi</option>
                        <option>Zamfara</option>
                    </select>  
                </div>
            </div>
            <label class="admin-location">Residential Address</label> <br>
            <input type="text"  class="admin-location-input" placeholder="Enter residential address">
             <br>
            <div class="button-admin-container">
            <button class="add-item-submit adminfu admin-main-submit"><span style="padding-left:39px ;padding-right: 40px;" class="add-main-dash">Update</span>  <img class="loader loader-add-main" src="img/loader-hifarm.gif" alt="#"> </button>
            </div>
        </div>
    </div>
    <!--edit profile Modal ends-->
    <div class="overlay"></div>

    <script src="js/userProfile.js"></script>
    <script src="js/dashboardHamburger.js"></script>
</body>
</html>