<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <meta name="_token" content="{{ csrf_token() }}" />
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <title>Admin Settings</title>    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">


</head>

<body style='background:#F0F3F4;'>
    <!--Dashboard Hamburger Starts-->
    <div class="dashboard-hamburger">
        <div class="dash-hamb-img-name">
            <img src="../img/dashboard-hamburger-profile.png" alt="profile" class="profile-header ham">
            <h2>Welcome, <br>
                {{ Auth::user()->username }}
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
    <!--Dashboard Hamburger Ends-->
    <div class="mail-sent">
        <img src="../img/mail-sent.png" alt="mail" style="margin-right: 10px;">
        <div>Mail Sent!!!</div>
    </div>
    <div class="priv-added">
        Set Privileges!
    </div>
    <div class="settings added-successfully">
        Password Changed!
    </div>
    <div class="added-successfully-2">
        Added Successfully!
    </div>
    <div class="settings save-successful">
        Changes Saved!
    </div>
    <div class="deleted-successfully" style="z-index: 3000;">
        Deleted Successfully!!!
    </div>
    <div class="deleted-successfully-2" style="z-index: 3000;">
        Deleted Successfully!!!
    </div>
    @if(Session('success_message'))
    <div class="added-successfully-blade">
        {{Session('success_message')}}
    </div>
    @endif

  @if(Session('warning_message') || $errors->any())
    <div class="added-successfully deleted-successfully-blade">
        <ul style="">
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
            @if(Session('warning_message'))
            <li>{{Session('warning_message')}}</li>
            @endif
        </ul>
       
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
                    <a href='{{url('/cart')}}'><img src="../img/Group 51.png" alt="cart" class="cart"></a>
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
                    <img src="{{url(auth()->user()->avatar)}}" alt="profile" class="profile-header" style="width:50px;height:50px;border-radius:50%;">
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
            <img src="../img/side-bar.svg" alt="side-bar" style="margin-bottom: 30px;">
        </div>
        <div class="second-side-bar admin">
            <a href="{{ url('admin/adminDashboard')}}"> <img src="../img/Dashboard (1).svg" alt="dashboard"></a>
            <a href="{{ url('admin/adminMarketplace')}}"><img src="../img/marketplace.svg" alt="marketplace"></a>
            <a href="{{ url('admin/adminMyFarm')}}"><img src="../img/livestock-dashboard.svg" alt="livestock"></a>
            <a href="{{ url('admin/adminInvest')}}"><img src="../img/invest.svg" alt="marketplace"></a>
            <a href="{{ url('admin/adminInvestReturns')}}"><img src="../img/history.svg" alt="history"></a>
            <a href="{{ url('admin/adminWallet')}}"><img src="../img/wallet.svg" alt="wallet"></a>
            <a href="{{ url('admin/adminBlog') }}"><img src="../img/blog-pin.png" alt="blog-pin"> </a>
        </div>
        <div class="third-side-bar" style="display: flex;flex-direction: column; align-items: center;margin-bottom: 0px;">
            <a href="{{ url('admin/adminSettings')}}" style="margin-bottom: 30px;"><img src="../img/settings-clicked.png" class="currensly" alt="settings"></a>
            <img src="../img/log out.svg" alt="log-out">
        </div>
    </div>
    <div class="dashboard-container admin-setting">
        <div class="settings-header">
            <div class="settings-inner">
                <h1>Settings</h1>
                <div class="check-box-reset">
                    <!-- Rounded switch -->
                    <div class="round-switch-name">
                        <div class="switch-button">
                            <label class="switch">
                                <input type="checkbox" checked id="admin-chekbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <h2 class="disable" style="color: #8bc53e;">Active</h2>
                    </div>
                    <div class="reset-admin">
                        <img src="../img/admin-reset-off.png" alt="reset" class="reset-img">
                        <h2 class='res-h2'>Reset</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="setting-options">
            <div class="settings-heading yurrent">General Settings</div>
            <div class="settings-heading">Manage Users</div>
            <div class="settings-heading stars">Statistics</div>
            <div class="settings-heading">Inbox</div>
        </div>


        <!---General Settings starts-->
        <div class="display-general">
            <div class="general-settings generalify">
                <div class="general-ser">
                    <div class="head">General Settings</div>
                    <form class="general-settings-form">
                       
                        <label>Password:</label>
                        <button class="pass">Change Password</button> <br>
                        <div class="lb-auth">
                            <label>Two-Factor Auth:</label>
                            <div class="round-switch-name">
                                <div style="margin-left: 20px;" class="switch-button">
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <h2>Disabled</h2>
                            </div> <br>
                        </div>
                        <div class="save-changes">
                            <button>Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!---General Settings ends-->

        <!---Manager User Settings starts-->
        <div class="display-manage">
            <div class="general-settings managify">
                <div class="general-ser manage">
                    <div class="head">Manage Users</div>
                    <div class="users-list">
                        @foreach($user as $use)
                        <div class="user">
                            <div class="user-part">
                                <img src="../img/user-list-user.png" alt="user-avatar">
                                <p>{{ $use->email }}</p>
                            </div>
                            <div class="delete-edit-user">
                                <img src="../img/Priviledges.png" class="priv-setting" alt="priviledge">
                                <img src="../img/user-list-edit.png" class="edit-setting" alt="edit">
                                <a href="{{ $use->id }}"><img src="../img/user-list-delete.png" class="delete-setting" alt="delete"></a>
                                <!--Delete all manage users list starts-->
                                <div class="delete-modal invest btn-delete">
                                    <div class="delete-modal-container">
                                        <div class="close-delete-modal btn-delete-modal">x</div>
                                        <h1 style="margin-bottom: 50px;margin-top: 60px;text-align: center;">Are you sure you want to {{$use->status==1?'Deactive User' : 'Activate'}}?🙁</h1>
                                        <div class="yes-no-delete-modal">
                                            <button class="" style="padding: 0px"><a style="margin:15px;display:block" href="{{ route('activateUser', $use->id) }}">Yes</a></button>
                                            <button class="no no-delete-modal-btn">No</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                                <!--Delete all manage users list ends-->
                            </div>
                        </div>
                        @endforeach
                        <div class="line-add-user"><span>+</span>
                            <div>Add account</div>
                        </div>
                    </div>

                    <form class="general-settings-form">
                        <div class="save-changes">
                            <button class="delete-all">Delete All</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!---Manage Users Settings ends-->

        <!--Inbox settings starts-->
        <div class="display-general inbox">
            <div class="general-settings generalify">
                <div class="general-ser inbox">
                    <div class="head">General Messages</div>
                    <div class="all-mark">
                        <div>All</div>
                        <button>Mark all as read</button>
                    </div>
                    <div class="messages-catalog">
                        @foreach($messages as $message)
                        <div class="message-inner">
                            <small>{{ $message->user? $message->user->email : "toAdmin" }}</small>&nbsp;&nbsp;&nbsp;&nbsp;
                            <small  class='message-body-inbox'> {{ $message->message_body }}</small>&nbsp;&nbsp;&nbsp;&nbsp;
                            <small> {{ date('F d, Y', strtotime($message->created_at)) }}</small>
                        </div>
                        @endforeach
                    </div>
                    <div class="save-changes">
                        <button class="send-msg">Send a Message</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Inbox settings ends-->

        <!---Statistics settings starts-->
        <div class="display-stats">
            <div class="general-settings managify">
                <div class="general-ser stats">
                    <div class="head">Statistics & Analytics</div>
                    <select>
                        <option>This Year</option>
                        <option>This Month</option>
                        <option>This Week</option>
                        <option>Today</option>
                    </select>
                    <div class="general-information stats managify-settings">
                        <div class="info-1 diff">
                            <div class="info-images">
                                <img src="../img/admin-views.svg" alt="views">
                                <img src="../img/admin-stats.png" alt="stats">
                            </div>
                            <h5>Total Views</h5>
                            <h3>128</h3>
                            <p>Start from Jan 1, 2021</p>
                        </div>
                        <div class="info-2">
                            <div class="info-images">
                                <img src="../img/admin-products.svg" alt="views">
                            </div>
                            <h5>Total Products</h5>
                            <h2>{{ $products }}</h2>
                            <p class="add-new-product">updates every day.</p>
                        </div>
                        <div class="info-3">
                            <div class="info-images">
                                <img src="../img/admin-vector.png" alt="views">
                            </div>
                            <h5>Total Users</h5>
                            <h2>{{ $users }}</h2>
                            <p>New user noted every week</p>
                        </div>
                        <div class="info-4">
                            <div class="info-images">
                                <img src="../img/admin-cart.png" alt="stats">
                            </div>
                            <h5>Total Sales</h5>
                            <h2>{{ $orders }}</h2>
                            <p>Start from Jan 1, 2022</p>
                        </div>
                        <div class="info-4">
                            <div class="info-images">
                                <img src="../img/set-stat.png" alt="stats">
                            </div>
                            <h5>Total Products</h5>
                            <h2>{{ $products }}</h2>
                            <p>Updates every week</p>
                        </div>
                        <div class="info-1 diff">
                            <div class="info-images">
                                <img src="../img/not-set.png" alt="views">
                                <img src="../img/admin-stats.png" alt="stats">
                            </div>
                            <h5>Active Projects</h5>
                            <h3>10</h3>
                            <p>Projects currently investing</p>
                        </div>
                    </div>
                    <div class="farm-activities-setting">
                    <img width='90%' src="../img/Farm chart.svg" alt="farm-chart" class="farm-chart">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---Statistics settings ends-->

    <!--Change Password Modal starts-->
    <div class="admin-add-item change-password">
        <div class="admin-add-item-container">
            <div class="close-add-item" style="padding-top: unset;">x</div>
            <h1 style="margin-bottom: 20px;">Change Password</h1>
            <div class="old-password-flex">
                <label>Old Password:</label>
                <div class="password-visible">
                    <input type="password" style="margin-left: 15px;" class="pass-val old">
                    <img src="../img/invisible.png" alt="" class="toggle-password">
                </div>
            </div> <br>
            <div class="old-password-flex">
                <label>New Password:</label>
                <div class="password-visible">
                    <input type="password" style="margin-left: 15px;" class="pass-val new">
                    <img src="../img/invisible.png" alt="" class="toggle-password">
                </div>
            </div> <br>
            
            <div class="button-admin-container">
                <button class="add-item-submit admin-dash-submit ch"><span style="padding-left:47px ;padding-right: 46px;" class="edit-want-to-sell-span">Save</span> <img class="loader loader-edit" src="../img/loader-hifarm.gif" alt="#"> </button>
            </div>
        </div>
    </div>
    <!--Change Password Modal ends-->

    <!--Priviledges modal-->
    <!--Edit User to manage platform starts-->
    <div class="admin-add-item change-password admin-edit-priv priv">
        <div class="admin-add-item-container">
            <div class="close-add-item priv-close" style="padding-top: unset;">x</div>
            <h1 style="font-size:20px;margin-top:-25px;margin-bottom: 20px;display: flex;justify-content: center;">Accounts & Priviledges</h1>
            <div class="first-box">
                <input type="checkbox" checked class="toggle-priv">
                <div>All Priviledges</div>
            </div>
            <div class="second-box">
                <div class="third-box">
                    <div class="first-box this">
                        <input type="checkbox" checked class="all">
                        <div>General Settings</div>
                    </div>
                    <div class="first-box this">
                        <input type="checkbox" checked class="all">
                        <div>Blog Post</div>
                    </div>
                    <div class="first-box this">
                        <input type="checkbox" checked class="all">
                        <div>Manage Users</div>
                    </div>
                    <div class="first-box this">
                        <input type="checkbox" checked class="all">
                        <div>Message Replies</div>
                    </div>
                    <div class="first-box this">
                        <input type="checkbox" checked class="all">
                        <div>Security Settings</div>
                    </div>
                </div>
                <div class="fourth-box">
                    <div class="first-box this">
                        <input type="checkbox" checked class="all">
                        <div>Add/Edit Products</div>
                    </div>
                    <div class="first-box this">
                        <input type="checkbox" checked class="all">
                        <div>Add/Edit Projects</div>
                    </div>
                    <div class="first-box this">
                      <input type="checkbox" checked class="all">
                        <div>Account Settings</div>
                    </div>
                    <div class="first-box this">
                        <input type="checkbox" checked class="all">
                        <div>Manage Farms</div>
                    </div>
                    <div class="first-box this">
                        <input type="checkbox" checked class="all">
                        <div>Two Fact Auth</div>
                    </div>
                </div>
            </div>
            <div class="save-changes">
                <button class="save-priv">Save Changes</button>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
    <!--Priviledges modal ends-->

    <!--Edit User to manage platform starts-->
    <div class="admin-add-item change-password admin-edit-user">
        <div class="admin-add-item-container">
            <div class="close-add-item edit-user-close" style="padding-top: unset;">x</div>
            <h1 style="font-size:25px;margin-bottom: 20px;display: flex;justify-content: left;margin-top: 15px;">Edit User</h1>
            <div class="old-password-flex user">
                <label>Email:</label>
                <div class="password-visible user val">
                    <input type="email" class="pass-val user">
                </div>
            </div> <br>
            <div class="old-password-flex user">
                <label>Password:</label>
                <div class="password-visible user">
                    <input type="password" class="pass-val">
                    <img src="../img/invisible.png" alt="" class="toggle-password">
                </div>
            </div> <br>
            <div class="button-admin-container">
                <button class="add-item-submit admin-dash-submit"><span style="padding-left:47px ;padding-right: 46px;" class="edit-want-to-edit-span">Save</span> <img class="loader loader-user-edit" src="../img/loader-hifarm.gif" alt="#"> </button>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
    <!--Edit User to manage platform ends-->


    <!--Add User to manage platform starts-->
    <div class="admin-add-item change-password admin-add-user">
        <form action="{{route('add-user')}}" method="post">
            @csrf
        <div class="admin-add-item-container">
            <div class="close-add-item add-user-close" style="padding-top: unset;">x</div>
            <h1 style="font-size:25px;margin-bottom: 20px;display: flex;justify-content: left;margin-top: 15px;">Add User</h1>
            <div class="old-password-flex user">
                <label>Email:</label>
                <div class="password-visible user val">
                    <input type="email" class="pass-val user" name="email" required>
                </div>
            </div> <br>
            <div class="old-password-flex user">
                <label>Password:</label>
                <div class="password-visible user">
                    <input type="password" class="pass-val" name="password" required>
                    <img src="../img/invisible.png" alt="" class="toggle-password" name='password' required>
                </div>
            </div> <br>
            <div class="button-admin-container">
                <button type="submit" class="add-item-submit admin-dash-submit"><span style="padding-left:47px ;padding-right: 46px;" class="edit-want-to-add-span">Save</span> <img class="loader loader-add" src="../img/loader-hifarm.gif" alt="#"> </button>
            </div>
        </div>
    </form>
    </div>
    <div class="overlay"></div>
    <!--Add User to manage platform ends-->



    <!--Delete Item starts-->

    <div class="overlay"></div>
    <!--Delete item ends-->

    <!--Add new message post modal starts-->
    <div class="add-blog-post-modal admin-add-item msg-modal">
        <div class="blog-post-modal">
            <div class="head-and-back">
                <div>New Message</div>
                <img class="close-modal" style="cursor: pointer;" src="../img/back-blog.svg" alt="#">
            </div>
            <form method="POST" action="{{ url('admin/send-message') }}">
                @csrf
                <div class="blog-category">
                    <label>From:</label>
                    <input type="text" value=" {{ Auth::user()->email }}" disabled style="
                 padding: 10px;
                 margin-left: 10px;
                 width: 200px;
                 border: 1px solid #ebe8e8;
                 border-radius: 10px;
              ">
                </div>
                <div class="topic-date">
                    <div class="topic">
                        <label>To:</label>
                        <select class='recipient' name="recipient_id" style="width: 700px;height:30px;">
                            <option selected disabled>Select Recipient</option>
                            @foreach($user as $use)
                            <option value="{{ $use->id }}">{{ $use->email }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text">
                    <textarea name="message_body" id="" cols="30" rows="12" placeholder="Write message here..."></textarea>
                </div>
                <div class="add-pic-submit">
                    <button type="submit"><img src="../img/Direct.png" class="sent" alt="#" style="cursor: pointer;" width="70"></button>

                </div>
            </form>
        </div>
    </div>
    </div>
    <div class="inbox-overlay"></div>
    <!--Add new message post modal ends-->
    </div>
    <div class="overlay"></div>
    <script src="../js/dashboardHamburger.js"></script>
    <script src="../js/adminSettings.js"></script>
    <script>
$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

$('.ch').on('click',function(e){
      jQuery.ajax({
              url: "http://127.0.0.1:8000/change-password",
              method: "post",
              data: {
                  old:$('.old').val(),
                  new:$('.new').val(),
              },
              success: function (data) {
                alert("its going")
                $('.added-successfully').text(data.success)
              },
              error: function (e) {
                 $('.added-successfully').text(e.responseJSON.error)
              },
          });
      })
        function getNotification() {
      jQuery.ajax({
              url: "http://127.0.0.1:8000/user/messages",
              method: "get",
              success: function (data) {
                  data.messages.data.forEach(message => {
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