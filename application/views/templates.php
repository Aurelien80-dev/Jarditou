<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Jarditou propose des articles de jardinage en ligne"> 	
<meta name="keywords" content="jardinage, outils, plantes, jardin, semis, brouettes"> 

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Ubuntu:400,400i,500,500i,700,700i" rel="stylesheet">
  <link rel = "stylesheet" type = "text/css"  href = "<?php echo base_url('assets/css/style.css'); ?>">
	<link rel="icon"  href="<?php echo base_url()?>assets/images/logo/favicon.ico" >
<title>Jarditou</title>
</head>
<body class='container'>

  <header>

     
      <nav class="navbar  navbar-expand-sm font-weight-bold">  
                       <img class="logo img-responsive" src="<?= base_url('assets/images/logo/jarditou_logo.png')?>"  width="30%" height="80px" alt="responsive" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"><i class="fas fa-chevron-down" style='color: black;'></i></span>
    </button>
		

		<div class="collapse navbar-collapse" width="100" id="collapsibleNavbar">
		<ul class="navbar-nav">
		<li class="nav-item">
		<a  href="<?= site_url('Produits/acceuil')?>" >Accueil</a>
		</li>
		<li class="nav-item">
		<a  href="<?= site_url('Produits/listes')?>">Catalogue</a>
		</li>
		<li class="nav-item">
		<a  href="<?= site_url('Boutique/listeBoutique')?>">Boutique</a>
		</li>				
      </ul>
      <ul class="navbar-nav">
    			<?php 
    			if ($this->session->connected == false)
    			{ ?>
    			    <li class="nav-item"><a  href="<?= site_url("register/inscription") ?>"><i class="fas fa-user-plus"></i></a></li>
    			    <li class="nav-item"><a  href="<?= site_url("register/connexion") ?>"><i class="fas fa-sign-in-alt"></i></a></li>
    			<?php }
    			else 
    			{ ?>
    			    <span class="navbar-text"><i class="fas fa-id-card"></i><strong style='color:#FF8C00;  font-size:20px;'><?php echo"Bonjour".' ' .  $this->session->prenom.''?></strong></span>
    			    <li class="nav-item">
    			    	<a class="nav-link panier" href="<?= site_url("boutique/affiche") ?>">Panier (<?= $this->session->panier==null?0:count($this->session->panier) ?>)</a>
    			    </li>
    			    <li class="nav-item">
    			    	<a class="nav-link logout" href="<?= site_url("register/logout") ?>">Déconnexion </a>
    			    </li>
    			<?php }
    			?>

		
</div> 
</nav>
	 <div  class="container">
 	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?= base_url("assets/images/logo/banniere.png") ?>" width="130px"  height="250px" class="promo" alt="Responsive image">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url("assets/images/logo/fond.jpg")?>" width="130px"  height="250px" alt="Responsive image">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url("assets/images/logo/Jarditou2.png")?>" width="130px"  height="250px" alt="Responsive image">
    </div>
    </div>
     
    </header>
