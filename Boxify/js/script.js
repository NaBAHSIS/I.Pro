$(document).ready(function() {

	/***************** Waypoints ******************/

	$('.wp1').waypoint(function() {
		$('.wp1').addClass('animated fadeInLeft');
	}, {
		offset: '75%'
	});
	$('.wp2').waypoint(function() {
		$('.wp2').addClass('animated fadeInDown');
	}, {
		offset: '75%'
	});
	$('.wp3').waypoint(function() {
		$('.wp3').addClass('animated bounceInDown');
	}, {
		offset: '75%'
	});
	$('.wp4').waypoint(function() {
		$('.wp4').addClass('animated fadeInDown');
	}, {
		offset: '75%'
	});

	/***************** Flickity ******************/

	$('#featuresSlider').flickity({
		cellAlign: 'left',
		contain: true,
		prevNextButtons: false
	});

	$('#showcaseSlider').flickity({
		cellAlign: 'left',
		contain: true,
		prevNextButtons: false,
		imagesLoaded: true
	});

	/***************** Fancybox ******************/

	$(".youtube-media").on("click", function(e) {
		var jWindow = $(window).width();
		if (jWindow <= 768) {
			return;
		}
		$.fancybox({
			href: this.href,
			padding: 4,
			type: "iframe",
			'href': this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
		});
		return false;
	});

});

