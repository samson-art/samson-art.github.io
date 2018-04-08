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
                            
                              
                            
                            </div><!--gallery-->
                            
                            <div class="logo_verticale"></div><!--logo verticale-->
                            
                            
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
                                Volete ricevere e consultare il nostro listino prezzi?
                                </p>
                                <p class="benefits_call_to_action">
                                Cliccate su "Prenota" e compilate il modulo. 
                                </p>
                                <p class="benefits_call_to_action">
                                I nostri responsabili vi contatteranno al più presto.
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
	
   
</body>
</html>
