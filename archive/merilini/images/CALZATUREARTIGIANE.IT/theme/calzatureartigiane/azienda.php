<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }

?>

<!DOCTYPE html>
<html lang="it">
<head>

<title><?php get_site_name(); ?> - <?php get_page_clean_title(); ?> </title>

   <meta http-equiv="title" content="<?php get_site_name(); ?> - <?php get_page_clean_title(); ?>">
    <meta name="description" content="<?php get_page_meta_desc(); ?>">
    <meta name="keywords" content="<?php get_page_meta_keywords(); ?>"> 
    

    
    
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/mail2.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/grid.css" type="text/css" media="screen"> 
    <script src="<?php get_theme_url(); ?>/js/jquery-1.6.2.min.js" type="text/javascript"></script>
    <script src="<?php get_theme_url(); ?>/js/jquery.galleriffic.js" type="text/javascript"></script>
    <script src="<?php get_theme_url(); ?>/js/jquery.opacityrollover.js" type="text/javascript"></script> 
    <script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery.contactable2.js"></script>       
	
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page1">

<!-- **GOOGLE ANALYTICS** -->
<?php include_once("blocchi/analyticstracking.php") ?>



<?php require_once "blocchi/logo.php"; ?>
    
    
	
<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main" style="background: #000;">
                            <div class="gallery p3 text"><!--gallery-->
                            
                            <h4 align="left" style="border-bottom: 2px solid #000; width:790px; padding-bottom:14px;"><?php get_page_clean_title(); ?></h4>
                            
                            <?php get_page_content(); ?>
                            
                            
                            
                            
                            <div id="slideshow2">
                                <div id="slideshow-nav">
                                
                                
                                 	<?php if ($language == 'it') { ?>
                                         <ul>
                                            <p>Un po' di storia</p>
                                            <li><a class="current" href="#slide1">I primi modelli</a></li>
                                            <li><a href="#slide2">Gli inizi</a></li>
                                            <li><a href="#slide3">La produzione</a></li>
                                            <p>Fasi di produzione</p>
                                            <li><a href="#slide4">Selezione del cuoio</a></li>
                                            <li><a href="#slide5">Modelleria</a></li>
                                            <li><a href="#slide6">Taglio</a></li>
                                            <li><a href="#slide7">Lavorazioni</a></li>
                                            <li><a href="#slide8">Montaggio</a></li>
                                            <li><a href="#slide9">Rifinitura</a></li>
                                            <li><a href="#slide10">Controllo qualità</a></li>
                                    	</ul>
                                    <?php } ?>
                                    <?php if ($language == 'en') { ?>
                                      <ul>
                                    	<p>A bit of history</p>
                                        <li><a class="current" href="#slide1">First models</a></li>
                                        <li><a href="#slide2">The beginning</a></li>
                                        <li><a href="#slide3">The production</a></li>
                                    	<p>Production phases</p>
                                        <li><a href="#slide4">Selection of Leather </a></li>
                                        <li><a href="#slide5">Model</a></li>
                                        <li><a href="#slide6">Cutting</a></li>
                                        <li><a href="#slide7">Manufacturing</a></li>
                                        <li><a href="#slide8">Assembling</a></li>
                                        <li><a href="#slide9">Finishing</a></li>
                                        <li><a href="#slide10">Quality Control</a></li>
                                    </ul>
                                    <?php } ?>
                                
                                    
                                </div>
        
							<div id="slideshow-container">
								<div id="slideshow-wrapper" style="left: 0px;">
                                	
                                    
                                    <div id="slide1" class="slide">
                                    
                                     <?php if ($language == 'it') { ?>
                                        <h2>I primi modelli</h2>
                                    <?php } ?>
                                    <?php if ($language == 'en') { ?>
                                        <h2>First models </h2>
                                    <?php } ?>
										
                                        
											
                                           
                                            <figure class="img_azienda">
                                            <img title="Calzature artigiane - Storia" id="img_azienda" alt="Calzature artigiane - Storia" src="<?php get_theme_url(); ?>/images/storia3.jpg">
                                            </figure>
                                            
                                       
                                            
									</div>
                                    <div id="slide2" class="slide">
                                    
                                    <?php if ($language == 'it') { ?>
                                        <h2>Gli inizi</h2>
                                    <?php } ?>
                                    <?php if ($language == 'en') { ?>
                                        <h2>The beginning</h2>
                                    <?php } ?>
										
                                        
											
                                           
                                            <figure class="img_azienda">
                                            <img title="Calzature artigiane - Storia" id="img_azienda" alt="Calzature artigiane - Storia" src="<?php get_theme_url(); ?>/images/storia1.jpg">
                                            </figure>
                                            
									</div>
                                    <div id="slide3" class="slide">
                                    
                                    <?php if ($language == 'it') { ?>
                                        <h2>La produzione</h2>
                                    <?php } ?>
                                    <?php if ($language == 'en') { ?>
                                        <h2>The production</h2>
                                    <?php } ?>
										
                                        
											
                                           
                                            <figure class="img_azienda">
                                            <img title="Calzature artigiane - Storia" id="img_azienda" alt="Calzature artigiane - Storia" src="<?php get_theme_url(); ?>/images/storia2.jpg">
                                            </figure>
                                            
									</div>
                              
                                    
                                    
                                    
									<div id="slide4" class="slide">
                                    
                                    
                                     <?php if ($language == 'it') { ?>
                                        <h2>Selezione del cuoio</h2>
                                        <p> 
                                        Tutte le nostre calzature sono realizzate con tomaia e fodera in pelle. Le suole sono in cuoio, gomma o micro (gomma extra leggera). Le nostre pelli provengono dalle migliori aziende del distretto produttivo di Arzignano (VI).
                                        </p>
                                    <?php } ?>
                                    <?php if ($language == 'en') { ?>
                                        <h2>Selection of Leather </h2>
                                        <p> 
                                        All our shoes are made through the use of upper and leather lining. The soles are of leather, rubber or micro (extra light rubber). Our leathers come from the best companies of Arzignano (Vicenza).
                                        </p>
                                    <?php } ?>
                                    
										
                                           
                                            <figure class="img_azienda">
                                            <img title="Calzature artigiane - Fase 1" id="img_azienda" alt="Calzature artigiane - Fase 1" src="<?php get_theme_url(); ?>/images/fase1.jpg">
                                            </figure>
                                            
									</div>
                
									<div id="slide5" class="slide">
                                    
                                    
                                    <?php if ($language == 'it') { ?>
                                        <h2>Modelleria</h2>
                                        <p> 
                                        Tutti i nostri modelli / la nostra collezione viene realizzata grazie alla collaborazione di un modellista mettendo in primo piano comfort, stile e tendenza. 
                                        </p>
                                    <?php } ?>
                                    <?php if ($language == 'en') { ?>
                                       <h2>Model</h2>
                                       <p> 
                                       Thanks to the collaboration of a pattern maker, it has been possible to realize our shoe collection, emphasizing comfort, style and trend.
                                        </p>
                                    <?php } ?>
                                    
										
                                            <figure class="img_azienda">
                                            <img title="Calzature artigiane - Fase 2" id="img_azienda" alt="Calzature artigiane - Fase 2" src="<?php get_theme_url(); ?>/images/fase2.jpg">
                                            </figure>
									</div>

									<div id="slide6" class="slide">
                                    
                                     <?php if ($language == 'it') { ?>
                                       <h2>Taglio</h2>
                                        <p> 
                                       Il taglio viene effettuato manualmente o con un taglio laser a seconda dei quantitativi. 
                                        </p> 
                                    <?php } ?>
                                    <?php if ($language == 'en') { ?>
                                       <h2>Cutting</h2>
                                        <p> 
                                       The cutting is realized manually or through the use of a laser depending on the quantity.
                                        </p> 
                                    <?php } ?>
                                    
                                    
										
                                            <figure class="img_azienda">
                                            <img title="Calzature artigiane - Fase 3" id="img_azienda" alt="Calzature artigiane - Fase 3" src="<?php get_theme_url(); ?>/images/fase3.jpg"> 
                                            </figure>     
									</div>
                					
                                    <div id="slide7" class="slide">
                                    
                                    <?php if ($language == 'it') { ?>
                                       <h2>Lavorazioni</h2>
                                        <p> 
                                        Per la lavorazione delle calzature disponiamo di macchinari interni di alta tecnologia.
                                        </p>
                                    <?php } ?>
                                    <?php if ($language == 'en') { ?>
                                       <h2>Manufacturing</h2>
                                        <p> 
                                        As regards the manufacturing we have the possibility to use a lot of innovative equipment.
                                        </p>
                                    <?php } ?>
                                    
										
                                            <figure class="img_azienda">
                                            <img title="Calzature artigiane - Fase 4" id="img_azienda" alt="Calzature artigiane - Fase 4" src="<?php get_theme_url(); ?>/images/fase4.jpg">
                                            </figure>
									</div>
                                    
									
                                    <div id="slide8" class="slide">
                                    
                                    <?php if ($language == 'it') { ?>
                                       <h2>Montaggio</h2>
                                        <p> 
                                        Per la lavorazione delle calzature disponiamo di macchinari interni di alta tecnologia.
                                        </p>
                                    <?php } ?>
                                    <?php if ($language == 'en') { ?>
                                       <h2>Assembling</h2>
                                        <p> 
                                        As regards the manufacturing we have the possibility to use a lot of innovative equipment.
                                        </p>
                                    <?php } ?>
										
                                            <figure class="img_azienda">
                                            <img title="Calzature artigiane - Fase 5" id="img_azienda" alt="Calzature artigiane - Fase 5" src="<?php get_theme_url(); ?>/images/fase5.jpg">
                                            </figure>
									</div>
                                    
                                    <div id="slide9" class="slide">
                                    
                                    <?php if ($language == 'it') { ?>
                                       <h2>Rifinitura</h2>
                                        <p> 
                                       Tutte le nostre calzature sono rifinite manualmente con creme e cere naturali che garantiscono morbidezza, traspirabilità mettendo in evidenza comfort e stile.
                                        </p>
                                    <?php } ?>
                                    <?php if ($language == 'en') { ?>
                                       <h2>Finishing</h2>
                                        <p> 
                                      All our shoes are manually completed with natural cream and wax, which guarantee softness, breathability highlighting in this way the comfort and style of shoes.
                                        </p>
                                    <?php } ?>
                                    
										
                                            <figure class="img_azienda">
                                            <img title="Calzature artigiane - Fase 6" id="img_azienda" alt="Calzature artigiane - Fase 6" src="<?php get_theme_url(); ?>/images/fase6.jpg">
                                            </figure>
                                            
									</div>
                                    
                                    <div id="slide10" class="slide">
                                    
                                     <?php if ($language == 'it') { ?>
                                       <h2>Controllo qualità</h2>
                                        <p> 
                                        Prima di essere confezionate e spedite, vengono controllate singolarmente dal nostro personale qualificato per garantire un ottima qualità di ogni nostra calzatura.
                                        </p>
                                    <?php } ?>
                                    <?php if ($language == 'en') { ?>
                                      <h2>Quality control</h2>
                                        <p> 
                                        Before being packaged and sent, shoes are singularly controlled by our qualified team in order to guarantee the best quality of each one.
                                        </p>
                                    <?php } ?>
                                    
										
                                            <figure class="img_azienda">
                                            <img title="Calzature artigiane - Fase 7" id="img_azienda" alt="Calzature artigiane - Fase 7" src="<?php get_theme_url(); ?>/images/fase7.jpg">
                                            </figure>
									</div>
                                    
                                    
                               
								</div>
							</div>	
                            </div>
					         

                            
                            <div class="clear"></div>	
                                
                            </div><!--gallery-->
                            
                            <div class="logo_verticale"></div>
                            
                             <div style="clear:both"></div>
 
                        </div><!--Main-->

                    </div>
                </div>
            </div>	
        </div>
 	</section>
    
    
    
    
    
    
    <?php if ($language == 'it') { ?>
                        	<div class="black_line"><!--black line-->
	                        <div class="bl_box"><!--box contenitore-->
                                <h1>Volete le vostre calzature al prezzo di fabbrica?</h1>	
                        
                                <p class="benefits_call_to_action">
                                Cliccate su "Prenota" 
                                </p>
                                <p class="benefits_call_to_action">
                                I nostri responsabili vi contatteranno al più presto
                                </p> 
                               <p class="benefits_call_to_action">
                                Con noi è semplice. Contattateci per avere la nostra offerta!
                                </p>
                        
                        		<div class="box_ctl"><!--Box Call To Action-->                        
                        			<a href="#contactForm" target="_blank"><span id="invio">Prenota</span></a>
                                    
                                    <!--FORM-->
                        
                                        <form id="contactForm" action="processForm.php" method="post">
                                          <h2>Per prenotare le vostre calzature, conoscere i prezzi e le offerte e per vedere tutti i nostri modelli, compilate il modulo. Un nostro responsabile vi contatterà al più presto.</h2>
                                              <ul>
                                                <li>
                                                  <label for="senderName">Nome</label>
                                                  <input type="text" name="senderName" id="senderName" placeholder="Inserisci il tuo nome" required maxlength="40" />
                                                </li>
                                            
                                                <li>
                                                  <label for="senderEmail">E-mail</label>
                                                  <input type="email" name="senderEmail" id="senderEmail" placeholder="Inserisci la tua mail" required maxlength="50" />
                                                </li>
                                                <li>
                                                  <label for="message" style="padding-top: .5em;">Richiesta</label>
                                                  <textarea name="message" id="message" placeholder="Scrivi il tuo massaggio" required cols="80" rows="10" maxlength="10000"></textarea>
                                                </li>
                                              </ul>
                                            
                                              <div id="formButtons">
                                                <input type="submit" id="sendMessage" name="sendMessage" value="Invio" />
                                                <input type="button" id="cancel" name="cancel" value="Cancella" />
                                              </div>
                                        </form>
                                        
                                        <div id="sendingMessage" class="statusMessage"><p>Invio del messaggio in corso...</p></div>
                                        <div id="successMessage" class="statusMessage"><p>Il messaggio è stato inviato con successo. Vi risponderemo al più presto!</p></div>
                                        <div id="failureMessage" class="statusMessage"><p>There was a problem sending your message. Please try again.</p></div>
                                        <div id="incompleteMessage" class="statusMessage"><p>Completa tutti i campi prima dell'invio del messaggio.</p></div>
                                        
                                         <!--FORM END-->
                                        
                                       </div><!--fine box Call To Action-->

                        			</div><!--box contenitore-->
                        		<div class="clear"></div>
                        </div><!--fine black line-->    
						<?php } ?>
                        
	  					<?php if ($language == 'en') { ?>
                        
                        <div class="black_line"><!--black line-->
	                        <div class="bl_box"><!--box contenitore-->
                                <h1>Do you want your shoes at factory price?</h1>	
                        
                                <p class="benefits_call_to_action">
                                Click on "Order" 
                                </p>
                                <p class="benefits_call_to_action">
                                Our managers will contact you as soon as possible
                                </p> 
                               <p class="benefits_call_to_action">
                                With us is simple. Contact us for view our offer!
                                </p>
                        
                        		<div class="box_ctl"><!--Box Call To Action-->                        
                        			<a href="#contactForm" target="_blank"><span id="invio">Order</span></a>
                                    
                                    <!--FORM-->
                        
                                        <form id="contactForm" action="../processForm.php" method="post">
                                          <h2>To book our shoes, know the prices and offers and to see all our models, please fill the form below. One of our managers contact you as soon as possible.</h2>
                                              <ul>
                                                <li>
                                                  <label for="senderName">Name</label>
                                                  <input type="text" name="senderName" id="senderName" placeholder="Insert your name" required maxlength="40" />
                                                </li>
                                            
                                                <li>
                                                  <label for="senderEmail">E-mail</label>
                                                  <input type="email" name="senderEmail" id="senderEmail" placeholder="Insert your e-mail" required maxlength="50" />
                                                </li>
                                                <li>
                                                  <label for="message" style="padding-top: .5em;">Your request</label>
                                                  <textarea name="message" id="message" placeholder="Your message" required cols="80" rows="10" maxlength="10000"></textarea>
                                                </li>
                                              </ul>
                                            
                                              <div id="formButtons">
                                                <input type="submit" id="sendMessage" name="sendMessage" value="Submit" />
                                                <input type="button" id="cancel" name="cancel" value="Cancel" />
                                              </div>
                                        </form>
                                        
                                        <div id="sendingMessage" class="statusMessage"><p>Sending message...</p></div>
                                        <div id="successMessage" class="statusMessage"><p>Message sent. We contact you as soon as possible!</p></div>
                                        <div id="failureMessage" class="statusMessage"><p>There was a problem sending your message. Please try again.</p></div>
                                        <div id="incompleteMessage" class="statusMessage"><p>Completa tutti i campi prima dell'invio del messaggio.</p></div>
                                        
                                         <!--FORM END-->
                                        
                                       </div><!--fine box Call To Action-->

                        			</div><!--box contenitore-->
                        
                        		<div class="clear"></div>
                        
                        	</div><!--fine black line-->
							
						<?php } ?>
                        
    
    
    
    
    
   
    
		
     
        
        	
            
            <?php
			require_once "blocchi/where.php";
			?>
            
            
            
        </div>
    </section>
    
    
    
    <?php
	require_once "blocchi/footer.php";
	?>
	
   
    
<script type="text/javascript" src="<?php get_theme_url(); ?>/js/slidepag.js"></script>    
</body>
</html>
