<!DOCTYPE html>

<html lang="en">



  <head>






    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="images/favicon.png">

    <meta name="description" content="">

    <meta name="author" content="">



    <title><?php echo $page_title; ?></title>

    <link href="css/reset.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Unna:400,400i,700,700i" rel="stylesheet"> 

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet"> 

    



    <!-- Owl Stylesheets -->

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link href="css/responsive.css" rel="stylesheet">





  <link rel="stylesheet" href="css/jquery-ui.css">


    <!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138497803-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());

  gtag('config', 'UA-138497803-1');

</script>

     <script src="js/jquery.min.js"></script>

    <script src="js/owl.carousel.js"></script> 



      <script src="js/jquery-ui.js"></script>

      <script>

      $(function() {

        $('#datepicker01, #datepicker02').datepicker({
            // showOn: "both",
            beforeShow: customRange,
            dateFormat: "dd-mm-yy",
            minDate: 0,
        });

        //   $( "#datepicker01" ).datepicker({

        //     changeMonth: true,

        //     dateFormat: 'dd-mm-yy'

        // });

        //   $( "#datepicker02" ).datepicker({

        //     changeMonth: true,

        //     dateFormat: 'dd-mm-yy'

        // });

      

      });
      function customRange(input) {
        if (input.id == 'datepicker02') {
            // var minDate = new Date($('#datepicker01').val());
            var minDate=$.datepicker.parseDate("dd-mm-yy", $('#datepicker01').val())
            minDate.setDate(minDate.getDate() + 1)
            return {
                minDate: minDate

            }
            // console.log(minDate);
        }
      }
      

      </script>

<!-- Facebook Pixel Code -->

<script>

  !function(f,b,e,v,n,t,s)

  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?

  n.callMethod.apply(n,arguments):n.queue.push(arguments)};

  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

  n.queue=[];t=b.createElement(e);t.async=!0;

  t.src=v;s=b.getElementsByTagName(e)[0];

  s.parentNode.insertBefore(t,s)}(window, document,'script',

  'https://connect.facebook.net/en_US/fbevents.js');

  fbq('init', '121255958403729');

  fbq('track', 'PageView');

</script>

<noscript><img height="1" width="1" style="display:none"

  src="https://www.facebook.com/tr?id=121255958403729&ev=PageView&noscript=1"

/></noscript>

<!-- End Facebook Pixel Code -->



     

<!-- Global site tag (gtag.js) - Google Ads: 879712934 -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-879712934"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'AW-879712934');

</script>

<script type='text/javascript'>
window.__lo_site_id = 168727;

                (function() {
                                var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
                                wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
                  })();
</script>

  </head>