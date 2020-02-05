<?php 
$property_code = '13';
include('../../rates.php');
$property_rate = number_format($MinimumRate);
$page_title = 'Brunton Boatyard, Fort Kochi';
require('../../header.php');

 ?>



  <body>
     
    <section class="banner">
      <div class="header">
        <div class="container">
          <a href="index.php"><img src="images/logo.png"></a>
        </div>
      </div>
      <img  src="images/banner.jpg" class="fullwidth">
    </section>

    <section class="about">
      <div class="container">
        <div class="left"> 
          <div class="imglft">
              <img src="images/brunton.jpg">    
          </div>
        </div>
        <div class="mid">
          <h1>Brunton Boatyard, Fort Kochi</h1>
          <p>Travel back in time to the historic paradise of Fort Kochi on this heritage holiday. Go exploring, like Vasco da Gama did, as you uncover the mysteries and secrets of this ancient spice port. Taste cuisine that’s as exciting today, as it was hundreds of years ago, in a melting pot of cultures and traditions.</p>
        </div>
        <div class="right">
            <h4>Exclusive offers*</h4>
            <ul>
                <li>Stay for 2 nights and get 10% off</li>
            </ul>
          <h2>STARTS AT ₹<?php echo $property_rate; ?>*/NIGHT</h2>
          <!-- <p>DOUBLE OCCUPANCY | INCL.OF BREAKFAST</p> -->
          <a href="#booknow">Book now</a>
        </div>
      </div>
    </section>

<section class="sliderarea">
    <div class="owl-carousel" id="owl-demo1">
      <div>
        
        <img src="images/overview01.jpg">
          <p>A history-inspired hotel situated on the site that once housed the Victorian boatyard ‘Brunton & Sons’.</p>
          <img src="images/art.png" class="artimg">
      </div>
      <div>
        <img src="images/overview02.jpg">
          <p>A boutique hotel, which like Fort Kochi, is an amalgamation of Portuguese, Dutch, and British influences.</p>
          <img src="images/art.png" class="artimg">
      </div>
      <div>
        <img src="images/overview03.jpg">
          <p>The décor is straight out of a Rudyard Kipling novel, with high lofty ceilings and old-fashioned ‘punkhas’.</p>
          <img src="images/art.png" class="artimg">
      </div>
      <div>
        <img src="images/overview04.jpg">
          <p>The beautiful ocean-facing rooms give you an unforgettable view and unmatched vintage luxury.</p>
          <img src="images/art.png" class="artimg">
      </div>
      <div>
        <img src="images/overview05.jpg">
          <p>The art and artefacts on display are like windows to the past, a veritable history book on Fort Kochi.</p>
          <img src="images/art.png" class="artimg">
      </div>
      <div>
        <img src="images/overview06.jpg">
          <p>The walls of the Armoury Restaurant features replica antique weapons used in the battles for this ancient spice port.</p>
          <img src="images/art.png" class="artimg">
      </div>
      <div>
        <img src="images/overview07.jpg">
          <p>The History Restaurant pays tribute to this melting pot of cultures with authentic cuisine from the 32 communities that call this home.</p>
          <img src="images/art.png" class="artimg">
      </div>
      <div>
        <img src="images/overview08.jpg">
          <p>Terrace Grill serves up the catch of the day anyway you like it, accompanied with unforgettable views.</p>
          <img src="images/art.png" class="artimg">
      </div>
       
    </div>
     
</section>

  







