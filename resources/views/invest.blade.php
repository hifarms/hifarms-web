<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta name="_token" content="{{ csrf_token() }}" />
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <title>Invest</title>
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
            <a href="dashboard"> <img src="img/Dashboard.svg" alt="dashboard" class="current"> <p>Dashboard</p></a>
            <a href="marketplace"><img src="img/marketplace.svg" alt="marketplace"> <p>Marketplace</p></a>
            <a href="user-farms"><img src="img/livestock-dashboard.svg" alt="livestock"> <p>Manage my farm</p></a>
            <a href="farm-invest"><img src="img/invest.svg" alt="marketplace"> <p>Invest In a Project</p></a>
            <a href="investment"><img src="img/history.svg" alt="history"> <p>ROI</p></a>
            <a href="wallet kun"><img src="img/wallet.svg" alt="wallet"> <p>Wallet</p></a>
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
<div class="added-successfully">
        Processed!!
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
            <a href="dashboard"> <img src="img/Dashboard (1).svg" alt="dashboard" ></a>
            <a href="marketplace"><img src="img/marketplace.svg" alt="marketplace"></a>
            <a href="user-farms"><img src="img/livestock-dashboard.svg" alt="livestock"></a>
            <a href="invest"><img src="img/invest-current.svg" alt="marketplace" class="current"></a>
            <a href="investment"><img src="img/history.svg" alt="history"></a>
            <a href="wallet"><img src="img/wallet.svg" alt="wallet"></a>
        </div>
        <div class="third-side-bar" style="display: flex;flex-direction: column; align-items: center;margin-bottom: 10px;">
            <a href="user-settings"><img src="img/settings.png" style="margin-bottom: 30px;" alt="settings"></a>
            <img src="img/log out.svg" alt="log-out">
        </div>
    </div>
    <div class="dashboard-container sponsor mrkt-plc">
        <h1 class="h1">Invest In A Project.</h1>
        <div class="sponsor-container">
            <form>
            <div class="sponsors-flex dashboard">
                <p class="filter-heading dashboard">FILTER BY PRICE</p>
                <p class="showing-result">Showing {{$products->currentPage()}}-{{$products->lastPage()}}</p>
                <select class="sponsor-option dashboard sort" name="sort">
                    <option value="all">Sort By</option>
                    <option value="new">Newest</option>
                    <option value="old">Oldest</option>
                </select>
            </div>
            <div class="sponsor-grid dashboard">
                <div class="sponsor-option">
<div class="spd">                    
                    <div class="sponsor-checkbox dashboard">
                        
                    <div class="sponsors-flex dashboard show-this">
                        <p class="showing-result">Showing {{$products->currentPage()}}-{{$products->lastPage()}}</p>
                        <select class="sponsor-option dashboard " name="">
                            <option value="all">Sort By</option>
                            <option value="new">Newest</option>
                            <option value="old">Oldest</option>
                        </select>
                    </div>

                    <div class="filter">
                           
                                <div class="mobile-category">
                                <h2 class="filter-mobile">Filter By Price</h2>
                                 <div class="line" style="height: 1px;width: 100%;background: #c4c4c4;margin-bottom: 10px;"></div>
                                </div>
                                <input type="range" min="0" max="50000" step="0.1" value="{{old('range')==null? 0 :old('range')}}" name='range' class="rate">
                                <input type="submit" class="button-filter" value='FILTER'>
                                <p class="filter-price">Price: ₦ 0 - ₦ 50,000</p>
                                 <h3 class="sponsor-categories mobile-hide">CATEGORIES</h3>
                                 <div class="line hide" style="height: 1px;width: 100%;background: #c4c4c4;margin-bottom: 10px;"></div>
                            </div>
                        <div class="line mobile-hide" style="height: 1px;width: 300px;background: #c4c4c4;margin-bottom: 10px;"></div>
                        @foreach($category as $cat)
                        <div class="flex dashboard">
                            <input type="checkbox" class="check" name="category[]" value="{{$cat->id}}" name='{{ $cat->name }}' {{old('category')  && in_array($cat->id,old('category')) ? 'checked':null}}>
                            <p class="sponsor-crop dashboard">{{ $cat->name }}</p>
                            <P class="quant">0</P>
                        </div>
                        @endforeach
                    </form>
                    <div class="mobile-category">
                    <h3 class="sponsor-categories">CATEGORIES</h3>
                    <div class="line" style="height: 1px;width: 100%;background: #c4c4c4;margin-bottom: 10px;"></div>
                    </div>
                    </div>
