<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional/EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE-edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order summary</title>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto:ital,wght@1,300&display=swap');
  body {
      font-family: 'Quicksand', Arial, Helvetica, sans-serif;
      margin: 0;
      background-color: #cccccc;
  }
  table {
      border-spacing: 0;
  }
  td {
      padding: 0;
  }
  img {
      border: 0;
  }
  .wrapper{
      width: 100%;
      table-layout: fixed;
      background-color: #cccccc;
      padding-bottom: 20px;
      position: relative;
  }
  .main{
      background-color: #ffffff;
      margin: 0 auto;
      width: 100%;
      max-width: 600px;
      border-spacing: 0;
      font-family: 'Quicksand', Arial, Helvetica, sans-serif;
      color: #4a4a4a;
      position: relative;
  }
  .two-columns{
      font-size: 0;
  }
  .two-columns .column{
      width: 100%;
      max-width: 300px;
      display: inline-block;
      vertical-align: top;
  }
  .button{
      background-color: #f1408a;
      color: #ffffff;
      text-decoration: none;
      padding: 12px 20px;
      font-weight: bold;
      border-radius: 5px;
  }
  .three-columns{
      text-align: center;
      font-size: 0;
      padding: 35px 0px 20px;
  }
  .three-columns .column{
      width: 100%;
      max-width: 200px;
      display: inline-block;
      vertical-align: top;
  }
  .three-columns .padding{
      padding: 20px;
  }
  .three-columns .content{
      font-size: 15px;
      line-height: 20px;
  }
  .two-columns.last{
      padding: 15px 0px;
      text-align: center;
  }
  .two-columns .padding{
      padding: 10px;
  }
  .two-columns .content {
      font-size: 15px ;
      line-height: 20px;
      text-align: left;
  }
  @media(max-width: 600px) {
   .content.note{
       text-align: center;
       padding-bottom: 15px;
    }
  }

</style>
</head>
<body>
 <center class="wrapper">

    <table class="main" width="100%">

<!-- BORDER -->
    <tr>
        <td height="5" style="display:block;width:50%;background-color: #A5CD3D;"></td>
    </tr>
  
<!--FLOWER IMAGE-->
 
     <tr>
        <td><img style="position: absolute;top:-75px;right:-39px;" src="{{asset('img/Flower.svg')}}" alt=""></td>
     </tr>

<!-- LOGO SECTION --> 
     <tr>
         <td style="padding:14px 0 4px;">
             <table width="100%">

                <tr>
                    <td class="two-columns">

                        <table class="column">
                            <tr>
                                <td style="padding: 30px 55px 20px;">
                                    <a href="#"><img src="{{asset('img/logo.png')}}" alt="logo" width="180" title="Logo"></a>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>

             </table>
         </td>
     </tr>


