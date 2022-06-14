<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Wallet</title>
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
            <a href="wallet"><img src="img/wallet-active.svg" alt="wallet" class="current"></a>
        </div>
        <div class="third-side-bar">
            <img src="img/log out.svg" alt="log-out">
        </div>
    </div>
    <div class="dashboard-container">
        <h1>My Wallet.</h1>
        <div class="wallet-flex">
            <div class="spending">
                <div class="spend-1">
                    <p>My Spendings</p>
                    <p>₦ 125, 450.60</p>
                </div>
                <img src="img/analye.png" alt="chart" class="analyze">
                <img src="img/options.png" >
            </div>
            <div class="spending-2">
                <div class="ledger">
                    <p>Ledger Balance</p>
                    <p>₦ {{$user->wallet->ledger_balance}}</p>
                </div>
                <div class="wallet-ledge">
                    <p>Available Balance</p>
                    <p>₦ {{$user->wallet->balance}}</p>
                </div>
            </div>
        </div>
        <div class="search-show-entry">
            <div>Show Entries: <span class="ten">10</span></div>
            <div class="entry-search"> <p>Search</p>   
                 <div class="input-search">
                    <input type="text" placeholder="search for">
                    <img src="img/Vector (8).png" alt="search-icon">
                </div>
            </div>
        </div>
        <div class="transaction-history">
                <p>Transaction history</p>
        </div>
    </div>
</body>
</html>