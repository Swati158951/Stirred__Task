<footer>
  <div class="container">
    <div class="left1">
      <!--<p>Call us: <a href="tel:+91 0484 4261707">+91 0484 4261711 / 712 </a> </p>-->

      <p>Call us: <a href="tel:+91 0484 4261707">+91 0484 4261707 </a> </p>
      <p>Email us: <a href="mailto:contact@cghearth.com"> contact@cghearth.com</a></p>
    </div>
    <div class="right1">
      <p>8:30 AM to 8:00 PM IST Mon-Sat </p>
      <p>9:00 AM to 5:00 PM IST on Sundays</p>
    </div>
  </div>
    <span>*Terms & conditions apply<br>
Offers cannot be combined | Rates mentioned are for base category rooms only</span>


</footer>

<a href="#booknow" class="booknowabs">Book Now</a>

<script type="text/javascript">

  $(document).ready(function () {    
 
       $("#experice").owlCarousel({
          pagination :false,
          autoplay:true,
          autoplayTimeout:7000,
          margin: 20,
          nav: true,
          loop: true,
          items: 3,
          responsive:{
              0:{
                  items:1,
              },
              800:{
                  items:1,
              },
              1000:{
                  items:3,
              }
          }
       });

       $("#owl-demo1").owlCarousel({
          pagination :true,
          autoplay:true,
          autoplayTimeout:12000,
          margin: 0,
          nav: false,
          loop: true,
          items: 1
       });

       $("#owl-demo2").owlCarousel({
          pagination :true,
          autoplay:true,
          autoplayTimeout:12000,
          margin: 0,
          nav: false,
          loop: true,
          items: 1
       });
        
$("#owl-demo4").owlCarousel({
          pagination :false,
          autoplay:true,
          autoplayTimeout:7500,
          margin: 10,
          nav: true,
          loop: true,
          items: 1
       });
       
        
  });

 
</script>

<script src="js/jquery.validate.min.js"></script> 
<script type="text/javascript">
  $(document).ready(function () {  
//Form Validation and submission 
         $("#property_booking_form").validate({
        submitHandler : function() {
         $.post("php/formsubmission.php", {
            UserName : $("#UserName").val(),
            UserMobile : $("#UserMobile").val(),
            UserEmail : $("#UserEmail").val(),
            message : $("#message").val(),
            FromDate : $("#datepicker01").val(),
            ToDate : $("#datepicker02").val(),
            mode : 'ContactForm',
	    site_url:window.location.href,
          },

          function(data) {
          window.location.href = "thank-you.php"; 
          
            //$("#property_booking_form").html('<h4>Thank You</h4>');
            //$(".msgblock").show();
            //$(".msgblock").html(data);
          });
        },
        ignore : "",
        rules : {
          UserName : {
            required : true
          },
          /* offerId: {required: true}, */
          UserMobile : {
            required : true,
            digits : true,
            minlength : 10,
            maxlength : 10
          },
          UserEmail : {
            required : true,
            email : true
          },
          FromDate : {
            required : true
          },
           ToDate : {
            required : true
          }
        },
        messages : {
          UserName : {
            required : "Please enter your name"
          },
          /* offerId:{required: "Please Select your offer"}, */
          UserMobile : {
            required : "Enter your Number"
          },
          UserEmail : {
            required : "Please enter your email",
            email : "Please enter a valid email"
          },
          FromDate : {
            required : "Please select check in date"
          },
          ToDate : {
            required : "Please select check out date"
          }
        },
      });
    
 //Form Validation and submission 

       $("#owl-demo2").owlCarousel({
          pagination :true,
          margin: 0,
          nav: false,
          loop: true,
          items: 1
       });
       $("#owl-demo3").owlCarousel({
          pagination :true,
          margin: 0,
          nav: false,
          loop: true,
          items: 1
       });
       $("#owl-demo1").owlCarousel({
          pagination :true,
          margin:10,
          nav: false,
          loop: true,
          items: 4,
          autoplay:true,
          responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 4
                  }
                }
       });
       $("#owl-demo4").owlCarousel({
          pagination :false,
          margin: 10,
          nav: true,
          loop: true,
          items: 1
       });

      //  Property rate from API 
      var property_code="<?php echo $property_code ?>";
      $('.about h2').html('Loading...');
      $.get( "http://paradisefound.cghearth.com/rates.php",{'property_code':property_code}, function( data ) {        
      $('.about h2').html('STARTS AT ₹'+data+'*/NIGHT');
      });


  });

</script>


  </body>

</html>
