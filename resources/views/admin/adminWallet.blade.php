<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <meta name="_token" content="{{ csrf_token() }}" />
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <title>Admin Wallet</title>
</head>

<body>
    <!--Dashboard Hamburger Starts-->
    <div class="dashboard-hamburger">
        <div class="dash-hamb-img-name">
            <img src="../img/dashboard-hamburger-profile.png" alt="profile" class="profile-header ham">
            <h2>Welcome, <br> {{ Auth::user()->username }}
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
    <!--Dashboard Hamburger Ends -->
    <div class="added-successfully">
        Withdrawal Processed!
    </div>
    @if(Session('success_message'))
    <div class="added-successfully-blade">
        {{Session('success_message')}}
    </div>
    @endif

    @if(Session('warning_message'))
    <div class="deleted-successfully-blade">
        {{Session('warning_message')}}
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
                    <a href='{{url(' /cart ')}}'><img src='../img/Group 51.png' alt="cart" class="cart"></a>
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
                        <p>Help & Guide Click Here to download Hi Farms instruction Manual.
                        </p>
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
            <a href="{{ url('admin/adminDashboard')}}"> <img src="../img/Dashboard (1).svg" alt="dashboard"></a>
            <a href="{{ url('admin/adminMarketplace')}}"><img src="../img/marketplace.svg" alt="marketplace"></a>
            <a href="{{ url('admin/adminMyFarm')}}"><img src="../img/livestock-dashboard.svg" alt="livestock"></a>
            <a href="{{ url('admin/adminInvest')}}"><img src="../img/invest.svg" alt="marketplace"></a>
            <a href="{{ url('admin/adminInvestReturns')}}"><img src="../img/history.svg" alt="history"></a>
            <a href="{{ url('admin/adminWithraw')}}"><img src="../IMG/wallet-active.svg" class="current" alt="wallet"></a>
            <a href="{{ url('admin/adminBlog') }}"><img src="../img/blog-pin.png" alt="blog-pin> </a>
        </div>
        <div class="third-side-bar" style="display: flex;flex-direction: column; align-items: center;margin-bottom: 0px;">
         <a href="{{ url('admin/adminSettings')}}"><img src="../img/settings.png" alt="settings"></a>
            <img src="../img/log out.svg" alt="log-out">
        </div>
    </div>
    <div class="dashboard-container sponsor mrkt-plc">
        <h1 class="h1">My Wallet.</h1>
        <div class="wallet-flex">
            <div class="spending">
                <div class="spend-1">
                    <p>My Spendings</p>
                    <p>₦ {{ number_format($amount, 0,'.',',') }}</p>
                </div>
                <img src="../img/analye.png" alt="chart" class="analyze">
                <img src="../img/options.png">
            </div>
            <div class="spending-2">
                <div class="ledger">
                    <p>Ledger Balance</p>
                    <p>₦ {{ number_format($ledgerbalance, 0,'.',',') }}</p>
                </div>
                <div class="wallet-ledge">
                    <p>Available Balance</p>
                    <button class="wallet-ledge-btn">Withdraw</button>
                    <p>₦ {{ number_format($balance, 0,'.',',') }}</p>
                </div>
            </div>
        </div>
        <div class="search-show-entry">
            <div>Show Entries: <span class="ten">10</span></div>
            <div class="entry-search">
                <p>Search</p>
                <form action="">
                <div class="input-search">
                    <input type="text" placeholder="search for Transaction" value="{{old('search')}}" name="search">
                    <button type="submit" class="btn remove-boring-border"><img src="../img/Vector (8).png" alt="search-icon"></button>
                </div>
                </form>
            </div>
        </div>
        <div class="transaction-history">
            <p>Transaction history</p>
            <div class="scroll-table">
                <div class="transaction-history-flex">
                    <div class="transact-history-option">
                        <div>User ID</div>
                        <div>Order ID</div>
                        <div>Status</div>
                        <div>Project Type</div>
                        <div>FarmID/ProductID</div>
                        <div>Amount</div>
                    </div>

                    @foreach($orders as $order)
                        @foreach($order->orderitems as $investment)
                    <div class="transaction-records admin-with-list">
                        <div>Hi-{{ $order->user_id }}</div><br>
                        <div>{{ $order->id }}</div><br>
                        @if($order->payment!=null && $order->payment->status_code == 200)
                        <div style="color: #53AF46;">Paid</div><br>
                        @else
                        <div style="color: #1E88E5;">Pending</div><br>
                        @endif
                        <div>{{boolval($investment->product_id)? "Purchase":"Investment"}}</div>
                        <div>{{boolval($investment->product_id)? '(#'.$investment->product_id.')'.$investment->product->name:'(#'.$investment->farm_id.')'.$investment->farm->name}}</div>
                        <div>₦ {{ $investment->amount }}</div>
                    </div>
                    @endforeach
                    @endforeach

                    

                </div>
            </div>
        </div>
    </div>

    <!--Add status starts-->
    <div class="delete-modal add-status-modal">
        <div class="delete-modal-container">
            <div class="close-delete-modal close-status">x</div>
            <h1 style="margin-left:-18px;font-size: 23px;text-align: center;margin-bottom:30px;margin-top: 55px;">Withdrawal Request</h1>
            <form method="POST" action="{{ route('adminwithdraw') }}">
                @csrf
                <label style="color:#000;font-size: 20px;">Amount:</label>
                <input type="text" placeholder="Enter here..." class="category-value" style="font-size:18px;border: 1px solid #cccccc;margin-left: 8px;padding: 15px;width: 70%;">

                <div class="button-admin-container" style="margin-top: 20px;">
                    <button class="add-item-submit admin-dash-submit"><span style="padding-left:46px ;padding-right: 46px;" class="span-class">Send</span> <img class="loader loader-span" src="../img/loader-hifarm.gif" alt="#"> </button>
                </div>
            </form>
        </div>
    </div>
    <div class="overlay"></div>
    <!--Add status ends-->
    <script src="../js/userWallet.js"></script>
    <script src="../js/dashboardHamburger.js"></script>
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
</body>

</html>