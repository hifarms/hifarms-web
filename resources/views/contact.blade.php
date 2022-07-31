@extends('layout.app')

@section('content')
    <!--Hamburger Modal ends -->
    <div class="showcase-img">
        <div class="showcase-content">
         <h1>Contact Us</h1>
        </div>
    </div>

    <div class="about-description">
        <a href="index.html">Home</a> <img src="img/Arrow 1.svg" width="12"> <a href="contact.html">Contact</a>
    </div>

    <!--Contact and Map flex-->
     <div class="contact-map">
         <div class="map" id="map">
          
         </div>
         <div class="contact-form">
             <h2>Contact.</h2>
             <h3>Get in touch</h3>
             <p>LEAVE US A MESSAGE</p>
             <form>
            
               <div class="input-email-contact-flex">
                   <div class="name">
                    <label>Name:</label> <br>
                    <input type="text" placeholder="Input your name here"> 
                   </div>
                   <div class="email">
                    <label>Email:</label> <br>
                    <input type="email" placeholder="Input your email here">
                   </div>
               </div>
               <label>Subject:</label>  <br>
               <input type="text" class="contact-subject" placeholder="Input your subject here"> <br>
               <label>Message:</label> <br>
               <textarea cols="30" rows="10" placeholder="Input your message here"></textarea>
               <div class="send-message">
                   <button>Send Message</button>
               </div>
             </form>
         </div>
     </div>
     <!--Contact and Map ends-->

     <!--Quick support starts-->
     <div class="quick-support">
        <h3>Quick <br> Support.</h3>
        <h5>You can also get all contact information</h5>

        <div class="quick-support-flex">
            <div class="quick-1">
                <img src="img/location-contact.png" alt="location-icon">
                <h5>Visit Us</h5>
                <p>The Farm is located at 
                    12.364026” North, 4.190661”East 
                    along Birnin Kebbi/Kalgo road, Kebbi State
                </p>
            </div>
            <div class="quick-2">
                <img src="img/call-contact.png" alt="contact-icon">
                <h5>Call Us</h5>
                <p>+2348034068234</p>
            </div>
            <div class="quick-3">
                <img src="img/msg-contact.png" alt="mail-icon">
                <h5>Email Us</h5>
                <p>info@hifarmsltd.ng</p>
            </div>
        </div>
     </div>
     <!--Quick support ends-->

     <!---Social media Icons starts-->
        <div class="connect-with-us">
            <h2>Connect With Us</h2>
            <div class="social-media-container">
                <img src="img/ig.svg" alt="Instagram" width="40">
                <img src="img/twitter-footer.png" alt="Twitter" width="40">
                <img src="img/fb-footer.png" alt="Facebook" width="40">
            </div>
        </div>
     <!---Social media Icons ends-->

     <!--Newsletter starts-->
     <div class="faq-last-image contact">
        <div class="faq-flex-2">
          <div class="faq-last-content">
              <h1><b>STAY</b></h1>
              <h1 class="connected">CONNECTED</h1>
               <p>Subscribe to our Newsletter</p>
          </div>
          <div class="faq-form">
              <input type="text" placeholder="Enter your email adress">
              <button>Subscribe</button>
          </div>
        </div>
    </div>

     <!--Newsletter ends-->

     <!--Footer starts-->

     <!--Footer ends-->
     <!--Google Maps Starts-->
      <script>
          function initMap(){
             const options = {
                 zoom: 8,
                 center: {lat:12.3450,lng:4.1935}
             }

             const map = new google.maps.Map(document.getElementById('map'), options)
          }
      </script>
     <script async
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXewrIGtonz81xHFQ8Pd4pilUPAd3MAB8&callback=initMap">
      </script>
 <!--Google Maps ends-->
 <script src="js/hamburger.js"></script>
 @endsection('content')
</body>
</html>