<section class="sliderarea desti">
  <h3>EXCLUSIVES</h3>
  <img src="images/art.png" class="artimg">
    <div class="owl-carousel" id="owl-demo2">
      <div>
        <img src="images/exclusives01.jpg">
          <h4>Sunset Cruise</h4>
          <p>Take a sunset cruise on ‘Manta’, Brunton Boatyard’s private jetty, around historic Cochin Harbour.</p>
          <img src="images/art.png" class="artimg">
      </div>
      <div>
        <img src="images/exclusives02.jpg">
          <h4>Cooking Demo</h4>
          <p>Learn to master traditional Kerala cuisine and spices with an interactive cooking demo with the chef. </p>
          <img src="images/art.png" class="artimg">
      </div>
      <div>
        <img src="images/exclusives03.jpg">
          <h4>Ayurveda</h4>
          <p>Rejuvenate your body, mind and soul, at ‘Aryatheeram’, the holistic and authentic Ayurveda Spa.</p>
          <img src="images/art.png" class="artimg">
      </div>
    
         
    </div>
 
</section>


<section class="experice">
  <div class="container">
    <h3>SNAPSHOTS</h3>
    <img src="images/art.png">
         <div class="owl-carousel" id="experice">
      <div>
        <img src="images/snapshots01.jpg">
        <p>Chinese Fishing Nets</p>
      </div>
      <div>
        <img src="images/snapshots02.jpg">
        <p>St. Francis Church</p>
      </div>
      <div>
        <img src="images/snapshots03.jpg">
        <p>David Hall Art Gallery</p>
      </div>
 
      <div>
        <img src="images/snapshots04.jpg">
        <p>Antique Market</p>
      </div>
      <div>
        <img src="images/snapshots05.jpg">
        <p>Mattancherry Palace</p>
      </div>
      <div>
        <img src="images/snapshots06.jpg">
        <p>Jew Town</p>
      </div>
      <div>
        <img src="images/snapshots07.jpg">
        <p>Mattancherry Spice Market</p>
      </div>
  </div>
</section>







 <section class="testimonials" id="reviews">
  <div class="container">
    <h3>Reviews and Ratings</h3>
    <img src="images/art.png" class="artimg">

      <div id="owl-demo4" class="owl-carousel owl-theme">
           <div class="item">
              <div class="container_testi"> 
                <h5>Very nice place to stay.</h5>  
                <div class="ratingec">
                   <img src="images/rating.png"><span>Reviewed 16 November 2018</span>
                </div>
                <div class="ratingcopy">
                  <p>Very nice place to stay.  Everything is cared for nicely, and the people both management and staff go above board to make sure your visit is absolutely the best it could possibly be.  My luggage was lost by Air India and when I arrived in Cochin the hotel provide me with a new set of clothing and laundered what I was wearing to make me feel more comfortable.  Excellent stay.  I can't say enough good things about the Hotel and all of the people who will make you feel like family.</p>
                </div>
              </div>
              <div class="user_name">
                <span>Robyn Restel</span>
              </div>
           </div>
            <div class="item">
              <div class="container_testi"> 
                <h5>The Crown Jewel of Kochi</h5>  
                <div class="ratingec">
                   <img src="images/rating.png"><span>Reviewed 20 March 2019</span>
                </div>
                <div class="ratingcopy">
                  <p>THE Top and BEST hotel in Kochi, it is a sanctuary and a haven! After the buzz of Kerala’s magic during the day, I cannot think of anything better than coming home to a sanctuary like Brunton Boatyard. Beautiful spacious eco-conscious room (perfectly air-conditioned with such a comfy massive bed and their magical pillows Zzzz), delicious restaurant & cocktails facing the seafront at the Armoury and oooh the spa! Everything is executed tastefully with the HEART. The hotel truly cares for the guests! It is right next to the Biennale, super central within walking distance to seriously everywhere one needs to get to in Kochi. If Aman ever opens in Kerala, I’d recommend them to hire Manoj, the truly exceptional hotelier heartfelt GM! Manoj can get you anywhere and everywhere, he is CONNECTED! Manoj informed me my wallet was at the police station when I had no idea it was lost in the first place. Everything was intact in the wallet too! No words can describe how magical this hotel is. I was a single traveler and so safety was my key concern. I felt extra safe being at Brunton Boatyard, the hotel provides a chauffeur on standby for anyone wanting to go out/come home late at night. Have recommended my couple friends to stay and they absolutely loved it too! Thank you Brunton Boatyard and the AMAZING team for an unforgettable stay! It is very much appreciated! I won’t forget it!</p>
                </div>
              </div>
              <div class="user_name">
                <span>ILSKI, London, United Kingdom</span>
              </div>
           </div>

           <div class="item">
              <div class="container_testi"> 
                <h5>Amazing place. We chose to stay here for our Ruby Wedding Anninersary and it was the right choice.</h5>  
                <div class="ratingec">
                   <img src="images/rating.png"><span>Reviewed 1 September 2018</span>
                </div>
                <div class="ratingcopy">
                  <p>Fabulous room with a bed you needed to step up to. Gorgeous bathroom with little terracotta pots for your toiletries, no plastic here. Lovely fresh tea and filtered water every day. Location on the Albanian sea gave us lots to look at with all the passing traffic. Had one amazing meal for our special day and the staff here are second to none.They ensured our anniversary was so special. Loved walking around Cochin Fort watching people going around their busy lives. We did get a quick Tuk Tuk ride as we got a bit lost and it was hot but for 50p it was a good idea.

