<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
		<title>Webprojekt-Steckdose</title>
    
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles auslager!!!!N -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
																	 
		<script src="/js/jquery.js"></script>
    <script src="/js/bootstrap-transition.js"></script>
    <script src="/js/bootstrap-alert.js"></script>
    <script src="/js/bootstrap-modal.js"></script>
    <script src="/js/bootstrap-dropdown.js"></script>
    <script src="/js/bootstrap-scrollspy.js"></script>
    <script src="/js/bootstrap-tab.js"></script>
    <script src="/js/bootstrap-tooltip.js"></script>
    <script src="/js/bootstrap-popover.js"></script>
    <script src="/js/bootstrap-button.js"></script>
    <script src="/js/bootstrap-collapse.js"></script>
    <script src="/js/bootstrap-carousel.js"></script>
    <script src="/js/bootstrap-typeahead.js"></script>
	
		<script type="text/javascript" src="/js/jquery.validate.js"></script>
  
	</head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Projekt-Steckdose</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.php?aktion==NULL">Home</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Steckdosen <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#create-dose">Steckdose Hinzufügen</a></li>
                  <li><a href="#delete-dose">Steckdose Löschen</a></li>
                  <li><a href="#einstellungen">Einstellungen</a></li>
				  <li><a href="#delete-dose">Hilfe</a></li>
				  
<!-- Example Navheader 
                  <li class="divider"></li>
				  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
-->
				</ul>
              </li>
            </ul>
            <form class="navbar-form pull-right">
              <input class="span2" placeholder="Email" type="text">
              <input class="span2" placeholder="Password" type="password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->

			
		  <?php
				$action = $_GET["action"];
				  if ($action == NULL ) {
			?>
					  <div class="hero-unit">
            <h1>Die Revolutionierung deiner Stromrechnung</h1>
            <p>Werde jetzt Herrscher über deinen Stromverbrauch & Entscheide selbst, wann welches Gerät Strom verbrauchen darf.</p>
            <p><a href="index.php?action=register" class="btn btn-primary btn-large">Registrieren</a></p>
            </div>
						<div class="row">
							<div class="span4">
								<h2>Viele tolle Vorteile</h2>
								<p>Feature 1</p>
								<p><a class="btn" href="#">View details »</a></p>
							</div>
							<div class="span4">
								<h2>Buisnessmodel ? </h2>
								<p>Hier könnte BWL Kram stehen :-)</p>
								<p><a class="btn" href="#">View details »</a></p>
						 </div>
							<div class="span4">
								<h2>Benutzerdoku</h2>
								<p>...</p>
								<p><a class="btn" href="#">View details »</a></p>
							</div>
						</div>

			<?php
					}
					if ($action != NULL ) {
  					if ($action == "register" ) {
			        include('../web/views/register.html');
					  }
						else {
				  		echo "diese seite gibts nicht";
					  }
					}
			?>
			
      <hr>

      <footer>
        <p>© Projekt Steckdose 2013</p>
      </footer>

    </div> 
		
</body></html>