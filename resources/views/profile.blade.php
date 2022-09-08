<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profile | {{$user->username}}</title>    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">


    <meta name="_token" content="{{ csrf_token() }}" />
    <script src="{{asset('js/jquery.min.js')}}"></script>
</head>
<body style='background:#F0F3F4;'>
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
    @if(Session('success_message'))
    <div class="added-successfully added-successfully-blade">
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
      <img src="img/hamburger.svg" alt="#" id="hamburger" class="hamburger1">
        <div class="header-img">
            <a href='https://hifarms.ng'><img src="img/logo.png" class="logo1x" alt="logo" width="113"><a>
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
                <img src="{{auth()->user()->avatar}}" style="width:50px;height:50px;border-radius:50%;"  alt="profile" class="profile-header">
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
            <a href="user-settings"><img src="img/settings.png" style="margin-bottom: 30px;" alt="settings"></a>
            <a href='logout'><img src="img/log out.svg" alt="log-out"></a>
        </div>
    </div> 
    <div class="dashboard-container profile">
        <h1>My Profile.</h1>
        <p class="use-pro">Hello {{ explode(' ',$user->fullname)[0]}}</p>
        <div class="profile-hero">
            <img src="{{$user->avatar}}" id="changed-image" class="profile-image" alt="profile-image">
            <p>{{ $user->fullname }}</p>
            <input type="file" hidden class="file add-photos">
            <button class="upload-img">Upload Image</button>
        </div>
        <div class="profile-details">
            <div class="contact">Contact: <span>{{$user->phone}}</span></div>
            <div class="gender">Gender: <span>{{$user->gender}}</span></div>
            <div class="email">Email: <span>{{$user->email}}</span></div>
            <div class="soo">State of Origin: <span>{{$user->state}}</span></div>
            <div class="email">Bank Name:  <span>{{$user->bank->bank_name}} </div>
            <div class="soo">Account Name:  <span>{{$user->bank->bank_acc_name}}</div>
            <div class="soo">Account Number:  <span>{{$user->bank->bank_acc_no}}</div>
            <div class="occupation">Occupation: <span>{{$user->occupation}}</span></div>
            <div class="address">Residence Address: <span>{{$user->address}}</span></div>
        </div>
        <div class="buttons-profile">
            <button class="edit-profile">Edit Profile</button>
        </div>
    </div>
   
    
       <!--edit profile Modal Begins-->
       <div class="admin-add-item edit-profile-modal edit-prof">
        <div class="admin-add-item-container">
            <div class="close-add-item">x</div>
            <h1 style="text-transform: unset;margin-bottom: 10px;">Edit Profile</h1>
			<form method="POST" action="{{ url('update-profile') }}">
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
                    <input class="category-select contact-input" placeholder="Enter your email" value="{{$user->email}}" disabled>    
                </div>
            </div>
            <div class="category-percentage-flex" style="justify-content:left;">
                <div class="percentage">
                    <label>Bank Name</label>  <br>
                    <input type="text" class="contact-input fbank-name" name="bank_name" value="{{$user->bank->bank_name}}" placeholder="Enter your Bank Name">
                </div>
                <div class="percentage">
                    <label>Bank Account Name</label>  <br>
                    <input type="text" class="contact-input facc-name" name="acc_name" value="{{$user->bank->bank_acc_name}}" placeholder="Enter your Bank Account Name">
                </div>
                <br>
                <div class="category">
                    <label>Account Number</label> <br> 
                    <input type="text" class="category-select contact-input facc-no" name="acc_no" value="{{$user->bank->bank_acc_no}}" placeholder="Enter your Bank No." style='width:100%!important'>    
                </div>
            </div>
            <div class="category-percentage-fle" style="margin-bottom: 10px;justify-content:left;">
                <div class="percentage">
                    <label>Occupation</label>  <br>
                    <input type="text"    name="occupation" class="contact-input foccupation" value="{{$user->occupation}}" placeholder="Enter your occupation">
                </div>
              
                

                <div class="category">
                    <label>Gender</label> <br> 
                    <select class="this-select" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>  
                </div>
                
            </div>
            
                <label class="admin-location">State</label>  <br>
                <input type="text"    name="state" class="admin-location-input faddress" value="{{$user->state}}" placeholder="Enter your state">
            
            <br>
            <br>
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

    <script src="js/userProfile.js"></script>
    <script>
        $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
           }
       });

       $('.update-profile').on('click',function(){
           jQuery.ajax({
                   url: "https://hifarms.ng/update-profile",
                   method: "post",
                   data: {
                       fullname:$('.ffullname').val(),
                       occupation:$('.foccupation').val(),
                       state:$('.fstate').val(),
                       acc_name:$('.facc-name').val(),
                       acc_no:$('.facc-no').val(),
                       bank_name:$('.fbank-name').val(),
                       address:$('.faddress').val(),
                       contact:$('.fcontact').val(),
                   },
                   success: function (data) {
                       console.log(data)
                       
                   },
                   error: function (data) {
                    console.log(e);
                      console.log(data.error);
                   },
               });
      
       })
const imageFile = document.querySelector('.add-photos');

imageFile.addEventListener("change", function(){
  const reader = new FileReader();
  reader.addEventListener('load', ()=>{
    uploadedImage = reader.result;
    let image = document.querySelector('#changed-image');
    image.setAttribute('src', uploadedImage);
  })
  reader.readAsDataURL(this.files[0]);
  let formdata = new FormData()
    formdata.append('image',imageFile.files[0])
    jQuery.ajax({
      url: `https://hifarms.ng/update-profile-pic`,
      method: 'post',
      cache:false,
      contentType: false,
      processData: false,
      data:formdata,
      success: function(data){
       alert(data.success);
      },
      error: function(e){
          console.log(e);
      }
    
    });
})
function getNotification() {
            jQuery.ajax({
                    url: "https://hifarms.ng/user/messages",
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
    <script src="js/dashboardHamburger.js"></script>
</body>
</html>