@extends('layout.app')

@section('content')
  <!--Gallery page starts here-->
  <div class="showcase-img">
    <div class="showcase-content">
     <h1>GALLERY</h1>
    </div>
</div>
<div class="about-description">
<a href="index.html">Home</a> <img src="img/Arrow 1.svg" width="12"> <a href="about.html">About</a> <img src="img/Arrow 1.svg" width="12"> <a href="gallery.html">Gallery</a>
</div>
<!-- Images used to open the lightbox -->
<div class="row">
    <div class="column">
      <img src="img/Rectangle 23.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
    </div>
    <div class="column">
      <img src="img/grassfield@4x 1.png" onclick="openModal();currentSlide(2)" class="hover-shadow">
    </div>
    <div class="column">
      <img src="img/unsplash_Bbq3H7eGids.png" onclick="openModal();currentSlide(3)" class="hover-shadow">
    </div>
    <div class="column">
      <img src="img/unsplash_fQ9X2rPEwq8.png" onclick="openModal();currentSlide(4)" class="hover-shadow">
    </div>
    <div class="column">
        <img src="img/unsplash_CAA5XShS_No.png" onclick="openModal();currentSlide(4)" class="hover-shadow">
      </div>
      <div class="column">
        <img src="img/unsplash_s0lkbvtN9K8.png" onclick="openModal();currentSlide(4)" class="hover-shadow">
      </div>
  </div>
  
  <!-- The Modal/Lightbox -->
  <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
  
      <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="img/Rectangle 23.png">
      </div>
  
      <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="img/grassfield@4x 1.png">
      </div>
  
      <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="img/unsplash_Bbq3H7eGids.png">
      </div>
  
      <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="img/unsplash_fQ9X2rPEwq8.png">
      </div>

      <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="img/unsplash_CAA5XShS_No.png">
      </div>

      <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="img/unsplash_s0lkbvtN9K8.png">
      </div>
  
      <!-- Next/previous controls -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>  
    </div>
  </div>





  <!--Gallery page end-->
@endsection('content')

@section('js')
<script src="/js/lightbox.js"></script>  
@endsection('js')
</body>
</html>