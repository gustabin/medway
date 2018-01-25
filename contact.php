<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Medway</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Ing Gustavo Arias">
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/linkstyles.css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link href="css/bootstrap-responsive.html" rel="stylesheet">
<link href="css/max-width960.css" rel="stylesheet">  
<style type="text/css">
body {
	font-family: 'Raleway', sans-serif;	
}
</style>
<style>
:-moz-placeholder {
    color: blue;
} 
::-webkit-input-placeholder {
    color: blue;
}	
*:focus {outline: none;}

body2 {font: 14px/21px "Lucida Sans", "Lucida Grande", "Lucida Sans Unicode", sans-serif;}
 .contact_form label {font-family:Georgia, Times, "Times New Roman", serif;}
.form_hint, .required_notification {font-size: 11px;}

.contact_form ul {
    width:750px;
    list-style-type:none;
    list-style-position:outside;
    margin:0px;
    padding:0px;
}
.contact_form li{
    padding:12px; 
    border-bottom:1px solid #eee;
    position:relative;

}
.contact_form li:first-child, .contact_form li:last-child {
    border-bottom:1px solid #777;
}
.contact_form h2 {
    margin:0;
    display: inline;
}
.required_notification {
    color:#d45252; 
    margin:5px 0 0 0; 
    display:inline;
    float:right;
}
.contact_form label {
    width:150px;
    margin-top: 3px;
    display:inline-block;
    float:left;
    padding:3px;
}
.contact_form input {
    height:20px; 
    width:220px; 
    padding:5px 8px;
}
.contact_form textarea {padding:8px; width:300px;}
.contact_form select {padding:8px; width:200px;}
.contact_form button {margin-left:156px;}

.contact_form input, .contact_form textarea, .contact_form select  { 
    border:1px solid #aaa;
    box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset;
    border-radius:2px;
}
.contact_form input:focus, .contact_form textarea:focus {
    background: #fff; 
    border:1px solid #555; 
    box-shadow: 0 0 3px #aaa; 
}

