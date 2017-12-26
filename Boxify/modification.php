<?php
require('connexion.php');
	$lastph='';
	$lastcv='';
	$lastlm='';

 $currentdate= date('Y-m-d h:i:s');

if(isset($_POST['adrs'])&&isset($_POST['pw'])){

$login = trim($_POST['adrs']);
$password = trim($_POST['pw']);
$exist='vérifier votre email ou votre mot de passe!';




   $sql =  'SELECT `id`, `nom`, `prenom`, `email`, `password`, `photo`, `cv`, `lm`, `LinkedIn`, `Viadeo`, `Facebook`, `Twitter`, `Monster`,  `Instagram`, `price`, `Date_payement` FROM `commande`';
    foreach  ($wpbd->query($sql) as $row) {
        
        if(($row['email']==$login )&& ($row['password']==$password )){
			
			    $date1 = $currentdate;
				$date2 =$row['Date_payement'] ;

				$hourdiff = round((strtotime($date1) - strtotime($date2))/3600, 1);
				if($hourdiff<=48){
					 $exist=$row['id'];
                     break;
				}
				else{
					 $exist='Votre payement a dépassé 48h, vous avez pas le droit de modifier vos données!';
                     break;
				}	
			
           
        }
    
  }

    echo $exist;



}
else if(isset($_GET['id'])&& trim($_GET['id'])!=""){
            $nom = '';
            $prenom = '';
            $email = '';
            $password ='';
            $lkdn ='';
			$vd = '';
			$fb ='';
			$tw = '';
			$mstr ='';
			$insta='';
			$photo = '';
			$cv = '';
			$lm='';
			$prix ='';
     $req='SELECT * From `commande` WHERE id='.$_GET['id'];
     $res=$wpbd->query($req);
    
     foreach ($res as $row){
				$nom = $row['nom'];
				$prenom = $row['prenom'];
				$email =$row['email'];
				$password = $row['password'];
				$lkdn =$row['LinkedIn'];
				$vd = $row['Viadeo'];
				$fb =$row['Facebook'];
				$tw = $row['Twitter'];
				$mstr =$row['Monster'];
				$insta=$row['Instagram'];
				$photo = $row['photo'];
				$cv = $row['cv'];
				$lm=$row['lm'];
				$autre=$row['autre'];
				$prix =$row['price'];
				
				$banquio = $row['Banquio'];
				$courtageNt = $row['CourtageNetwork'];
				$dogfinance = $row['Dogfinance'];
				$finroad = $row['FinRoad'];											   
				$dinbrok = $row['DinBrok'];											   
				$meetpips = $row['Meetpips'];											   
				$paciali = $row['Paciali'];											   
				$suplinks = $row['SupLinks'];

				$carRg = $row['CarRegister'];											  
				$fcnx = $row['FretConnection'];											  
				$motorlegend = $row['Motorlegend'];											   
				$transport = $row['Transport_Logistic'];											   
				$mtllgs = $row['Mutualisationlogistique'];

				$alveen = $row['Alveen'];											   
				$batiactu = $row['Bati_actu'];											   
				$b2b = $row['B2B_immobilier'];				   
				$dribble = $row['Dribble'];											   
				$Kasavox = $row['Kasavox'];											   
				$whozimmo = $row['Whozimmo'];

				$agrilink = $row['Agrilink'];											   
				$Iliaa = $row['Iliaa'];											   
				$dessushaie = $row['Par_Dessus_Haie'];											   
				$Wabel = $row['Wabel'];											  
				$Winemak_in = $row['Winemak_in'];

				$Artilinki = $row['Artilinki'];										
				$Artrelationship = $row['Artistically_relationship'];											   
				$Babler = $row['Babler'];											  									
				$Bottin = $row['Bottin_Livre'];											   
				$Exponentiel = $row['Exponentiel'];											   
				$Kinorezo = $row['Kinorezo'];											   
				$Koolyss = $row['Koolyss'];											   
				$LykHubs = $row['LykHubs'];											  
				$Mupiz = $row['Mupiz'];											  
				$Contemporary = $row['Contemporary'];											  
				$RezoTour = $row['RezoTour'];											   
				$Stage_32 = $row['Stage_32'];

				$Beesday = $row['Beesday'];											   
				$Catalethique = $row['Catalethique'];									
				$DDnetwork = $row['DDnetwork'];											   
				$EcoVibio = $row['EcoVibio'];											  
				$EnviMotion = $row['EnviMotion'];											   
				$indeed = $row['InDeed'];											   
				$planete = $row['PlaneteAttitude'];											  
				$Social_Planet = $row['Social_Planet'];									
				$Sustain = $row['Sustain_work'];											   
				$Wizness = $row['Wizness_Community'];											   
				$Woodsourcing = $row['Woodsourcing'];

				$Behance = $row['Behance'];										   
				$Digikaa = $row['Digikaa'];										   
				$Geeklist = $row['Geeklist'];											   
				$Github = $row['Github'];											   
				$Human_Coders = $row['Human_Coders'];											 
				$Woketer = $row['Woketer'];

				$Agstream = $row['Agents-stream'];											   
				$CulinaryAg = $row['Culinary_Agents'];										
				$FoodConnexion = $row['Food_Connexion'];								
				$Horeka = $row['Horeka'];											   
				$Kitchen = $row['Kitchen_Connect'];											 
				$Linkhospi = $row['Linkhospi'];											 
				$LifeSport = $row['LifeSport'];											
				$SportProfiler = $row['Sport_Profiler'];											  
				$Profilplayers = $row['Profil_players'];											   
				$ReseauVins = $row['Reseau_Vins'];											   
				$Restaurateur = $row['Restaurateur'];											   
				$vinSocialClub = $row['VinSocialClub'];											   
				$Winox = $row['Winox'];											   
				$Yummeet = $row['Yummeet'];	
															
				$HubAvocat = $row['Hub_Avocat'];											  
				$Vox_avocats = $row['Vox_avocats'];										 
				$LawLink = $row['Law_Link'];
															   
				$JobLux = $row['Job_Lux'];										
				$ManyMucho = $row['Many_Mucho'];											  
				$LuxurySociety = $row['Luxury_Society'];
															 
				$Esanum = $row['Esanum'];											   
				$Docatus = $row['Docatus'];											   
				$Dento = $row['Dento-Reseau'];											    										   
				$HeyDoctor = $row['Hey_Doctor'];											
				$FollowMed = $row['FollowMed'];											   
				$Medext = $row['Medext'];											   
				$Medeclic = $row['Medeclic'];											   
				$MeltingDoc = $row['Melting_Doc'];											   
				$Medpics = $row['Medpics'];											   
				$ProSante = $row['Pro_Sante'];											   
				$Infirmier = $row['Infirmier'];											    
				$Veterisphere = $row['Reseau_Veterisphere'];											   
				$SantConnect = $row['Sante_Connect'];											   
				$SantLog = $row['Sante_Log'];											   
				$telesoins = $row['Telesoins'];											   
				$Pharmacie = $row['Talent_Pharmacie'];	
														   
				$Academia = $row['Academia'];											  
				$BiomedExperts = $row['Biomed_Experts'];											    
				$ScienceWork = $row['Science_Work'];											 
				$ResearchGate = $row['Research_Gate'];
			
				// sites d'emploi
 
				$leboncoin = $row['leboncoin'];
				$apec = $row['apec'];
				$meteojob = $row['meteojob'];
				$cadremploi = $row['cadremploi'];
				$keljob  = $row['keljob'];
				$Jobrapido = $row['Jobrapido'];
				$Qapa  = $row['Qapa'];
				$JobiJoba = $row['JobiJoba'];
				$Vivastreet = $row['Vivastreet'];
				$Beep = $row['Beep'];
				$Jobintree = $row['Jobintree'];
				$territorial = $row['territorial'];
				$cornerjob = $row['cornerjob'];
				$fashionjob = $row['fashionjob'];
									
			
     }

        $price=explode(' ', $prix)[0];
	    $lastph=$photo;
		$lastcv=$cv;
		$lastlm=$lm;

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Identité professionnelle| Modification</title>
		<meta name="description" content="A free HTML5/CSS3 template made exclusively for Codrops" />
		<meta name="keywords" content="html5 template, css3, one page, animations, agency, portfolio, web design" />
		<meta name="author" content="" />
		<!-- Bootstrap -->
		<script src="js/modernizr.custom.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/jquery.fancybox.css" rel="stylesheet">
		<link href="css/flickity.css" rel="stylesheet" >
		<link href="css/animate.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/queries.css" rel="stylesheet">
		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
				<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- open/close -->
			<header>
			<section class="hero">
				<div class="texture-overlay"></div>
				<div class="container">
					<div class="row nav-wrapper">
						<div class="col-md-6 col-sm-6 col-xs-6 text-left">
							<a href="#"><img src="img/logo-white.png" alt="Boxify Logo"></a>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 text-right navicon">
							<p>MENU</p><a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#"><span></span></a>
						</div>
					</div>
					<div class="row hero-content">
						<div class="col-md-12">
							<h1 class="animated fadeInDown">Gérer votre identité professionnelle en un clic en étant présent et cohérent sur les
							principaux réseaux sociaux professionnelle et site d’emploi</h1>
							<a href="#commande" class="learn-btn animated fadeInUp">Créer mon identité professionnelle <i class="fa fa-arrow-down"></i></a>
						</div>
					</div>
				</div>
			</section>
		</header>
			<section class="parallax-section clearfix default_template" id="commande">
				<div class="overlay"></div>
					<div class="mid-content">
						<h2><span> Passer commande !</span></h2>
						<div class="parallax-content">
							<div class="page-content">
								<div class="row">
									<div class="span4 col">	
										<form class="form-horizontal" id="postup"  name="paypalform" data-toggle="validator" action="https://www.paypal.com/cgi-bin/webscr" method="post" encodage="multipart/form-data">
										<div class="form-group files">
											<div class="col-md-3 col-sm-3 col-xs-12">
												<label for="photo">PHOTO: </label>
												<input type="file" class="form-control-file" id="photo" name="photoup" accept="image/*"  value="" >
												<label id="labelphoto" for="photo">Parcourir</label>
												<label class="filecontent" style=" left: 140px;"> <?php if(!empty($photo)){ echo explode('/',$photo)[2];}else {echo 'Aucun fichier';}   ?></label>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
											<label for="exampleInputFile">CV:</label>
											<input type="file" class="form-control-file" id="cv" name="cvup" accept="application/pdf,application/msword,
  application/vnd.openxmlformats-officedocument.wordprocessingml.document"     value="" >
											<label id="labelcv" for="cv">Parcourir</label>
											<label class="filecontent" style=" left: 112px;"> <?php if(!empty($cv)){ echo  explode('/',$cv)[2];}else {echo 'Aucun fichier';}    ?></label>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
											<label for="lm">LM: </label>
											<input type="file" class="form-control-file" id="lm" name="lmup" value="" accept="application/pdf,application/msword,
  application/vnd.openxmlformats-officedocument.wordprocessingml.document" >
											<label id="labellm" for="lm">Parcourir</label>
											<label class="filecontent" style=" left: 112px;"><?php if(!empty($lm)){ echo  explode('/',$lm)[2]; }else {echo 'Aucun fichier';}  ?></label>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
											<label for="lm">Autres: </label>
											<input type="file" class="form-control-file" id="autre" name="autreup" value="">
											<label id="labelautre" for="autre">Parcourir</label>
											<label class="filecontent" style=" left: 140px;"><?php if(!empty($autre)){echo  explode('/',$autre)[2];}else {echo 'Aucun fichier';}   ?></label>
											</div>
										</div>
										  <div class="form-group">
											
											<div class="col-md-12 col-sm-12 col-xs-12">
											  <input type="text" class="form-control" name="nomup" id="nom" placeholder="Nom" value=" <?php echo $nom;   ?>" required>
											</div>
										  </div>
										    <div class="form-group">
											
											<div class="col-md-12 col-sm-12 col-xs-12">
											  <input type="text" class="form-control" name="prenomup" id="prenom" placeholder="Prénom" value=" <?php echo $prenom;   ?>" required>
											</div>
										  </div>
										  <div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
											  <input type="email" class="form-control" name="emailup" id="email" placeholder=" email"   data-error="Cette adresse email est invalide"   value=" <?php echo $email;   ?>" required>
											
                                              <div class="help-block with-errors"></div>
											</div>
										  </div>
										  <div class="form-group">
											
											<div class="col-md-12 col-sm-12 col-xs-12"> 
											  <input type="password" data-minlength="6"  class="form-control" name="pwdup" id="pwd" placeholder="Mot de passe" value=" <?php echo $password;   ?>" required>
											  <div class="help-block">Il vous faut 6 characters minimum</div>
											</div>
										  </div>
											<div class="form-group">
											
											<div class="col-md-2 col-sm-2 col-xs-12">
												<div class="checkbox">
											  <input type="checkbox" class="reseauUP"  name="linkedInup" id="lkdn" <?php if ($lkdn==1){echo ('checked="checked"'); } ?> value="<?php echo $lkdn; ?>">
											  <label for="lkdn"> LinkedIn</label>
											   </div>
											</div>
											<div class="col-md-2 col-sm-2 col-xs-12">
											<div class="checkbox">
											 <input type="checkbox" class="reseauUP" name="viadeoup" id="viadeo" <?php if ($vd==1){echo ('checked="checked"'); } ?> value="<?php echo $vd; ?>">
											 <label for="viadeo">Viadeo</label>
											</div>
											</div>
											<div class="col-md-2 col-sm-2 col-xs-12">
											<div class="checkbox">
											  <input type="checkbox" class="reseauUP" name="facebookup" id="fb" <?php if ($fb==1){echo ('checked="checked"'); } ?> value="<?php echo $fb; ?>">
											  <label for="fb"> Facebook</label>
											</div>
										   </div>
										   <div class="col-md-2 col-sm-2 col-xs-12">
											<div class="checkbox">
											  <input type="checkbox" class=" reseauUP" name="twitterup" id="twitter"  <?php if ($tw==1){echo ('checked="checked"'); } ?> value="<?php echo $tw; ?>">
											  <label for="twitter"> Twitter</label>
											</div>
										   </div>
											<div class="col-md-2 col-sm-2 col-xs-12">
											<div class="checkbox">
											  <input type="checkbox" class=" reseauUP"  name="monsterup" id="monster" <?php if ($mstr==1){echo ('checked="checked"'); } ?> value="<?php echo $mstr; ?>">
											  <label for="monster"> Monster</label>
											</div>
										  </div>
										  <div class="col-md-2 col-sm-2 col-xs-12">
											<div class="checkbox">
											  <input type="checkbox" class=" reseauUP"  name="instagramup" id="insta" <?php if ($insta==1){echo ('checked="checked"'); } ?> value="<?php echo $insta; ?>">
											  <label for="insta"> Instagram </label>
											</div>
										  </div>
										  <div class="col-md-1 col-sm-1 col-xs-12"></div>
										  </div>
										  <div class="col-md-12 col-sm-12 col-xs-12">
									     <div>
										 
										 <div class="col-md-12 col-sm-12 col-xs-12">
											<div class="col-md-1 col-sm-1 col-xs-12"></div>  
											<div class="col-md-10 col-sm-10 col-xs-12">  
											 <ul class="pagination" style="display: block;">
												<li><a class="pag" href="#res1">1</a></li>
												<li><a class="pag" href="#res2">2</a></li>
												<li><a class="pag" href="#res3">3</a></li>
												<li><a class="pag" href="#res4">4</a></li>
												<li><a class="pag" href="#res5">5</a></li>
												<li><a class="pag" href="#res6">6</a></li>
												<li><a class="pag" href="#res7">7</a></li>
												<li><a class="pag" href="#res8">8</a></li>
												<li><a class="pag" href="#res9">9</a></li>
												<li><a class="pag" href="#res10">10</a></li>
												<li><a class="pag" href="#res11">11</a></li>
												<li><a class="pag" href="#res12">12</a></li>
												<li><a class="pag" href="#res13">13</a></li>
											  </ul> 
											</div> 
											  <div class="col-md-1 col-sm-1 col-xs-12"></div>  
											</div>
									
									<div id="res1" class="col-md-12 col-sm-12 col-xs-12  resapp resactif" style="display: block;">
									<div class="form-group">
                                            
                                         <div class="col-md-12 col-sm-12 col-xs-12 " align="center">
                                            <h1>Assurance / Banques / Finances / Comptabilité</h1>
             
                                            <div class="col-md-3 col-sm-4 col-xs-4">
												<div class="checkbox">
											          <input type="checkbox" class="reseauUP" name="banquioup" id="banquio" <?php if ($banquio==1){echo ('checked="checked"'); } ?> value="<?php echo $banquio; ?>">
                                                      <label for="banquio" style="border-color: rgb(80, 80, 80);"> Banquio</label>
											   </div>
											</div>
									       <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">

                                                    <input type="checkbox" class="reseauUP" name="courtageNtup" id="courtageNt" <?php if ($courtageNt==1){echo ('checked="checked"'); } ?> value="<?php echo $courtageNt; ?>">
                                                    <label class="doubleword" for="courtageNt" style="border-color: rgb(80, 80, 80);">Courtage Network </label>
                                                </div>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="dogfinanceup" id="dogfinance" <?php if ($dogfinance==1){echo ('checked="checked"'); } ?> value="<?php echo $dogfinance; ?>">
                                                    <label for="dogfinance" style="border-color: rgb(80, 80, 80);"> Dogfinance</label>
                                                </div>
										    </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="finroadup" id="finroad" <?php if ($finroad==1){echo ('checked="checked"'); } ?> value="<?php echo $finroad; ?>">
                                                    <label for="finroad" style="border-color: rgb(80, 80, 80);"> FinRoad</label>
                                                </div>
                                            </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="reseauUP" name="dinbrokup" id="dinbrok" <?php if ($dinbrok==1){echo ('checked="checked"'); } ?> value="<?php echo $dinbrok; ?>">
                                                    <label for="dinbrok" style="border-color: rgb(80, 80, 80);"> DinBrok</label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="reseauUP" name="meetpipsup" id="meetpips" <?php if ($meetpips==1){echo ('checked="checked"'); } ?> value="<?php echo $meetpips; ?>">
                                                    <label for="meetpips" style="border-color: rgb(80, 80, 80);"> Meetpips  </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="reseauUP" name="pacialiup" id="paciali" <?php if ($paciali==1){echo ('checked="checked"'); } ?> value="<?php echo $paciali; ?>">
                                                    <label for="paciali" style="border-color: rgb(80, 80, 80);"> Paciali  </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="suplinksup" id="suplinks" <?php if ($suplinks==1){echo ('checked="checked"'); } ?> value="<?php echo $suplinks; ?>">
                                                    <label for="suplinks" style="border-color: rgb(80, 80, 80);"> SupLinks  </label>
                                                </div>
										    </div>
											</div>
											<div class="col-md-1 col-sm-1 col-xs-12"></div>  
											</div>
									</div>	
									<div id="res2" class="col-md-12 col-sm-12 col-xs-12  resapp">
										<div class="form-group ">
                                            
                                         <div class="col-md-12 col-sm-12 col-xs-12 " align="center">
                                            <h1>Aéronautique / automobile / logistique / transport</h1>
             
                                            <div class="col-md-3 col-sm-4 col-xs-4">
												<div class="checkbox">
											          <input type="checkbox" class="reseauUP" name="carRgup" id="carRg" <?php if ($carRg==1){echo ('checked="checked"'); } ?> value="<?php echo $carRg; ?>">
                                                      <label for="carRg" style="border-color: rgb(80, 80, 80);"> Car Register</label>
											   </div>
											</div>
									        <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">

                                                    <input type="checkbox" class="reseauUP" name="fcnxup" id="fcnx" <?php if ($fcnx==1){echo ('checked="checked"'); } ?> value="<?php echo $fcnx; ?>">
                                                    <label class="doubleword" for="fcnx" style="border-color: rgb(80, 80, 80);">Frêt Connection</label>
                                                </div>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="motorlegendup" id="motorlegend" <?php if ($motorlegend==1){echo ('checked="checked"'); } ?> value="<?php echo $motorlegend; ?>">
                                                    <label for="motorlegend" style="border-color: rgb(80, 80, 80);"> Motorlegend</label>
                                                </div>
										    </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="transportup" id="transport" <?php if ($transport==1){echo ('checked="checked"'); } ?> value="<?php echo $transport; ?>">
                                                    <label class="doubleword" for="transport" style="border-color: rgb(80, 80, 80);"> Transport &amp; Logistic</label>
                                                </div>
                                            </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="mtllgsup" id="mtllgs" <?php if ($mtllgs==1){echo ('checked="checked"'); } ?> value="<?php echo $mtllgs; ?>">
                                                    <label class="doubleword" for="mtllgs" style="border-color: rgb(80, 80, 80);">Mutualisation logistique</label>
                                                </div>
										    </div>

											</div>
										 
											</div>
									</div>	
											
											
										<div id="res3" class="col-md-12 col-sm-12 col-xs-12 resapp ">	
											<div class="form-group ">
                                        
                                         <div class="col-md-12 col-sm-12 col-xs-12 " align="center">
                                            <h1>Architecture / Design / immobilier / construction / Travaux publics</h1>
             
                                            <div class="col-md-3 col-sm-4 col-xs-4">
												<div class="checkbox">
											          <input type="checkbox" class="reseauUP" name="alveenup" id="alveen" <?php if ($alveen==1){echo ('checked="checked"'); } ?> value="<?php echo $alveen; ?>">
                                                      <label for="alveen" style="border-color: rgb(80, 80, 80);"> Alveen</label>
											   </div>
											</div>
									        <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">

                                                    <input type="checkbox" class="reseauUP" name="batiactuup" id="batiactu" <?php if ($batiactu==1){echo ('checked="checked"'); } ?> value="<?php echo $batiactu; ?>">
                                                    <label class="doubleword" for="batiactu" style="border-color: rgb(80, 80, 80);">Bati actu</label>
                                                </div>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="reseauUP" name="b2bup" id="b2b" <?php if ($b2b==1){echo ('checked="checked"'); } ?> value="<?php echo $b2b; ?>">
                                                    <label class="doubleword" for="b2b" style="border-color: rgb(80, 80, 80);"> B to B immobilier</label>
                                                </div>
										    </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="dribbleup" id="dribble" <?php if ($dribble==1){echo ('checked="checked"'); } ?> value="<?php echo $dribble; ?>">
                                                    <label for="dribble" style="border-color: rgb(80, 80, 80);"> Dribble</label>
                                                </div>
                                            </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Kasavoxup" id="Kasavox" <?php if ($Kasavox==1){echo ('checked="checked"'); } ?> value="<?php echo $Kasavox; ?>">
                                                    <label for="Kasavox" style="border-color: rgb(80, 80, 80);"> Kasavox</label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="whozimmoup" id="whozimmo" <?php if ($Whozimmo==1){echo ('checked="checked"'); } ?> value="<?php echo $Whozimmo; ?>">
                                                    <label for="whozimmo" style="border-color: rgb(80, 80, 80);"> Whozimmo </label>
                                                </div>
										    </div>
											
											</div>
											  
											</div>
										</div>	
											
										<div id="res4" class="col-md-12 col-sm-12 col-xs-12 resapp ">	
											<div class="form-group ">
                                            
                                         <div class="col-md-12 col-sm-12 col-xs-12 " align="center">
                                            <h1>Agroalimentaire / distribution</h1>
             
                                           <div class="col-md-3 col-sm-4 col-xs-4">
												<div class="checkbox">
											          <input type="checkbox" class="reseauUP" name="agrilinkup" id="agrilink" <?php if ($agrilink==1){echo ('checked="checked"'); } ?> value="<?php echo $agrilink; ?>">
                                                      <label for="agrilink" style="border-color: rgb(80, 80, 80);"> Agrilink</label>
											   </div>
											</div>
									        <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">

                                                    <input type="checkbox" class="reseauUP" name="Iliaaup" id="Iliaa" <?php if ($Iliaa==1){echo ('checked="checked"'); } ?> value="<?php echo $Iliaa; ?>">
                                                    <label for="Iliaa" style="border-color: rgb(80, 80, 80);">Iliaa</label>
                                                </div>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="dessushaieup" id="dessushaie" <?php if ($dessushaie==1){echo ('checked="checked"'); } ?> value="<?php echo $dessushaie; ?>">
                                                    <label class="doubleword" for="dessushaie" style="border-color: rgb(80, 80, 80);"> Par Dessus La Haie</label>
                                                </div>
										    </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Wabelup" id="Wabel" <?php if ($Wabel==1){echo ('checked="checked"'); } ?> value="<?php echo $Wabel; ?>">
                                                    <label for="Wabel" style="border-color: rgb(80, 80, 80);"> Wabel</label>
                                                </div>
                                            </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Winemak_inup" id="Winemak_in" <?php if ($Winemak_in==1){echo ('checked="checked"'); } ?> value="<?php echo $Winemak_in; ?>">
                                                    <label for="Winemak_in" style="border-color: rgb(80, 80, 80);"> Winemak-in</label>
                                                </div>
										    </div>
											
											
											</div>
											 
											</div>
										</div>	
										<div id="res5" class="col-md-12 col-sm-12 col-xs-12 resapp ">	
											<div class="form-group ">
                                       
                                         <div class="col-md-12 col-sm-12 col-xs-12 " align="center">
                                            <h1>Communication / Evénementiel / Culture / Médias / Presse / RP</h1>
             
                                            <div class="col-md-3 col-sm-4 col-xs-4">
												<div class="checkbox">
											          <input type="checkbox" class="reseauUP" name="Artilinkiup" id="Artilinki" <?php if ($Artilinki==1){echo ('checked="checked"'); } ?> value="<?php echo $Artilinki; ?>">
                                                      <label for="Artilinki" style="border-color: rgb(80, 80, 80);"> Artilinki</label>
											   </div>
											</div>
									        <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">

                                                    <input type="checkbox" class="reseauUP" name="Artrelationshipup" id="Artrelationship" <?php if ($Artrelationship==1){echo ('checked="checked"'); } ?> value="<?php echo $Artrelationship; ?>">
                                                    <label class="doubleword" for="Artrelationship" style="border-color: rgb(80, 80, 80);">Artistically relationship</label>
                                                </div>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="reseauUP" name="Bablerup" id="Babler" <?php if ($Babler==1){echo ('checked="checked"'); } ?> value="<?php echo $Babler; ?>">
                                                    <label for="Babler" style="border-color: rgb(80, 80, 80);"> Babler</label>
                                                </div>
										    </div>
                                            <!--div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseau" name="Behance" id="Behance"  value="0">
                                                    <label for="Behance"> Behance</label>
                                                </div>
                                            </div-->
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Bottinup" id="Bottin" <?php if ($Bottin==1){echo ('checked="checked"'); } ?> value="<?php echo $Bottin; ?>">
                                                    <label class="doubleword" for="Bottin" style="border-color: rgb(80, 80, 80);"> Bottin du Livre</label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Exponentielup" id="Exponentiel" <?php if ($Exponentiel==1){echo ('checked="checked"'); } ?> value="<?php echo $Exponentiel; ?>">
                                                    <label for="Exponentiel" style="border-color: rgb(80, 80, 80);"> Exponentiel </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Kinorezoup" id="Kinorezo" <?php if ($Kinorezo==1){echo ('checked="checked"'); } ?> value="<?php echo $Kinorezo; ?>">
                                                    <label for="Kinorezo" style="border-color: rgb(80, 80, 80);"> Kinorezo </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Koolyssup" id="Koolyss" <?php if ($Koolyss==1){echo ('checked="checked"'); } ?> value="<?php echo $Koolyss; ?>">
                                                    <label for="Koolyss" style="border-color: rgb(80, 80, 80);"> Koolyss </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="LykHubsup" id="LykHubs" <?php if ($LykHubs==1){echo ('checked="checked"'); } ?> value="<?php echo $LykHubs; ?>">
                                                    <label for="LykHubs" style="border-color: rgb(80, 80, 80);"> LykHubs </label>
                                                </div>
										    </div>
										    <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Mupizup" id="Mupiz" <?php if ($Mupiz==1){echo ('checked="checked"'); } ?> value="<?php echo $Mupiz; ?>">
                                                    <label for="Mupiz" style="border-color: rgb(80, 80, 80);"> Mupiz </label>
                                                </div>
										    </div>
										    <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Contemporaryup" id="Contemporary" <?php if ($Contemporary==1){echo ('checked="checked"'); } ?> value="<?php echo $Contemporary; ?>">
                                                    <label for="Contemporary" style="border-color: rgb(80, 80, 80);"> My Contemporary </label>
                                                </div>
										    </div>
										    <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="RezoTourup" id="RezoTour" <?php if ($RezoTour==1){echo ('checked="checked"'); } ?> value="<?php echo $RezoTour; ?>">
                                                    <label for="RezoTour" style="border-color: rgb(80, 80, 80);"> RezoTour </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Stage_32up" id="Stage_32" <?php if ($Stage_32==1){echo ('checked="checked"'); } ?> value="<?php echo $Stage_32; ?>">
                                                    <label for="Stage_32" style="border-color: rgb(80, 80, 80);"> Stage 32 </label>
                                                </div>
										    </div>
											
											</div>
											  
											</div>
										</div>	
										<div id="res6" class="col-md-12 col-sm-12 col-xs-12 resapp ">	
											<div class="form-group ">
                                          
                                         <div class="col-md-12 col-sm-12 col-xs-12 " align="center">
                                            <h1>Développement Durable / Environnement</h1>
             
                                            <div class="col-md-3 col-sm-4 col-xs-4">
												<div class="checkbox">
											          <input type="checkbox" class="reseauUP" name="Beesdayup" id="Beesday" <?php if ($Beesday==1){echo ('checked="checked"'); } ?> value="<?php echo $Beesday; ?>">
                                                      <label for="Beesday" style="border-color: rgb(80, 80, 80);"> Beesday</label>
											   </div>
											</div>
									        <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">

                                                    <input type="checkbox" class="reseauUP" name="Catalethiqueup" id="Catalethique" <?php if ($Catalethique==1){echo ('checked="checked"'); } ?> value="<?php echo $Catalethique; ?>">
                                                    <label for="Catalethique" style="border-color: rgb(80, 80, 80);">Cataléthique</label>
                                                </div>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="DDnetworkup" id="DDnetwork" <?php if ($DDnetwork==1){echo ('checked="checked"'); } ?> value="<?php echo $DDnetwork; ?>">
                                                    <label for="DDnetwork" style="border-color: rgb(80, 80, 80);"> DDnetwork</label>
                                                </div>
										    </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="EcoVibioup" id="EcoVibio" <?php if ($EcoVibio==1){echo ('checked="checked"'); } ?> value="<?php echo $EcoVibio; ?>">
                                                    <label for="EcoVibio" style="border-color: rgb(80, 80, 80);"> EcoVibio</label>
                                                </div>
                                            </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="reseauUP" name="EnviMotionup" id="EnviMotion" <?php if ($EnviMotion==1){echo ('checked="checked"'); } ?> value="<?php echo $EnviMotion; ?>">
                                                    <label for="EnviMotion" style="border-color: rgb(80, 80, 80);"> EnviMotion</label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="reseauUP" name="indeedup" id="indeed" <?php if ($InDeed==1){echo ('checked="checked"'); } ?> value="<?php echo $InDeed; ?>">
                                                    <label for="indeed" style="border-color: rgb(80, 80, 80);"> In Deed </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="planeteup" id="planete" <?php if ($planete==1){echo ('checked="checked"'); } ?> value="<?php echo $planete; ?>">
                                                    <label class="doubleword" for="planete" style="border-color: rgb(80, 80, 80);"> Planète Attitude </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Social_Planetup" id="Social_Planet" <?php if ($Social_Planet==1){echo ('checked="checked"'); } ?> value="<?php echo $Social_Planet; ?>">
                                                    <label class="doubleword" for="Social_Planet" style="border-color: rgb(80, 80, 80);"> Social Planet </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Sustainup" id="Sustain" <?php if ($Sustain==1){echo ('checked="checked"'); } ?> value="<?php echo $Sustain; ?>">
                                                    <label class="doubleword" for="Sustain" style="border-color: rgb(80, 80, 80);"> Sustain at work </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Wiznessup" id="Wizness" <?php if ($Wizness==1){echo ('checked="checked"'); } ?> value="<?php echo $Wizness; ?>">
                                                    <label class="doubleword" for="Wizness" style="border-color: rgb(80, 80, 80);"> Wizness Community </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Woodsourcingup" id="Woodsourcing" <?php if ($Woodsourcing==1){echo ('checked="checked"'); } ?> value="<?php echo $Woodsourcing; ?>">
                                                    <label for="Woodsourcing" style="border-color: rgb(80, 80, 80);"> Woodsourcing </label>
                                                </div>
										    </div>
											
											
											</div>
											 
											</div>
										</div>	
										<div id="res7" class="col-md-12 col-sm-12 col-xs-12 resapp ">	
											<div class="form-group ">
                                     
                                         <div class="col-md-12 col-sm-12 col-xs-12 " align="center">
                                            <h1>Informatique / Telecommunications / multimédias / It</h1>
             
                                            <div class="col-md-3 col-sm-4 col-xs-4">
												<div class="checkbox">
											          <input type="checkbox" class="reseauUP" name="Behanceup" id="Behance" <?php if ($Behance==1){echo ('checked="checked"'); } ?> value="<?php echo $Behance; ?>">
                                                      <label for="Behance" style="border-color: rgb(80, 80, 80);"> Behance</label>
											   </div>
											</div>
									       <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">

                                                    <input type="checkbox" class="reseauUP" name="Digikaaup" id="Digikaa" <?php if ($Digikaa==1){echo ('checked="checked"'); } ?> value="<?php echo $Digikaa; ?>">
                                                    <label for="Digikaa" style="border-color: rgb(80, 80, 80);">Digikaa</label>
                                                </div>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Geeklistup" id="Geeklist" <?php if ($Geeklist==1){echo ('checked="checked"'); } ?> value="<?php echo $Geeklist; ?>">
                                                    <label for="Geeklist" style="border-color: rgb(80, 80, 80);">Geeklist</label>
                                                </div>
										    </div>
                                           <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Githubup" id="Github" <?php if ($Github==1){echo ('checked="checked"'); } ?> value="<?php echo $Github; ?>">
                                                    <label for="Github" style="border-color: rgb(80, 80, 80);">Github</label>
                                                </div>
                                            </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Human_Codersup" id="Human_Coders" <?php if ($Human_Coders==1){echo ('checked="checked"'); } ?> value="<?php echo $Human_Coders; ?>">
                                                    <label class="doubleword" for="Human_Coders" style="border-color: rgb(80, 80, 80);"> Human Coders</label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Woketerup" id="Woketer" <?php if ($Woketer==1){echo ('checked="checked"'); } ?> value="<?php echo $Woketer; ?>">
                                                    <label for="Woketer" style="border-color: rgb(80, 80, 80);"> Woketer </label>
                                                </div>
										    </div>
											
											</div>
											  
											</div>
										</div>	
										<div id="res8" class="col-md-12 col-sm-12 col-xs-12 resapp ">	
											<div class="form-group ">
                                            
                                         <div class="col-md-12 col-sm-12 col-xs-12 " align="center">
                                            <h1>Hotellerie / Restauration / Tourisme / Sport</h1>
											
											
											
											<div class="col-md-3 col-sm-4 col-xs-4">
												<div class="checkbox">
											          <input type="checkbox" class="reseauUP" name="Agstreamup" id="Agstream" <?php if ($Agstream==1){echo ('checked="checked"'); } ?> value="<?php echo $Agstream; ?>">
                                                      <label class="doubleword" for="Agstream" style="border-color: rgb(80, 80, 80);"> Agents stream</label>
											   </div>
											</div>
									       <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">

                                                    <input type="checkbox" class="reseauUP" name="CulinaryAgup" id="CulinaryAg" <?php if ($Culinary==1){echo ('checked="checked"'); } ?> value="<?php echo $Culinary; ?>">
                                                    <label class="doubleword" for="CulinaryAg" style="border-color: rgb(80, 80, 80);">Culinary Agents</label>
                                                </div>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="reseauUP" name="FoodConnexionup" id="FoodConnexion" <?php if ($fcnx==1){echo ('checked="checked"'); } ?> value="<?php echo $fcnx; ?>">
                                                    <label class="doubleword" for="FoodConnexion" style="border-color: rgb(80, 80, 80);"> Food Connexion</label>
                                                </div>
										    </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="reseauUP" name="Horekaup" id="Horeka" <?php if ($Horeka==1){echo ('checked="checked"'); } ?> value="<?php echo $Horeka; ?>">
                                                    <label for="Horeka" style="border-color: rgb(80, 80, 80);"> Horeka</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
												<div class="checkbox">
											          <input type="checkbox" class="reseauUP" name="Kitchenup" id="Kitchen" <?php if ($Kitchen==1){echo ('checked="checked"'); } ?> value="<?php echo $Kitchen; ?>">
                                                      <label class="doubleword" for="Kitchen" style="border-color: rgb(80, 80, 80);"> Kitchen Connect </label>
											   </div>
											</div>
									        <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">

                                                    <input type="checkbox" class="reseauUP" name="Linkhospiup" id="Linkhospi" <?php if ($Linkhospi==1){echo ('checked="checked"'); } ?> value="<?php echo $Linkhospi; ?>">
                                                    <label for="Linkhospi" style="border-color: rgb(80, 80, 80);">Linkhospi</label>
                                                </div>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="LifeSportup" id="LifeSport" <?php if ($LifeSport==1){echo ('checked="checked"'); } ?> value="<?php echo $LifeSport; ?>">
                                                    <label class="doubleword" for="LifeSport" style="border-color: rgb(80, 80, 80);"> Life in Sport</label>
                                                </div>
										    </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="SportProfilerup" id="SportProfiler" <?php if ($SportProfiler==1){echo ('checked="checked"'); } ?> value="<?php echo $SportProfiler; ?>">
                                                    <label class="doubleword" for="SportProfiler" style="border-color: rgb(80, 80, 80);"> My Sport Profiler</label>
                                                </div>
                                            </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseau" name="Profilplayersup" id="Profilplayers" <?php if ($Profil_players==1){echo ('checked="checked"'); } ?> value="<?php echo $Profil_players; ?>">
                                                    <label class="doubleword" for="Profilplayers" style="border-color: rgb(80, 80, 80);"> Profil players</label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="ReseauVinsup" id="ReseauVins" <?php if ($ReseauVins==1){echo ('checked="checked"'); } ?> value="<?php echo $ReseauVins; ?>">
                                                    <label class="doubleword" for="ReseauVins" style="border-color: rgb(80, 80, 80);">Réseau des Vins </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Restaurateurup" id="Restaurateur" <?php if ($Restaurateur==1){echo ('checked="checked"'); } ?> value="<?php echo $Restaurateur; ?>">
                                                    <label for="Restaurateur" style="border-color: rgb(80, 80, 80);">Restaurateur </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="vinSocialClubup" id="vinSocialClub" <?php if ($VinSocialClub==1){echo ('checked="checked"'); } ?> value="<?php echo $VinSocialClub; ?>">
                                                    <label class="doubleword" for="vinSocialClub" style="border-color: rgb(80, 80, 80);">Vin Social Club </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Winoxup" id="Winox" <?php if ($Winox==1){echo ('checked="checked"'); } ?> value="<?php echo $Winox; ?>">
                                                    <label for="Winox" style="border-color: rgb(80, 80, 80);">Winox</label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Yummeetup" id="RYummeet" <?php if ($Yummeet==1){echo ('checked="checked"'); } ?> value="<?php echo $Yummeet; ?>">
                                                    <label for="Yummeet" style="border-color: rgb(80, 80, 80);">Yummeet  </label>
                                                </div>
										    </div>
											</div>
											  
											</div>
										</div>	
										<div id="res9" class="col-md-12 col-sm-12 col-xs-12 resapp ">	
											<div class="form-group ">
                                           
                                         <div class="col-md-12 col-sm-12 col-xs-12 " align="center">
                                            <h1>Juridique</h1>
             
                                            <div class="col-md-3 col-sm-4 col-xs-4">
												<div class="checkbox">
											          <input type="checkbox" class="reseauUP" name="HubAvocatup" id="HubAvocat" <?php if ($HubAvocat==1){echo ('checked="checked"'); } ?> value="<?php echo $HubAvocat; ?>">
                                                      <label class="doubleword" for="HubAvocat" style="border-color: rgb(80, 80, 80);"> Hub Avocat</label>
											   </div>
											</div>
									        <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">

                                                    <input type="checkbox" class="reseauUP" name="Vox_avocatsup" id="Vox_avocats" <?php if ($Vox_avocats==1){echo ('checked="checked"'); } ?> value="<?php echo $Vox_avocats; ?>">
                                                    <label class="doubleword" for="Vox_avocats" style="border-color: rgb(80, 80, 80);">Vox avocats</label>
                                                </div>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="LawLinkup" id="LawLink" <?php if ($LawLink==1){echo ('checked="checked"'); } ?> value="<?php echo $LawLink; ?>">
                                                    <label class="doubleword" for="LawLink" style="border-color: rgb(80, 80, 80);"> Law Link</label>
                                                </div>
										    </div>
                                
											
											</div>
											 
											</div>
										</div>	
										<div id="res10" class="col-md-12 col-sm-12 col-xs-12 resapp ">	
											<div class="form-group ">
                                           
                                         <div class="col-md-12 col-sm-12 col-xs-12 " align="center">
                                            <h1>Luxe / Mode / beauté / cosmétique </h1>
             
                                            <div class="col-md-3 col-sm-4 col-xs-4">
												<div class="checkbox">
											          <input type="checkbox" class="reseauUP" name="JobLuxup" id="JobLux" <?php if ($JobLux==1){echo ('checked="checked"'); } ?> value="<?php echo $JobLux; ?>">
                                                      <label class="doubleword" for="JobLux" style="border-color: rgb(80, 80, 80);">Job Lux</label>
											   </div>
											</div>
									        <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">

                                                    <input type="checkbox" class="reseauUP" name="ManyMuchoup" id="ManyMucho" <?php if ($ManyMucho==1){echo ('checked="checked"'); } ?> value="<?php echo $ManyMucho; ?>">
                                                    <label class="doubleword" for="ManyMucho" style="border-color: rgb(80, 80, 80);">Many Mucho</label>
                                                </div>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="reseauUP" name="LuxurySocietyup" id="LuxurySociety" <?php if ($LuxurySociety==1){echo ('checked="checked"'); } ?> value="<?php echo $LuxurySociety; ?>">
                                                    <label class="doubleword" for="LuxurySociety" style="border-color: rgb(80, 80, 80);"> Luxury Society</label>
                                                </div>
										    </div>
                                            
											
											</div>
											  
											</div>
										</div>	
										<div id="res11" class="col-md-12 col-sm-12 col-xs-12 resapp ">	
											<div class="form-group ">
                                            
                                         <div class="col-md-12 col-sm-12 col-xs-12 " align="center">
                                            <h1>Médical / Paramédical / Pharmaceutique / Social</h1>
             
                                            <div class="col-md-3 col-sm-4 col-xs-4">
												<div class="checkbox">
											          <input type="checkbox" class=" reseauUP" name="Esanumup" id="Esanum" <?php if ($Esanum==1){echo ('checked="checked"'); } ?> value="<?php echo $Esanum; ?>">
                                                      <label for="Esanum" style="border-color: rgb(80, 80, 80);"> Esanum</label>
											   </div>
											</div>
									        <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">

                                                    <input type="checkbox" class=" reseauUP" name="Docatusup" id="Docatus" <?php if ($Docatus==1){echo ('checked="checked"'); } ?> value="<?php echo $Docatus; ?>">
                                                    <label for="Docatus" style="border-color: rgb(80, 80, 80);">Docatus</label>
                                                </div>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Dentoup" id="Dento-Réseau" <?php if ($Dento==1){echo ('checked="checked"'); } ?> value="<?php echo $Dento; ?>">
                                                    <label for="Dento-Réseau" style="border-color: rgb(80, 80, 80);"> Dento-Réseau</label>
                                                </div>
										    </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="FollowMedup" id="FollowMed" <?php if ($FollowMed==1){echo ('checked="checked"'); } ?> value="<?php echo $FollowMed; ?>">
                                                    <label for="FollowMed" style="border-color: rgb(80, 80, 80);">FollowMed </label>
                                                </div>
                                            </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="HeyDoctorup" id="HeyDoctor" <?php if ($HeyDoctor==1){echo ('checked="checked"'); } ?> value="<?php echo $HeyDoctor; ?>">
                                                    <label for="HeyDoctor" style="border-color: rgb(80, 80, 80);"> Hey Doctor</label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Medextup" id="Medext" <?php if ($Medext==1){echo ('checked="checked"'); } ?> value="<?php echo $Medext; ?>">
                                                    <label for="Medext" style="border-color: rgb(80, 80, 80);"> Medext  </label>
                                                </div>
										    </div>
											
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Medeclicup" id="Medeclic" <?php if ($Medeclic==1){echo ('checked="checked"'); } ?> value="<?php echo $Medeclic; ?>">
                                                    <label for="Medeclic" style="border-color: rgb(80, 80, 80);"> Medeclic </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="MeltingDocup" id="MeltingDoc" <?php if ($MeltingDoc==1){echo ('checked="checked"'); } ?> value="<?php echo $MeltingDoc; ?>">
                                                    <label class="doubleword" for="MeltingDoc" style="border-color: rgb(80, 80, 80);"> Melting Doc </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Medpicsup" id="Medpics" <?php if ($Medpics==1){echo ('checked="checked"'); } ?> value="<?php echo $Medpics; ?>">
                                                    <label for="Medpics" style="border-color: rgb(80, 80, 80);"> Medpics </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="ProSanteup" id="ProSante" <?php if ($ProSante==1){echo ('checked="checked"'); } ?> value="<?php echo $ProSante; ?>">
                                                    <label class="doubleword" for="ProSante" style="border-color: rgb(80, 80, 80);"> Réseau Pro Santé </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="reseauUP" name="Infirmierup" id="Infirmier" <?php if ($Infirmier==1){echo ('checked="checked"'); } ?> value="<?php echo $Infirmier; ?>">
                                                    <label class="doubleword" for="Infirmier" style="border-color: rgb(80, 80, 80);"> Réseau Infirmier  </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="reseauUP" name="Veterisphereup" id="Veterisphere" <?php if ($Veterisphere==1){echo ('checked="checked"'); } ?> value="<?php echo $Veterisphere; ?>">
                                                    <label class="doubleword" for="Veterisphere" style="border-color: rgb(80, 80, 80);"> Réseau Vétérisphère </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="SantConnectup" id="SantConnect" <?php if ($SantConnect==1){echo ('checked="checked"'); } ?> value="<?php echo $SantConnect; ?>">
                                                    <label class="doubleword" for="SantConnect" style="border-color: rgb(80, 80, 80);">Santé Connect </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="SantLogup" id="SantLog" <?php if ($SantLog==1){echo ('checked="checked"'); } ?> value="<?php echo $SantLog; ?>">
                                                    <label class="doubleword" for="SantLog" style="border-color: rgb(80, 80, 80);"> Santé Log </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="telesoinsup" id="telesoins" <?php if ($Telesoins==1){echo ('checked="checked"'); } ?> value="<?php echo $Telesoins; ?>">
                                                    <label for="telesoins" style="border-color: rgb(80, 80, 80);"> Télésoins </label>
                                                </div>
										    </div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class=" reseauUP" name="Pharmacieup" id="Pharmacie" <?php if ($Pharmacie==1){echo ('checked="checked"'); } ?> value="<?php echo $Pharmacie; ?>">
                                                    <label class="doubleword" for="Pharmacie" style="border-color: rgb(80, 80, 80);"> Talent Pharmacie </label>
                                                </div>
										    </div>
									
											</div>
											  
											</div>
										</div>	
										<div id="res12" class="col-md-12 col-sm-12 col-xs-12 resapp ">	
											<div class="form-group ">
                                            
                                         <div class="col-md-12 col-sm-12 col-xs-12 " align="center">
                                            <h1>Recherche / Sciences et bio-technologie</h1>
             
                                            <div class="col-md-3 col-sm-4 col-xs-4">
												<div class="checkbox">
											          <input type="checkbox" class="reseauUP" name="Academiaup" id="Academia" <?php if ($Academia==1){echo ('checked="checked"'); } ?> value="<?php echo $Academia; ?>">
                                                      <label for="Academia" style="border-color: rgb(80, 80, 80);"> Academia</label>
											   </div>
											</div>
									       <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">

                                                    <input type="checkbox" class=" reseauUP" name="BiomedExpertsup" id="BiomedExperts" <?php if ($BiomedExperts==1){echo ('checked="checked"'); } ?> value="<?php echo $BiomedExperts; ?>">
                                                    <label class="doubleword" for="BiomedExperts" style="border-color: rgb(80, 80, 80);">Biomed Experts</label>
                                                </div>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="reseauUP" name="ScienceWorkup" id="ScienceWork" <?php if ($ScienceWork==1){echo ('checked="checked"'); } ?> value="<?php echo $ScienceWork; ?>">
                                                    <label class="doubleword" for="ScienceWork" style="border-color: rgb(80, 80, 80);"> My Science Work</label>
                                                </div>
										    </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="reseauUP" name="ResearchGateup" id="ResearchGate" <?php if ($ResearchGate==1){echo ('checked="checked"'); } ?> value="<?php echo $ResearchGate; ?>">
                                                    <label class="doubleword" for="ResearchGate" style="border-color: rgb(80, 80, 80);"> Research Gate</label>
                                                </div>
                                            </div>
											
											
											</div>
											  
											</div>
										</div>	
										

										<div id="res13" class="col-md-12 col-sm-12 col-xs-12 resapp ">	
											<div class="form-group ">
                                            
                                         <div class="col-md-12 col-sm-12 col-xs-12 " align="center">
                                            <h1>Sites de recherche d'emploi</h1>
             
                                            
										            <div class="col-md-4 col-sm-4 col-xs-4">
													   <div class="checkbox">
														<input type="checkbox" class="reseauUP" name="leboncoinup" id="leboncoin" <?php if ($leboncoin==1){echo ('checked="checked"'); } ?> value="<?php echo $leboncoin; ?>">
														<label for="leboncoin" style="border-color: rgb(80, 80, 80);" >Leboncoin.fr Emploi</label>
													   </div>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
													  <div class="checkbox">
														<input type="checkbox" class="reseauUP" name="apecup" id="apec" <?php if ($apec==1){echo ('checked="checked"'); } ?> value="<?php echo $apec; ?>">
														   <label for="apec" style="border-color: rgb(80, 80, 80);" > APEC</label>
													   </div>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
													  <div class="checkbox">
														<input type="checkbox" class="reseauUP" name="meteojobup" id="meteojob"  <?php if ($meteojob==1){echo ('checked="checked"'); } ?> value="<?php echo $meteojob; ?>">
														<label for="meteojob" style="border-color: rgb(80, 80, 80);"  > Meteojob</label>
													  </div>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<div class="checkbox">
														<input type="checkbox" class="reseauUP"  name="cadremploiup" id="cadremploi" <?php if ($cadremploi==1){echo ('checked="checked"'); } ?> value="<?php echo $cadremploi; ?>">
															<label for="cadremploi" style="border-color: rgb(80, 80, 80);" > Cadremploi</label>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<div class="checkbox">
															<input type="checkbox" class=" reseauUP"  name="keljobup" id="keljob" <?php if ($keljob==1){echo ('checked="checked"'); } ?> value="<?php echo $keljob; ?>">
															<label for="keljob" style="border-color: rgb(80, 80, 80);" > Keljob </label>
														</div>
													</div>
											
													<div class="col-md-4 col-sm-4 col-xs-4">
														<div class="checkbox">
															<input type="checkbox" class="reseauUP"  name="Jobrapidoup" id="Jobrapido" <?php if ($Jobrapido==1){echo ('checked="checked"'); } ?> value="<?php echo $Jobrapido; ?>">
															<label for="Jobrapido" style="border-color: rgb(80, 80, 80);" > Jobrapido </label>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<div class="checkbox">
															<input type="checkbox" class=" reseauUP"  name="Qapaup" id="Qapa" <?php if ($Qapa==1){echo ('checked="checked"'); } ?> value="<?php echo $Qapa; ?>">
															<label for="Qapa" style="border-color: rgb(80, 80, 80);" > Qapa </label>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<div class="checkbox">
															<input type="checkbox" class=" reseauUP"  name="JobiJobaup" id="JobiJoba" <?php if ($JobiJoba==1){echo ('checked="checked"'); } ?> value="<?php echo $JobiJoba; ?>">
															<label for="JobiJoba" style="border-color: rgb(80, 80, 80);" > JobiJoba </label>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<div class="checkbox">
															<input type="checkbox" class=" reseauUP"  name="Vivastreetup" id="Vivastreet" <?php if ($Vivastreet==1){echo ('checked="checked"'); } ?> value="<?php echo $Vivastreet; ?>">
															<label for="Vivastreet" style="border-color: rgb(80, 80, 80);" > Vivastreet Emploi </label>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<div class="checkbox">
															<input type="checkbox" class="reseauUP"  name="Beepup" id="Beep" <?php if ($Beep==1){echo ('checked="checked"'); } ?> value="<?php echo $Beep; ?>">
															<label for="Beep" style="border-color: rgb(80, 80, 80);" > Beep Job </label>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<div class="checkbox">
															<input type="checkbox" class=" reseauUP"  name="Jobintreeup" id="Jobintree" <?php if ($Jobintree==1){echo ('checked="checked"'); } ?> value="<?php echo $Jobintree; ?>">
															<label for="Jobintree" style="border-color: rgb(80, 80, 80);" > Jobintree </label>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<div class="checkbox">
															<input type="checkbox" class=" reseauUP"  name="territorialup" id="territorial" <?php if ($erritorial==1){echo ('checked="checked"'); } ?> value="<?php echo $erritorial; ?>">
															<label for="territorial" style="border-color: rgb(80, 80, 80);" >Emploi-territorial.fr </label>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<div class="checkbox">
															<input type="checkbox" class=" reseauUP"  name="cornerjobup" id="cornerjob" <?php if ($cornerjob==1){echo ('checked="checked"'); } ?> value="<?php echo $cornerjob; ?>">
															<label for="cornerjob" style="border-color: rgb(80, 80, 80);" > cornerjob </label>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<div class="checkbox">
															<input type="checkbox" class=" reseauUP"  name="fashionjobup" id="fashionjob" <?php if ($fashionjob==1){echo ('checked="checked"'); } ?> value="<?php echo $fashionjob; ?>">
															<label for="fashionjob" style="border-color: rgb(80, 80, 80);" > Fashionjob </label>
														</div>
													</div>
											
											
											</div>
											  
											</div>
										</div>	
									</div>
									
								
												
												</div>
										  <div class="form-group">
										  <label class="control-label col-sm-2" for="pix" style="margin-top: 15px;">Prix:</label>
										  <label  id="prix" value="<?php echo(trim($prix));?>"><?php echo(trim($prix));?></label>
										  <input type="hidden" name="prix" id="prixhd" value ="<?php echo(trim($prix));?>" >
										  <input type="hidden" name="id" value ="<?php echo $_GET['id']; ?>" >
										  </div>

										  <div class="form-group"> 
											<div class="col-sm-offset-2 col-md-12 col-sm-12 col-xs-12">
											  <button type="submit" id="validModif" class="btn btn-default">Modifier</button>
											</div>
										  </div>
										</form>


									
								</div>  
									<div class="span2 col">
										
                                                                       

									 <form id="paypalFormup" action='https://www.paypal.com/cgi-bin/webscr' method='post' name='form'>
												  <input type='hidden' name='business' value='siteboxify-facilitator@gmail.com'>
												  <input type='hidden' name='cmd' value='_xclick'> 
												  <input type='hidden' name='item_name' value='itemname'>
												  <input type='hidden' name='item_number' value='2'>
												  <input id="dyprice" type='hidden' name='amount' value='<?php echo($price);?>'>
												  <input type='hidden' name='no_shipping' value='1'>
												  <input type='hidden' name='currency_code' value='EUR'>
												  <input type='hidden' name='cancel_return' value='http://www.masseixcommunication.com/projets/Boxify/index.php?payed=false'>
												  <input type='hidden' name='return' value='http://www.masseixcommunication.com/projets/Boxify/index.php?payed=true'>
											      <input type="hidden" name="hosted_button_id" value="N7FJ9T3JQ7X2W">
											      <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
												
								        </form> 

									</div> 
								</div>
							</div>
						</div> 
						<div class="content-area">
						</div><!-- #primary -->
					</div>
				</section>
	




		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h1 class="footer-logo">
						<img src="img/logo-blue.png" alt="Footer Logo Blue">
						</h1>
						<p>Site réalisé par <a href="http://www.masseixcommunication.com"><em>Masseix Communication</em></a></p>
					</div>
					<div class="col-md-7">
						<ul class="footer-nav">
							<li><a href="#about">Mon compte</a></li>
							<li><a href="#features">Connexion</a></li>
							<li><a href="#screenshots">Poser une question!</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<div class="overlay overlay-boxify">
			<nav>
				<ul>
					<li><a href="#about"><i class="fa fa-heart"></i>Mon compte</a></li>
					<li><a href="#features"><i class="fa fa-flash"></i>Connexion</a></li>
				</ul>
				<ul>
					<li><a href="#screenshots"><i class="fa fa-desktop"></i>Poser une question!</a></li>
				</ul>
			</nav>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/min/toucheffects-min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script src="js/flickity.pkgd.min.js"></script>
		<script src="js/jquery.fancybox.pack.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed --> 
		<script src="js/retina.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/validator.min.js"></script>
		<!--script src="js/min/scripts-min.js"></script-->
		<script src="js/script.js"></script>
     
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
		</script>
	</body>
</html>



<?php

 }
 else if(isset($_POST['nomup']) && isset($_POST['emailup'])){


       $id=$_POST['id'];
         $req='SELECT * From `commande` WHERE id='.$id;
     $res=$wpbd->query($req);
    
     foreach ($res as $row){
           
			 $lastph= $row['photo'];
			$lastcv= $row['cv'];
			$lastlm=$row['lm'];
			$lastautre=$row['autre'];

    }

	    $nom = $_POST['nomup'];
		$prenom = $_POST['prenomup'];
		$email = $_POST['emailup'];
		$pwd =$_POST['pwdup'];
		
		$lkdn =$_POST['linkedInup'];
		$vd = $_POST['viadeoup'];
		$fb =$_POST['facebookup'];
		$tw = $_POST['twitterup'];
		$mstr =$_POST['monsterup'];
		$instaa =$_POST['instagramup']; 
		$photo = '';
		$cv = '';
		$lm='';
		$autre='';
		$prix =$_POST['prix'];  
// reseaux 


	$banquio = $_POST['banquioup'];
$courtageNt = $_POST['courtageNtup'];
$dogfinance = $_POST['dogfinanceup'];
$finroad = $_POST['finroadup'];											   
$dinbrok = $_POST['dinbrokup'];											   
$meetpips = $_POST['meetpipsup'];											   
$paciali = $_POST['pacialiup'];											   
$suplinks = $_POST['suplinksup'];

$carRg = $_POST['carRgup'];											  
$fcnx = $_POST['fcnxup'];											  
$motorlegend = $_POST['motorlegendup'];											   
$transport = $_POST['transportup'];											   
$mtllgs = $_POST['mtllgsup'];

$alveen = $_POST['alveenup'];											   
$batiactu = $_POST['batiactuup'];											   
$b2b = $_POST['b2bup'];				   
$dribble = $_POST['dribbleup'];											   
$Kasavox = $_POST['Kasavoxup'];											   
$whozimmo = $_POST['whozimmoup'];

$agrilink = $_POST['agrilinkup'];											   
$Iliaa = $_POST['Iliaaup'];											   
$dessushaie = $_POST['dessushaieup'];											   
$Wabel = $_POST['Wabelup'];											  
$Winemak_in = $_POST['Winemak_inup'];

$Artilinki = $_POST['Artilinkiup'];										
$Artrelationship = $_POST['Artrelationshipup'];											   
$Babler = $_POST['Bablerup'];											  									
$Bottin = $_POST['Bottinup'];											   
$Exponentiel = $_POST['Exponentielup'];											   
$Kinorezo = $_POST['Kinorezoup'];											   
$Koolyss = $_POST['Koolyssup'];											   
$LykHubs = $_POST['LykHubsup'];											  
$Mupiz = $_POST['Mupizup'];											  
$Contemporary = $_POST['Contemporaryup'];											  
$RezoTour = $_POST['RezoTourup'];											   
$Stage_32 = $_POST['Stage_32up'];

$Beesday = $_POST['Beesdayup'];											   
$Catalethique = $_POST['Catalethiqueup'];									
$DDnetwork = $_POST['DDnetworkup'];											   
$EcoVibio = $_POST['EcoVibioup'];											  
$EnviMotion = $_POST['EnviMotionup'];											   
$indeed = $_POST['indeedup'];											   
$planete = $_POST['planeteup'];											  
$Social_Planet = $_POST['Social_Planetup'];									
$Sustain = $_POST['Sustainup'];											   
$Wizness = $_POST['Wiznessup'];											   
$Woodsourcing = $_POST['Woodsourcingup'];

$Behance = $_POST['Behanceup'];										   
$Digikaa = $_POST['Digikaaup'];										   
$Geeklist = $_POST['Geeklistup'];											   
$Github = $_POST['Githubup'];											   
$Human_Coders = $_POST['Human_Codersup'];											 
$Woketer = $_POST['Woketerup'];

$Agstream = $_POST['Agstreamup'];											   
$CulinaryAg = $_POST['CulinaryAgup'];										
$FoodConnexion = $_POST['FoodConnexionup'];								
$Horeka = $_POST['Horekaup'];											   
$Kitchen = $_POST['Kitchenup'];											 
$Linkhospi = $_POST['Linkhospiup'];											 
$LifeSport = $_POST['LifeSportup'];											
$SportProfiler = $_POST['SportProfilerup'];											  
$Profilplayers = $_POST['Profilplayersup'];											   
$ReseauVins = $_POST['ReseauVinsup'];											   
$Restaurateur = $_POST['Restaurateurup'];											   
$vinSocialClub = $_POST['vinSocialClubup'];											   
$Winox = $_POST['Winoxup'];											   
$Yummeet = $_POST['Yummeetup'];	
										    
$HubAvocat = $_POST['HubAvocatup'];											  
$Vox_avocats = $_POST['Vox_avocatsup'];										 
$LawLink = $_POST['LawLinkup'];
											   
$JobLux = $_POST['JobLuxup'];										
$ManyMucho = $_POST['ManyMuchoup'];											  
$LuxurySociety = $_POST['LuxurySocietyup'];
											 
$Esanum = $_POST['Esanumup'];											   
$Docatus = $_POST['Docatusup'];											   
$Dento = $_POST['Dentoup'];											    										   
$HeyDoctor = $_POST['HeyDoctorup'];											
$FollowMed = $_POST['FollowMedup'];											   
$Medext = $_POST['Medextup'];											   
$Medeclic = $_POST['Medeclicup'];											   
$MeltingDoc = $_POST['MeltingDocup'];											   
$Medpics = $_POST['Medpicsup'];											   
$ProSante = $_POST['ProSanteup'];											   
$Infirmier = $_POST['Infirmierup'];											    
$Veterisphere = $_POST['Veterisphereup'];											   
$SantConnect = $_POST['SantConnectup'];											   
$SantLog = $_POST['SantLogup'];											   
$telesoins = $_POST['telesoinsup'];											   
$Pharmacie = $_POST['Pharmacieup'];	
										   
$Academia = $_POST['Academiaup'];											  
$BiomedExperts = $_POST['BiomedExpertsup'];											    
$ScienceWork = $_POST['ScienceWorkup'];											 
$ResearchGate = $_POST['ResearchGateup'];	 

// sites d'emploi
 
$leboncoin = $_POST['leboncoinup'];
$apec = $_POST['apecup'];
$meteojob = $_POST['meteojobup'];
$cadremploi = $_POST['cadremploiup'];
$keljob  = $_POST['keljobup'];
$Jobrapido = $_POST['Jobrapidoup'];
$Qapa  = $_POST['Qapaup'];
$JobiJoba = $_POST['JobiJobaup'];
$Vivastreet = $_POST['Vivastreetup'];
$Beep = $_POST['Beepup'];
$Jobintree = $_POST['Jobintreeup'];
$territorial = $_POST['territorialup'];
$cornerjob = $_POST['cornerjobup'];
$fashionjob = $_POST['fashionjobup'];
									





		// Create directory if it does not exist
		if(!is_dir("upload/". $email ."/")) {
		    mkdir("upload/". $email ."/");
		}
if ($_FILES['lmup']['name'] == ""){ 
	$lm=$lastlm;
}else{

		


						move_uploaded_file($_FILES["lmup"]["tmp_name"], "upload/". $email ."/". $_FILES["lmup"]["name"]);

						$lm= "upload/". $email ."/". $_FILES["lmup"]["name"];
			
}


if ($_FILES['photoup']['name'] == "" ){
	$photo=$lastph;
}else{

		

				move_uploaded_file($_FILES["photoup"]["tmp_name"], "upload/". $email ."/". $_FILES["photoup"]["name"]);
				$photo="upload/". $email ."/". $_FILES["photoup"]["name"];
			
}

	
if ($_FILES['cvup']['name'] == "" ){ 
	$cv=$lastcv;
}else{



				move_uploaded_file($_FILES["cvup"]["tmp_name"], "upload/". $email ."/". $_FILES["cvup"]["name"]);
				$cv="upload/". $email ."/". $_FILES["cvup"]["name"];


}


if ($_FILES['autreup']['name'] == "" ){
	$aute=$lastautre;
}else{

		

				move_uploaded_file($_FILES["autreup"]["tmp_name"], "upload/". $email ."/". $_FILES["autreup"]["name"]);
				$autre="upload/". $email ."/". $_FILES["autreup"]["name"];
			
}



 	  try{
        $req = $wpbd->prepare('UPDATE `commande` SET `nom`="'.trim($nom).'",`prenom`="'.trim($prenom).'",`email`="'.trim($email).'",`password`="'.trim($pwd).'",`photo`="'.trim($photo).'",`cv`="'.trim($cv).'",`lm`="'.trim($lm).'",`autre`="'.trim($autre).'", `LinkedIn`="'.trim($lkdn).'",`Viadeo`="'.trim($vd).'",`Facebook`="'.trim($fb).'",`Twitter`="'.trim($tw).'",`Monster`="'.trim($mstr).'",`Instagram`="'.trim($instaa).'", `Banquio`= "'.$banquio.'",`CourtageNetwork`="'.$courtageNt.'",`Dogfinance`="'.$dogfinance.'",`FinRoad`= "'.$finroad.'",`DinBrok`="'.$dinbrok.'",`Meetpips`="'.$meetpips.'",`Paciali`="'.$paciali.'",`SupLinks`="'.$suplinks.'",`CarRegister`= "'.$carRg.'",`FretConnection`="'.$fcnx.'",`Motorlegend`="'.$motorlegend.'",`Transport_Logistic`="'.$transport.'",`Mutualisationlogistique`="'.$mtllgs.'",`Alveen`="'.$alveen.'",`Bati_actu`= "'.$batiactu.'",`B2B_immobilier`="'.$b2b.'",`Dribble`="'.$dribble.'",`Kasavox`="'.$Kasavox.'",`Whozimmo`="'.$whozimmo.'",`Agrilink`="'.$agrilink.'",`Iliaa`="'.$Iliaa.'",`Par_Dessus_Haie`="'.$dessushaie.'",`Wabel`="'.$Wabel.'",`Winemak_in`="'.$Winemak_in.'",`Artilinki`="'.$Artilinki.'",`Artistically_relationship`="'.$Artrelationship.'",`Babler`="'.$Babler.'",`Behance`="'.$Behance.'",`Bottin_Livre`="'.$Bottin.'",`Exponentiel`="'.$Exponentiel.'",`Kinorezo`="'.$Kinorezo.'",`Koolyss`="'.$Koolyss.'",`LykHubs`="'.$LykHubs.'",`Mupiz`="'.$Mupiz.'",`Contemporary`="'.$Contemporary.'",`RezoTour`="'.$RezoTour.'",`Stage_32`="'.$Stage_32.'",`Beesday`="'.$Beesday.'",`Catalethique`="'.$Catalethique.'",`DDnetwork`="'.$DDnetwork.'",`EcoVibio`="'.$EcoVibio.'",`EnviMotion`="'.$EnviMotion.'",`InDeed`="'.$indeed.'",`PlaneteAttitude`="'.$planete.'",`Social_Planet`="'.$Social_Planet.'",`Sustain_work`="'.$Sustain.'",`Wizness_Community`="'.$Wizness.'",`Woodsourcing`="'.$Woodsourcing.'",`Digikaa`="'.$Digikaa.'",`Geeklist`="'.$Geeklist.'",`Github`="'.$Github.'",`Human_Coders`="'.$Human_Coders.'",`Woketer`="'.$Woketer.'",`Agents-stream`="'.$Agstream.'",`Culinary_Agents`="'.$CulinaryAg.'",`Food_Connexion`="'.$FoodConnexion.'",`Horeka`="'.$Horeka.'",`Kitchen_Connect`="'.$Kitchen.'",`Linkhospi`="'.$Linkhospi.'",`LifeSport`="'.$LifeSport.'",`Sport_Profiler`="'.$SportProfiler.'",`Profil_players`="'.$Profilplayers.'",`Reseau_Vins`="'.$ReseauVins.'",`Restaurateur`="'.$Restaurateur.'",`VinSocialClub`="'.$vinSocialClub.'",`Winox`="'.$Winox.'",`Yummeet`="'.$Yummeet.'",`Hub_Avocat`="'.$HubAvocat.'",`Vox_avocats`="'.$Vox_avocats.'",`Law_Link`="'.$LawLink.'",`Job_Lux`="'.$JobLux.'",`Many_Mucho`="'.$ManyMucho.'",`Luxury_Society`="'.$LuxurySociety.'",`Esanum`="'.$Esanum.'",`Docatus`="'.$Docatus.'",`Dento-Reseau`="'.$Dento.'",`FollowMed`="'.$FollowMed.'",`Hey_Doctor`="'.$HeyDoctor.'",`Medext`="'.$Medext.'",`Medeclic`="'.$Medeclic.'",`Melting_Doc`="'.$MeltingDoc.'",`Medpics`="'.$Medpics.'",`Pro_Sante`="'.$ProSante.'",`Infirmier`="'.$Infirmier.'",`Reseau_Veterisphere`="'.$Veterisphere.'",`Sante_Connect`="'.$SantConnect.'",`Sante_Log`="'.$SantLog.'",`Telesoins`="'.$telesoins.'",`Talent_Pharmacie`="'.$Pharmacie.'",`Academia`="'.$Academia.'",`Biomed_Experts`="'.$BiomedExperts.'",`Science_Work`="'.$ScienceWork.'",`Research_Gate`="'.$ResearchGate.'",`leboncoin`="'.$leboncoin.'",`apec`="'.$apec.'",`meteojob`="'.$meteojob.'",`cadremploi`="'.$cadremploi.'",`keljob`="'.$keljob.'",`Jobrapido`="'.$Jobrapido.'",`Qapa`="'.$Qapa.'",`JobiJoba`="'.$JobiJoba.'",`Vivastreet`="'.$Vivastreet.'",`Beep`="'.$Beep.'",`Jobintree`="'.$Jobintree.'",`territorial`="'.$territorial.'",`cornerjob`="'.$cornerjob.'",`fashionjob`="'.$fashionjob.'",`price`="'.trim($prix).'"  WHERE id='.$id);

      $success=$req->execute();
		
		//$req1 = $wpbd->prepare('UPDATE `commande` SET `Banquio`= '.$banquio.',`CourtageNetwork`='.$courtageNt.',`Dogfinance`='.$dogfinance.',`FinRoad`= '.$finroad.',`DinBrok`='.$dinbrok.',`Meetpips`='.$meetpips.',`Paciali`='.$paciali.',`SupLinks`='.$suplinks.',`CarRegister`= '.$carRg.',`FretConnection`='.$fcnx.',`Motorlegend`='.$motorlegend.',`Transport_Logistic`='.$transport.',`Mutualisationlogistique`='.$mtllgs.',`Alveen`='.$alveen.',`Bati_actu`= '.$batiactu.',`B2B_immobilier`='.$b2b.',`Dribble`='.$dribble.',`Kasavox`='.$Kasavox.',`Whozimmo`='.$whozimmo.',`Agrilink`='.$agrilink.',`Iliaa`='.$Iliaa.',`Par_Dessus_Haie`='.$dessushaie.',`Wabel`='.$Wabel.',`Winemak_in`='.$Winemak_in.',`Artilinki`='.$Artilinki.',`Artistically_relationship`='.$Artrelationship.',`Babler`='.$Babler.',`Behance`='.$Behance.',`Bottin_Livre`='.$Bottin.',`Exponentiel`='.$Exponentiel.',`Kinorezo`='.$Kinorezo.',`Koolyss`='.$Koolyss.',`LykHubs`='.$LykHubs.',`Mupiz`='.$Mupiz.',`Contemporary`='.$Contemporary.',`RezoTour`='.$RezoTour.',`Stage_32`='.$Stage_32.',`Beesday`='.$Beesday.',`Catalethique`='.$Catalethique.',`DDnetwork`='.$DDnetwork.',`EcoVibio`='.$EcoVibio.',`EnviMotion`='.$EnviMotion.',`InDeed`='.$indeed.',`PlaneteAttitude`='.$planete.',`Social_Planet`='.$Social_Planet.',`Sustain_work`='.$Sustain.',`Wizness_Community`='.$Wizness.',`Woodsourcing`='.$Woodsourcing.',`Digikaa`='.$Digikaa.',`Geeklist`='.$Geeklist.',`Github`='.$Github.',`Human_Coders`='.$Human_Coders.',`Woketer`='.$Woketer.',`Agents-stream`='.$Agstream.',`Culinary_Agents`='.$CulinaryAg.',`Food_Connexion`='.$FoodConnexion.',`Horeka`='.$Horeka.',`Kitchen_Connect`='.$Kitchen.',`Linkhospi`='.$Linkhospi.',`LifeSport`='.$LifeSport.',`Sport_Profiler`='.$SportProfiler.',`Profil_players`='.$Profilplayers.',`Reseau_Vins`='.$ReseauVins.',`Restaurateur`='.$Restaurateur.',`VinSocialClub`='.$vinSocialClub.',`Winox`='.$Winox.',`Yummeet`='.$Yummeet.',`Hub_Avocat`='.$HubAvocat.',`Vox_avocats`='.$Vox_avocats.',`Law_Link`='.$LawLink.',`Job_Lux`='.$JobLux.',`Many_Mucho`='.$ManyMucho.',`Luxury_Society`='.$LuxurySociety.',`Esanum`='.$Esanum.',`Docatus`='.$Docatus.',`Dento-Reseau`='.$Dento.',`FollowMed`='.$FollowMed.',`Hey_Doctor`='.$HeyDoctor.',`Medext`='.$Medext.',`Medeclic`='.$Medeclic.',`Melting_Doc`='.$MeltingDoc.',`Medpics`='.$Medpics.',`Pro_Sante`='.$ProSante.',`Infirmier`='.$Infirmier.',`Reseau_Veterisphere`='.$Veterisphere.',`Sante_Connect`='.$SantConnect.',`Sante_Log`='.$SantLog.',`Telesoins`='.$telesoins.',`Talent_Pharmacie`='.$Pharmacie.',`Academia`='.$Academia.',`Biomed_Experts`='.$BiomedExperts.',`Science_Work`='.$ScienceWork.',`Research_Gate`='.$ResearchGate.'  WHERE id='.$id);
									 		  
   // 
									 		  
																											
   
   
      // $success2= $req1 ->execute(); 
	  
	  echo 'updated'.$id;

    }
    catch(PDOException $e)
    {
    echo $e->getMessage();
    }
  

        $req->closeCursor();

        $wpbd=NULL;



 //}

}

?>
