 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  
    {{ Html::style('css/font-awesome.min.css') }}
    {{ Html::style('css/lightbox.css') }}
    {{ Html::style('css/animate.min.css') }}
    {{ Html::style('css/main.css') }}
    {{ Html::style('css/responsive.css') }}
    {{ Html::style('css/hover-min.css') }}
    {{ Html::style('css/demo.page.css') }}
    {{ Html::style('css/styles.css') }}

    @yield('stylesheets')
    
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->     
    

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
   
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "7e8eb33b-fbe0-4915-9b93-09490e3d10df", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    <script src='https://www.google.com/recaptcha/api.js'></script>


    <script>
      
      $(function() {
        $('#form').submit(function(event) {
          var verified = grecaptcha.getResponse();
          if (verified.length === 0) {
            event.preventDefault();
          }
        });
      });

    </script>