/* Button Style */
button.submit {
    background-color: #68b12f;
    background: -webkit-gradient(linear, left top, left bottom, from(#68b12f), to(#50911e));
    background: -webkit-linear-gradient(top, #68b12f, #50911e);
    background: -moz-linear-gradient(top, #68b12f, #50911e);
    background: -ms-linear-gradient(top, #68b12f, #50911e);
    background: -o-linear-gradient(top, #68b12f, #50911e);
    background: linear-gradient(top, #68b12f, #50911e);
    border: 1px solid #509111;
    border-bottom: 1px solid #5b992b;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    box-shadow: inset 0 1px 0 0 #9fd574;
    -webkit-box-shadow: 0 1px 0 0 #9fd574 inset ;
    -moz-box-shadow: 0 1px 0 0 #9fd574 inset;
    -ms-box-shadow: 0 1px 0 0 #9fd574 inset;
    -o-box-shadow: 0 1px 0 0 #9fd574 inset;
    color: white;
    font-weight: bold;
    padding: 6px 20px;
    text-align: center;
    text-shadow: 0 -1px 0 #396715;
}
button.submit:hover {
    opacity:.85;
    cursor: pointer; 
}
button.submit:active {
    border: 1px solid #20911e;
    box-shadow: 0 0 10px 5px #356b0b inset; 
    -webkit-box-shadow:0 0 10px 5px #356b0b inset ;
    -moz-box-shadow: 0 0 10px 5px #356b0b inset;
    -ms-box-shadow: 0 0 10px 5px #356b0b inset;
    -o-box-shadow: 0 0 10px 5px #356b0b inset;
     
}
.contact_form input:focus, .contact_form textarea:focus { /* add this to the already existing style */
    padding-right:70px;
}
.contact_form input, .contact_form textarea { /* add this to the already existing style */
    -moz-transition: padding .25s; 
    -webkit-transition: padding .25s; 
    -o-transition: padding .25s;
    transition: padding .25s;
}
.contact_form input, .contact_form textarea {
    padding-right:30px;
}
input:required, textarea:required {
    background: #fff url(img/red_asterisk.png) no-repeat 98% center;
}
::-webkit-validation-bubble-message {
    padding: 1em;
}
.contact_form input:focus:invalid, .contact_form textarea:focus:invalid { /* when a field is considered invalid by the browser */
    background: #fff url(img/invalid.png) no-repeat 98% center;
    box-shadow: 0 0 5px #d45252;
    border-color: #b03535
}
.contact_form input:required:valid, .contact_form textarea:required:valid { /* when a field is considered valid by the browser */
    background: #fff url(img/valid.png) no-repeat 98% center;
    box-shadow: 0 0 5px #5cd053;
    border-color: #28921f;
}
.form_hint {
    background: #d45252;
    border-radius: 3px 3px 3px 3px;
    color: white;
    margin-left:8px;
    padding: 1px 6px;
    z-index: 999; /* hints stay above all other elements */
    position: absolute; /* allows proper formatting if hint is two lines */
    display: none;
}
.form_hint::before {
    content: "\25C0"; /* left point triangle in escaped unicode */
    color:#d45252;
    position: absolute;
    top:1px;
    left:-6px;
}
.contact_form input:focus + .form_hint {display: inline;}
.contact_form input:required:valid + .form_hint {background: #28921f;} /* change form hint color when valid */
.contact_form input:required:valid + .form_hint::before {color:#28921f;} /* change form hint arrow color when valid */
</style>
</head>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<!--script src="js3/jquery.ui.datepicker.js"></script!-->

<script src="http://www.tabin.com.ve/luxuryDW/js/datepiker-es.js"></script>
<script src="http://www.tabin.com.ve/luxuryDW/js/jquery.validate.js"></script>

<script type="text/javascript" language="javascript" src="http://www.tabin.com.ve/luxuryDW/js/jquery.validate.js"></script> 
 
<script type="text/javascript" src="http://www.tabin.com.ve/luxuryDW/js2/jquery.tablesorter.js"></script> 
<script type="text/javascript" src="http://www.tabin.com.ve/luxuryDW/js2/jquery.tablesorter.pager.js"></script> 

<script type="text/javascript" language="javascript" src="http://www.tabin.com.ve/luxuryDW/js/jquery.form.js"></script>
<script type="text/javascript" language="javascript" src="http://www.tabin.com.ve/luxuryDW/js/si.files.js"></script>


<!-- menu -->
<script language="JavaScript" type="text/JavaScript">		
		$(document).ready(function() {			
		    //Metodo para cargar el formulario 
    $("body").on('submit', '#formContacto', function(event) {
	event.preventDefault()
	if ($('#formContacto').valid()) {
	    $.ajax({
		type: "POST",
		url: "emailContacto.php",
		dataType: "json",
		data: $(this).serialize(),
		success: function(respuesta) {
		    if (respuesta.error == 1) {
			  $('#error').show();
			setTimeout(function() {
			  $('#error1').hide();
			}, 3000);
		    }
			 
			if (respuesta.exito == 1) {
			  $('#contactInformation').hide();
			  $('#formularioDeContacto').hide();			  
			  $('#avisoDatosRecibidos').show();			  			  
			  //window.location.href='emailContacto_Procesado.php';
		    }			    
		}
	    });
	}
	});
		
		});
</script>		
<body>
<div class="container-fluid">
	<!--barra superior-->
	<div class="row">
            <div class="span12" id="barrasuperior" style="background-color:#053749; margin-top:0px; padding-top:10px; margin-left:0px; margin-right:0px; width:110%">
            	<p style="color:White"><a href="catalog.pdf" style="color:white">[Download our catalog here]</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;              
                <i class="icon-phone-sign"></i>   787-761-8870	 &nbsp; 
                <i class="icon-envelope"></i>  info@medwaypr.com &nbsp; 
                <i class="icon-twitter"></i>  <i class="icon-facebook"></i>
                </p> 
            </div>
            <p>&nbsp;</p>
    </div>
</div>

<div class="container">
	<!--header-->
	<div class="header" style="padding-top: 0px; margin-top: -10px;">
			<div class="navbar navbar_ clearfix">
				<div class="row">
					<!--logo-->
					<div class="span4">
						<div class="logo">
							<a href="index.html"><img src="img/logo.gif" width="190" height="96"></a>				      
						</div>
						
					</div>
					<div class="span8">
						<!--menu-->
						<nav id="main_menu">
						<div class="menu_wrap">
							<ul class="nav sf-menu">
								<li><a href="index.html">Home</a></li>
								<li class="sub-menu"><a href="about.html">About Us</a></li>
								<li class="sub-menu"><a href="products.html">Products</a></li>
								<li class="sub-menu"><a href="services.html">Services</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
						</nav>
						
					</div>
				</div>
			</div>
		</div>
		<!--//header-->    
		<!--page_container-->
        
		<div class="page_container">
			<h6><a href="index.html">home</a> / get in touch</h6>
			<div>
				<div class="row">
                	<!-- avisoDatosRecibidos exitoso -->	
                    <section id="avisoDatosRecibidos" style="display: none;">			
                        <h3>Thank you for submitting your request.</h3><br>
                        <img src="http://www.medwaycarepr.com/img/emailEnviado.png" class="img-responsive"/>
                        <h5>A sales agent will be in touch soon!<br> If you would like to talk to us now, give us a call! </h5>
                        <h3>(787) 761.8870 </h3>
                        <p><b>Our Office Hours are:</b><br>Monday thru Saturday<br>9am - 6pm &nbsp;<font size="-1">(UTC -4)</font>
                        
                        <p>&nbsp;</p>
                    </section>
                    <!-- End avisoDatosRecibidos exitoso -->
                    
                 <section id="contactInformation" >	
					<div class="span8 welcome" align="justify">
						<h2 style="font-size: 20px;">Contact information</h2>
						<h3 style="font-size: 16px;">Do you need a medical equipment or medical services for tourism in Puerto Rico, have a question or comment? Please feel free to send us an email or fill in our handy contact form. We aim to reply within 24 hours.</h3>						
					</div>
					<div class="span4" align="justify">
						<div class="welcome" style="font-size:16px;">
							<h3>
								<strong>Medway</strong><br>
							</h3>
							<h5>
								Expresso km 4.2 Bo., <br>
								Trujillo Alto, 00976, <br>
								Puerto Rico
							</h5>
							<p></p>
							<h3>
								<strong>Telephone</strong>
							</h3>
							<h1>
								(787) 761.8870
							</h1>
							<p></p><p></p>			
							<h3>
								<strong>Email</strong>
							</h3>
							<h5>
								<a href="mailto:info@medwaypr.com">info@medwaypr.com</a>
							</h5>												
						</div>
					</div>	
                   </section>		
                   <section id="formularioDeContacto">					
					<div class="span8">
						<!--form class="contact_form" action="" method="post" name="formContacto"!-->		
                        <form class="contact_form" id="formContacto">
							<ul>
								<li>
									 <h2 style="font-size: 20px;">Contact Us</h2>
									 <span class="required_notification">* Required Field</span>
								</li>
								<li>
									<label for="name">Name:</label>
									<input type="text" id="Nombre" name="Nombre" placeholder="John Doe" required/>
								</li>
								<li>
									<label for="phone">Phone:</label>
									<input type="text" name="Telefono" id="Telefono" placeholder="Phone" required/>
								</li>
								<li>
									<label for="email">Email:</label>
									<input type="email" name="Email" id="Email" placeholder="john_doe@example.com" required/>
									<span class="form_hint">Proper format "name@something.com"</span>
								</li>								
								<li>				
									<label for="message">Message:</label>            
									<textarea name="Mensaje" id="Mensaje" cols="40" rows="6" ></textarea>
								</li>			   
								<li>
									<button class="submit" type="submit" style="background:#3B9689;">Submit Form</button>
								</li>    
							</ul> 
						</form>	
					</div>  
                    </section>  

					<div class="span12">
					<!--//GOOGLE MAP -ADD YOUR EMBED INFO HERE-->
					<br>    
					<div style="color:#3B9689; font-size:25px;">"This is where we are, but don't worry, we'll come to you!"</div>	
					<br>					
					
						<div id="mimapa">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3786.4111240987145!2d-66.02349488527994!3d18.37413077843245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c0367bf6b861a59%3A0x76a68ed1d2860b2c!2sB&#39;Healthy+Medical+Wellness!5e0!3m2!1ses-419!2sve!4v1470608614661" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
    <!--//page_container-->
<!--footer-->
<!--div id="footer">
	<!--bottom footer-->
	<!--div class="footer_bottom">
		<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="span5">
						<div class="copyright">
							<a data-rel="tooltip" title="call us">
				
			
				<a class="link link--yaku" href="#">
					<span><i class="icon-phone marg-right5"></i></span><span>787</span><span>-</span><span>761</span><span>-</span><span>8870</span>	
				</a>
								
		
	 &nbsp; &nbsp;<a data-rel="tooltip" href="mailto:info@medwaypr.com" title="write us an email" ><i class="icon-envelope marg-right5"></i>info@medwaypr.com</a><br>							
							 Copyright © 2016 Medway. All rights Reserved.
						</div>
					</div>
					<div class="span7">
						<div class="foot_right_block">
							<div class="follow_us">
								<a data-rel="tooltip" href="#" title="Twitter"><i class="icon-twitter"></i></a>
								<a data-rel="tooltip" href="#" title="Facebook"><i class="icon-facebook"></i></a>
								<a data-rel="tooltip" href="#" title="LinkedIn"><i class="icon-linkedin"></i></a>
								<a data-rel="tooltip" href="#" title="Pinterest"><i class="icon-pinterest"></i></a>
								<a data-rel="tooltip" href="#" title="GooglePlus"><i class="icon-google-plus"></i></a>
							</div>
							<div class="clear">
							</div>
							<div class="foot_menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About us</a></li>
									<li><a href="products.html">Products</a></li>
									<li><a href="services.html">Services</a></li>									
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</div>
						</div>
					</div> <!--// span7-->
				<!--/div> <!--// row-->
			<!--/div> <!--// container-->
		<!--/div> <!--// wrap-->
	<!--/div> <!--// footer_bottom-->
<!--/div!--> <!--// footer-->
<!--//footer-->
<!--footer-->
<div id="footer" style="padding-top: 0px;">	
	<!--bottom footer-->
	<div class="footer_bottom" style="padding-top: 10px; padding-bottom: 10px;">
		<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="span8" style="background:#053749;">
						<div class="copyright" style="padding-top: 0px; padding-bottom: 0px;">Copyright © 2016 Medway. All rights Reserved.
                        &nbsp; &nbsp; &nbsp; &nbsp;
							<!--a data-rel="tooltip" title="call us"!-->
                            <a class="link link--yaku" href="#" style="padding-bottom: 0px;">	
                                <span><i class="icon-phone marg-right5"></i></span><span>787</span><span>-</span><span>761</span><span>-</span><span>8870</span>	
                            </a>
                            &nbsp;
                            <a data-rel="tooltip" href="mailto:info@medwaypr.com" title="write us an email" >
                            <i class="icon-envelope marg-right5"></i>info@medwaypr.com
                            </a>
                 &nbsp; &nbsp;
                            						
                            <a data-rel="tooltip" href="#" title="Twitter"><i class="icon-twitter"></i></a>
								<a data-rel="tooltip" href="#" title="Facebook"><i class="icon-facebook"></i></a>
                         </div>
					</div>
                    <div class="span4" style="background:#3B9689; margin-top: 0px; padding: 0px; margin-left: 0px;">
						<div class="copyright" style="padding-top: 0px; padding-bottom: 0px; text-align: center">
							<!--a data-rel="tooltip" title="call us"!-->
                            <a class="link link--yaku2" href="contact.php" style="padding-bottom: 0px; font-size: 2em; ">	
                                <span><i class="marg-right5"></i></span><span>Book</span> &nbsp;<span>Now</span>
                            </a>
                         </div>
					</div>
					<!--div class="span7">
						<div class="foot_right_block">
							<div class="follow_us">
								
								<a data-rel="tooltip" href="#" title="LinkedIn"><i class="icon-linkedin"></i></a>
								<a data-rel="tooltip" href="#" title="Pinterest"><i class="icon-pinterest"></i></a>
								<a data-rel="tooltip" href="#" title="GooglePlus"><i class="icon-google-plus"></i></a>
							</div>
							<div class="clear">
							</div>
							<div class="foot_menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About us</a></li>
									<li><a href="products.html">Products</a></li>
									<li><a href="services.html">Services</a></li>									
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</div>
						</div>
					</div!--> <!--// span7-->
				</div> <!--// row-->
			</div> <!--// container-->
		</div> <!--// wrap-->
	</div> <!--// footer_bottom-->
</div> <!--// footer-->
<!--//footer-->

<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/jquerypp.custom.js"></script>
<script type="text/javascript" src="js/jquery.elastislide.js"></script>
<script type="text/javascript">
			$( '#carousel' ).elastislide();
			$('a[data-rel]').each(function() {
    $(this).attr('rel', $(this).attr('data-rel')).removeAttr('data-rel');
		});
		</script>
<script type="text/javascript" src="js/jquery.slicebox.js"></script>
<script type="text/javascript">
			$(function() {
				var Page = (function() {
					var $navArrows = $( '#nav-arrows' ).hide(),
						$navDots = $( '#nav-dots' ).hide(),
						$nav = $navDots.children( 'span' ),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {
								$navArrows.show();
								$navDots.show();
								$shadow.show();
								},
							onBeforeChange : function( pos ) {
								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );
								}
						} ),
						init = function() {
						initEvents();
						},
						initEvents = function() {
						// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {
							slicebox.next();
							return false;
							} );
							$navArrows.children( ':last' ).on( 'click', function() {
								slicebox.previous();
								return false;
							} );
							$nav.each( function( i ) {
								$( this ).on( 'click', function( event ) {
								var $dot = $( this );
								if( !slicebox.isActive() ) {
									$nav.removeClass( 'nav-dot-current' );
									$dot.addClass( 'nav-dot-current' );
									}
									slicebox.jump( i + 1 );
									return false;
								} );
							} );
						};
						return { init : init };
					})();
				Page.init();
				});
		</script>
	<script>
		// For Demo purposes only (show hover effect on mobile devices)
		[].slice.call( document.querySelectorAll('.grid a') ).forEach( function(el) {
			el.onclick = function() { return false; }
		} );
	</script>
</body>
</html>