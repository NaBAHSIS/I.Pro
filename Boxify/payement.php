
<?php
 require('connexion.php');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$pwd =$_POST['pwd'];

$lkdn =$_POST['linkedIn'];
$vd = $_POST['viadeo'];
$fb =$_POST['facebook'];
$tw = $_POST['twitter'];
$mstr =$_POST['monster'];
$insta =$_POST['instagram'];

$photo = '';
$cv = '';
$lm='';
$autre='';
$prix =$_POST['prix'];

$date= date('Y-m-d h:i:s');

$banquio = $_POST['banquio'];
$courtageNt = $_POST['courtageNt'];
$dogfinance = $_POST['dogfinance'];
$finroad = $_POST['finroad'];											   
$dinbrok = $_POST['dinbrok'];											   
$meetpips = $_POST['meetpips'];											   
$paciali = $_POST['paciali'];											   
$suplinks = $_POST['suplinks'];

$carRg = $_POST['carRg'];											  
$fcnx = $_POST['fcnx'];											  
$motorlegend = $_POST['motorlegend'];											   
$transport = $_POST['transport'];											   
$mtllgs = $_POST['mtllgs'];

$alveen = $_POST['alveen'];											   
$batiactu = $_POST['batiactu'];											   
$b2b = $_POST['b2b'];				   
$dribble = $_POST['dribble'];											   
$Kasavox = $_POST['Kasavox'];											   
$whozimmo = $_POST['whozimmo'];

$agrilink = $_POST['agrilink'];											   
$Iliaa = $_POST['Iliaa'];											   
$dessushaie = $_POST['dessushaie'];											   
$Wabel = $_POST['Wabel'];											  
$Winemak_in = $_POST['Winemak_in'];

$Artilinki = $_POST['Artilinki'];										
$Artrelationship = $_POST['Artrelationship'];											   
$Babler = $_POST['Babler'];											  									
$Bottin = $_POST['Bottin'];											   
$Exponentiel = $_POST['Exponentiel'];											   
$Kinorezo = $_POST['Kinorezo'];											   
$Koolyss = $_POST['Koolyss'];											   
$LykHubs = $_POST['LykHubs'];											  
$Mupiz = $_POST['Mupiz'];											  
$Contemporary = $_POST['Contemporary'];											  
$RezoTour = $_POST['RezoTour'];											   
$Stage_32 = $_POST['Stage_32'];

$Beesday = $_POST['Beesday'];											   
$Catalethique = $_POST['Catalethique'];									
$DDnetwork = $_POST['DDnetwork'];											   
$EcoVibio = $_POST['EcoVibio'];											  
$EnviMotion = $_POST['EnviMotion'];											   
$indeed = $_POST['indeed'];											   
$planete = $_POST['planete'];											  
$Social_Planet = $_POST['Social_Planet'];									
$Sustain = $_POST['Sustain'];											   
$Wizness = $_POST['Wizness'];											   
$Woodsourcing = $_POST['Woodsourcing'];

$Behance = $_POST['Behance'];										   
$Digikaa = $_POST['Digikaa'];										   
$Geeklist = $_POST['Geeklist'];											   
$Github = $_POST['Github'];											   
$Human_Coders = $_POST['Human_Coders'];											 
$Woketer = $_POST['Woketer'];

$Agstream = $_POST['Agstream'];											   
$CulinaryAg = $_POST['CulinaryAg'];										
$FoodConnexion = $_POST['FoodConnexion'];								
$Horeka = $_POST['Horeka'];											   
$Kitchen = $_POST['Kitchen'];											 
$Linkhospi = $_POST['Linkhospi'];											 
$LifeSport = $_POST['LifeSport'];											
$SportProfiler = $_POST['SportProfiler'];											  
$Profilplayers = $_POST['Profilplayers'];											   
$ReseauVins = $_POST['ReseauVins'];											   
$Restaurateur = $_POST['Restaurateur'];											   
$vinSocialClub = $_POST['vinSocialClub'];											   
$Winox = $_POST['Winox'];											   
$Yummeet = $_POST['Yummeet'];	
										    
$HubAvocat = $_POST['HubAvocat'];											  
$Vox_avocats = $_POST['Vox_avocats'];										 
$LawLink = $_POST['LawLink'];
											   
$JobLux = $_POST['JobLux'];										
$ManyMucho = $_POST['ManyMucho'];											  
$LuxurySociety = $_POST['LuxurySociety'];
											 
