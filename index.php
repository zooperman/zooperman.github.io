<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gorilla Phone Challenge Certificate</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

      <meta property="og:image" content=""/>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->



    <div class="container">
      <div class="cert">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-sm-8">
          <h1>Gorilla Phone Challenge</h1>
          <p class="congrats">Congratulations Extinction Fighter</p>
          <p class="name"><?php echo $_GET["n"];?> &ldquo;<?php echo $_GET["s"];?>&rdquo;</p>

          <p class="txt">Congratulations Extinction Fighter! You found <?php echo $_GET["p"];?> phones in the Gorilla Phone Challenge! Now you're ready to find phones at home and send them to the Zoo using the  <a href="http://zoo.org.au/sites/default/files/TCOY_ReplyPaidLabel_1.pdf" target="_blank">They're Calling on You satchels</a>.</p>
          <p class="txt">Every phone you recycle helps us Fight Extinction and save wild gorillas!</p>

        </div>
        <div class="col-sm-4">
            <div class="fighting-ext">
            <img src="img/fighting-ext.png">
            </div>


            <div class="sig"> 
            <img src="img/zooperman.png" class="img-responsive">
            </div>

        </div>  
      </div>
      </div>







      <div class="share">
            <script type="text/javascript">
            var completeurl = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search;
            completeurl = encodeURIComponent(completeurl);
            var fbshare = "https://www.facebook.com/sharer/sharer.php?u=" + completeurl;
            document.write('<a href="' + fbshare + '" type="button" class="btn btn-default btn-lg" target="_blank"> <i class="fa fa-facebook"></i> Share</a>');
            </script> 


            <script type="text/javascript">
            var twshare = "https://twitter.com/share?url=" + completeurl;
            document.write('<a href="' + twshare + '" type="button" class="btn btn-default btn-lg" target="_blank"> <i class="fa fa-twitter"></i> Tweet</a>');
            </script> 



          <a href="javascript:window.print()" type="button" class="btn btn-default btn-lg">
          <i class="fa fa-print"></i> Print
          </a>

      </div>


    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