The hotel was spotless and the bed was one I'd like at home. Service first class.</p>
                </div>
              </div>
              <div class="user_name">
                <span>A TripAdvisor Member</span>
              </div>
           </div>
           <div class="item">
              <div class="container_testi"> 
                <h5>Almost Perfection</h5>  
                <div class="ratingec">
                   <img src="images/rating.png"><span>Reviewed 25 February 2019</span>
                </div>
                <div class="ratingcopy">
                  <p>Great fusion Kerala and Portuguese food, with an ambience worth writing about (hence this small contribution). The name and the dishes are a tribute to Kochi's history, as is the restaurant itself, where you are seated under a high wooden roof criss-crossed with beautiful beams. Three musicians were playing carnatic music, and service was discreet and spectacular. Drinks are priced on the higher side, but food is reasonable for the quantity and quality. Inside Brunton Boatyard and unmissable.</p>
                </div>
              </div>
              <div class="user_name">
                <span>Amber Pabreja</span>  
              </div>
           </div>

        </div>     
  </div>
</section>
 

 



<section class="gettinthere">
  <div class="container">
    <div class="left">
      <h4>GETTING THERE</h4>
      <p style="text-transform: uppercase;">
      From Cochin International Airport: <br>About 36 km or 1 hr 15 mins (includes ferry)</p>
      <p style="text-transform: uppercase;">
      From Ernakulam Junction Station: <br>About 9.7 km or 45 mins
      </p>
    </div>
    <div class="right">
      <h4>Travel Tips</h4>
      <p>Please pack cottons, a sun hat, and sunblock, to enjoy the tropical weather. We recommend comfortable shows when you explore Fort Kochi.</p>
    </div>
  </div>
</section>
<section class="booknow" id="booknow">
  <form novalidate="novalidate" name="property_booking_form"
          id="property_booking_form" method="post">
  <div class="container">
    <ul>
      <li>
        <p>name</p>
        <input type="text" name="UserName" id="UserName" class="inpt">
      </li>
      <li>
        <p>mobile</p>
        <input type="text" name="UserMobile" id="UserMobile" class="inpt">
      </li>
      <li>
        <p>email</p>
        <input type="text" name="UserEmail" id="UserEmail" class="inpt">
      </li>
      <li>
        <p>Message</p>
        <textarea class="inpt" name="message" id="message"> </textarea> 
      </li>
    </ul>
    <div class="date_pik">
      <div class="datfx"><p>Check In:</p></div>
      <div class="datetxt"><input type="text" readonly name="FromDate" id="datepicker01" class="dtpic"></div>
      <div class="datfx paddinadjst"><p>Check Out:</p></div>
      <div class="datetxt"><input type="text" readonly name="ToDate" id="datepicker02" class="dtpic"></div>
    </div>
    <input type="submit" name="" class="submitbt" value="submit">
  </div>
</form>
</section>

<?php require('../../footer.php'); ?>