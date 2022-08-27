<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <meta name="_token" content="{{ csrf_token() }}" />
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <title>Admin Withdrawal Page</title>
</head>

<body>
    <!--Dashboard Hamburger Starts-->
    <div class="dashboard-hamburger">
        <div class="dash-hamb-img-name">
            <img src="../img/dashboard-hamburger-profile.png" alt="profile" class="profile-header ham">
            <h2>Welcome, <br> Hafiz
            </h2>
        </div>
        <div class="input-search ham">
            <input type="text" placeholder="search for">
            <img src="../img/Vector (8).png" alt="search-icon">
        </div>
        <div class="side-ar">
            <h3>General</h3>
            <div class="second-se-bar">
                <a href="{{ url('admin/adminDashboard')}}"> <img src="../../img/Dashboard.svg" alt="dashboard" class="current">
                    <p>Dashboard</p>
                </a>
                <a href="{{ url('admin/adminMarketplace')}}"><img src="../../img/marketplace.svg" alt="marketplace">
                    <p>Marketplace</p>
                </a>
                <a href="{{ url('admin/adminMyFarm')}}"><img src="../../img/livestock-dashboard.svg" alt="livestock">
                    <p>Manage my farm</p>
                </a>
                <a href="{{ url('admin/adminInvest')}}"><img src="../../img/invest.svg" alt="marketplace">
                    <p>Invest In a Project</p>
                </a>
                <a href="{{ url('admin/adminInvestReturns')}}"><img src="../../img/history.svg" alt="history">
                    <p>ROI</p>
                </a>
                <a href="{{ url('admin/adminWithraw')}}"><img src="../../img/wallet.svg" alt="wallet">
                    <p>Wallet</p>
                </a>
                <a href="{{ url('admin/adminBlog') }}"><img src="../../img/blog-pin.png" alt="blog-pin">
                    <p>Blog</p>
                </a>
            </div>
        </div>
        <div class="third-se-bar">
            <a href="{{ url('admin/adminSettings')}}"><img src="../../img/settings.png" alt="settings">
                <p>Settings</p>
            </a>
            <a href="{{ url('logout') }}"><img src="../../img/log out.svg" alt="settings">
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
                    <a href='{{url(' /cart ')}}'><img src='../../img/Group 51.png' alt="cart" class="cart"></a>
                    <span class="cart-counter"></span>
                </div>
                <div class="input-search">
                    <input type="text" placeholder="search for">
                    <img src="../../img/Vector (8).png" alt="search-icon">
                </div>
                <div class="notifs">
                    <img src="../../img/Notifications.png" alt="notifications" class="notifications">
                    <div class="notification-modal">
                        <div class="notif-head">
                            <div class="ntf">
                                <p>Notifications</p>
                                <div class="line"></div>
                            </div>
                            <button>Mark all as read</button>
                        </div>
                        
                </div>
                <div class="guides">
                    <img src="../../img/Guides.png" alt="guides" width="32">
                    <div class="guide-download">
                        <h2>Help & Guide</h2>
                        <div class="line"></div>
                        <p>Help & Guide Click Here to download Hi Farms instruction Manual.
                        </p>
                    </div>
                </div>
                <div class="profile-inclusive">
                    <img src="../../img/Profile.png" alt="profile" class="profile-header">
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
            <a href="{{ url('admin/adminDashboard')}}"> <img src="../../img/Dashboard (1).svg" alt="dashboard"></a>
            <a href="{{ url('admin/adminMarketplace')}}"><img src="../../img/marketplace.svg" alt="marketplace"></a>
            <a href="{{ url('admin/adminMyFarm')}}"><img src="../../img/livestock-dashboard.svg" alt="livestock"></a>
            <a href="{{ url('admin/adminInvest')}}"><img src="../../img/invest.svg" alt="marketplace"></a>
            <a href="{{ url('admin/adminInvestReturns')}}"><img src="../../img/history.svg" alt="history"></a>
            <a href="{{ url('admin/adminWithraw')}}"><img src="../../img/wallet-active.svg" class="current" alt="wallet"></a>
            <a href="{{ url('admin/adminBlog') }}"><img src="../../img/blog-pin.png" alt="blog-pin"> </a>
        </div>
        <div class=" third-side-bar" style="display: flex;flex-direction: column; align-items: center;margin-bottom: 0px;">
            <a href="{{ url('admin/adminSettings')}}"><img src="../../img/settings.png" alt="settings"></a>
            <a href="{{ url('logout') }}"><img src="../../img/log out.svg" alt="log-out"></a>
        </div>
    </div>
    <div class="dashboard-container sponsor mrkt-plc">
        <h1 class="h1" style="position: relative;">Withdrawals. <span class="admin-with" style="position:absolute; top: 30px; left: 170px; font-size:14px!important;font-weight: lighter!important;text-decoration: underline;"><a href="{{ url('admin/adminWallet')}}">My Wallet</a></span></h1>
        <div class="wallet-flex">
            <div class="spending">
                <div class="spend-1">
                    <p>My Spendings</p>
                    <p>₦ {{ number_format($amount, 0,'.',',') }}</p>
                </div>
                <img src="../../img/analye.png" alt="chart" class="analyze">
                <img src="../../img/options.png">
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
                        <input type="text" placeholder="search for withdraw by WID/UID" value="{{old('search')}}" name="search">
                        <button type="submit" class="btn"><img src="../img/Vector (8).png" alt="search-icon"></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="transaction-history">
            <p>Withdrawal history</p>
            <div class="scroll-table">
                <div class="transaction-history-flex">
                    <div class="transact-history-option">
                        <div>WID</div>
                        <div class="admin-with-user" style="margin-left:-25px;">User ID</div>
                        <div class="admin-with-amount" style="margin-left:-12px;">Amount</div>
                        <div>Date</div>
                        <div>Status</div>
                        <div style="margin-right: 40px">Action</div>
                        <div></div>
                    </div>
                
                    @foreach($withdraws as $with)
                    <div class="transaction-records admin-with-list">
                        <div><strong>{{ $with->id }}</strong></div>
                        <div><strong>Hi-{{ $with->user_id }}</strong></div>
                        <div><strong>₦ {{ number_format($with->amount, 0,'.',',') }}</strong></div>
                        <div style="margin-left:-10px;"><strong>{{ date('F d, Y', strtotime($with->created_at)) }}</strong></div>
                        @if($with->withdraw_status_id == 3)
                        <div style="color: #53AF46;margin-right: 16px;"><strong>Paid</strong></div>
                        @elseif($with->withdraw_status_id == 1)
                        <div style="color: #1E88E5;margin-right: 16px;"><strong>Pending</strong></div>
                        @elseif($with->withdraw_status_id == 2)
                        <div style="color: #1E88E5;margin-right: 16px;"><strong>Processing</strong></div>
                        @endif
                        <div>
                            <form class="status-form" action="{{route('changeStatus')}}" method="post">
                            @csrf
                            <select class="w-option" style="padding: 7px;border-radius: 6px;" name="status">
                                <option value="0"  selected disabled>change status</option>
                                <option value="3"><strong>Paid</strong></option>
                                <option value="2"><strong>Processing</strong></option>
                                <option value="1"><strong>Pending</strong></option>
                            </select>
                            <input type="hidden" name="id" value="{{$with->id}}">
                        </form>
                        </div>
                        <div><img id="{{$with->user->id}}" src="../img/admin-withdrawal-eye.png" alt="eye-icon" class="eye-icon" style="cursor: pointer;"></div>
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
            <form method="POST" action="{{ route('adminwithdraw') }}">
                @csrf
                <label style="color:#000;font-size: 20px;">Amount:</label>
                <input type="text" placeholder="Enter here..." class="category-value" style="font-size:18px;border: 1px solid #cccccc;margin-left: 8px;padding: 15px;width: 70%;">

                <div class="button-admin-container" style="margin-top: 20px;">
                    <button class="add-item-submit admin-dash-submit"><span style="padding-left:46px ;padding-right: 46px;" class="span-class">Send</span> <img class="loader loader-span" src="../../img/loader-hifarm.gif" alt="#"> </button>
                </div>
            </form>
        </div>
    </div>
    <div class="overlay"></div>
    <!--Add status ends-->

    <!--Admin withdrawal info-->
    <div class="delete-modal add-status-modal eye-modal">
        <div class="delete-modal-container">
            <div class="close-delete-modal close-status eye-modal-close">x</div>
            <h1 style="font-size: 20px;margin-top: 10px;margin-bottom: 40px;">Account Details <span id="wid-label"> #W001</span></h1>
            <div class="inner-admin-withdraw-modal" style="margin-left: 20px;">
                <label style="font-size:17px;margin-bottom: -10px;display: block;"> <strong>Account Name:</strong></label> <br>
                <input class="acc-name" style="border:1px solid rgb(214, 210, 210);margin-top: 1px;font-size: 16px;margin-bottom: 10px;padding: 13px;width: 90%;" type="text" value="Mubarak Aliyu" disabled>
                <label style="font-size:17px;margin-bottom: -10px;display: block;"> <strong>Account Number:</strong></label> <br>
                <input class="acc-num" style="border:1px solid rgb(214, 210, 210);margin-top: 1px;font-size: 16px;margin-bottom: 10px;padding: 13px;width: 90%;" type="text" value="392612234" disabled>
                <label style="font-size:17px;margin-bottom: -10px;display: block;"> <strong>Bank Name:</strong></label> <br>
                <input class="bank-name" style="border:1px solid rgb(214, 210, 210);margin-top: 1px;font-size: 16px;margin-bottom: 10px;padding: 13px;width: 90%;" type="text" value="Access Bank" disabled>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
    <!--Admin withdrawal info ends-->
   

