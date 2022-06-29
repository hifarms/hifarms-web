<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Investment</title>
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
        <div class="third-side-bar">
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
                <th style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;">Withdrawal
                <br>(₦)</th>
                <th style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;">Total (₦)</th>
              </tr>
  <tr>
     <th style="padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;color:rgba(64, 74, 61, 1);">1</th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:10px;padding-right:10px;">LSF/01/001/001</th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:0px;padding-right:50px;">Class A</th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:12px;padding-right:12px;">6/20/2022</th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:0px;padding-right:7px;">500,000</th>
                <th style="padding-top:5px;padding-bottom:5px;padding-left:10px;color:rgba(64, 74, 61, 1);padding-right:10px;">20%</th>
                <th style="padding-top:10px;padding-bottom:10px;color:rgba(64, 74, 61, 1);padding-left:20px;padding-right:20px;">100,000</th>
                <th style="padding-top:10px;padding-bottom:10px;color:rgba(64, 74, 61, 1);padding-left:10px;padding-right:10px;">50,000</th>
                <th style="padding-top:10px;padding-bottom:10px;color:rgba(64, 74, 61, 1);padding-left:10px;padding-right:10px;">506,000</th>
              </tr>
  </tr>
  <tr>
  <tr>
     <th style="padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;color:rgba(64, 74, 61, 1);">2</th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:10px;padding-right:10px;">LSF/01/001/001</th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:0px;padding-right:50px;">Class A</th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:12px;padding-right:12px;">6/20/2022</th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:0px;padding-right:7px;">500,000</th>
                <th style="padding-top:5px;padding-bottom:5px;padding-left:10px;color:rgba(64, 74, 61, 1);padding-right:10px;">20%</th>
                <th style="padding-top:10px;padding-bottom:10px;color:rgba(64, 74, 61, 1);padding-left:20px;padding-right:20px;">100,000</th>
                <th style="padding-top:10px;padding-bottom:10px;color:rgba(64, 74, 61, 1);padding-left:10px;padding-right:10px;">50,000</th>
                <th style="padding-top:10px;padding-bottom:10px;color:rgba(64, 74, 61, 1);padding-left:10px;padding-right:10px;">506,000</th>
              </tr>
  </tr>
  <tr>
     <th style="padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;color:rgba(64, 74, 61, 1);"></th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:10px;padding-right:10px;"> Total</th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:0px;padding-right:50px;"></th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:12px;padding-right:12px;"></th>
                <th style="padding-top:0px;padding-bottom:0px;color:rgba(64, 74, 61, 1);padding-left:0px;padding-right:7px;">750,000</th>
                <th style="padding-top:5px;padding-bottom:5px;padding-left:10px;color:rgba(64, 74, 61, 1);padding-right:10px;"></th>
                <th style="padding-top:10px;padding-bottom:10px;color:rgba(64, 74, 61, 1);padding-left:20px;padding-right:20px;">100,000</th>
                <th style="padding-top:10px;padding-bottom:10px;color:rgba(64, 74, 61, 1);padding-left:10px;padding-right:10px;">50,000</th>
                <th style="padding-top:10px;padding-bottom:10px;color:rgba(64, 74, 61, 1);padding-left:10px;padding-right:10px;">506,000</th>
              </tr>
  </tr>
  </tr>
</table>
</div>
            @foreach(auth()->user()->investments as $investment)
                @if($investment->order->payment && $investment->order->payment->status_code==200)
                <span>
                    {{$investment->id}}
                </span>-----<span>{{$investment->amount}}</span><br>
                @endif
            @endforeach
            <div class="buttons">
                <button id="csv"><img src="img/csv.svg" width="120"></button>
                <button id="pdf"><img src="img/pdf.svg" width="120"></button>
            </div>
        </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
      <script type="text/javascript" src="libs/FileSaver/FileSaver.min.js"></script>
      <script type="text/javascript" src="libs/jsPDF/jspdf.umd.min.js"></script>
    <script type="text/javascript" src="tableExport.min.js"></script>
    <script>
      $("#csv").on("click", function () {
        $("#example").tableExport({ type: "csv", filename: "sample.csv" });
      });
      $("#pdf").on("click", function () {
        $("#example").tablezExport({ type: "pdf", filename: "sample.pdf" });
      });
    </script>
</body>
</html>