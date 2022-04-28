@extends('layout.app')

@section('content')
  <!--Home Page starts here-->
    <div class="showcase-home-image">
        <div class="showcase-home-content">
            <h1>hi Farms</h1>
            <p class="sub-1" style="font-weight: 500;">...nourishing humanity</p>
            <p class="sub-2">“The ultimate goal of farming is not the growing of crops, but the cultivation and perfection of human beings.”</p>
            <p style="font-weight: 500;">Masanobu Fukuoka</p>
              <div class="button-container">
                  <button class="sb-3">Read More</button>
                  <button class="sb-4">Read More</button>
              </div>
        </div>
        <div class="image-container">
            <img src="img/Rectangle 11.png" alt="image">
            <img src="img/Rectangle 13.png" alt="image">
            <img src="img/Rectangle 15.png" alt="image" class="grid3">
        </div>
    </div>
    <img src="img/Right.svg" alt="right-icon" id="right-icon">
     <img src="img/Left.svg" alt="left-icon" id="left-icon">
    <div class="homepage-services">
        <img src="img/Flower.svg" alt="flower" class="flower-services" width="300">
        <div class="images-grid">
            <div class="grid">
                <img src="img/Group.svg" alt="vector">
                <h1>Fresh Vegetable</h1>
                <p>Lorem ipsum dolor sit amet adipisicing, sedioeius mod tempor incididunt.</p>
            </div>
            <div class="grid grid-2">
                <img src="img/Group (1).svg" alt="vector">
                <h1>Diary Products</h1>
                <p>Lorem ipsum dolor sit amet adipisicing, sedioeius mod tempor incididunt.</p>
            </div>
            <div class="grid grid-3">
                <img src="img/Group (2).svg" alt="vector" class="vector-3">
                <h1>Agricutural Products</h1>
                <p>Lorem ipsum dolor sit amet adipisicing, sedioeius mod tempor incididunt.</p>
            </div>
        </div>
    </div>
    <div class="nutrition-home-page">
        <div class="nutrition-grid">
            <img src="img/Rectangle 17.png" alt="image" width="400" height="570">
            <div class="nutrition-content">
                <h3>ABOUT HI FARMS</h3>
                <h1>Find your potential with good nutrition</h1>
                <p>Established in 2018, Hi Farms is related to HIB Group. HiFarms specializes in creation and management of biosystems. We run a farming system with simultaneous activities involving crop and animal all year round. <br><br>

                    We collaborate with local populations, engaging them in provincial agricultural operations and projects by creating job opportunities during the projects. <br><br>
                    
                    Hi Farms manages diverse farming and livestock projects...</p>
                <div class="tools-image">
                <div class="tractor-image">
                        <img src="img/harvest.svg" alt="">
                        <div class="pararaph">
                            <h3>1950</h3>
                            <p>Tons of harvest</p>
                        </div>
                </div>
                <div class="tractor-image">
                    <img src="img/tractor.svg" alt="" class="tractor2">
                    <div class="pararaph">
                        <h3>128</h3>
                        <p>Units of technic</p>
                    </div>
                </div>
            </div>
                <div class="button-container">
                    <button class="sb-2">Read More</button>
                    <button class="sb-3">Read More</button>
                </div>          
            </div>
        </div>
    </div>
    <div class="services-homepage">
        <div class="services-menu">
            <h3>WHAT WE DO</h3>
            <h1>Our Services</h1>
            <div class="homepage-service-grid">
                <img src="img/mango.svg" alt="icon">
                <div class="grid">
                   <h1>Research Development</h1>
                   <p>Vegetables from FreshDirect. Our farms deliver to us daily, ensuring you only eat the best of what's in season</p>
                </div>
            </div>
            <div class="homepage-service-grid">
                <img src="img/tractor.svg" alt="icon">
                <div class="grid">
                   <h1>Mechanized Services</h1>
                   <p>Vegetables from FreshDirect. Our farms deliver to us daily, ensuring you only eat the best of what's in season</p>
                </div>
            </div>
            <div class="homepage-service-grid">
                <img src="img/maize.svg" alt="icon">
                <div class="grid">
                   <h1>Agritech Solutions</h1>
                   <p>Vegetables from FreshDirect. Our farms deliver to us daily, ensuring you only eat the best of what's in season</p>
                </div>
            </div>
            <button>View More</button>
        </div>
    </div>
    <div class="special-offers">
        <h1>Special Offers</h1>
        <div class="offers-flex">
            <div class="flex">
                <img src="img/spinach.svg" alt="" width="60" height="60">
                <p>Farm Livestock</p>
            </div>
            <div class="flex">
                <img src="img/pineapple.svg" alt="" width="60" height="60">
                <p>Garden Tillage</p>
            </div>
            <div class="flex">
                <img src="img/carrot 1.svg" alt="" width="60" height="60">
                <p>Fresh Fruits</p>
            </div>
            <div class="flex">
                <img src="img/pear.svg" alt="" width="60" height="60">
                <p>Vegetables</p>
            </div>
            <div class="flex">
                <img src="img/corn.svg" alt="" width="60" height="60">
                <p>Awesome Wheats</p>
            </div>
        </div>
    </div>
    <div class="gallery">
        <p>Gallery</p>
        <h1>Pictures of Farm Site</h1>
        <div class="gallery-grid">
           <img src="img/Rectangle 23.png" alt="">
            <img src="img/grassfield@4x 1.png" alt="">
            <img src="img/unsplash_Bbq3H7eGids.png" alt="">
            <img src="img/unsplash_fQ9X2rPEwq8.png" alt="">
            <img src="img/unsplash_CAA5XShS_No.png" alt="">
            <img src="img/unsplash_s0lkbvtN9K8.png" alt="">
        </div>
    </div>
    <div class="quality-service">
        <div class="quality-service-flex">
            <img src="img/Picture 1.png" alt="image">
            <div class="quality-service-content">
                <h1>Providing Quality Services And Products</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada scelerisque ipsum, et cursus magna Donec mollis efficitur mauris, vehicula convallis metus tincidunt sit amet. Aenean magna sapien, semper ac rutrum a mass.</p>
                <button>Read More</button>
            </div>
        </div>
    </div>
    <div class="management-homepage">
        <p>Our Team</p>
        <h1>Management Deck</h1>
        <img src="img/left arrow.svg" alt="" class="left-arrow">
        <img src="img/right arrow.svg" alt="" class="right-arrow">
        <div class="management-flex">
            <img src="img/Hafiz Bello 1.png" alt="">
            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada scelerisque ipsum, et cursus magna Donec mollis efficitur mauris, vehicula convallis metus tincidunt sit amet.</p>
            <h1>Hafiz Ibrahim Bello</h1>
            <p class="title">Managing Director</p>
        </div>
    </div>
    <div class="harvest-info">
        <div class="harvest-flex">
            <div class="flex">
                <img src="img/bees.svg" alt="">
                <h1>748</h1>
                <p>Agriculture Products</p>
            </div>
            <div class="flex">
                <img src="img/harvests.svg" alt="">
                <h1>15M</h1>
                <p>Projects Completed</p>
            </div>
            <div class="flex">
                <img src="img/livestock.svg" alt="">
                <h1>84K</h1>
                <p>Satisfied Clients</p>
            </div>
            <div class="flex">
                <img src="img/honey.svg" alt="">
                <h1>54+</h1>
                <p>Expert Farmers</p>
            </div>
        </div>
    </div>
    <div class="blog-homepage">
        <p>BLOG</p>
        <h1>Latest News</h1>
        <div class="blog-container">
            <div class="blog-grid">
                <div class="grid-blog">
                    <img src="img/unsplash_0ZX8_HDWHN4.png" alt="blog-img">
                    <h1>Best Way To Do Eco Agriculture</h1>
                    <div class="author-comment">
                        <p>Mubi -</p>
                        <p>123 comments</p>
                    </div>
                </div>
     
                <div class="grid-blog">
                 <img src="img/unsplash_KEKVOJt7lOY.png" alt="blog-img">
                 <h1>Best Way To Do Eco Agriculture</h1>
                 <div class="author-comment">
                     <p>Mubi -</p>
                     <p>123 comments</p>
                 </div>
             </div>
     
             <div class="grid-blog">
                 <img src="img/unsplash_auijD19Byq8.png" alt="blog-img">
                 <h1>Best Way To Do Eco Agriculture</h1>
                 <div class="author-comment">
                     <p>Mubi -</p>
                     <p>123 comments</p>
                 </div>
             </div>
            </div>
        </div>
    </div>
    <div class="farm-location">
        <img src="img/Farm location.png" alt="map">
    </div>
  <!--Home page end-->

@endsection('content')
@section('js')
<script src="/hifarms-web/public/js/main.js"></script>
@endsection('js')
</body>
</html>