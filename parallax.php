<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Parallax</title>
    <meta name="description" content="Web skeleton">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/structure.css">
    <link rel="stylesheet" href="assets/css/graphics.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <style>

body{
  padding-top: 50px;
}

#intro{
	background: lightblue url(assets/img/01.jpg) 50% 0 no-repeat fixed;
	color: white;
	height: 1200px;
	margin: 0 auto;
	padding: 100px 0 0 0;
}

#second{
	background: lightcoral  url(assets/img/02.jpg) 50% 0 no-repeat fixed;
	color: white;
	height: 700px;
	margin: 0 auto;
	overflow: hidden;
	padding: 100px 0 0 0;
}

#third{
	background: lightgoldenrodyellow url(assets/img/08.jpg) 50% 0 no-repeat fixed;
	color: white;
	height: 600px;
	padding: 100px 0 0 0;
}

#fifth{
	background: black;
  color: #fff;
	height: 400px;
	margin: 0 auto;
	padding: 100px 0 0 0;
}

#first,#fourth{
  background-color: blueviolet;
  color: white;
  height: 500px;
  padding: 100px 0 0 0;
}

    </style>
    <script src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body data-spy="scroll" data-arget="#bs-example-navbar-collapse-1">
    <!--[if lte IE 8]>
      <div class="container" style="margin-top:10px;margin-bottom:10px;">
        <div class="alert alert-warning">
          Stai usando un browser <strong>molto datato</strong>. Per migliorare la tua esperienza di
          navigazione del Web ti consigliamo di <a href="http://browsehappy.com/">aggiornare il tuo
          browser</a> o di <a href="http://www.google.com/chromeframe/?redirect=true">attivare Google
          Chrome Frame</a>.
        </div>
        <noscript>
          <div class="alert alert-warning">
            Il tuo browser non supporta la tecnologia HTML5 ed alcuni elementi contenuti in questa
            pagina necessitano di essere simulati usando JavaScript. Sfortunatamente il tuo browser ha
            il supporto JavaScript disabilitato.
          </div>
        </noscript>
      </div>
    <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul id="nav" class="nav navbar-nav">
            <li class="active"><a href="#intro">intro</a></li>
            <li><a href="#first">first</a></li>
            <li><a href="#second">second</a></li>
            <li><a href="#third">third</a></li>
            <li><a href="#fourth">fourth</a></li>
            <li><a href="#fifth">fifth</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="intro">
      <div class="container">
        <h2>Multiple Backgrounds</h2>
        <p>The multiple backgrounds applied to this section are moved in a similar way to the first section -- every time the user scrolls down the page by a pixel, the positions of the backgrounds are changed.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nibh erat, sagittis sit amet congue at, aliquam eu libero. Integer molestie, turpis vel ultrices facilisis, nisi mauris sollicitudin mauris, volutpat elementum enim urna eget odio. Donec egestas aliquet facilisis. Nunc eu nunc eget neque ornare fringilla. Nam vel sodales lectus. Nulla in pellentesque eros. Donec ultricies, enim vitae varius cursus, risus mauris iaculis neque, euismod sollicitudin metus erat vitae sapien. Sed pulvinar.</p>
      </div>
    </div> <!--#intro-->

    <div id="first">
      <div class="container">
        <h2>Multiple Backgrounds</h2>
        <p>The multiple backgrounds applied to this section are moved in a similar way to the first section -- every time the user scrolls down the page by a pixel, the positions of the backgrounds are changed.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nibh erat, sagittis sit amet congue at, aliquam eu libero. Integer molestie, turpis vel ultrices facilisis, nisi mauris sollicitudin mauris, volutpat elementum enim urna eget odio. Donec egestas aliquet facilisis. Nunc eu nunc eget neque ornare fringilla. Nam vel sodales lectus. Nulla in pellentesque eros. Donec ultricies, enim vitae varius cursus, risus mauris iaculis neque, euismod sollicitudin metus erat vitae sapien. Sed pulvinar.</p>
      </div>
    </div> <!--#intro-->

    <div id="second">
      <div class="container">
        <h2>Multiple Backgrounds</h2>
        <p>The multiple backgrounds applied to this section are moved in a similar way to the first section -- every time the user scrolls down the page by a pixel, the positions of the backgrounds are changed.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nibh erat, sagittis sit amet congue at, aliquam eu libero. Integer molestie, turpis vel ultrices facilisis, nisi mauris sollicitudin mauris, volutpat elementum enim urna eget odio. Donec egestas aliquet facilisis. Nunc eu nunc eget neque ornare fringilla. Nam vel sodales lectus. Nulla in pellentesque eros. Donec ultricies, enim vitae varius cursus, risus mauris iaculis neque, euismod sollicitudin metus erat vitae sapien. Sed pulvinar.</p>
      </div>
    </div> <!--#intro-->

    <div id="third">
      <div class="container">
        <h2>Multiple Backgrounds</h2>
        <p>The multiple backgrounds applied to this section are moved in a similar way to the first section -- every time the user scrolls down the page by a pixel, the positions of the backgrounds are changed.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nibh erat, sagittis sit amet congue at, aliquam eu libero. Integer molestie, turpis vel ultrices facilisis, nisi mauris sollicitudin mauris, volutpat elementum enim urna eget odio. Donec egestas aliquet facilisis. Nunc eu nunc eget neque ornare fringilla. Nam vel sodales lectus. Nulla in pellentesque eros. Donec ultricies, enim vitae varius cursus, risus mauris iaculis neque, euismod sollicitudin metus erat vitae sapien. Sed pulvinar.</p>
      </div>
    </div> <!--#intro-->

    <div id="fourth">
      <div class="container">
        <h2>Multiple Backgrounds</h2>
        <p>The multiple backgrounds applied to this section are moved in a similar way to the first section -- every time the user scrolls down the page by a pixel, the positions of the backgrounds are changed.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nibh erat, sagittis sit amet congue at, aliquam eu libero. Integer molestie, turpis vel ultrices facilisis, nisi mauris sollicitudin mauris, volutpat elementum enim urna eget odio. Donec egestas aliquet facilisis. Nunc eu nunc eget neque ornare fringilla. Nam vel sodales lectus. Nulla in pellentesque eros. Donec ultricies, enim vitae varius cursus, risus mauris iaculis neque, euismod sollicitudin metus erat vitae sapien. Sed pulvinar.</p>
      </div>
    </div> <!--#intro-->

    <div id="fifth">
      <div class="container">
          <h2>Multiple Backgrounds</h2>
          <p>The multiple backgrounds applied to this section are moved in a similar way to the first section -- every time the user scrolls down the page by a pixel, the positions of the backgrounds are changed.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nibh erat, sagittis sit amet congue at, aliquam eu libero. Integer molestie, turpis vel ultrices facilisis, nisi mauris sollicitudin mauris, volutpat elementum enim urna eget odio. Donec egestas aliquet facilisis. Nunc eu nunc eget neque ornare fringilla. Nam vel sodales lectus. Nulla in pellentesque eros. Donec ultricies, enim vitae varius cursus, risus mauris iaculis neque, euismod sollicitudin metus erat vitae sapien. Sed pulvinar.</p>
        </div>
    </div> <!--#fifth-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="assets/js/jquery.localscroll-1.2.7-min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.inview.js"></script>
    <script type="text/javascript">

      $(document).ready(function(){

        $('#nav').localScroll(800);

        refreshSizes();

        $(window).resize(function() {
          refreshSizes();
        });

        //.parallax(xPosition, speedFactor, outerHeight) options:
        //xPosition - Horizontal position of the element
        //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
        //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport

        $('#intro').parallax("50%", 1.6);
        $('#second').parallax("50%", 0.5);
        $('#third').parallax("50%", 0.25);

        function refreshSizes() {
          $('#first,#second,#third,#fourth,#fifth').height($(window).height());
        }

      });

    </script>
  </body>
</html>