$Esanum = $_POST['Esanum'];											   
$Docatus = $_POST['Docatus'];											   
$Dento = $_POST['Dento'];											    										   
$HeyDoctor = $_POST['HeyDoctor'];											
$FollowMed = $_POST['FollowMed'];											   
$Medext = $_POST['Medext'];											   
$Medeclic = $_POST['Medeclic'];											   
$MeltingDoc = $_POST['MeltingDoc'];											   
$Medpics = $_POST['Medpics'];											   
$ProSante = $_POST['ProSante'];											   
$Infirmier = $_POST['Infirmier'];											    
$Veterisphere = $_POST['Veterisphere'];											   
$SantConnect = $_POST['SantConnect'];											   
$SantLog = $_POST['SantLog'];											   
$telesoins = $_POST['telesoins'];											   
$Pharmacie = $_POST['Pharmacie'];	
										   
$Academia = $_POST['Academia'];											  
$BiomedExperts = $_POST['BiomedExperts'];											    
$ScienceWork = $_POST['ScienceWork'];											 
$ResearchGate = $_POST['ResearchGate'];											  

// sites d'emploi
 
$leboncoin = $_POST['leboncoin'];
$apec = $_POST['apec'];
$meteojob = $_POST['meteojob'];
$cadremploi = $_POST['cadremploi'];
$keljob  = $_POST['keljob'];
$Jobrapido = $_POST['Jobrapido'];
$Qapa  = $_POST['Qapa'];
$JobiJoba = $_POST['JobiJoba'];
$Vivastreet = $_POST['Vivastreet'];
$Beep = $_POST['Beep'];
$Jobintree = $_POST['Jobintree'];
$territorial = $_POST['territorial'];
$cornerjob = $_POST['cornerjob'];
$fashionjob = $_POST['fashionjob'];
											   