</body>
 <script src="../js/userWallet.js"></script>
    <script src="../js/dashboardHamburger.js"></script>
    <script src="../js/adminWithdrawal.js"></script>
<script>

const eyeIcon = document.querySelectorAll('.eye-icon');
//const sendButton = document.querySelector('.span-class');


eyeIcon.forEach((eye)=>{
    eye.addEventListener('click', (e)=>{
        e.preventDefault();
        jQuery.ajax({
          url: "http://127.0.0.1:8000/admin/bank-details/"+eye.id,
          method: "get",
          success: function ({data}) {
           document.querySelector('.acc-num').value=data.bank_acc_no;
           document.querySelector('.acc-name').value=data.bank_acc_name;
           document.querySelector('.bank-name').value=data.bank_name;
          },
          error: function (e) {
             console.log(e)
          },
      });

        //Display modal
        let overlayEffect = document.querySelector('.overlay');
        overlayEffect.style.display = 'block';
    
        let mdl = document.querySelector('.eye-modal');
       
        mdl.style.display = 'block';
    
            //Close Modal
            let closeEditModal = document.querySelector('.eye-modal-close');
            closeEditModal.addEventListener('click', ()=>{
              overlayEffect.style.display = 'none';
              mdl.style.display = 'none';
            });   
    })
})

$('.w-option').on('change',(e)=>{
    e.target.parentElement.submit()
})
</script>
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
</html>