@extends('layout.app')

@section('content')
  <!--Services Page starts here-->
   <div class="showcase-img services">
       <div class="showcase-content">
        <h1>Services</h1>
       </div>
   </div>
   <div class="about-description">
       Home <img src="img/Arrow 1.svg" width="12"> Services
   </div>
   <div class="about-history services">
       <h1>OUR SERVICES</h1>
       <h1 class="history-about"></h1>
       <div class="about-grid"></div>
   </div>
   <div class="services-grid-image">
       <div class="line"></div>
       <div class="oval"></div>
       <div class="services-grid">
           <div class="service-grid-1">
            <h1 class="first-h1">TRAINING & DEVELOPMENT</h1>
               <img src="img/R&I.png" alt="image">
               <h1 class="second-h1">TRAINING & DEVELOPMENT</h1>
           </div>
           <div class="service-grid-2">
            <h1>RESEARCH & DEVELOPMENT</h1>
            <img src="img/T&D.png" alt="image">
        </div>
        <div class="service-grid-3">
            <h1 class="first-h1">AGRITECH SOLUTIONS</h1>
            <img src="img/MS.png" alt="image">
            <h1 class="second-h1">AGRITECH SOLUTIONS</h1>
        </div>
        <div class="service-grid-4">
            <h1>MECHANISED SERVICES</h1>
            <img src="img/AS.png" alt="image">
        </div>
       </div>
   </div>
   <div class="what-we-do">
       <h1>WHAT WE DO - ANIMALS & CROPS</h1>
       <h1 class="line"></h1>
       <div class="image-container">
           <img src="img/Group 87 (1).png" alt="farm-animals" class="farm-animals-1">
       <img src="img/Group 87.png" alt="farm-animals" class="farm-animals-2">
    </div>
   </div>
   <div class="invest-with-us">
       <div class="invest-content">
        <h1>INVEST WITH US</h1>
       </div>
   </div>
   <div class="opportunities">
       <div class="opportunities-grid">
           <div class="grid-1">
               <img src="img/vector1.png" alt="vector">
               <p>CONVENIENT INVESTMENT PLANS (TIMELY CASHOUT)</p>
           </div>
           <div class="grid-2">
            <img src="img/vector2.png" alt="vector">
            <p>IMPRESSIVE PRODUCTIVITY AND QUALITY</p>
        </div>
        <div class="grid-3">
            <img src="img/vector3.png" alt="vector">
            <p>PARTNERSHIP OPPORTUNITIES</p>
        </div>
        <div class="grid-4">
            <img src="img/vector4.png" alt="vector">
            <p>MOST INVESTOR FRIENDLY INVESTMENT</p>
        </div>
        <div class="grid-5">
            <img src="img/vector5.png" alt="vector">
            <p>OVER 20% ROI</p>
        </div>
        <div class="grid-6">
            <img src="img/vector6.png" alt="vector">
            <p>RETAIL OPPORTUNITIES</p>
        </div>
       </div>
   </div>

   <div class="our-partners">
       <h1>OUR PARTNERS</h1>
       <h1 class="line"></h1>
       <div class="partners-container">
           <img src="img/PB 1.png" alt="providus-bank">
           <img src="img/partner 2 1.png" alt="CBN">
       </div>
   </div>
   <div class="why-choose-us">
       <div class="why-choose-flex">
           <div class="flex-1">
            <div class="flex-1-content">
               <h1>Why Choose</h1>
               <p>HiFarms</p>
            </div>
            </div>
            <div class="flex-2">
                <div style="background: #49A760;">
                    <img src="img/Polygon 1.svg" alt="">
                     <p>High quality farm product.</p>
                </div>
                <div style="background: #6E7A89CC;">
                    <img src="img/Polygon 1.svg" alt="">
                      <p>Safe Investment. </p>
                </div>
                <div style="background: #49A760;">
                    <img src="img/Polygon 1.svg" alt="">
                      <p>Chemical free products.</p> 
                </div>
                <div style="background: #6E7A89CC;">
                    <img src="img/Polygon 1.svg" alt="">
                     <p>On stop Farming solutions.</p>
                </div>
                <div style="background: #49A760;">
                    <img src="img/Polygon 1.svg" alt="">
                     <p>Qualified Hands.</p>
                </div>
                <div style="background: #6E7A89CC;">
                    <img src="img/Polygon 1.svg" alt="">
                     <p> Ensure reliable Outcome</p>
                </div>
            </div>
       </div>
   </div>
   <div class="egg-container">
       <img src="img/eggs 1.png" alt="eggs" width="100%">
   </div>
  <!--Services page end-->

@endsection('content')

@section('js')
<script src="/hifarms-web/public/js/main.js"></script>
@endsection('js')  
</body>
</html>