if(isset($_POST['nom'])){

//files upload

if ( 0 < $_FILES['photo']['error'] ) {
        echo 'Error: ' . $_FILES['photo']['error'] . '<br>';
     
    }
else if ( 0 < $_FILES['cv']['error'] ) {
        echo 'Error: ' . $_FILES['cv']['error'] . '<br>';
     
    } 
 else if ( 0 < $_FILES['lm']['error'] ) {
        echo 'Error: ' . $_FILES['lm']['error'] . '<br>';
     
    }   	
    else {

// Create directory if it does not exist
if(!is_dir("upload/". $email ."/")) {
    mkdir("upload/". $email ."/");
}

// Move the uploaded file
move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/". $email ."/". $_FILES["photo"]["name"]);
move_uploaded_file($_FILES["cv"]["tmp_name"], "upload/". $email ."/". $_FILES["cv"]["name"]);
move_uploaded_file($_FILES["lm"]["tmp_name"], "upload/". $email ."/". $_FILES["lm"]["name"]);


$photo="upload/". $email ."/". $_FILES["photo"]["name"];
$cv="upload/". $email ."/". $_FILES["cv"]["name"];
$lm= "upload/". $email ."/". $_FILES["lm"]["name"];
if($_FILES["autre"]["name"] !=''){
	move_uploaded_file($_FILES["autre"]["tmp_name"], "upload/". $email ."/". $_FILES["autre"]["name"]);
		
    $autre= "upload/". $email ."/". $_FILES["autre"]["name"];
}	
	
     
       
		
   
	


// Output location



   $req = $wpbd->prepare('INSERT INTO `commande`( `nom`, `prenom`, `email`, `password`, `photo`, `cv`, `lm`, `autre`, `LinkedIn`, `Viadeo`, `Facebook`, `Twitter`, `Monster`, `Instagram`, `price`, `Date_payement`) VALUES '
           . '(:nom, :prenom, :email, :pw, :photo, :cv, :lm, :autre, :lkdn, :vd, :fb, :tw, :mstr, :insta, :pr, :date )');

      $req->execute(array(

        ':prenom'=> $prenom,

        ':nom'=> $nom,

        ':email'=>''.$email.'', 
        ':pw' =>$pwd, 
        ':photo' => $photo,		
        ':cv' => $cv, 
        ':lm' => $lm, 
		':autre' => $autre,
        ':lkdn' =>$lkdn, 
        ':vd' => $vd,
        ':fb' =>$fb, 
        ':tw' =>$tw, 
        ':mstr' =>$mstr,
		':insta' =>$insta,
        ':pr' =>$prix,
		':date' =>$date

        ));
		   
	
	
	
  
    $LAST_ID="";
        

        $req->closeCursor();
		$rslt=$wpbd->query("SELECT LAST_INSERT_ID(id) FROM `commande` ORDER BY `id` DESC LIMIT 1");
		foreach  ( $rslt as $row) {
			$LAST_ID=$row['0'];   
		   }
		   
	    $req1 = $wpbd->prepare('UPDATE `commande` SET `Banquio`= '.$banquio.',`CourtageNetwork`='.$courtageNt.',`Dogfinance`='.$dogfinance.',`FinRoad`= '.$finroad.',`DinBrok`='.$dinbrok.',`Meetpips`='.$meetpips.',`Paciali`='.$paciali.',`SupLinks`='.$suplinks.',`CarRegister`= '.$carRg.',`FretConnection`='.$fcnx.',`Motorlegend`='.$motorlegend.',`Transport_Logistic`='.$transport.',`Mutualisationlogistique`='.$mtllgs.',`Alveen`='.$alveen.',`Bati_actu`= '.$batiactu.',`B2B_immobilier`='.$b2b.',`Dribble`='.$dribble.',`Kasavox`='.$Kasavox.',`Whozimmo`='.$whozimmo.',`Agrilink`='.$agrilink.',`Iliaa`='.$Iliaa.',`Par_Dessus_Haie`='.$dessushaie.',`Wabel`='.$Wabel.',`Winemak_in`='.$Winemak_in.',`Artilinki`='.$Artilinki.',`Artistically_relationship`='.$Artrelationship.',`Babler`='.$Babler.',`Behance`='.$Behance.',`Bottin_Livre`='.$Bottin.',`Exponentiel`='.$Exponentiel.',`Kinorezo`='.$Kinorezo.',`Koolyss`='.$Koolyss.',`LykHubs`='.$LykHubs.',`Mupiz`='.$Mupiz.',`Contemporary`='.$Contemporary.',`RezoTour`='.$RezoTour.',`Stage_32`='.$Stage_32.',`Beesday`='.$Beesday.',`Catalethique`='.$Catalethique.',`DDnetwork`='.$DDnetwork.',`EcoVibio`='.$EcoVibio.',`EnviMotion`='.$EnviMotion.',`InDeed`='.$indeed.',`PlaneteAttitude`='.$planete.',`Social_Planet`='.$Social_Planet.',`Sustain_work`='.$Sustain.',`Wizness_Community`='.$Wizness.',`Woodsourcing`='.$Woodsourcing.',`Digikaa`='.$Digikaa.',`Geeklist`='.$Geeklist.',`Github`='.$Github.',`Human_Coders`='.$Human_Coders.',`Woketer`='.$Woketer.',`Agents-stream`='.$Agstream.',`Culinary_Agents`='.$CulinaryAg.',`Food_Connexion`='.$FoodConnexion.',`Horeka`='.$Horeka.',`Kitchen_Connect`='.$Kitchen.',`Linkhospi`='.$Linkhospi.',`LifeSport`='.$LifeSport.',`Sport_Profiler`='.$SportProfiler.',`Profil_players`='.$Profilplayers.',`Reseau_Vins`='.$ReseauVins.',`Restaurateur`='.$Restaurateur.',`VinSocialClub`='.$vinSocialClub.',`Winox`='.$Winox.',`Yummeet`='.$Yummeet.',`Hub_Avocat`='.$HubAvocat.',`Vox_avocats`='.$Vox_avocats.',`Law_Link`='.$LawLink.',`Job_Lux`='.$JobLux.',`Many_Mucho`='.$ManyMucho.',`Luxury_Society`='.$LuxurySociety.',`Esanum`='.$Esanum.',`Docatus`='.$Docatus.',`Dento-Reseau`='.$Dento.',`FollowMed`='.$FollowMed.',`Hey_Doctor`='.$HeyDoctor.',`Medext`='.$Medext.',`Medeclic`='.$Medeclic.',`Melting_Doc`='.$MeltingDoc.',`Medpics`='.$Medpics.',`Pro_Sante`='.$ProSante.',`Infirmier`='.$Infirmier.',`Reseau_Veterisphere`='.$Veterisphere.',`Sante_Connect`='.$SantConnect.',`Sante_Log`='.$SantLog.',`Telesoins`='.$telesoins.',`Talent_Pharmacie`='.$Pharmacie.',`Academia`='.$Academia.',`Biomed_Experts`='.$BiomedExperts.',`Science_Work`='.$ScienceWork.',`Research_Gate`='.$ResearchGate.',`leboncoin`='.$leboncoin.',`apec`='.$apec.',`meteojob`='.$meteojob.',`cadremploi`='.$cadremploi.',`keljob`='.$keljob.',`Jobrapido`='.$Jobrapido.',`Qapa`='.$Qapa.',`JobiJoba`='.$JobiJoba.',`Vivastreet`='.$Vivastreet.',`Beep`='.$Beep.',`Jobintree`='.$Jobintree.',`territorial`='.$territorial.',`cornerjob`='.$cornerjob.',`fashionjob`='.$fashionjob.'  WHERE `id`='.$LAST_ID);
									 		  
																																																																																																																																							   
   
        $req1 ->execute();  
		   
		 
		    echo 'ok';
		$req1->closeCursor();
        $wpbd=NULL; 
  
  
	
  
  
}

}
?>