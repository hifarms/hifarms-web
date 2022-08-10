<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Settings</title>
    <meta name="_token" content="{{ csrf_token() }}" />
    <script src="{{asset('js/jquery.min.js')}}"></script>
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
            <a href="user-settings"><img src="img/settings.png" alt="settings"> <p>Settings</p></a>
            <a href=""><img src="img/log out.svg" alt="settings"> <p>Logout</p></a>
    </div>
    <div class="guide-dash">
        <img src="img/Notifications.png" alt="notifications" class="notifications">
        <img src="img/Guides.png" alt="guides" width="32">
    </div>
      </div>
    <!--Dashboard Hamburger Ends-->
    <div class="mail-sent">
        <img src="img/mail-sent.png" alt="mail" style="margin-right: 10px;">
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
    <header class="dashbrd-header">
        <div class="dashboard-header">
            <img src="img/hamburger.svg" alt="#" id="hamburger" class="hamburger1">
            <div class="header-img">
                <img src="img/logo.png" class="logo1x" alt="logo" width="113">
            </div>
            <div class="header-icons">
                <div class="cart-whatsapp cart-whatsapp-dash">
                    <a href='{{url('/cart')}}'><img src='img/Group 51.png' alt="cart" class="cart"></a>
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
            <a href="wallet"><img src="img/wallet.svg" alt="wallet"></a>
        </div>
        <div class="third-side-bar" style="display: flex;flex-direction: column; align-items: center;margin-bottom: 10px;">
            <a href="user-settings"><img src="img/settings-clicked.png" class="current" style="margin-bottom: 30px;" alt="settings"></a>
            <img src="img/log out.svg" alt="log-out">
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
                <img src="img/admin-reset-off.png" alt="reset" class="reset-img">
                <h2 class='res-h2'>Reset</h2>
            </div>
        </div>
       </div>
    </div>
    <div class="setting-options">
        <div class="settings-heading current">General Settings</div>
        <div class="settings-heading">Projects</div>
        <div class="settings-heading stars">Weather</div>
        <div class="settings-heading">Live Location</div>
    </div>


    <!---General Settings starts-->
    <div class="display-general">
       <div class="general-settings generalify">
           <div class="general-ser">
           <div class="head">General Settings</div>
           <form class="general-settings-form">
               {{-- <label>Full Name:</label>
               <input type="text"> <br>
               <label>Email:</label>
               <input type="text"> <br>
               <label>Phone Number:</label>
               <select>
                   <option>+234</option>
               </select> --}}
               {{-- <input type="text"> <br> --}}
               <label>Password:</label>
               <button class="pass">Change Password</button> <br>
               <div class="lb-auth">
                <label>Two-Factor Auth:</label>
                <div class="round-switch-name">
                 <div  style="margin-left: 20px;" class="switch-button">
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

     <!--Change Password Modal starts-->
     <div class="admin-add-item change-password">
        <div class="admin-add-item-container">
            <div class="close-add-item" style="padding-top: unset;">x</div>
            <h1 style="margin-bottom: 20px;">Change Password</h1>
            <div class="old-password-flex">
                <label>Old Password:</label>
                <div class="password-visible">
                   <input type="password" name="old" style="margin-left: 15px;" class="pass-val old">
                   <img src="img/invisible.png" alt="" class="toggle-password">
                </div>
            </div> <br>
            <div class="old-password-flex">
                <label>New Password:</label>
                <div class="password-visible">
                   <input type="password" name="new" style="margin-left: 15px;" class="pass-val new">
                   <img src="img/invisible.png" alt="" class="toggle-password">
                </div>
            </div> <br>
            
            <div class="button-admin-container">
                <button class="add-item-submit admin-dash-submit ch"><span style="padding-left:47px ;padding-right: 46px;" class="edit-want-to-sell-span">Save</span>  <img class="loader loader-edit" src="img/loader-hifarm.gif" alt="#"> </button>
            </div>
        </div>
    </div>
      <!--Change Password Modal ends-->
<div class="overlay"></div>
<script>
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
  });

 
  $('.ch').on('click',function(){
      jQuery.ajax({
              url: "http://127.0.0.1:8000/change-password",
              method: "post",
              data: {
                  old:$('.old').val(),
                  new:$('.new').val(),
              },
              success: function (data) {
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
<script src="js/adminSettings.js"></script>
<script src="js/dashboardHamburger.js"></script>
</body>
</html>