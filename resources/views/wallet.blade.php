<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Wallet</title>
    <meta name="_token" content="{{ csrf_token() }}" />
    <script src="{{asset('js/jquery.min.js')}}"></script>
</head>
<body>
      <!--Dashboard Hamburger Starts-->
      <div class="dashboard-hamburger">
        <div class="dash-hamb-img-name">
        <img src="img/dashboard-hamburger-profile.png" alt="profile" class="profile-header ham">
        <h2>Welcome, <br>
            {{auth()->user()->username}}
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
            <a href="wallet"><img src="img/wallet-active.svg" class="current" alt="wallet"> <p>Wallet</p></a>
        </div>
    </div>
    <div class="third-se-bar">
            <a href="user-settings"><img src="img/settings.png" alt="settings"> <p>Settings</p></a>
            <a href="logout"><img src="img/log out.svg" alt="settings"> <p>Logout</p></a>
    </div>
    <div class="guide-dash">
        <img src="img/Notifications.png" alt="notifications" class="notifications">
        <img src="img/Guides.png" alt="guides" width="32">
    </div>
      </div>
    <!--Dashboard Hamburger Ends-->
    <div class="added-successfully">
        Withdrawal Processed!
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
            <a href="dashboard"> <img src="img/Dashboard (1).svg" alt="dashboard"></a>
            <a href="marketplace"><img src="img/marketplace.svg" alt="marketplace"></a>
            <a href="user-farms"><img src="img/livestock-dashboard.svg" alt="livestock"></a>
            <a href="farm-invest"><img src="img/invest.svg" alt="marketplace"></a>
            <a href="investment"><img src="img/history.svg" alt="history"></a>
            <a href="wallet"><img src="img/wallet-active.svg" alt="wallet" class="current"></a>
        </div>
        <div class="third-side-bar" style="display: flex;flex-direction: column; align-items: center;margin-bottom: 10px;">
            <a href="user-settings"><img src="img/settings.png" style="margin-bottom: 30px;" alt="settings"></a>
            <img src="img/log out.svg" alt="log-out">
        </div>
    </div>
    <div class="dashboard-container sponsor mrkt-plc">
        <h1 class="h1">My Wallet.</h1>
        <div class="wallet-flex">
            <div class="spending">
                <div class="spend-1">
                    <p class='spends'>My Spendings</p>
                    <p>₦ {{number_format($totalspend,0,'.',',')}}</p>
                </div>
                <img src="img/analye.png" alt="chart" class="analyze">
                <img src="img/options.png" >
            </div>
            <div class="spending-2">
                <div class="ledger">
                    <p>Ledger Balance</p>
                    <p>₦ {{number_format($user->wallet->ledger_balance,0,'.',',')}}</p>
                </div>
                <div class="wallet-ledge">
                    <p>Available Balance</p>
                    <button class="wallet-ledge-btn">Withdraw</button>
                    <p>₦ {{number_format($user->wallet->balance,0,'.',',')}}</p>
                </div>
            </div>
        </div>
        <div class="search-show-entry">
            <div>Show Entries: <span class="ten">10</span></div>
            <div class="entry-search"> <p>Search</p>   
                <form action="">
                    <div class="input-search">
                        <input type="text" placeholder="search for Transaction" value="{{old('search')}}" name="search">
                        <button type="submit" class="btn"><img src="../img/Vector (8).png" alt="search-icon"></button>
                    </div>
                    </form>
            </div>
        </div>
        <div class="transaction-history">
                <p>Transaction Record</p>
                <div class="scroll-table">
                <div class="transaction-history-flex">
                    <div class="transact-history-option">
                        <div>ID</div>
                        <div>Order ID</div>
                        <div>Status</div>
                        <div>Project Type</div>
                        <div>Amount</div>
                    </div>
                    @foreach($investments as $investment)
                    <div class="transaction-records">
                        <div>Hi-{{$investment->id}}</div>
                        <div>#{{$investment->order_id}}</div>
                        @if($investment->order->payment && $investment->order->payment->status_code==200)
                        <div style="color: #53AF46;">Paid</div>
                        @else
                        <div style="color: #1E88E5;">Pending</div>
                        @endif
                        <div>{{$investment->product_id?"Purchase":"Investment"}}</div>
                        <div>₦{{number_format($investment->amount,0,'.',',')}}</div>
                    </div>
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
                 <label style="color:#000;font-size: 20px;">Amount:</label>
                <input type="text" class="i-amount" name="amount" placeholder="Enter here..." class="category-value" style="font-size:18px;border: 1px solid #cccccc;margin-left: 8px;padding: 15px;width: 70%;">
              
                <div class="button-admin-container"  style="margin-top: 20px;">
                    <button class="add-item-submit admin-dash-submit send-request"><span style="padding-left:46px ;padding-right: 46px;" class="span-class">Send</span>  <img class="loader loader-span" src="img/loader-hifarm.gif" alt="#"> </button>
                </div>
            </div>
            </div>
        <div class="overlay"></div>
     <!--Add status ends-->
     <script src="js/userWallet.js"></script>
     <script src="js/dashboardHamburger.js"></script>
     <script>
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
     $('.send-request').on('click',function(){

         jQuery.ajax({
                 url: `http://127.0.0.1:8000/withdrawal-request`,
                 method: "post",
                 data:{
                     amount:$('.i-amount').val()
                 },
                 success: function (data) {
                  alert(data.success)
                  this.disabled = true;
                 },
                 error: function (e) {
                    alert(e.responseJSON.error)
                    console.log(e)
                 },
             });
         })
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