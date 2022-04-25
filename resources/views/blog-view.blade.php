<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('style.css')}}">
    <title>Blog Page</title>
</head>
<body>
    <!--Header starts here-->
    <header>
        <div class="header-container">
            <img src="img/logo.png" alt="logo" class="logo4x">
            <div class="services">
                <a href="index.html"><span>Home</span></a>
                <div class="gug">
                  <a href="about.html"><span>About</span></a>
                  <div class="about-children">
                      <a href="partners.html"><span>Our Partners</span></a>
                      <a href="faq.html"><span>FaQs</span></a>
                      <a href="gallery.html"><span>Gallery</span></a>
                    </div>
              </div>
              <div class="services-hover">
                  <a href="services.html"><span>Services</span></a>
                  <div class="service-hover">
                      <a href="sponsor.html"><span>Sponsors</span></a>
  
                    </div>
              </div>
                <a href="contact.html"><span>Contact</span></a>
                <a href="blog.html"><span>Blog</span></a>
            </div>
            <div class="buttons">
                <span class="register"><a href="signup.html">Sign up</a></span>
                <span class="login"><a href="signin.html">Login</a></span>
                <img src="img/get on google play.png" alt="play-store" class="play-store">
            </div>
            <div class="cart-whatsapp">
                  <img src="img/Group 51.png" alt="cart" class="cart">
                   <img src="img/Group 47@2x.png" alt="call" class="call">
                   <span class="cart-counter">0</span>
            </div>
        </div>
    </header>
    <!--Header Ends-->
  <!--Header Ends-->


  <!--Blog Page starts here-->    
   <div class="showcase-img blog">
       <div class="showcase-content">
        <h1>Blog</h1>
       </div>
   </div>
   <div class="about-description">
       Home <img src={{url("img/Arrow%201.svg")}} width="12"> Blog
   </div>

   <div class="blog-page-container">
       <p>{{$post->blog_category->name}} <span style="font-weight: 200;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}</span></p>
       <h1>{{$post->title}}</h1>

       <div class="blog-page-flex">
           <img src={{url($post->image_cover)}} alt="blog-image">
           <div class="social-icons">
            <p style="color: #A0D468;">Share Post</p>
            <svg width="40" height="40" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" fill="#A0D468"/>
                <path d="M70.4286 33H29.5714C28.7022 33 28 33.6906 28 34.5455V65.4545C28 66.3094 28.7022 67 29.5714 67H70.4286C71.2978 67 72 66.3094 72 65.4545V34.5455C72 33.6906 71.2978 33 70.4286 33ZM68.4643 38.3511V63.5227H31.5357V38.3511L30.1804 37.3128L32.1103 34.8739L34.2121 36.4821H65.7929L67.8946 34.8739L69.8246 37.3128L68.4643 38.3511ZM65.7929 36.4773L50 48.5511L34.2071 36.4773L32.1054 34.869L30.1754 37.308L31.5308 38.3463L48.3058 51.1736C48.7882 51.5422 49.3817 51.7423 49.9926 51.7423C50.6035 51.7423 51.197 51.5422 51.6795 51.1736L68.4643 38.3511L69.8196 37.3128L67.8897 34.8739L65.7929 36.4773Z" fill="#F5F5F5"/>
            </svg>
            <svg width="40" height="40" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" fill="#F5F5F5"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 50.2792C0 75.1375 18.0542 95.8083 41.6667 100V63.8875H29.1667V50H41.6667V38.8875C41.6667 26.3875 49.7208 19.4458 61.1125 19.4458C64.7208 19.4458 68.6125 20 72.2208 20.5542V33.3333H65.8333C59.7208 33.3333 58.3333 36.3875 58.3333 40.2792V50H71.6667L69.4458 63.8875H58.3333V100C81.9458 95.8083 100 75.1417 100 50.2792C100 22.625 77.5 0 50 0C22.5 0 0 22.625 0 50.2792Z" fill="#A0D468"/>
            </svg>
            <svg width="40" height="40" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" fill="#A0D468"/>
                <path d="M72.722 58.9948V51.7948H80V46.397H72.722V39.197H67.268V46.397H59.993V51.7948H67.268V58.9948H72.722ZM38.186 39.0007C41.5906 39.0007 43.8834 40.4401 45.1876 41.6654L50.3621 36.6989C47.2129 33.7844 43.1051 32 38.186 32C28.1555 31.997 20 40.0625 20 49.9985C20 59.9346 28.1555 68 38.186 68C48.6823 68 55.6508 60.6929 55.6508 50.4149C55.6508 48.919 55.4585 47.8573 55.1911 46.7271H38.177V53.4364H48.1895C47.7147 56.2647 45.1515 61.0379 38.186 61.0379C32.1671 61.0379 27.257 56.0862 27.257 50.0223C27.257 43.9494 32.1671 39.0007 38.186 39.0007Z" fill="#F5F5F5"/>
            </svg>
            <svg width="40" height="40" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" fill="#F5F5F5"/>
                <path d="M50 0C22.3854 0 0 22.3854 0 50C0 77.6146 22.3854 100 50 100C77.6146 100 100 77.6146 100 50C100 22.3854 77.6146 0 50 0ZM70.3385 40.9583C70.3594 41.3854 70.3646 41.8125 70.3646 42.2292C70.3646 55.25 60.4635 70.2552 42.349 70.2552C36.9963 70.2641 31.755 68.7268 27.2552 65.8281C28.0208 65.9219 28.8073 65.9583 29.6042 65.9583C34.2187 65.9583 38.4635 64.3906 41.8333 61.7448C39.7798 61.7045 37.79 61.0245 36.1412 59.7996C34.4925 58.5747 33.2669 56.8659 32.6354 54.9115C34.1102 55.1919 35.6294 55.1331 37.0781 54.7396C34.8492 54.2889 32.8448 53.0811 31.4047 51.3212C29.9647 49.5612 29.1776 47.3574 29.1771 45.0833V44.9635C30.5052 45.6979 32.026 46.1458 33.6406 46.1979C31.551 44.8069 30.0718 42.6702 29.5054 40.2246C28.9391 37.7791 29.3284 35.2096 30.5937 33.0417C33.0675 36.0833 36.1524 38.5716 39.6488 40.3454C43.1452 42.1191 46.9751 43.1389 50.8906 43.3385C50.3928 41.2256 50.6071 39.0073 51.5 37.0287C52.393 35.05 53.9147 33.4218 55.8285 32.3972C57.7423 31.3726 59.941 31.009 62.0828 31.3629C64.2246 31.7168 66.1894 32.7684 67.6719 34.3542C69.8759 33.9181 71.9895 33.1097 73.9219 31.9635C73.1873 34.2455 71.6493 36.1832 69.5938 37.4167C71.5461 37.1815 73.4524 36.6567 75.25 35.8594C73.9296 37.838 72.2663 39.5648 70.3385 40.9583Z" fill="#A0D468"/>
            </svg>                
           </div>
       </div>
       <p class="blog-content">{{$post->content}}</p>
   </div>
  <!--Blog page end-->

  <!--Footer starts here-->
  <footer class="signup-footer">
    <div class="footer-container">
        <div class="footer-info">
            <img src="img/logo.png" alt="logo" width="75">
            <p>We are industry leading organic farm delivering the best products that boost your daily life energy and potential.</p>
             <div class="footer-social">
                 <a href="#"><img src="img/whatsapp-footer.svg" alt="whatsapp" width="20"></a>
                 <a href="#"><img src="img/ig.svg" alt="instagram" width="20"></a>
                 <a href="#"><img src="img/twitter-footer.png" alt="twitter" width="20"></a>
                 <a href="#"><img src="img/fb-footer.png" alt="facebook" width="20"></a>
             </div>
           </div>
        <div class="footer-links">
            <p>Links</p>
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>Services</li>
                <li>Blog</li>
                <li>Contact</li>
            </ul>
         </div>
         <div class="footer-address">
             <p class="address-head">Corporate Headquarters</p>
             <p class="address">Block 22, Mahe Gora Plaza, No. 2A Birnin Kebbi/Argungu Expressway, Birnin Kebbi, KebbI State.</p>
             <p>08034068234</p>
             <p>hifarmsltd@gmail.com</p>
         </div>
         <div class="footer-newsletter about-page">
             <p class="newsletter-head">Newsletter</p>
             <p>Subscribe to our newsletter to receive weekly news, update, special offers, exclusive discounts</p>
               <div class="form-subscribe">
                 <input type="email" placeholder="Enter your email">
                 <button>Subscribe</button>
               </div>
               <svg width="103" height="42" viewBox="0 0 103 42" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="103" height="42" rx="5" fill="url(#pattern0)"/>
                <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_88_5643" transform="translate(-0.00827294) scale(0.0028716 0.00704225)"/>
                </pattern>
                <image id="image0_88_5643" width="354" height="142" xlink:href="data:image/png;base64,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"/>
                </defs>
                </svg>
            
                <img src="img/get on google play.png" alt="play-store" style="margin-left: 14px;" class="play-store" width="109">
         </div>
        </div>
        <div class="copyright-hifarms">&copy; copyright 2022 hifarmsWeb</div>
 </footer>
  <!--Footer ends-->
<script src="/hifarms-web/public/js/main.js"></script>  
</body>
</html>