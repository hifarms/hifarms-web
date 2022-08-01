<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <div class="dashboard-header">
            <div class="header-img">
                <img src="../img/logo.png" alt="logo" width="113">
            </div>
            <div class="header-icons">
                <div class="input-search">
                    <form method="GET" role="search">
                        <input type="text" placeholder="search for">
                        <img src="../img/Vector (8).png" alt="search-icon">
                    </form>
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
                        <button>Log Out</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="side-bar">
        <div class="first-side-bar">
            <img src="../img/side-bar.svg" alt="side-bar">
        </div>
        <div class="second-side-bar">
            <a href="{{ url('admin/adminDashboard')}}"> <img src="../img/Dashboard.svg" alt="dashboard" title="dashboard" class="{{ request()->is('admin/adminDashboard*') ? 'current' : '' }}"></a>
            <a href="{{ url('admin/adminMarketplace')}}"><img src="../img/marketplace.svg" alt="marketplace" title="marketplace" class="{{ request()->is('admin/adminMarketplace*') ? 'current' : '' }}"></a>
            <a href="{{ url('admin/adminMyFarm')}}"><img src="../img/livestock-dashboard.svg" alt="livestock" title="livestock" class="{{ request()->is('admin/adminMyFarm*') ? 'current' : '' }}"></a>
            <a href="{{ url('admin/adminInvest')}}"><img src="../img/invest.svg" alt="marketplace" title="marketplace" class="{{ request()->is('admin/adminInvest*') ? 'current' : '' }}"></a>
            <a href="{{ url('admin/adminInvestReturns')}}"><img src="../img/history.svg" alt="history" title="history" class="{{ request()->is('admin/adminInvestReturns*') ? 'current' : '' }}"></a>
            <a href="{{ url('admin/adminWallet')}}"><img src="../img/wallet.svg" alt="wallet" title="wallet" class="{{ request()->is('admin/adminWallet*') ? 'current' : '' }}"></a>
            <a href="{{ url('admin/adminBlog') }}"><img src="../img/blog-pin.png" alt="blog-pin" title="blog-pin" class="{{ request()->is('admin/adminBlog*') ? 'current' : '' }}"> </a>
        </div>
        <div class="third-side-bar" style="display: flex;flex-direction: column; align-items: center;margin-bottom: 10px;">
            <a href="{{ url('admin/adminSettings')}}"><img src="../img/settings.png" class="{{ request()->is('admin/adminSettings*') ? 'current' : '' }}" style=" border-radius: 50%; margin-bottom: 30px;" alt="settings" title="settings"></a>
            <img src="../img/log out.svg" alt="log-out" title="log-out">
        </div>

    </div>
    @yield('content')

</body>

</html>