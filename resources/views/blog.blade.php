<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('style.css')}}">
    <title>Blog</title>
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
       Home <img src="img/Arrow 1.svg" width="12"> Blog
   </div>
   
   <div class="blog-flex">
     <p class="current-blog all-blog">ALL</p>
     <P class="agritech">AgriTech</P>
     <p class="agric-science">Agric Sciences</p>
     <p class="update">Updates</p>
     <p class="success-story">Success Stories</p>
     <p class="out-break">Out Breaks</p>
     <p class="others">Others</p>
     <div class="flex-line"></div>
   </div>
   
   <div class="all-blog-container">
    @foreach($posts as $post)
    <div class="blog-flex-grid">
      <div class="blog-content">
           <h4>{{$post->blog_category->name}} <span style="font-weight: 300;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}
        </span></h4>
           <h1>{{$post->title}}.</h1>
           <p>{{$post->content}}.</p>
       </div>
       <img src={{url($post->image_cover)}} alt="">
    </div>
   @endforeach
</div>


<div class="agritech-container" style="display: none">
@foreach($posts as $post)
@if($post->blog_category->name=='agritech')
    <div class="blog-flex-grid">
        <div class="blog-content">
            <h4>{{$post->blog_category->name}} <span style="font-weight: 300;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}</span></h4>
            <h1>{{$post->title}}.</h1>
           <p>{{$post->content}}.</p>
        </div>
        <img src={{url($post->image_cover)}} alt="">
    </div>
    @endif
    @endforeach
</div>

<div class="agric-science-container" style="display: none">
@foreach($posts as $post)
@if($post->blog_category->name=='agric-science')

    <div class="blog-flex-grid">
        <div class="blog-content">
            <h4>{{$post->blog_category->name}} <span style="font-weight: 300;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}</span></h4>
            <h1>{{$post->title}}.</h1>
            <p>{{$post->content}}.</p>
        </div>
        <img src={{url($post->image_cover)}} alt="">
    </div>
    @endif
    @endforeach
</div>


<div class="update-blog-container" style="display: none">
@foreach($posts as $post)
@if($post->blog_category->name=='updates')
    <div class="blog-flex-grid">
        <div class="blog-content">
            <h4>{{$post->blog_category->name}} <span style="font-weight: 300;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}</span></h4>
            <h1>{{$post->title}}.</h1>
            <p>{{$post->content}}.</p>
        </div>
        <img src={{url($post->image_cover)}} alt="">
    </div>
@endif
@endforeach
</div>

<div class="success-stories-blog" style="display: none">
@foreach($posts as $post)
@if($post->blog_category->name=='success-stories')
    <div class="blog-flex-grid">
        <div class="blog-content">
            <h4>{{$post->blog_category->name}} <span style="font-weight: 300;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}</span></h4>
            <h1>{{$post->title}}.</h1>
            <p>{{$post->content}}.</p>
        </div>
        <img src={{url($post->image_cover)}} alt="">
    </div>
@endif
@endforeach
</div>

<div class="out-break-blog" style="display: none">
@foreach($posts as $post)
@if($post->blog_category->name=='out-break')
<div class="blog-flex-grid">
    <div class="blog-content">
        <h4>{{$post->blog_category->name}} <span style="font-weight: 300;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}</span></h4>
        <h1>{{$post->title}}.</h1>
        <p>{{$post->content}}.</p>
    </div>
    <img src={{url($post->image_cover)}} alt="">
</div>
@endif
@endforeach
</div>

<div class="other-blog" style="display: none">
@foreach($posts as $post)
@if($post->blog_category->name=='other')
    <div class="blog-flex-grid">
        <div class="blog-content">
            <h4>{{$post->blog_category->name}} <span style="font-weight: 300;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}</span></h4>
            <h1>{{$post->title}}.</h1>
            <p>{{$post->content}}.</p>
        </div>
        <img src="img/unsplash_KEKVOJt7lOY.png" alt="">
    </div>
@endif
@endforeach
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
<<<<<<< HEAD:public/blog.html
<script src="../public/js/main.js"></script>  
=======
<script src="/js/main.js"></script>  
>>>>>>> a95d9ab67ad486b1986c9e47c40b080835585298:resources/views/blog.blade.php
</body>
</html>