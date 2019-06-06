<?php
	class graphic{
		private $title;
		private $css_main;
		private $css_navbar;
		private $css_header;
		private $css_whoiam;
		private $css_whatido;
		private $css_myservices;
		private $css_myclients;
		private $css_myCollaborations;
		private $css_tellAboutMe;
		private $css_architecture;
		private $css_prices;
		private $css_contactMe;
		private $css_footer;
		private $css_bootstrap;
		private $css_fontAwesome;
		private $css_materialDesign;
		private $js_bootstrap;

		function __construct($title){
			$this->title = $title;
			// bootstrap main
			$this->css_bootstrap = 'css/bootstrap.min.css';
			// font awesome
			$this->css_fontAwesome = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
			// material design
			$this->css_materialDesign = 'https://fonts.googleapis.com/icon?family=Material+Icons';
			// css style.css
			$this->css_main = 'css/style.css';
			// css navbar.css
			$this->css_navbar = 'css/navbar.css';
			// css header.css
			$this->css_header = 'css/header.css';
			// css whoiam.css
			$this->css_whoiam = 'css/whoiam.css';
			// css whatido.css
			$this->css_whatido = 'css/whatido.css';
			// css myServices.css
			$this->css_myservices = 'css/myServices.css';
			// css myClients.css
			$this->css_myclients = 'css/myClients.css';
			// css myCollaborations.css
			$this->css_myCollaborations = 'css/myCollaborations.css';
			// css tellAboutMe.css
			$this->css_tellAboutMe = 'css/tellAboutMe.css';
			// css prices.css
			$this->css_prices = 'css/prices.css';
			// css contactMe.css
			$this->css_contactMe = 'css/contactMe.css';
			// css footer.css
			$this->css_footer = 'css/footer.css';
			// css architectute.css
			$this->css_architecture = 'css/architectute.css';

			// javascript bootstrap

			$this->js_bootstrap = 'js/bootstrap.min.js';
		}

		function head(){
			?>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="icon" type="image/x-icon" href="loghi/falco96-logo.png">
				<title><?php echo $this->title; ?></title>
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_bootstrap; ?>">
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_fontAwesome; ?>">
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_materialDesign; ?>">
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_main; ?>">
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_navbar; ?>">
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_header; ?>">
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_whoiam; ?>">
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_whatido; ?>">
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_myservices; ?>">
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_myclients; ?>">
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_myCollaborations; ?>">
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_tellAboutMe; ?>">
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_prices; ?>">
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_contactMe; ?>">
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_footer; ?>">
				<link rel="stylesheet" type="text/css" href="<?php echo $this->css_architecture; ?>">
			<?php
		}

		function js(){
			?>
			<script src="js/jquery-3.3.1.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="<?php echo $this->js_bootstrap; ?>"></script>
			<?php
		}

		function scrollSpy(){
			?> data-spy="scroll" data-target=".navbar" data-offset="50" <?php
		}

	}

	class elements{

		private $description;


		function __construct(){}


		function navbar(){
			?>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark my-navbar fixed-top" id="myNavbar">
				<a class="navbar-brand" href="http://techdeveloper.host-falco96.com">Tech Developer</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						
					</ul>
					<ul class="navbar-nav navbar-right">
						<li class="nav-item">
							<a href="#chiSono" class="nav-link"> Chi sono </a>
						</li>
						<li class="nav-item"> <a href="#cosaFaccio" class="nav-link"> Cosa faccio </a> </li>
						<li class="nav-item"> <a href="#iMieiServici" class="nav-link"> Servizi </a> </li>
						<li class="nav-item"> <a href="#iMieiClienti" class="nav-link"> Alcuni clienti </a> </li>
						<li class="nav-item"> <a href="#collaborazioni" class="nav-link"> Collaborazioni </a> </li>
						<li class="nav-item"> <a href="#infrastruttura1" class="nav-link"> I miei server </a> </li>
						<li class="nav-item"><a class="nav-link" href="https://sharekfile.com" target="_blank"> SharekFile </a></li>
						<li class="nav-item"> <a class="nav-link" href="https://db.teck-developer.php" target="_blank"> Database </a> </li>
						<li class="nav-item"><a class="nav-link" href="https://a1c13a6.online-server.cloud:8443/"> Server dedicato </a></li>
						<!-- <li class="nav-item"> <a href="#diconoDiMe" class="nav-link"> Dicono di me </a> </li> -->
						<li class="nav-item"> <a href="#prezzi" class="nav-link" title="Prezzi"> <i class="fa fa-money"></i> </a> </li>
						<li class="nav-item"> <a href="#contattami" class="nav-link" title="Contattami"> <i class="fa fa-phone"></i> </a> </li>
					</ul>
				</div>
			</nav>
			<?php
		}

		function header(){
			?>
			<div class="jumbotron jumbotron-fluid align-center" id="header">
				<div class="container">
					<h1 class="display-4 align-center">Tech Developer</h1>
					<p class="lead align-center">Un'idea, un progetto, una soluzione</p>
				</div>
			</div>
			<?php
		}

		function whoIAm(){
			?>
			<section id="chiSono">
				<div class="container align-center">
					<div class="row">
						<h2 class="mx-auto"> Chi sono </h2>
					</div>
					<div class="row">
						<div class="card mx-auto" style="width: 18rem;">
							<div class="card-body">
								<h5 class="card-title">Denis Genitoni</h5>
								<p class="card-text">
									Titolare di un'azienda di tecnologia, Tech Developer, il mio obiettivo è quello di portare innovazione nelle aziende e aiutare tutti a comprendere un po' di più la tecnologia. <br />
									Ho realizzato progetti impegnativi come <a href="https://sharekfile.com" target="_blank"> SharekFile </a>, utile per portare i propri file di lavoro con se e per avere sempre a disposizione una piattaforma che aiuti nello sviluppo delle proprie idee
								</p>
								<a href="" data-toggle="modal" data-target="#whoiam" class="btn btn-outline-primary">Contattami</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php
		}

		function whatIDo(){
			?>
				<section id="cosaFaccio">
					<div class="container align-center">
						<div class="row">
							<h2 class="mx-auto"> Cosa faccio </h2>
						</div>
						<div class="row">
							<div class="container mx-auto align-center">
								<div class="col-lg-3 float-left">
									<i class="material-icons" title="Riparazione device" data-toggle="modal" data-target="#fixDevice"> build </i>
								</div> 
								<div class="col-md-3 float-left">
									<i class="material-icons" title="Realizzazione siti responsive" data-toggle="modal" data-target="#websiteResponsive"> devices </i>
								</div>
								<div class="col-md-3 float-left">
									<i class="material-icons" title="Fornire una buona infrastruttura" data-toggle="modal" data-target="#infrastruttura"> storage </i>
								</div>
								<div class="col-md-3 float-left">
									<i class="material-icons" title="Aumento delle possibilità di un'azienda" data-toggle="modal" data-target="#helpAgency"> timeline </i>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php
		}

		function services(){
			?>
				<section id="iMieiServici">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-6 float-left" id="cloudSection">
								<a href="" data-toggle="modal" data-target="#sharekfile" class="click"> <h2 class="mx-auto"> SharekFile </h2> </a>
							</div>
							<div class="col-lg-6 float-right" id="blogSection">
								<a href="" data-toggle="modal" data-target="#blogFalco96" class="click"><h2 class="mx-auto"> Blog Falco96 </h2> </a>
							</div>
						</div>
					</div>
				</section>
			<?php
		}


		function myClients(){
			?>
				<section id="iMieiClienti">
					<div class="container-fluid">
						<div class="row">
							<h2 class="mx-auto"> Alcuni clienti </h2>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div id="ourClients" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<a href="https://voilasrl.eu" target="_blank"> <img class="d-block mx-auto" src="loghi/logo-voilasrl.png" alt="First slide" title="Voilà Srl"> </a>
										</div>
										<div class="carousel-item">
											<a href="http://robertoperotti.com" target="_blank"> <img class="d-block mx-auto" src="loghi/logo-roberto-perotti.png" alt="Second slide" title="Roberto Perotti Fotografo"> </a>
										</div>
										<div class="carousel-item">
											<a href="https://erbedivita.it" target="_blank"> <img class="d-block mx-auto" src="loghi/logo-erboristeria-erbedivita.png" alt="Third slide" title="Erboristeria L'albero della vita"> </a>
										</div>
										<div class="carousel-item">
											<a href="http://www.mentani.it/" target="_blank"> <img src="loghi/mentani.png" class="d-block mx-auto" alt="fourh slide" title="Mentani Srl"> </a>
										</div>
										<div class="carousel-item">
											<a href="http://www.delmontetapparelle.it/tapparelle" target="_blank"> <img src="loghi/delmonte-snc.png" class="d-block mx-auto" alt="fifth slide" title="Delmonte S.N.C"> </a>
										</div>
										<div class="carousel-item">
											<a href="http://sangiorgioservice.com" target="_blank"> <img src="loghi/sangiorgioservice.png" class="d-block mx-auto" alt="sixty slide" title="San Giorgio S.r.L"> </a>
										</div>
										<div class="carousel-item">
											<a href="http://cooperativainsieme.net" target="_blank"> <img src="loghi/cooperativa-insieme.png" class="d-block mx-auto" alt="sixty slide" title="INSIEME Società Cooperativa Sociale- E.T.S"> </a>
										</div>
										<div class="carousel-item">
											<a href="https://massimorossolillo.it" target="_blank"> <img src="loghi/billoweb-community.png" class="d-block mx-auto" align="eighty slide" title="Billoweb Community"> </a>
										</div>
									</div>
									<a class="carousel-control-prev" href="#ourClients" role="button" data-slide="prev" id="control-prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#ourClients" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php
		}
		/*
		function tellAboutMe(){
			?>
				<section id="diconoDiMe">
					<div class="container-fluid">
						<div class="row">
							<h2 class="mx-auto"> Dicono di me </h2>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div id="tellAboutMe" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
										</div>
									</div>
									<a class="carousel-control-prev" href="#tellAboutMe" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#tellAboutMe" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php
		}
		*/

		function myCollaborations(){
			?>
				<section id="collaborazioni">
					<div class="container-fluid">
						<div class="row">
							<h3 class="mx-auto"> Collaborazioni </h3>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
										<li data-target="carouselExampleIndicators" data-slide="2"></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<a href="https://wwww.worldtecno.com" target="_blank"><img class="d-block w-100" src="img/WorldTecno.jpg" alt="First slide"></a>
											<div class="carousel-caption d-none d-md-block">
												<h5>Raffaele Tufano</h5>
												<p><a href="https://www.worldtecno.com" target="_blank"> Vai al sito </a></p>
											</div>
										</div>
										<div class="carousel-item">
											<a href="https://www.waku-seo.com/it/" target="_blank"><img class="d-block w-100" src="img/waku-seo.jpg" alt="Second slide">
											<div class="carousel-caption d-none d-md-block">
												<h5>Philip Waku</h5>
												<p> <a href="https://waku-seo.com/it/" target="_blank"> Vai al sito </a> </a> </p>
											</div>
										</div>
										<div class="carousel-item">
											<a href="https://tebigeek.com" target="_blank"><img src="img/tebigeek.jpg" class="d-block w-100" alt="Tith Slide"></a>
											<div class="carousel-caption d-none d-md-block">
												<h5> Tebigeek </h5>
												<p><a href="https://tebigeek.com" target="_blank"> Vai al sito </a></p>
											</div>
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php
		}

		function architecture(){
			?>
				<section id="infrastruttura1">
					<div class="container-fluid">
						<div class="row">
							<h2 class="mx-auto"> I miei server </h2>
						</div>
						<div class="row text-center">
							<div class="col-lg-3">
								<img src="icons/core.swg" class="img-thumbnail mx-auto">
								<p>
									6 core di CPU a 2.2 GHz
								</p>
							</div>
							<div class="col-lg-3">
								<img src="icons/ram.svg" class="img-thumbnail mx-auto">
								<p>
									9 GB di ram e 900 MB di ram allocabile, via php, per script
								</p>
							</div>
							<div class="col-md-3">
								<img src="icons/storage.svg" class="img-thumbnail mx-auto">
								<p>
									Storage su SSD SATA III. Da ora, su richiesta, anche su SSD NVmE (costo aggiuntivo)
								</p>
							</div>
							<div class="col-lg-3">
								<img src="icons/security.svg" class="img-thumbnail mx-auto">
								<p>
									Antivirus, antimalware e anti spyware inclusi in ogni pacchetto. Inoltre, SFTP e SSH sono i miei standard per gestire i tuoi dati 
								</p>
							</div>
						</div>
					</div>
				</section>
				<section id="infrastruttura1">
					<div class="container-fluid">
						<div class="row">
							<h2 class="mx-auto"> *NOVITA'* Server dedicato con plesk </h2>
						</div>
						<div class="row text-center">
							<div class="col-lg-3">
								<img src="icons/core.swg" class="img-thumbnail mx-auto">
								<p>
									4 core CPU xeon da 3.5FGz
								</p>
							</div>
							<div class="col-lg-3">
								<img src="icons/ram.swg" class="img-thumbnail mx-auto">
								<p>
									32 GB di ram e 1400 MB di ram allocabile, via php, per script
								</p>
							</div>
							<div class="col-lg-3">
								<img src="icons/storage.swg" class="img-thumbnail mx-auto">
								<p>
									Storage su SSD SATA III. Per ora solo su HDD meccanico.
								</p>
							</div>
							<div class="col-md-3">
								<img src="icons/security.swg" class="img-thumbnail mx-auto">
								<p>
									Antivirus, antimalware e anti spyware inclusi in ogni pacchetto. Inoltre, SFTP e SSH sono i miei standard per gestire i tuoi dati <br />
									Da questo momento dalla voce <a href="db.teck-developer.com" target="_blank"> Database </a> che troverai nel menu in alto a destra, potrai accedere a tutti i tuoi database, sia del server dedicato che dei cloud hosting.
									<p> Da oggi ho a disposizione un sistema di backup personalizzabile, per il server dedicato, per incontrare le esigenze di ogni cliente </p>
								</p>
							</div>
						</div>

					</div>
				</section>
			<?php
		}

		function prices(){
			?>
			<section id="prezzi">
				<div class="container-fluid">
					<div class="row">
						<h2 class="mx-auto"> Prezzi </h2>
					</div>
					<div class="row">
						<div class="card-deck mb-3 text-center mx-auto">
							<div class="card mb-4 shadow-sm">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">Hosting base</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">€5 <small class="text-muted">/ mo</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>100 GB di spazio</li>
										<li>1 account FTPt</li>
										<li>E' possibile usare un proprio dominio o dei sottodomini</li>
										<li>Possibilità di installare uno o più CMS (quali Wordpress)</li>
										<li>Servizio di assistenza prioritaria via email</li>
										<li>Servizio di call senter prioritario incluso</li>
									</ul>
									<a href="https://falco96.com/product/basic-plane-hosting" class="btn btn-lg btn-block btn-outline-primary" target="_blank"> Acquista </a>
								</div>
							</div>
							<div class="card mb-4 shadow-sm">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">Hosting base con dominio</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">€7 <small class="text-muted">/ mo</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>100 GB di spazio</li>
										<li>1 account FTPt</li>
										<li>Possibilità di attivare un dominio</li>
										<li>Possibilità di installare uno o più CMS (quali Wordpress)</li>
										<li>Servizio di assistenza prioritaria via email</li>
										<li>Servizio di call senter prioritario incluso</li>
									</ul>
									<a href="https://falco96.com/product/basic-plain-domain-hosting" class="btn btn-lg btn-block btn-outline-primary" target="_blank"> Acquista </a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<h2 class="mx-auto"> Hosting plane </h2>
					</div>
					<div class="row">
						<div class="card-deck mb-3 text-center mx-auto">
							<div class="card mb-4 shadow-sm mx-auto">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">Piano base SharekFile</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">€5 <small class="text-muted">/ mo</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>100 GB di spazio</li>
										<li>1 account FTPt</li>
										<li>Puoi usufruire di tutte le funzionalità di SharekFile</li>
										<li>Possibilità di utilizare il framework di SharekFile per sviluppare applicazioni</li>
										<li>Servizio di assistenza (non prioritaria) via email</li>
									</ul>
									<a href="https://falco96.com/product/basic-plane-cloud" class="btn btn-lg btn-block btn-outline-primary" target="_blank"> Acquista </a>
								</div>
							</div>
							<div class="card mb-4 shadow-sm">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">Piano base SharekFile (200GB)</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">€15 <small class="text-muted">/ mo</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>200 GB di spazio</li>
										<li>1 account FTPt</li>
										<li>Puoi usufruire di tutte le funzionalità di SharekFile</li>
										<li>Possibilità di utilizare il framework di SharekFile per sviluppare applicazioni</li>
										<li>Servizio di assistenza (non prioritaria) via email</li>
									</ul>
									<a href="https://falco96.com/product/basic-plus-cloud" class="btn btn-lg btn-block btn-outline-primary" target="_blank"> Acquista </a>
								</div>
							</div>
						</div>
						<div class="card-deck mb-3 text-center mx-auto">
							<div class="card mb-4 shadow-sm">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">Piano base SharekFile (300GB)</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">€25 <small class="text-muted">/ mo</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>300 GB di spazio</li>
										<li>1 account FTPt</li>
										<li>Puoi usufruire di tutte le funzionalità di SharekFile</li>
										<li>Possibilità di utilizare il framework di SharekFile per sviluppare applicazioni</li>
										<li>Servizio di assistenza prioritaria via email</li>
										<li>Servizio di call center</li>
									</ul>
									<a href="https://falco96.com/product/basic-300gb-cloud" class="btn btn-lg btn-block btn-outline-primary" target="_blank"> Acquista </a>
								</div>
							</div>
							<div class="card mb-4 shadow-sm">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">SharekFile piano Pro</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">€70 <small class="text-muted">/ mo</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>2 TB di spazio</li>
										<li>2 account FTP (o più su richiesta)</li>
										<li>Puoi usufruire di tutte le funzionalità di SharekFile</li>
										<li>Possibilità di utilizare il framework di SharekFile per sviluppare applicazioni</li>
										<li>Servizio di assistenza prioritaria via email</li>
										<li>Servizio di call center prioritario</li>
										<li>Consulenza per lo sviluppo delle tue applicazioni</li>
										<li>Sconto del 5% su base annua, per un eventuale pacchetto hosting a tua scelta</li>
									</ul>
									<a href="https://falco96.com/product/sharekfile-pro-plane" class="btn btn-lg btn-block btn-outline-primary" target="_blank"> Acquista </a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<h2 class="mx-auto"> Email plane </h2>
					</div>
					<div class="row">
						<div class="card-deck mb-3 text-center mx-auto">
							<div class="card mb-4 shadow-sm">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">email da 2 GB</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">€2 <small class="text-muted">/ mo</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>email personalizzata con il proprio dominio</li>
										<li>Assistenza giornaliera, per ogni occasioni, per la maggior parte dei problemi</li>
										<li>Tutte le info raggiungibili dal pulsante "Acquista"</li>
									</ul>
									<a href="https://falco96.com/product/email-da-2-gb" class="btn btn-lg btn-block btn-outline-primary" target="_blank"> Acquista </a>
								</div>
							</div>
							<div class="card mb-4 shadow-sm">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">email da 50 GB</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">€5 <small class="text-muted">/ mo</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>email personalizzata con il proprio dominio</li>
										<li>Assistenza giornaliera, per ogni occasioni, per la maggior parte dei problemi</li>
										<li>Tutte le info raggiungibili dal pulsante "Acquista"</li>
									</ul>
									<a href="https://falco96.com/product/email-da-50-gb" class="btn btn-lg btn-block btn-outline-primary" target="_blank"> Acquista </a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<h2 class="mx-auto"> Assistenza tecnica </h2>
					</div>
					<div class="row">
						<div class="card-deck mb-3 text-center mx-auto">
							<div class="card mb-4 shadow-sm">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">Assistenza tecnica 3 mesi</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">€60 <small class="text-muted">/ mo</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>3 mesi di assistenza tecnica</li>
										<li>Assistenza giornaliera, per ogni occasioni, per la maggior parte dei problemi</li>
										<li>Tutte le info raggiungibili dal pulsante "Acquista"</li>
									</ul>
									<a href="https://falco96.com/product/assistenza-tecnica-3-mesi" class="btn btn-lg btn-block btn-outline-primary" target="_blank"> Acquista </a>
								</div>
							</div>
							<div class="card mb-4 shadow-sm">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">Assistenza tecnica 6 mesi</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">€55 <small class="text-muted">/ mo</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>6 mesi di assistenza tecnica</li>
										<li>Assistenza giornaliera, per ogni occasioni, per la maggior parte dei problemi</li>
										<li>Tutte le info raggiungibili dal pulsante "Acquista"</li>
									</ul>
									<a href="https://falco96.com/product/assistenza-tecnica-6-mesi" class="btn btn-lg btn-block btn-outline-primary" target="_blank"> Acquista </a>
								</div>
							</div>
						</div>
						<div class="card-deck mb3 text-center mx-auto">
							<div class="card mb-4 shadow-sm">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">Assistenza tecnica 1 anno</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">€46 <small class="text-muted">/ mo</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>12 mesi di assistenza tecnica</li>
										<li>Assistenza giornaliera, per ogni occasioni, per la maggior parte dei problemi</li>
										<li>Tutte le info raggiungibili dal pulsante "Acquista"</li>
									</ul>
									<a href="https://falco96.com/product/assistenza-tecnica-1-anno" class="btn btn-lg btn-block btn-outline-primary" target="_blank"> Acquista </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
		}

		function contactMe(){
			?>
				<section id="contattami">
					<div class="container-fluid">
						<div class="row">
							<h2 class="mx-auto"> Contattami </h2>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<form method="post" action="">
									<div class="form-inline form-group">
										<input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
										<input type="text" name="surname" id="surname" class="form-control" placeholder="Cognome" required>	
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
									</div>
									<div class="form-group">
										<input type="text" name="object" id="object" class="form-control" placeholder="Oggetto" required>
									</div>
									<div class="form-group">
										<textarea name="message" id="message" class="form-control"></textarea>
									</div>
									<div class="form-group">
										<input type="submit" name="contactMe" id="contactMe" class="btn btn-outline-primary" value="Contattami">
									</div>
								</form>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<i class="material-icons"> phone </i> <a href="tel: 3203071917"> 3203071917 </a>
								</div>
								<div class="form-group">
									<i class="material-icons"> email </i> <a href="mailto: denis.genitoni@teck-developer.com"> denis.genitoni@teck-developer.com </a>
								</div>
								<div class="form-group">
									<i class="material-icons"> email </i> <a href="mailto: denis.genitoni@pec.it"> denis.genitoni@pec.it </a>
								</div>
								<div class="form-group">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22711.254216655183!2d10.36231798903744!3d44.63982226236984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47800dd264abd5c3%3A0x41beed1ed97ddf64!2s43029+Traversetolo%2C+Province+of+Parma!5e0!3m2!1sen!2sit!4v1541862457984" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php
		}

		function footer(){
			?>
			<!-- Footer -->
			<footer class="page-footer font-small blue pt-4">

				<!-- Footer Links -->
				<div class="container-fluid text-center text-md-left">

					<!-- Grid row -->
					<div class="row">

						<!-- Grid column -->
						<div class="col-md-6 mt-md-0 mt-3">

							<!-- Content -->
							<h5 class="text-uppercase">Tech Developer</h5>
							<p>
								P.IVA: 02871690349 <br />
								Azienda registrata a maggio 2018 a nome di Denis Genitoni <br />
								A destra potrai trovare tutti i miei servizi, sviluppati nel tempo <br />
								Sono disponibile ai contatti sopra riportati dal lunedì al venerdì 7:30 / 19:00 <br />
								Per richieste commerciali e non lavorative: <a href="mailto: info@teck-developer.com"> info@teck-developer.com </a>
							</p>

						</div>
						<!-- Grid column -->

						<hr class="clearfix w-100 d-md-none pb-3">

						<!-- Grid column -->
						<div class="col-md-3 mb-md-0 mb-3">

							<!-- Links -->
							<h5 class="text-uppercase">Servizi</h5>

							<ul class="list-unstyled">
								<li>
									<a href="https://sharekfile.com" target="_blank">SharekFile Cloud</a>
								</li>
								<li>
									<a href="https://falco96.com" target="_blank">Falco96 blog</a>
								</li>
								<li>
									<a href="https://falco96.com/shop/" target="_blank">Falco96 acquisti</a>
								</li>
							</ul>

						</div>
						<!-- Grid column -->

						<!-- Grid column -->
						<div class="col-md-3 mb-md-0 mb-3">

							<!-- Links -->
							<h5 class="text-uppercase">Prodotti</h5>

							<ul class="list-unstyled">
								<li>
									<a href="https://os.sharekfile.com" target="_blank">SharekFileOS</a>
								</li>
							</ul>

						</div>
						<!-- Grid column -->

					</div>
					<!-- Grid row -->

				</div>
				<!-- Footer Links -->

				<!-- Copyright -->
				<div class="footer-copyright text-center py-3">© <?php echo date('Y'); ?> Copyright:
					<a href=https://teck-developer.com"> Tech Developer</a>
					icons: <a href="https://www.freepik.com" title="Freepik">Freepik</a>  <a href="https://www.flaticon.com/" title=" From Flaticon">flaticon</a> <a href="http://creativecommons.org/licenses/by/3.0/" title="Licence by Creative Commons BY 3.0" target="_blank">CC 3.0</a>
				</div>
				<!-- Copyright -->

			</footer>
			<!-- Footer -->
			<?php
		}


		function modalContact(){
			?>


			<div class="modal fade" id="whoiam" tabindex="-1" role="dialog" aria-labelledby="whoiamLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title align-center" id="whoiamLabel">Contattami</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="" method="post">
								<div class="form-inline form-group">
									<input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
									<input type="text" name="surname" id="surname" class="form-control" placeholder="Cognome" required>	
								</div>
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
								</div>
								<div class="form-group">
									<input type="text" name="object" id="object" class="form-control" placeholder="Oggetto" required>
								</div>
								<div class="form-group">
									<textarea name="message" id="message" class="form-control"></textarea>
								</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
							<input type="submit" class="btn btn-outline-primary" name="contactMe" id="contactMe" value="Contattami">
							</form>
						</div>
					</div>
				</div>
			</div>
			<?php
		}

		function modalIcons(){
			?>
				<div class="modal fade" id="fixDevice" tabindex="-1" role="dialog" aria-labelledby="fixDeviceLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title align-center" id="fixDeviceLabel">Riparazione dispositivi</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Mi occupo della riparazione di svariati dispositivi, quali smartphone, tablet e computer, sia per i privati che per l'azienda.
							Se poi, hai un dispositivo vecchio che magari vorresti ripristinare per poterlo usare, senza quindi doverlo buttare, beh ti aiuterò a renderlo nuovamente operativo, magari non come opzione principale, ma come dispoitivo secondario.
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>


			<div class="modal fade" id="websiteResponsive" tabindex="-1" role="dialog" aria-labelledby="websiteResponsiveLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title align-center" id="websiteResponsiveLabel">Realizzazione di website responsive</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Uno dei problemi del 2018 è sicuramente quello di vedere ancora quei siti vecchi, ormai fatiscenti e sicuramente non all'altezza di quest'epoca. 
							<p> <h4>Ma che cosa deve avere un sito per essere funzionale?</h4> </p>
							<p>
								<ul>
									<li>Essere graficamente all'avanguardia</li>
									<li>Riuscire a comunicare tutte le informazioni in poco tempo</li>
									<li>Adattarsi facilmente ai vari dispositivi, tra cui gli smartphone</li>
								</ul>
							</p>
							<p> <h4>Quanti sono i siti che rispecchiano questi parametri?</h4> </p>
							<p>
								Beh non pensarci. Ti do la risposta io stesso: <b> <i>pochi </i> </b>. Troppo pochi sarebbe la definizione ideale. <br />
								Avere un sito internet fatto bene è il primo passo per comunicare al meglio con le persone, sia che tu sia un'azienda, sia che tu sia un "semplice" privato. 
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="infrastruttura" tabindex="-1" role="dialog" aria-labelledby="infrastrutturaLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title align-center" id="infrastrutturaLabel">Infrastruttura di alta qualità</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							A che serve avere un ottimo sito internet, se poi ci mette i secoli a caricarsi? Beh nulla. <br />
							La maggior parte dell'utenza dopo 6 secondi in cui il sito carica senza produrre alcun risultato, in parole povere quindi
							carica a vuoto, lo abbandona per cercarne un altro. 
							<p><h4> Adattamento alla GDPR </h4></p>
							<p>
								Tutti i siti per legge devono essere regolamentati con la <a href="https://falco96.com/gdpr-2018-che-cose-e-come-prepararsi" target="_blank"> GDPR </a>, e avere collegato un protocollo SSL. <br />
								Senza di ciò, si rischia una bella multa, che se ti posso consigliare una cosa, non prenderla. Te la sconsiglio calorosamente.
							</p>
							<p>
								Detto questo, io offro un'infrastruttura che è veloce, sempre all'avanguardia, sicura e legiferata con gli ultimi standard di legge. Prova se non mi credi!
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>


			<div class="modal fade" id="helpAgency" tabindex="-1" role="dialog" aria-labelledby="helpAgencyLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title align-center" id="helpAgencyLabel">Aumento le possibilità di un privato o di un'azienda</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Occupandomi di riparare o rigenerare dispositivi, realizzare siti internet o applicazioni soddisfacenti e fornendo un'infrastruttura adeguata, con l'aggiunta di un buon servizio di consulenza, sono in grado di ampliare le possibilità di un'azienda <br />
							Lo so, non mi crederai. Ti resta solo una cosa da fare allora. <a href="" data-toggle="modal" data-target="#whoiam"> Prova a contattarmi e richiedimi una consulenza gratuita </a>.
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<?php
		}

		function modalServices(){
			?>
				<div class="modal fade" id="sharekfile" tabindex="-1" role="dialog" aria-labelledby="sharekfileLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title align-center" id="sharekfileLabel">SharekFile</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							SharekFile è una piattaforma cloud, di mia creazione, che permette dai meno ai più esperti di gestire i propri dati online
							<p>
								Oltre a consentire la classica gestione dei propri file, SharekFile permette agli sviluppatori di poter scrivere le proprie applicazioni, potendo tenere al sicuro il proprio codice sorgente, potendo avere un'ambiente in cui testare le proprie crezzioni e volendo poter usufruire di un framework in grado di soddisfare la maggior parte delle necessità.
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
							<a href="https://sharekfile.com" target="_blank" class="btn btn-outline-primary"> SharekFile </a>
						</div>
					</div>
				</div>
			</div>




			<div class="modal fade" id="blogFalco96" tabindex="-1" role="dialog" aria-labelledby="blogFalco96Label" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title align-center" id="blogFalco96Label">Falco96</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Guide, recensioni, opinioni, consigli e molto altro in un unico sito. Lo so, esistono tsnti altri blog, molti anche migliori del mio, sicuramente.
							<p>
								Ma vi posso assicurare che qualche consiglio posso darvelo. Ho pensato di rendere fruibili parte (tutte non posso, devo anche pensare al portafogli!) delle mie competenze a costo zero. Quindi io una letta, la darei, che ne dici?
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
							<a href="https://falco96.com" target="_blank" class="btn btn-outline-primary"> Falco96 </a>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
	}

	class contactForm{
		private $name;
		private $surname;
		private $email;
		private $object;
		private $message;

		function __construct(){
			if(isset($_POST['contactMe'])){
				$this->name = strip_tags($_POST['name']);
				$this->surname = strip_tags($_POST['surname']);
				$this->email = strip_tags($_POST['email']);
				$this->object = strip_tags($_POST['object']);
				$this->message = strip_tags($_POST['message']);
			}
		}

		function saveData(){
			include 'config.php';

			$identification = $this->name . " " . $this->surname . " " . $this->email . " Tech Dev";
			$oggetto = $this->object . " from Thech Developer"; 
			$messaggio = $this->message;
			$date = date('y/m/d');

			$sql = "INSERT INTO contact (identification, oggetto, messaggio, date) VALUES ('$identification', '$oggetto', '$messaggio', '$date')";
			$save_msg = mysqli_query($connection, $sql);
			if(!$save_msg)
				die("errore durante il salvataggio dei dati nel database");
		}

		function confirm(){
			return 'message_sent';
		}
	}
?>