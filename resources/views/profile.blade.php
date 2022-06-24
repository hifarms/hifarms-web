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
            <a href="user-farms"><img src="img/livestock-dashboard.svg" alt="livestock"></a>
            <a href="farm-invest"><img src="img/invest.svg" alt="marketplace"></a>
            <a href="investment"><img src="img/history.svg" alt="history"></a>
            <a href="wallet"><img src="img/wallet.svg" alt="wallet"></a>
        </div>
        <div class="third-side-bar">
            <img src="img/log out.svg" alt="log-out">
        </div>
    </div> 
    <div class="dashboard-container profile">
        <h1>My Profile.</h1>
        <p>Hello {{ explode(' ',$user->fullname)[0]}}</p>
        <div class="profile-hero">
            <img src="img/Image icon.png" alt="profile-image">
            <p>{{ $user->fullname }}</p>
            <button>Upload Image</button>
        </div>
        <div class="profile-details">
            <div class="contact">Contact: <span>{{$user->phone}}</span></div>
            <div class="gender">Gender: <span>{{$user->gender}}</span></div>
            <div class="email">Email: <span>{{$user->email}}</span></div>
            <div class="soo">State of Origin: <span>{{$user->State}}</span></div>
            <div class="occupation">Occupation: <span>{{$user->occupation}}</span></div>
            <div class="address">Residence Address: <span>{{$user->address}}</span></div>
        </div>
        <div class="buttons-profile">
            <button>Update Profile</button>
            <button>Edit Profile</button>
        </div>
    </div>
</body>
</html>