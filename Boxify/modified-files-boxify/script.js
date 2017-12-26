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

     	
        
     	 var formdata = new FormData(document.getElementById('post'));

                    
                
         
              $.ajax({
                        url: '../boxify/payement.php',
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
                          
   
                            $('#confirm').modal('toggle');
                            $('.modal-backdrop.in').css('display','none !important');
   
                        },
                        error: function (resultat, statut, erreur) {
                                alert(erreur);
                        }
                }); 

         e.preventDefault();
     });
   
	    $('#validModif').click(function(e){




	    		 var formdata = new FormData(document.getElementById('postup'));

                    
                
         
              $.ajax({
                        url: '../boxify/modification.php',
                        type: 'POST',
                        data: formdata,
                        dataType: 'text',  // what to expect back from the PHP script, if anything
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (result, statut) { // success est toujours en place, bien sûr !

                        // redirect to paypal
                        	$('#paypalFormup').submit();

                         

   
                        },
                        error: function (resultat, statut, erreur) {
                                alert(erreur);
                        }
                }); 

         e.preventDefault();

	    });
  

     $('#btnedit').click(function(e){
         
         if($('#divauth').css('display')=="none"){
         	$('#divauth').show();
         }
         else{
         		// verifier si email existe déjà
         		var formdata={adrs:$('#monemail').val(), pw: $('#monpw').val() };
         		$.ajax({
                        url: '../boxify/modification.php',
                        type: 'POST',
                        data: formdata,
                        success: function (result, statut) { // success est toujours en place, bien sûr !
                   
                             if($.isNumeric(result)){
                             	window.location.href="../boxify/modification.php?id="+result;

                             }else{
                             	alert(result);
                             }
                        },
                        error: function (resultat, statut, erreur) {
                                alert(erreur);
                        }
                }); 

         }
     });

     $('#btnpay').click(function(e){

     	 // redirect to paypal
        $('#paypalForm').submit();

     });

     $('.reseau').each(function(e){
         $(this).change(function(e){
       
                var reqlength =2;
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



          
               var value= $('.reseau:checked').size();

                if (value>=0 && (value > reqlength) &&(verif==true)) {
                  
                  
                   alert( "Vous avez atteint le nombre de réseaux maximum en formule standard, le réseau supplémentaire vous sera facturé 10 euros de plus!");
                  var pirixini=$('#prix').val();
                  var nvprix=pirixini.split(' ')[0];
                  nvprix=parseInt(nvprix)+10;
                  $('#prix').val(nvprix+'  €');
                  $('#dyprice').val(parseInt(nvprix));
                  $(this).next().css('border-color',' #E66432');

                } else if((verif==false)&& (value > reqlength) ) {

                   var pirixini=$('#prix').val();
                  var nvprix=pirixini.split(' ')[0];
                  nvprix=parseInt(nvprix)-10;
                  $('#prix').val(nvprix+'  €');
                  $('#dyprice').val(parseInt(nvprix));
                   $(this).next().css('border-color',' #505050');
                }
                else{

                	 $('#prix').val('30  €');
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
