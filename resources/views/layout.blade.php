<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <title>Phonology</title>
  </head>
  <body class="hero-section">
    <header>
		<div class="navigation-wrap bg-light start-header start-style">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav class="navbar navbar-expand-md navbar-light">
							<a class="navbar-brand"><img src="{{ asset('img/logo.png') }}" alt="Phonology"></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto py-4 py-md-0">
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
										<a class="nav-link" href="/">Home</a>
									</li>
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<a class="nav-link" href="#footer">About</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>

    <main>
        @yield('content')
	</main>

    <footer>
        <div class="footer-top" id="footer">
	        <div class="container">
	        	<div class="row">
		        	<div class="col-md-4 col-lg-4 footer-about wow fadeInUp">
		        		<a href="/"><img src="{{ asset('img/logo.png') }}" alt="Phonology"></a>
		    			<p>
		    				Technology evolves over time and you can't stop it. New smartphones with fantastic features appear, while others become obsolete. But, you can buy one according to your needs. Search now! 
	        			</p>
                    </div>
		        	<div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown">
		        		<h3>Explore</h3>
		            	<p><a href="/">Home</a></p>
						<p><a href="/">About</a></p>
	                	<p><a href="/">Search Now</a></p>
                    </div>
	                <div class="col-md-4 col-lg-3 footer-social wow fadeInUp">
	                	<h3>Contact</h3>
	                	<p>
							<a href="https://www.instagram.com/putriainurf/"><i class="fab fa-instagram"></i></a> 
							<a href="https://www.linkedin.com/in/putriaf"><i class="fab fa-linkedin"></i></a>
	                	</p>
	                </div>
		        </div>
	        </div>
        </div>
	    <div class="footer-bottom">
	    	<div class="container">
        		<div class="row">
	           		<div class="footer-copyright">
	                	<p>Copyright &copy; 2022 Putri Ainur Fitri | Semantik Web</p>
	                </div>
	           	</div>
	        </div>
	    </div>
    </footer>
    <!-- Script -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        (function($) {
            "use strict";

            $(function() {
                var header = $(".start-style");
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();

                    if (scroll >= 10) {
                        header.removeClass('start-style').addClass("scroll-on");
                    } else {
                        header.removeClass("scroll-on").addClass('start-style');
                    }
                });
            });

            //Animation

            $(document).ready(function() {
                $('body.hero-section').removeClass('hero-section');
            });

            //Menu On Hover

            $('body').on('mouseenter mouseleave', '.nav-item', function(e) {
                if ($(window).width() > 750) {
                    var _d = $(e.target).closest('.nav-item');
                    _d.addClass('show');
                    setTimeout(function() {
                        _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
                    }, 1);
                }
            });

        })(jQuery);
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>