<!-- TITLE, TEXT & BUTTON -->
      <tr>
          <td style="padding: 5px 0 50px;">
              <table width="100%">

                  <tr>
                      <td style="padding-top: 15px;padding-bottom: 15px;padding-left: 55px;padding-right: 55px;">

                       <p style="color: #404a3d;font-size: 20px;font-weight: bold;">Hi {{auth()->user()->username}}, <img src="{{asset('img/Farmer Icon.svg')}}" alt="farmer-icon" style="margin-right: 5px;margin-left: 2px;" width="33px"></p>
                       <p style="color: #404a3d;font-size: 15px; line-height: 23px;padding: 5px 0 15px;">Thanks for farming with Hi Farms, your order #{{$order->id}}, has 
                        been confirmed and currently being processed:</p>
  
                      <h1 style="font-weight: bold;font-size:20px;margin-top: 25px;margin-left: 6px;color: #EFB443;margin-bottom: -6px;">[Order #{{$order->id}}] ({{ date('F d, Y', strtotime($order->created_at)) }})</h1>
                      </td>
                  </tr>
                   <tr>
                    <td>
                        <table style="border-collapse: collapse; width: 80%;margin: auto;">
                            <tr>
                              <th style="  border: 1px solid #dddddd;
                          color:#AEB8AB;padding-top:20px;padding-bottom:20px;padding-right:59px">Product/Investment</th>
                              <th style="  border: 1px solid #dddddd;text-align: center;
                            padding: 8px;color:#AEB8AB;">Quantity</th>
                              <th style="  border: 1px solid #dddddd;color:#AEB8AB;padding-top:20px;padding-bottom:20px;padding-left:0px">Price</th>
                            </tr>
                            @foreach($order->orderitems as $item)
                            <tr>
                              <td  style="  border: 1px solid #dddddd;text-align: left;color:#AEB8AB;padding-top:25px;padding-bottom:25px;padding-left:35px;padding-right: 10px;">
                                @if($item->product_id)
                                {{$item->product->name}}(physical)
                                @else
                                {{$item->farm->name}}(digital)
                                @endif
                            </td>
                             <td  style="  border: 1px solid #dddddd;text-align: center;
                            padding: 8px;color:#AEB8AB;padding-top:25px;padding-bottom:25px;width:100px">x{{$item->unit}}</td>
                             <td style="  border: 1px solid #dddddd;text-align: left;
                            padding: 8px;color:#AEB8AB;padding-top:25px;padding-bottom:25px;padding-left:35px">₦{{  number_format($item->amount,0,'.',',')}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td  style="  border: 1px solid #dddddd;text-align: left;color:#AEB8AB;padding-top:25px;padding-bottom:25px;padding-left:35px;border-right:none;border-bottom:none"><strong>Subtotal:</strong></td>
                                <td  style="  border: 1px solid #dddddd;text-align: center;
                              padding: 8px;color:#AEB8AB;padding-top:25px;padding-bottom:25px;width:100px;border-left:none;border-bottom:none"></td>
                                <td style="  border: 1px solid #dddddd;text-align: left;
                              padding: 8px;color:#AEB8AB;padding-top:25px;padding-bottom:25px;padding-left:35px;border-left:none">₦{{number_format($order->total_amount,0,'.',',')}}</td>
                              </tr>
                              
                              <tr>
                              <td  style="  border: 1px solid #dddddd;text-align: left;color:#AEB8AB;padding-top:25px;padding-bottom:25px;padding-left:35px;border-right:none;border-top:none;border-bottom:none"><strong>Payment Method:</strong></td>
                              <td  style="  border: 1px solid #dddddd;text-align: center;
                            padding: 8px;color:#AEB8AB;padding-top:25px;padding-bottom:25px;width:100px;border-left:none;border-top:none;border-bottom:none"></td>
                              <td style="  border: 1px solid #dddddd;text-align: left;
                            padding: 8px;color:#AEB8AB;padding-top:25px;padding-bottom:25px;padding-left:35px;border-left:none">{{$order->payment->method}}</td>
                            </tr>
                            <tr>
                              <td  style="  border: 1px solid #dddddd;text-align: left;color:#AEB8AB;padding-top:25px;padding-bottom:25px;padding-left:35px;border-right:none;border-top:none"><strong>Delivery Fee:</strong></td>
                              <td  style="  border: 1px solid #dddddd;text-align: center;
                            padding: 8px;color:#AEB8AB;padding-top:25px;padding-bottom:25px;width:100px;border-left:none;border-top:none"></td>
                              <td style="  border: 1px solid #dddddd;text-align: left;
                            padding: 8px;color:#AEB8AB;padding-top:25px;padding-bottom:25px;padding-left:35px;border-left:none">Birnin Kebbi/500</td>
                            </tr>
                              <tr>
                              <td  style="  border: 1px solid #dddddd;text-align: left;color:#AEB8AB;padding-top:25px;padding-bottom:25px;padding-left:35px;border-right:none;border-top:none"><strong>Total:</strong></td>
                              <td  style="  border: 1px solid #dddddd;text-align: center;
                            padding: 8px;color:#AEB8AB;padding-top:25px;padding-bottom:25px;width:100px;border-left:none;border-top:none"></td>
                              <td style="  border: 1px solid #dddddd;text-align: left;
                            padding: 8px;color:#AEB8AB;padding-top:25px;padding-bottom:25px;padding-left:35px;border-left:none">₦{{$order->total_amount}}</td>
                            </tr>
                          
                          </table>
                          <h1 style="margin-bottom: 16px; padding-left:55px;font-weight: bold;font-size:20px;margin-bottom:10px;margin-left: 6px;color: #EFB443;margin-bottom: -6px;">Billing Address</h1>
                         <tr>
                            <td style="padding-top: 10px;padding-bottom: 10px; width: 75%; margin-top: 25px;display: inline-block;padding-left:33px;margin-left:62px;border: 1.5px solid #ddd;color: #AEB8AB;">
                                <span>{{auth()->user()->fullname}}</span> <br>
                                <span>{{auth()->user()->address}}</span> <br>
                                <span>{{auth()->user()->phone}}</span> <br>
                                <span>{{auth()->user()->email}}</span> <br>
                            </td>
                         </tr>     
                         <tr>
                            <td style="display: inline-block;margin-top:35px;padding-left:65px;color: #404a3d;margin-bottom: 30px;">
                                <span>Order is reserved for 3hours after which will be due for</span> <br>
                                <span>Cancellation</span> <br>
                                <span>Here is our delivery Timeline:</span> <br>
                                <span>Kebbi: 1hour</span> <br>
                                <span>Sokoto: 2-3hours</span> <br>
                                <span> Other cities: (4-7working days)</span> <br> <br>
                                <span>Kindly allow extra days based on order and location.</span>
                                <span>For more information: call: {tel:09029733905}</span> <br> <br>
                                <span>Thanks for shopping with Hi Farms</span> <br>
                                <span style="color: #A5CD3D;">Always keep yourself norished!</span><br>
                                <span>We look forward to fulfilling your order soon.</span>
                            </td>
                         </tr>        
                    </td>
                   </tr>
              </table>
          </td>
      </tr>

<!-- FOOTER SECTION -->
    
    <tr>
        <td style="background-color:#ffffff; color: #404a3d;"> 
            <table width="100%">

                <tr>
                    <td style="text-align: center;padding: 0px 20px; font-size: 15px;">
                        
                        <p style="padding: 10px;padding-bottom: 10px;font-size: 11px;"> Copyright Hi Farms 2022 • Proudly Made by Hi B Teams. Kebbi, Nigeria 🇳🇬</p>
                        <a href="#" style="padding: 5px;"><img src="{{asset('img/email-sm-4.svg')}}" alt="SM" width="28"></a>
                        <a href="#" style="padding: 5px;"><img src="{{asset('img/email-sm-3.svg')}}" alt="SM" width="28"></a>
                        <a href="# "style="padding: 5px;"><img src="{{asset('img/email-sm-2.svg')}}" alt="SM" width="28"></a>
                        <a href="# "style="padding: 5px;"><img src="{{asset('img/email-sm-1.svg')}}" alt="SM" width="28"></a>
                        <p style="padding-left: 55px;padding-right:55px;padding-top: 10px;padding-bottom:40px;font-size: 11px;">You are receiving this message because you signed up on Hi Farms. For more information about how we 
                          process data, please see our <a href="#">Privacy Policy</a>.
                          </p> 
  
                      </td>
                </tr>

                <tr>
                    <td><img style="position: absolute;bottom:-55px;left:-39px;" src="{{asset('img/Flower.svg')}}" alt=""></td>
                 </tr>
            

            </table>
        </td>
    </tr>

     </table> 

  </center>

</body>
</html>