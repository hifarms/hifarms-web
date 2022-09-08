@extends('layout.app')
@section('title')
<title>Hifarms | Partners</title>
@endsection

@section('content')
  <!--Blog Page starts here-->
  <div class="showcase-img">
    <div class="showcase-content">
     <h1>Partners</h1>
    </div>
</div>
   <div class="about-description">
    Home <img src="img/Arrow 1.svg" width="12" style="margin-left: 4px;margin-right: 4px;"> About  <img src="img/Arrow 1.svg" width="12" style="margin-left: 4px;margin-right: 4px;">  Our Partners
   </div>
   <div class="blog-container partners">
       <div class="blog-grid">
           <div class="grid-blog" data-aos="zoom-out">
               <img src="img/atcost.png" alt="blog-img">
               <h1>ATCOST FARM LTD</h1>
               <P>Lagos, Ikorodu Street</P>
               <P class="last-p"> Lagos State, Nigeria</P>
           </div>

           <div class="grid-blog" data-aos="zoom-out">
            <img src="img/farmcost.png" alt="blog-img">
            <h1>FARM STORES LTD</h1>
            <P>Kalgo Road, Jega</P>
            <P class="last-p">Kebbi State, Nigeria</P>
        </div>

        <div class="grid-blog" data-aos="zoom-out">
            <img src="img/pikefarm.png" alt="blog-img">
            <h1>PIKE PLACE FISH MARKET</h1>
            <P>Argungu, Sokoto Road</P>
            <P class="last-p">Kebbi State, Nigeria</P>
        </div>
       </div>
   </div>

   
   <div class="our-partners powered" style='margin-bottom:40px'>
    <h1>POWERED BY</h1>
    <div class="partners-container" data-aos="fade-up">
        <img src="img/PB 1.png" alt="providus-bank">
        <img src="img/partner 2 1.png" alt="CBN">
    </div>
</div>
  <!--Blog page end-->

@endsection('content')

@section('js')
<script src="/hifarms-web/public/js/main.js"></script>
@endsection('js')  
</body>
</html>