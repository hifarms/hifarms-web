<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Investment</title>
    <meta name="_token" content="{{ csrf_token() }}" />
    <script src="{{asset('js/jquery.min.js')}}"></script>
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
            <a href="dashboard"> <img src="img/Dashboard (1).svg" alt="dashboard"></a>
            <a href="marketplace"><img src="img/marketplace.svg" alt="marketplace"></a>
            <a href="user-farms"><img src="img/livestock-dashboard.svg" alt="livestock"></a>
            <a href="farm-invest"><img src="img/invest.svg" alt="marketplace"></a>
            <a href="investment"><img src="img/returns-current.svg" alt="history" class="current"> </a>
            <a href="wallet"><img src="img/wallet.svg" alt="wallet"></a>
        </div>
        <div class="third-side-bar" style="display: flex;flex-direction: column; align-items: center;margin-bottom: 10px;">
            <a href="adminSettings.html"><img src="img/settings.png" style="margin-bottom: 30px;" alt="settings"></a>
            <img src="img/log out.svg" alt="log-out">
        </div>
    </div>
    <div class="dashboard-container returns">
        <h1>Investment Returns.</h1>
        
        <div class="investment-returns">
            <div class="total-investment">
                <p>Total Investment</p>
                <p>₦ {{$total_invest}}.00</p>
            </div>
            <div class="total-returns">
                <p>Total Investment Returns</p>
                <p>₦ {{$total_return}}.00</p>
            </div>
            <div class="active-projects">
                <p>Active Projects</p>
                <p>{{$active}}</p>
            </div>
        </div>

        <div class="investment-table">
            <!--Show, if there is no investment
            <p>You have no investments yet.</p>
             -->
             <div class="profile-investment">
                 <div class="profile-number">
                     <label>Profile Number:</label> <br>
                     <input type="text" value="ADKR018394747" disabled>
                 </div>
                 <div class="investment-id" style="margin-left: 20px;">
                     <label>Investment ID:</label> <br>
                     <input type="text" value="LSF/01/001/001" disabled>
                 </div>
             </div>
             <div class="scroll-table">
             <table id="example">
               <tr>
                <th style="padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;">S/N</th>
                <th style="padding-top:5px;padding-bottom:5px;padding-left:10px;padding-right:10px;">Investment ID</th>
                <th style="padding-top:5px;padding-bottom:5px;padding-left:10px;padding-right:10px;">Investment Type</th>
                <th style="padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:30px;">Date</th>
                <th style="padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;">Amount Invested (₦)</th>
                <th style="padding-top:5px;padding-bottom:5px;padding-left:10px;padding-right:10px;">ROI (%)</th>
                <th style="padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;">Annual Return <br> 
                 on Investment (₦)</th>
                <br>(₦)</th>
                <th style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;">Total (₦)</th>
                <th style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;">Status</th>
                <th style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;">Action</th>

              </tr>
              @php($counter=0)
              @foreach(auth()->user()->investments as $investment)
              @if($investment->order->payment && $investment->order->payment->status_code==200 && boolval($investment->farm_id))
  <tr>
     <th style="padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;color:rgba(64, 74, 61, 1);"> {{++$counter }}</th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:10px;padding-right:10px;">{{$investment->id}}</th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:0px;padding-right:50px;">{{$investment->returntype->name}}</th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:12px;padding-right:12px;">{{explode(' ',$investment->created_at)[0]}}</th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:0px;padding-right:7px;">{{$investment->amount}}</th>
                <th style="padding-top:5px;padding-bottom:5px;padding-left:10px;color:rgba(64, 74, 61, 1);padding-right:10px;">{{$investment->returntype->percentage}}</th>
                <th style="padding-top:10px;padding-bottom:10px;color:rgba(64, 74, 61, 1);padding-left:20px;padding-right:20px;">{{($investment->returntype->percentage/100)*$investment->amount}}</th>

                <th style="padding-top:10px;padding-bottom:10px;color:rgba(64, 74, 61, 1);padding-left:10px;padding-right:10px;">{{$investment->amount + ($investment->returntype->percentage/100)*$investment->amount}}</th>
                <th style="padding-top:10px;padding-bottom:10px;color:rgba(64, 74, 61, 1);padding-left:10px;padding-right:10px;">@if(boolval($investment->delivered) && !boolval($investment->cleared_to_wallet)) <div>Return ready</div> @elseif(boolval($investment->delivered) && boolval($investment->cleared_to_wallet))  <div>Cashout</div> @elseif(!boolval($investment->delivered) && !boolval($investment->cleared_to_wallet)) <div>Ongoing</div> @elseif(!boolval($investment->delivered) && boolval($investment->cleared_to_wallet)) <div>Terminated</div> @endif</th>
                <th style="padding-top:10px;padding-bottom:10px;color:rgba(64, 74, 61, 1);padding-left:10px;padding-right:10px;">@if(boolval($investment->delivered))<button class="move-to-wallet" id="{{$investment->id}}" {{boolval($investment->cleared_to_wallet)? "disabled":null}}>Move to Wallet</button> @else <button class="terminate-to-wallet" id="{{$investment->id}}" {{boolval($investment->cleared_to_wallet) && !boolval($investment->delivered) ? "disabled":null}}>Terminate</button> @endif</th>

              </tr>
  </tr>

  @endif
@endforeach
</table>
</div>
            <div class="buttons">
                <button id="csv"><img src="img/csv.svg" width="120"></button>
                <button id="pdf"><img src="img/pdf.svg" width="120"></button>
            </div>
        </div>
    </div>
<script>
     $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        
    $('.move-to-wallet').on('click',function(){
        let  id= this.id;
         jQuery.ajax({
                 url: `http://127.0.0.1:8000/move-to-wallet`,
                 method: "post",
                 data:{
                     id:id
                 },
                 success: function (data) {
                  alert(data.success)
                  this.disabled = true;
                 },
                 error: function (e) {
                    console.log(e);
                 },
             });
         })

         $('.terminate-to-wallet').on('click',function(){
        let  id= this.id;
         jQuery.ajax({
                 url: `http://127.0.0.1:8000/terminate-to-wallet`,
                 method: "post",
                 data:{
                     id:id
                 },
                 success: function (data) {
                  alert(data.success)
                  this.disabled = true;
                 },
                 error: function (e) {
                    console.log(e);
                 },
             });
         })
</script>
</body>
</html>