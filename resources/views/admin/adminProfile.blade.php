<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <meta name="_token" content="{{ csrf_token() }}" />
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <title>Profile</title>
</head>
<body>
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
                <a href="{{ url('admin/adminDashboard')}}"> <img src="../img/Dashboard.svg" alt="dashboard" class="current"> <p>Dashboard</p></a>
                <a href="{{ url('admin/adminMarketplace')}}"><img src="../img/marketplace.svg" alt="marketplace"> <p>Marketplace</p></a>
                <a href="{{ url('admin/adminMyFarm')}}"><img src="../img/livestock-dashboard.svg" alt="livestock"> <p>Manage my farm</p></a>
                <a href="{{ url('admin/adminInvest')}}"><img src="../img/invest.svg" alt="marketplace"> <p>Invest In a Project</p></a>
                <a href="{{ url('admin/adminInvestReturns')}}"><img src="../img/history.svg" alt="history"> <p>ROI</p></a>
                <a href="{{ url('admin/adminWithraw')}}"><img src="../img/wallet.svg" alt="wallet"> <p>Wallet</p></a>
                <a href="{{ url('admin/adminBlog') }}"><img src="../img/blog-pin.png" alt="blog-pin"> <p>Blog</p></a>
            </div>
        </div>
        <div class="third-se-bar">
                <a href="{{ url('admin/adminSettings')}}"><img src="../img/settings.png" alt="settings"> <p>Settings</p></a>
                <a href="{{ url('logout') }}"><img src="../img/log out.svg" alt="settings"> <p>Logout</p></a>
        </div>
        <div class="guide-dash">
            <img src="../img/Notifications.png" alt="notifications" class="notifications">
            <img src="../img/Guides.png" alt="guides" width="32">
        </div>
          </div>
        <!--Dashboard Hamburger Ends-->
    <!--Dashboard Hamburger Ends-->
<div class="added-successfully">
        Profile Updated!!
    </div>
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
                    <p>Help & Guide
                        Click Here to download 
                        Hi Farms instruction 
                        Manual.</p>
                  </div>
             </div>
            <div class="profile-inclusive">
                <img src="../img/Profile.png" alt="profile" class="profile-header">
                <div class="my-profile-log-out">
                    <button><a href="adminProfile.html">My Profile</a></button>
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
            <a href="{{ url('admin/adminDashboard')}}"> <img src="../img/Dashboard.svg" alt="dashboard" class="current"></a>
            <a href="{{ url('admin/adminMarketplace')}}"><img src="../img/marketplace.svg" alt="marketplace"></a>
            <a href="{{ url('admin/adminMyFarm')}}"><img src="../img/livestock-dashboard.svg" alt="livestock"></a>
            <a href="{{ url('admin/adminInvest')}}"><img src="../img/invest.svg" alt="marketplace"></a>
            <a href="{{ url('admin/adminInvestReturns')}}"><img src="../img/history.svg" alt="history"></a>
            <a href="{{ url('admin/adminWithraw')}}"><img src="../img/wallet.svg" alt="wallet"></a>
            <a href="{{ url('admin/adminBlog') }}"><img src="../img/blog-pin.png" alt="blog-pin"> </a>
        </div>
        <div class="third-side-bar" style="display: flex;flex-direction: column; align-items: center;margin-bottom: 0px;">
         <a href="{{ url('admin/adminSettings')}}"><img src="../img/settings.png" alt="settings"></a>
         <a href="{{ url('logout') }}"><img src="../img/log out.svg" alt="log-out"></a>
        </div>
    </div> 
    @include('include.success')
                    @include('include.warning')
                    @include('include.error')
    <div class="dashboard-container profile">
        <h1>My Profile.</h1>
        <p class="use-pro">Hello {{ Auth::user()->username }}</p>
        <div class="profile-hero">
            <img src="../img/avatar.png" alt="profile-image" class="profile-image">
            <p>{{ Auth::user()->fullname }}</p>
            <input type="file" hidden class="file">
            <button class="upload-img">Upload Image</button>
        </div>
        <div class="profile-details">
            <div class="contact">Contact: {{ Auth::user()->phone }}</div>
            <div class="gender">Gender: {{ Auth::user()->gender }}</div>
            <div class="email">Email: {{ Auth::user()->email }}</div>
            <div class="soo">State of Origin: {{ Auth::user()->state }}</div>
            <div class="occupation">Occupation: {{ Auth::user()->occupation }}</div>
            <div class="address">Residence Address: {{ Auth::user()->address }}</div>
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
			<form method="POST" action="{{ url('admin/update-profile') }}">
                @csrf
            <label class="class-name" name="fullname">Full Name</label> <br>
            <input type="text"placeholder="Enter your name" class="name ffullname" name="fullname" value="{{$user->fullname}}">
            <div class="category-percentage-flex" style="justify-content:left;">
                <div class="percentage">
                    <label>Contact</label>  <br>
                    <input type="text" value="{{$user->phone}}" name="contact" class="contact-input fcontact" placeholder="Enter your contact">
                </div>
                <div class="category">
                    <label>Email</label> <br> 
                    <input class="category-select contact-input" placeholder="Enter your email" value="{{$user->email}}">    
                </div>
            </div>
            <div class="category-percentage-flex" style="justify-content:left;">
                <div class="percentage">
                    <label>Bank Name</label>  <br>
                    <input type="text" class="contact-input fbank-name" name="bank_name" value="{{$user->bank->bank_name}}" placeholder="Enter your contact">
                </div>
                <div class="percentage">
                    <label>Bank Account Name</label>  <br>
                    <input type="text" class="contact-input facc-name" name="acc_name" value="{{$user->bank->bank_acc_name}}" placeholder="Enter your contact">
                </div>
                <br>
                <div class="category">
                    <label>Account Number</label> <br> 
                    <input type="text" class="category-select contact-input facc-no" name="acc_no" value="{{$user->bank->bank_acc_no}}" placeholder="Enter your email">    
                </div>
            </div>
            <div class="category-percentage-fle" style="margin-bottom: 10px;justify-content:left;">
                <div class="percentage">
                    <label>Occupation</label>  <br>
                    <input type="text"    name="occupation" class="contact-input foccupation" value="{{$user->occupation}}" placeholder="Enter your occupation">
                </div>
                <div class="category">
                    <label>State Of Origin</label> <br> 
                    <select class="this-select" name="state">
                        <option value="Sokoto">Sokoto</option>
                        <option value="Kebbi">Kebbi</option>
                        <option value="Zamfara">Zamfara</option>
                    </select>  
                </div>
            </div>
            <label class="admin-location">Residential Address</label> <br>
            <input type="text"  class="admin-location-input faddress" value="{{$user->address}}" name="address" placeholder="Enter residential address">
             <br>
            <div class="button-admin-container">
            <button class="add-item-submit" type="submit"><span style="padding-left:39px ;padding-right: 40px;">Update</span>  </button>
            </div>
            </form>
        </div>
    </div>
    <!--edit profile Modal ends-->
    <div class="overlay"></div>

    <script src="../js/userProfile.js"></script>
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