<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Invest</title>
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
            <a href="dashboard"> <img src="img/Dashboard (1).svg" alt="dashboard" ></a>
            <a href="marketplace"><img src="img/marketplace.svg" alt="marketplace"></a>
            <a href="user-farms"><img src="img/livestock-dashboard.svg" alt="livestock"></a>
            <a href="invest"><img src="img/invest-current.svg" alt="marketplace" class="current"></a>
            <a href="investment"><img src="img/history.svg" alt="history"></a>
            <a href="wallet"><img src="img/wallet.svg" alt="wallet"></a>
        </div>
        <div class="third-side-bar">
            <img src="img/log out.svg" alt="log-out">
        </div>
    </div>
    <div class="dashboard-container">
        <h1>Invest In A Project.</h1>
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
                        <div class="line" style="height: 1px;width: 300px;background: #c4c4c4;margin-bottom: 10px;"></div>
                        <div class="flex dashboard">
                            <input type="checkbox" class="check">
                            <p class="sponsor-crop dashboard">Crop</p>
                            <P>0</P>
                        </div>
                        <div class="flex dashboard">
                            <input type="checkbox">
                            <p class="sponsor-crop dashboard">Cattles</p>
                            <P>0</P>
                        </div>
                        <div class="flex dashboard">
                            <input type="checkbox">
                            <p class="sponsor-crop dashboard">Poultry</p>
                            <P>0</P>
                        </div>
                        <div class="flex dashboard">
                            <input type="checkbox">
                            <p class="sponsor-crop dashboard">Livestock</p>
                            <P>0</P>
                        </div>
                    </div>
                </div>
                <div class="sponsor-data dashboard">                        
                    <div class="grid dashboard">
                        <p class="label">New</p>
                        <img src="img/unsplash_aIghKsc3H34.png" alt="image" class="marketplace-image">
                        <h1>Fish Farm</h1>
                        <div class="sponsor-inner-flex">
                            <img src="img/location.svg" alt="">
                            <p>Birnin Kebbi, Central Market</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/graph.svg" alt="">
                            <p>10%</p>
                       </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/calendar.svg" alt="">
                            <p>6 months</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p>74% sold</p>
                        </div>
                        <div class="purchase-div invest">
                            <h3>₦ 300,000</h3>
                            <button>Invest</button>
                        </div>
                    </div>
            
                    <div class="grid dashboard">
                        <p class="label">New</p>
                        <img src="img/unsplash_leOh1CzRZVQ.png" alt="image" class="marketplace-image">
                        <h1>Fish Farm</h1>
                        <div class="sponsor-inner-flex">
                            <img src="img/location.svg" alt="">
                            <p>Birnin Kebbi, Central Market</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/graph.svg" alt="">
                            <p>10%</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/calendar.svg" alt="">
                            <p>6 months</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p>74% sold</p>
                        </div>
                        <div class="purchase-div invest">
                            <h3>₦ 300,000</h3>
                            <button>Invest</button>
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
                            <img src="img/graph.svg" alt="">
                            <p>10%</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/calendar.svg" alt="">
                            <p>6 months</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p>74% sold</p>
                        </div>
                        <div class="purchase-div invest">
                            <h3>₦ 300,000</h3>
                            <button>Invest</button>
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
                            <img src="img/graph.svg" alt="">
                            <p>10%</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/calendar.svg" alt="">
                            <p>6 months</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p>74% sold</p>
                        </div>
                        <div class="purchase-div invest">
                            <h3>₦ 300,000</h3>
                            <button>Invest</button>
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
                            <img src="img/graph.svg" alt="">
                            <p>10%</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/calendar.svg" alt="">
                            <p>6 months</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p>74% sold</p>
                        </div>
                        <div class="purchase-div invest">
                            <h3>₦ 300,000</h3>
                            <button>Invest</button>
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
                            <img src="img/graph.svg" alt="">
                            <p>10%</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/calendar.svg" alt="">
                            <p>6 months</p>
                        </div>
                        <div class="sponsor-inner-flex">
                            <img src="img/sponsor-cart.svg" alt="">
                            <p>74% sold</p>
                        </div>
                        <div class="purchase-div invest">
                            <h3>₦ 300,000</h3>
                            <button>Invest</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
    <script src="js/marketplace.js"></script>
</body>
</html>