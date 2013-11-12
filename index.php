<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>


    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->



    <div class="container">
      <div class="cert">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-xs-12">
          <h1>Certificate</h1>
          <h2>Gorilla Phone Challenge</h2>

          <p class="name"><?php echo $_GET["n"];?> &ldquo;<?php echo $_GET["s"];?>&rdquo;</p>

          <p class="congrats">Congratulations Extinction Fighter!
          You found <?php echo $_GET["p"];?> phones in the Gorilla Phone Challenge! 
          Every phone you recycle helps us Fight Extinction and save wild gorillas!</p>
          
          <div class="sig"> 
            <img src="img/sig.jpg" width="150" height="70">
          </div>

        </div>  
      </div>
      </div>

      <div class="share">
            <script type="text/javascript">
                var fbshare = "https://www.facebook.com/sharer/sharer.php?u=" + window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
                  document.write('<a href="' + fbshare + '" type="button" class="btn btn-default btn-lg" target="_blank"> <i class="fa fa-facebook"></i> Share</a>');
            </script> 


            <script type="text/javascript">
                var twshare = "https://twitter.com/share?url=" + window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
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