</div>
                   
                </div>
                <div class="sponsor-data dashboard marketplace">
                    @foreach($products as $product)                        
                    <div class="grid dashboard invest">
                        <p class="label {{$product->label->color}}">{{$product->label->name}}</p>
            <img class="marketplace-image invest"src={{url($product->image)}}  alt="">
            <h1>{{$product->name}}</h1>
            <div class="sponsor-inner-flex">
                <img src={{url("img/location.svg")}} alt="">
                <p>{{$product->location}}</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src={{url("img/graph.svg")}} alt="">
                <p>{{$return->percentage}}% return</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src={{url("img/calendar.svg")}} alt="">
                <p>{{$return->duration}}</p>
            </div>
            <div class="sponsor-inner-flex">
                <img src={{url("img/sponsor-cart.svg")}} alt="">
                <p>{{round(($product->c_units/$product->i_units)*100)}}%</p>
            </div>
            <div class="purchase-div invest">
            <h3>₦ {{$product->unit_price}}</h3>
            @if($product->label->name == "New")
            <button class="investBtn" id="{{$product->id}}">Invest</button>
            @endif
            </div>
            </div>
            
                    @endforeach
                   
                </div>
            </div>
              {{-- <div >
                {{$products->links()}}
            </div> --}}
            </div>
            
          
    </div>

       <!--Add User to manage platform starts-->
       <div class="admin-add-item change-password admin-add-user invest-modal">
        <div class="admin-add-item-container">
            <div class="close-add-item add-user-close" style="padding-top: unset;">x</div>
            <h1 style="font-size:21px;margin-bottom: 20px;display: flex;justify-content: center;margin-top: 8px;">Invest In a Project</h1>
             {{-- <div class="profile-id">
                 <div class="profile-idj">
                     <label style="font-weight:unset;">Profile Number:</label> <br>
                     <input type="text" disabled value="ADKR018394747">
                 </div>
                 <div class="invest-id">
                     <label style="font-weight:unset;">Investment ID:</label> <br>
                     <input type="text" value="LSF/01/001/001" disabled>
                 </div>
             </div> --}}
            <div class="type-date">
                <div class="invest-type">
                    <label style="font-weight:unset;">Investment Type:</label> <br>
                    <select name="investment-type" class="finvestment">
                        <option value="1">Class A Investment</option>
                        <option value="2">Class B Investment</option>
                        <option value="3">Class C Investment</option>
                    </select>
                </div>

            </div>
            {{-- <div class="amount-invest">
                <label style="font-weight:unset;">Amount Invested(₦)</label>
                <input type="text" class="famount" name="amount">
            </div> --}}
            <input type="hidden" class="farmselected" value="" name="farmid">
            <div class="button-admin-container"  style="margin-top: 0px;">
                    <button class="add-item-submit admin-dash-submit investmentBtn"><span style="padding-left:36px ;padding-right: 36px;" class="span-class">Proceed</span>  <img class="loader loader-span" src="img/loader-hifarm.gif" alt="#"> </button>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
      <!--Add User to manage platform ends-->
     <script src="js/userInvest.js"></script>
    <script src="js/marketplace.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>

    <script>
            function getCartNum(){
    jQuery.ajax({
                url: "http://127.0.0.1:8000/cartnum",
                method: "get",
                success: function (data) {
                const cartCounter = document.querySelector('.cart-counter');
                const cartTotal = document.querySelector('.total-price');
                cartCounter.innerHTML = data.cartNumber;
                cartTotal? cartTotal.innerHTML = data.total:null;
                },
                error: function (e) {
                    console.log(e);
                },
            });
}

getCartNum()

          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

         $('.investBtn').on('click',function(e){
            e.preventDefault();
            $('.farmselected').val(this.id);
         });
        $('.investmentBtn').on('click',function(){
            jQuery.ajax({
                    url: "http://127.0.0.1:8000/addcart/investment",
                    method: "post",
                    data: {
                        id:$('.farmselected').val(),
                        unit:1,
                        // amount:$('.famount').val(),
                        investmentType:$('.finvestment').val()
                    },
                    success: function (data) {
                        alert(data.success)
                    },
                    error: function (e) {
                      alert(e.responseJSON.error)
                    },
                });
            })
            $('.sort').on('change',(e)=>{
                e.preventDefault()
        $('form')[0].submit()
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
      <script src="js/dashboardHamburger.js"></script>
</body>
</html>