<hr>
</div>    			    
    	
         		<div class="container">

    
      		<!-- Le diaporama -->
      		
    
      		<!-- contrôles droite et gauche -->
      	
        	
        <?= $contenu ?>
        
		
	<script type="text/javascript" async=true>
    var elem = document.createElement('script');
    elem.src = 'https://quantcast.mgr.consensu.org/cmp.js';
    elem.async = true;
    elem.type = "text/javascript";
    var scpt = document.getElementsByTagName('script')[0];
    scpt.parentNode.insertBefore(elem, scpt);
    (function() {
    var gdprAppliesGlobally = false;
    function addFrame() {
        if (!window.frames['__cmpLocator']) {
        if (document.body) {
            var body = document.body,
                iframe = document.createElement('iframe');
            iframe.style = 'display:none';
            iframe.name = '__cmpLocator';
            body.appendChild(iframe);
        } else {
            // In the case where this stub is located in the head,
            // this allows us to inject the iframe more quickly than
            // relying on DOMContentLoaded or other events.
            setTimeout(addFrame, 5);
        }
        }
    }
    addFrame();
    function cmpMsgHandler(event) {
        var msgIsString = typeof event.data === "string";
        var json;
        if(msgIsString) {
        json = event.data.indexOf("__cmpCall") != -1 ? JSON.parse(event.data) : {};
        } else {
        json = event.data;
        }
        if (json.__cmpCall) {
        var i = json.__cmpCall;
        window.__cmp(i.command, i.parameter, function(retValue, success) {
            var returnMsg = {"__cmpReturn": {
            "returnValue": retValue,
            "success": success,
            "callId": i.callId
            }};
            event.source.postMessage(msgIsString ?
            JSON.stringify(returnMsg) : returnMsg, '*');
        });
        }
    }
    window.__cmp = function (c) {
        var b = arguments;
        if (!b.length) {
        return __cmp.a;
        }
        else if (b[0] === 'ping') {
        b[2]({"gdprAppliesGlobally": gdprAppliesGlobally,
            "cmpLoaded": false}, true);
        } else if (c == '__cmp')
        return false;
        else {
        if (typeof __cmp.a === 'undefined') {
            __cmp.a = [];
        }
        __cmp.a.push([].slice.apply(b));
        }
    }
    window.__cmp.gdprAppliesGlobally = gdprAppliesGlobally;
    window.__cmp.msgHandler = cmpMsgHandler;
    if (window.addEventListener) {
        window.addEventListener('message', cmpMsgHandler, false);
    }
    else {
        window.attachEvent('onmessage', cmpMsgHandler);
    }
    })();
    window.__cmp('init', {
    		'Language': 'fr',
		'Initial Screen Title Text': 'Le respect de votre vie privée est notre priorité',
		'Initial Screen Reject Button Text': 'Je refuse',
		'Initial Screen Accept Button Text': 'J&#039;accepte',
		'Initial Screen Purpose Link Text': 'Afficher toutes les utilisations prévues',
		'Purpose Screen Title Text': 'Le respect de votre vie privée est notre priorité',
		'Purpose Screen Body Text': 'Vous pouvez configurer vos réglages et choisir comment vous souhaitez que vos données personnelles soient utilisées en fonction des objectifs ci-dessous. Vous pouvez configurer les réglages de manière indépendante pour chaque partenaire. Vous trouverez une description de chacun des objectifs sur la façon dont nos partenaires et nous-mêmes utilisons vos données personnelles.',
		'Purpose Screen Vendor Link Text': 'Afficher la liste complète des partenaires',
		'Purpose Screen Cancel Button Text': 'Annuler',
		'Purpose Screen Save and Exit Button Text': 'Enregistrer et quitter',
		'Vendor Screen Title Text': 'Le respect de votre vie privée est notre priorité',
		'Vendor Screen Body Text': 'Vous pouvez configurer vos réglages indépendamment pour chaque partenaire listé ci-dessous. Afin de faciliter votre décision, vous pouvez développer la liste de chaque entreprise pour voir à quelles fins il utilise les données. Dans certains cas, les entreprises peuvent révéler qu&#039;elles utilisent vos données sans votre consentement, en fonction de leurs intérêts légitimes. Vous pouvez cliquer sur leurs politiques de confidentialité pour obtenir plus d&#039;informations et pour vous désinscrire.',
		'Vendor Screen Accept All Button Text': 'Tout Accepter',
		'Vendor Screen Reject All Button Text': 'Tout Refuser',
		'Vendor Screen Purposes Link Text': 'Revenir aux Objectifs',
		'Vendor Screen Cancel Button Text': 'Annuler',
		'Vendor Screen Save and Exit Button Text': 'Enregistrer et quitter',
		'Initial Screen Body Text': 'Nos partenaires et nous-mêmes utilisent différentes technologies, telles que les cookies, pour personnaliser les contenus et les publicités, proposer des fonctionnalités sur les réseaux sociaux et analyser le trafic. Merci de cliquer sur le bouton ci-dessous pour donner votre accord. Vous pouvez changer d’avis et modifier vos choix à tout moment',
		'Initial Screen Body Text Option': 1,
		'Publisher Name': 'Jarditou',
		'Min Days Between UI Displays': 1,
		'Consent Scope': 'service',
		'No Option': false,
		'UI Layout': 'banner',
    });
</script>
<!-- End Quantcast Choice. Consent Manager Tag -->
    	
	
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	</div>	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    	
	
</body>
         <footer class="navbar  sticky-top navbar-expand-sm navbar-dark text-light">
    		<ul class="navbar-nav text-light">
    			<li class="nav-item"><a  class="font-weight-bold" href="#">Mentions légales</a></li>
    			<li class="nav-item"><a class="font-weight-bold" href="<?= site_url('boutique/heure')?>">Horaires</a></li>
    			<li class="nav-item"><a class="font-weight-bold" href="https://www.google.com/maps/place/AFPA/@49.9274946,2.2715618,17z/data=!3m1!4b1!4m5!3m4!1s0x47e786b33e3719cf:0x5fca6cfbcc69e662!8m2!3d49.9274946!4d2.2737505?hl=fr" target="blank">Plan du site</a></li>
    		</ul>
    	
    	</footer>
</html>