<!DOCTYPE html>
  <html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-tap-highlight" content="no">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="icon" href="favicon.ico" sizes="32x32">
		<title>{{ $title or "SKY Fall" }}</title>
		<meta name="theme-color" content="#EE6E73">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="stylesheet" href="assets/styles.css">
    @stack('styles')
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="https://www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>
		<script>
		  var _0x947c=["\x41\x49\x7A\x61\x53\x79\x42\x39\x45\x78\x61\x6E\x6C\x6E\x37\x4A\x39\x79\x42\x61\x50\x49\x45\x75\x67\x51\x4E\x49\x62\x62\x69\x6B\x41\x63\x68\x68\x64\x38\x6F","\x67\x6F\x62\x6C\x69\x6E\x2D\x61\x37\x30\x34\x33\x2E\x66\x69\x72\x65\x62\x61\x73\x65\x61\x70\x70\x2E\x63\x6F\x6D","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x67\x6F\x62\x6C\x69\x6E\x2D\x61\x37\x30\x34\x33\x2E\x66\x69\x72\x65\x62\x61\x73\x65\x69\x6F\x2E\x63\x6F\x6D","\x67\x6F\x62\x6C\x69\x6E\x2D\x61\x37\x30\x34\x33","\x67\x6F\x62\x6C\x69\x6E\x2D\x61\x37\x30\x34\x33\x2E\x61\x70\x70\x73\x70\x6F\x74\x2E\x63\x6F\x6D","\x38\x38\x32\x34\x32\x37\x32\x35\x37\x30\x33\x34","\x69\x6E\x69\x74\x69\x61\x6C\x69\x7A\x65\x41\x70\x70","\x64\x61\x74\x61\x62\x61\x73\x65","\x61\x75\x74\x68","\x73\x74\x6F\x72\x61\x67\x65","\x6D\x65\x73\x73\x61\x67\x69\x6E\x67"];var config={apiKey:_0x947c[0],authDomain:_0x947c[1],databaseURL:_0x947c[2],projectId:_0x947c[3],storageBucket:_0x947c[4],messagingSenderId:_0x947c[5]};firebase[_0x947c[6]](config);const db=firebase[_0x947c[7]]();const auth=firebase[_0x947c[8]]();const storage=firebase[_0x947c[9]]();const msg=firebase[_0x947c[10]]()
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script> 
		
    </head>

    <body>
		<nav class="light-blue lighten-1" role="navigation">
			<div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">FAB</a>
			  <ul class="right hide-on-med-and-down">
				<li><a href="http://www.toolkit.co.nf">Website</a></li>
				<li><a href="http://www.bgctmcwarriors.96.lt">BGCTMC WARRIORS</a></li>
				<li><a href="http://www.facebook.com/forhad.fb">Facebook</a></li>
				<li id="headerInfo"><a href="#">Guest</a></li>
			  </ul>

			  <ul id="nav-mobile" class="side-nav">
				<li id="secondItem"><a href="http://toolkit.co.nf">Website</a></li>
				<li><a href="http://www.bgctmcwarriors.96.lt">BGCTMC WARRIORS</a></li>
				<li><a href="http://www.facebook.com/forhad.fb">Facebook</a></li>
			  </ul>
			  <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
			</div>
		</nav>
		  <div class="section no-pad-bot" id="index-banner">
			<div class="container">
			  <br><br>
			  <h1 class="header center orange-text">Welcome To My Personal App</h1>
			  <div class="row center">
				<h5 class="header col s12 light">Stay away from this site because it is good for none.</h5>
			  </div>
			  <div class="row center">
				<a href="http://www.bgctmcwarriors.96.lt" id="download-button" class="btn-large waves-effect waves-light orange">Visit My Clan Website</a>
			  </div>
			  <br><br>

			</div>
		  </div>
		 @stack('top')
		<div class="container">        
    	@yield('content')
		</div>
		 @stack('bottom')
		<footer class="page-footer footer grey lighten-4">
			<div class="container">
				<div class="row">
					<div class="col s6 grey-text">
						2017 &copy; - Skyfall - All right reserved.
					</div>
					<div class="col s6 social grey-text">
						<ul class="collection">
							<li class="collection-item">
								<a href="http://www.toolkit.co.nf" class="grey-text">Website</a>
							</li>
							<li class="collection-item">
								<a href="http://www.bgctmcwarriors.96.lt" class="grey-text">BGCTMC WARRIORS</a>
							</li>
							<li class="collection-item">
								<a href="http://www.facebook.com/forhad.fb" class="grey-text">Facebook</a>
							</li>
							<li class="collection-item">
								<a href="login.html" class="grey-text">Login</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<script>
			$(document).ready(function() {
			
				$('.datepicker').pickadate({
					selectMonths: true, // Creates a dropdown to control month
					selectYears: 15 // Creates a dropdown of 15 years to control year
				});
				 $('.button-collapse').sideNav({
            menuWidth: 250, 
            edge: 'right',
            draggable: true,
            closeOnClick: true 
          });
			});
		</script>
		 @stack('scripts')
		<script src="assets/js/app.js"></script> 
		<script src="https://www.w3schools.com/lib/w3.js"></script>
    </body>
  </html>