$(document).ready(function() {
	$("a.single_image").fancybox({
		padding: 4,
	});
     /***************** command validation form ******************/  


     $('#valider').click(function(e){
		var recaptcha = $("#g-recaptcha-response").val();
			   if (recaptcha === "") {
				  
				  alert("validez le recaptcha s'il vous plait!");
				  e.preventDefault();
			   }
			else{

     	   var formdata = new FormData(document.getElementById('post'));

            // Display the key/value pairs
			/*	for (var pair of formdata.entries()) {
					console.log(pair[0]+ ', ' + pair[1]); 
				} */       
                
         
              $.ajax({
                        url: '../Boxify/payement.php',
                        type: 'POST',
                        data: formdata,
                        dataType: 'text',  // what to expect back from the PHP script, if anything
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (result, statut) { // success est toujours en place, bien sûr !
		
						
                        	$('#photo').val(null);
                        	$('#cv').val(null);
                        	$('#lm').val(null);
                        	$('#nom').val("");
                            $('#prenom').val("");
                            $('#email').val("");
                            $('#pwd').val("");
                            $('.reseau').prop("checked", false); 
                          
						    $('#paypalForm').submit(); 
   
                        },
                        error: function (resultat, statut, erreur) {
                                alert(erreur);
                        }
                }); 
				
			}
         e.preventDefault();
     });
   
	    $('#validModif').click(function(e){




	    		 var formdata = new FormData(document.getElementById('postup'));

                  // Display the key/value pairs
				/*for (var pair of formdata.entries()) {
					console.log(pair[0]+ ', ' + pair[1]); 
				} */   
                
         
             $.ajax({
                        url: '../Boxify/modification.php',
                        type: 'POST',
                        data: formdata,
                        dataType: 'text',  // what to expect back from the PHP script, if anything
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (result, statut) { // success est toujours en place, bien sûr !

                        // redirect to paypal
                        	//$('#paypalFormup').submit();
						alert(result);
                         

   
                        },
                        error: function (resultat, statut, erreur) {
                                alert(erreur);
                        }
                }); 

         e.preventDefault();   

	    });   
   



     $('#btnconnect').click(function(e){

     	// verifier si email existe déjà
         		var formdata={adrs:$('#monemail').val(), pw: $('#monpw').val() };
         		$.ajax({
                        url: '../Boxify/modification.php',
                        type: 'POST',
                        data: formdata,
                        success: function (result, statut) { // success est toujours en place, bien sûr !
                   
                             if($.isNumeric(result)){
                             	window.location.href="../Boxify/modification.php?id="+result;

                             }else{
                             	alert(result);
                             }
                        },
                        error: function (resultat, statut, erreur) {
                                alert(erreur);
                        }
                }); 


     });
	
	
	// reseau page index

	  $('.reseau').each(function(e){
		 
		 if($(this).is(':checked')){
            
            $(this).next().css('border-color',' #E66432');   
          }else{
             
             $(this).next().css('border-color',' #505050');
           } 
	 });

	
	
	var preselected = 0;
	var lastopened;
	var eltres;
	  $('.reseau').each(function(e){
         $(this).change(function(e){
       
                var reqlength =2;
				var id= $(this).attr('id');
				eltres=id;
				lastopened="";
                var verif=false;
                if($(this).is(':checked')){
                	verif=true;
                         $(this).next().css('border-color',' #E66432');   
                }else{
                	verif=false;
                        $(this).next().css('border-color',' #505050'); 
                }

                   var vv= $(this).val();
     
					     if(vv==0){
					         $(this).val('1');
							
					     }else{
					         $(this).val('0');
							 
					     }



          
               var value= $('.reseau:checked').size()+parseInt(preselected);

                if (value>=0 && (value > reqlength) &&(verif==true) ) {
                  
                  
				    if(value == 3){
					 if($('#ResGeneraliste').is(':visible')){
						 lastopened='#ResGeneraliste';
						$('#ResGeneraliste').modal('hide');
						$('#ResEmploi').modal('hide');
					    $('#ResSpecialiste').modal('hide');
					    $('#confirmPrixModal').modal('show'); 
					 }
					 else if($('#ResEmploi').is(':visible')){
						 lastopened='#ResEmploi';
						$('#ResEmploi').modal('hide');
						$('#ResGeneraliste').modal('hide');
					    $('#ResSpecialiste').modal('hide');
					    $('#confirmPrixModal').modal('show'); 
					 }
					 
					 else{
						 lastopened='#ResSpecialiste'; 
						 $('#ResGeneraliste').modal('hide');
						 $('#ResSpecialiste').modal('hide');
						 $('#ResEmploi').modal('hide');
						 $('#confirmPrixModal').modal('show'); 
					 }
					 
				}
				 $(this).next().css('border-color',' #E66432');

					
					 

                }
				 else if((verif==false)&& (value > reqlength) ) {

                   $(this).next().css('border-color',' #505050');
                }
     });
        
});


$('#btnyes').click(function(e){
	
	$('#confirmPrixModal').modal('hide');
    $(lastopened).modal('show');
	$('#'+eltres).attr('checked', true);
	$('#'+eltres).val(1);
	$('#'+eltres).next().css('border-color',' #E66432');
});
$('#btnno').click(function(e){
	 
	$('#confirmPrixModal').modal('hide');
    $(lastopened).modal('show');
	$('#'+eltres).attr('checked', false);
	$('#'+eltres).val(0);
	$('#'+eltres).next().css('border-color',' #505050');
	
});



$('#apparition').change(function(e){
	if($(this).is(':checked')){
             
                         $('.resactif').show();
						 $('.pagination').show();
    }
	else{
		  $('.resactif').hide();  
		   $('.pagination').hide(); 
	}
	
});

  $(".pag").on('click', function (e) {
        e.stopPropagation();
        e.preventDefault();
		var elt= $(this).attr('href');
		var actifelt= $('.resactif');
		
		$(elt).addClass('resactif');
		console.log(elt);
        $(actifelt).hide("slide", { direction: "left" }, 500, function () {
			 $(actifelt).removeClass('resactif');
            $(elt).show("slide", { direction: "right" }, 500);
			$(elt).addClass('resactif');
			
        });
		
		$('.pag').each(function(e){
			
		  $(this).css('backgroundColor','#fff');
		  $(this).css('color','#428bca');
		});
		$(this).css('backgroundColor','#428bca');
		$(this).css('color','#fff');
    });
	
	
	   
   $('.pres').click(function(e){
       
            var thisAnchor = $(this);
            
            var tab = $(this).parent().parent();
            
            
           
            if ( $(tab).find('.secondupdate').css('display') == 'none' )
            {   
		        $('.secondupdate').hide(); 
                tab.find('.secondupdate').css('display','block');
              
                                             
            }
            else
            {
              $(tab).find('.secondupdate').css('display','none');
            
            }
    }); 

    
   

	
	$('.btnannulation').each(function(e){
		$(this).click(function(e){
		
		   $(this).parent().prev().find('.reseau').attr('checked', false);
		   $(this).parent().prev().find('.reseau').val(0);
		   $(this).parent().prev().find('.reseau').next().css('border-color',' #505050');
		   $(this).parent().parent().parent().parent().modal('toggle');
		
		});
		
	});
	
	
	$('.btnajout').each(function(e){
		$(this).click(function(e){
			
			var modalID =  $(this).parent().parent().parent().parent().attr('id');
			
			var resfamilyparent = $(this).parent().prev();
			
			var value= $(resfamilyparent).find('.reseau:checked').size();
			
			  var prixini=$.trim($('#prix').text());
			  var prixupdated = prixini.split(' ')[0];
			  var reqlength =2;
			  
			  // count already checked
			  var already_checked=0; var count=0;var diminPrix;
			   $(resfamilyparent).find('.reseau').each(function(e){
				   var id= $(this).attr('id');
				    if($('#'+id+'hd').val()==1)
					{
						already_checked++;
						if(!($(this).is(':checked')) && prixupdated >=40){ 
                	       diminPrix=parseInt(prixupdated)-10; 
						   prixupdated=diminPrix;
                        }
						else if (!($(this).is(':checked')) && prixupdated ==30){
							prixupdated=30;
						}
						
					}
			   });
	
		    $(resfamilyparent).find('.reseau').each(function(e){
				
		
				var id= $(this).attr('id');
				
                var verif=false;
				
				 if($(this).is(':checked')){
                	verif=true;
					count++;
					
                }else{
                	verif=false;
					
                      
                } 
			
				var vv= $(this).val();
     
					     if(vv==0){
							 $('#'+id+'hd').val('0');
					     }else{
							 $('#'+id+'hd').val('1');
						 }
			 });
			
				console.log(' diff : '+parseInt(already_checked-count));
				console.log(' diminPrix : '+parseInt(diminPrix));
				
			var diff=  	parseInt(already_checked-count);		 
			

                if (value>=0 && (value > reqlength) && preselected==0) {
                  
							for(var i=0; i< (value-reqlength); i++){
							  var nvprix = parseInt(prixupdated)+10;
							  prixupdated = nvprix;
							  
							 
							}
                }
				else if ((value>=0 && (value <= reqlength) && preselected>2)|| (value>=0 && (value > reqlength) && preselected !=0)) {  
                  
						for(var i=0; i< parseInt(value-already_checked) ; i++){//( parseInt(value)+parseInt(preselected)-2-reqlength)
						  var nvprix = parseInt(prixupdated)+10;
						  prixupdated = nvprix;
						  
						  
						}
                }
				/* else if(diff>0)
				{ 
					  prixupdated = diminPrix;
					
				}*/
			 
		    preselected = value;
		   $('#prix').text(prixupdated+' €');
		   $('#prixhd').val(prixupdated+' €');
           $('#dyprice').val(parseInt(prixupdated));
		   //$(this).parent().prev().find('.reseau').attr('checked', false);
		   //$(this).parent().prev().find('.reseau').val(0);
		    // $(this).parent().prev().find('.reseau').next().css('border-color',' #505050');
		   $(this).parent().parent().parent().parent().modal('toggle');
		
		});
		
	});
	
	// file upload controllers
	$('#commande .form-control-file').change(function (e) {
           
           
            var files = $(this)[0].files;
          
        if (files.length > 0) {
 
		  $(this).next().next().text(files[0].name);
		// $(this).next().text(files[0].name);
        }
       
        });
		
		
	
	// reseaux page  modifications 
	
	$('.reseauUP').each(function(e){
		 
		 if($(this).is(':checked')){
            
            $(this).next().css('border-color',' #E66432');   
          }else{
             
             $(this).next().css('border-color',' #505050');
           } 
	 }); 
	 
	$('.reseauUP').each(function(e){
         $(this).change(function(e){
       
                var reqlength =2;
				var id= $(this).attr('id');
                var verif=false;
                if($(this).is(':checked')){
                	verif=true;
                         $(this).next().css('border-color',' #E66432');   
                }else{
                	verif=false;
                        $(this).next().css('border-color',' #505050'); 
                }

                   var vv= $(this).val();
     
					     if(vv==0){
					         $(this).val('1');
							
					     }else{
					         $(this).val('0');
							
					     }



          
               var value= $('.reseauUP:checked').size();

                if (value>=0 && (value > reqlength) &&(verif==true)) {
                  
                  
                   //alert( "Vous avez atteint le nombre de réseaux maximum en formule standard, le réseau supplémentaire vous sera facturé 10 euros de plus!");
                  var pirixini=$.trim($('#prix').text());
                  var nvprix=pirixini.split(' ')[0];
				 
				  
                  nvprix=parseInt(nvprix)+10;
                  $('#prix').val(nvprix+' €');
				   $('#prix').text(nvprix+' €');
				  $('#prixhd').val(nvprix+' €');
                  $('#dyprice').val(parseInt(nvprix));
                  $(this).next().css('border-color',' #E66432');

                } else if((verif==false)&& (value > reqlength) ) {

                   var pirixini=$.trim($('#prix').text()); 
				
                  var nvprix=pirixini.split(' ')[0];
                  nvprix=parseInt(nvprix)-10;
                  $('#prix').val(nvprix+' €');
				  $('#prix').text(nvprix+' €');
				  $('#prixhd').val(nvprix+' €');
                  $('#dyprice').val(parseInt(nvprix));
                   $(this).next().css('border-color',' #505050');
                }
                else{

                	 $('#prix').text('30  €');
					  $('#prixhd').val('30  €');
                     $('#dyprice').val(30);
                }
         
    });
        
});
	
	
	
	

});

/***************** Nav Transformicon ******************/

/* When user clicks the Icon */
$(".nav-toggle").click(function() {
	$(this).toggleClass("active");
	$(".overlay-boxify").toggleClass("open");
});

/* When user clicks a link */
$(".overlay ul li a").click(function() {
	$(".nav-toggle").toggleClass("active");
	$(".overlay-boxify").toggleClass("open");
});

/* When user clicks outside */
$(".overlay").click(function() {
	$(".nav-toggle").toggleClass("active");
	$(".overlay-boxify").toggleClass("open");
});

/***************** Smooth Scrolling ******************/

$('a[href*=#]:not([href=#])').click(function() {
	if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		if (target.length) {
			$('html,body').animate({
				scrollTop: target.offset().top
			}, 2000);
			return false;
		}
	}
});
