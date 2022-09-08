@extends('layout.app')
@section('title')
<title>Hifarms | About</title>
@endsection

@section('content')
  <!--About Page starts here-->
   <div class="showcase-img">
       <div class="showcase-content">
        <h1>About Us</h1>
        <p class="font-weight:500;">We are industry-leading organic farm delivering the best products
         that boost your daily life energy and potential.</p>
       </div>
   </div>
   <div class="about-description">
       Home <img src="img/Arrow 1.svg" width="12"> About
   </div>
   <div class="about-history">
       <h1>ABOUT Hi FARMS</h1>
       <h1 class="history-about"></h1>
       <div class="about-grid">
           <div class="about-showcase" style="color:#6E7A89;" data-aos="fade-left">
               <p>Established in 2018, Hi Farms is related to HIB Group. HiFarms specializes in creation and management of biosystems. We run a farming system with simultaneous activities involving crop and animal all year round. 
                   <br><br>
                We collaborate with local populations, engaging them in provincial agricultural operations and projects by creating job opportunities during the projects.
                    <br><br>
                Hi Farms manages diverse farming and livestock projects impacting the lives of millions, and is committed to providing people with new opportunities.Among our long list of agricultural products include;
                     <br><br><br>
                Livestock - Cow, Goats, Snail, Poultry, Fish 
                Crops - Tomato, Maize, Rice, Cassava, 
                We also carry out artificial insemination for animals</p>
           </div>
           <img src="img/unsplash_IQVFVH0ajag.png" data-aos="fade-right" alt="farm-image" width="980">
       </div>
   </div>
   <div class="mission-vision">
       <h1>OUR MISSION AND VISION</h1>
       <div class="mission-vision-grid">
           <div class="mission-grid" data-aos="zoom-in">
               <img src="img/Group (5).png" alt="quotes">
               <p style="color: #6E7A89;">Our mission is to improve lives of Nigerians by increasing access to quality and high standard agricultural products</p>
               <span>Mission</span>
           </div>
           <div class="vision-grid" data-aos="zoom-out">
            <img src="img/Group (5).png" alt="quotes">
            <p style="color: #6E7A89;">To be recognised as a premier capacity building and agricultural 
                business services provider in the markets we operate in.</p>
            <span>Vision</span>
        </div>
       </div>
   </div>
   <div class="what-drives-us">
      <div class="what-drives-us-content" data-aos="slide-up">
       <h1>WHAT DRIVES US</h1>
       <div></div>
       <p>At Hi Farms, we are driven by the Global pursuit for the Sustainable Development Goals and we believe playing our part towards achieving the goals. <br> <br>   Our services and projects aim at reducing poverty to bearest minimum; achieving zero hunger by providing affordable and quality agricultural products that will nourish homes; attaining good health and well-being through well nourished homes; ensuring agriculture makes cities and communities sustainable; securing life below water and life on land</p>
        <img src="img/Group 71.png" alt="image" width="800">
    </div>
    </div>
    <div class="ui-wahala" data-aos="fade-right"><img src="img/Picture2 1.png" alt="image" width='100%'></div>
    <div class="quote">
        <div class="quote-content">
            <img src="img/Vector (1).svg" alt="vector" class="first-vector">
            <p>“The ultimate goal of farming is not the growing of crops, 
                but the cultivation and perfection of human beings.”</p>
                <p class="quote-name">Masanobu Fukuoka</p>
            <img src="img/Vector (6).png" alt="vector" class="second-vector">
        </div>
    </div>
    <div class="purpose">
        <div class="purpose-grid">
            <div class="purpose-content" data-aos="fade-left">
                <h1>Our Purpose</h1>
                <div class="line"></div>
            <p>The purpose of the project is to contribute towards providing food security, improving the economy, youth empowerment through job creation as well as add value to the lives of all the stakeholders within the cycle. The project is expected to realize the following goals:
            </p>
            <ul>
                <li>To empower youth</li>
                <li>To create sustainable employment</li>
                <li>To contribute towards poverty alleviation</li>
                <li> To ultimately create youth participatory self-sustaining development at local levels</li>
            </ul>
        </div>
        <img src="img/unsplash_nKsAB0kH190.png" alt="image" data-aos="fade-right">
        </div>
    </div>
    <div class="land-hectre" data-aos="slide-up">
        <h1>Land Hectre</h1>
        <h1 class="hectre-line"></h1>
        <div class="land-hectre-img">
            <img src="img/Land hector.png" alt="img" width="526" class="land-img" data-aos="zoom-in">
        </div>
    </div>
  <!--About page end-->

 @endsection('content')
 @section('js')
<script src="/hifarms-web/public/js/main.js"></script>
@endsection('js') 
</body>
</html>