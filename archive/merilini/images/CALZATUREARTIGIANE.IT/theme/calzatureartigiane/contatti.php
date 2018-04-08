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
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/mail.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/grid.css" type="text/css" media="screen"> 
    <script src="<?php get_theme_url(); ?>/js/jquery-1.6.2.min.js" type="text/javascript"></script>
    <script src="<?php get_theme_url(); ?>/js/jquery.galleriffic.js" type="text/javascript"></script>
    <script src="<?php get_theme_url(); ?>/js/jquery.opacityrollover.js" type="text/javascript"></script>   
    	<script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery.contactable.js"></script>   
	<!--[if lt IE 7]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
        </div>
	<![endif]-->
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
                            
                            <h4 align="left" style="border-bottom: 2px solid #000; width: 790px; padding-bottom:14px;"><?php get_page_clean_title(); ?></h4>
                           
                           <?php get_page_content(); ?>
                            
                          
						 	<?php if ($language == 'it') { ?>
                                 <div class="padding">
                                    <div class="contact">
                                        <div class="wrapper">
                                            <div class="grid_12">
                                            	<div class="indent-left">
                                                	<h3 class="p2">Richiedi informazioni</h3>
                                                     <form id="formail" method="post" action="mail.php">
                                                    <div id="risposta">
                                                    </div>
                                                    <span class="label">Nome:<input type="text" id="nome" name="nome"  value="" /></span><br />
                                                    
                                                    <span class="label">E-mail:<input type="text" id="email" name="email"  value="" /></span><br />
                                                    
                                                   
                                                   
                                                    <p>Messaggio:</p>
                                                    <textarea id="messaggio" name="messaggio" rows="9" cols="20"></textarea><br />
                                                    <input type="submit" id="invia" name="invia" value="INVIA" />
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($language == 'en') { ?>
                                <div class="padding">
                                    <div class="contact">
                                        <div class="wrapper">
                                            <div class="grid_12">
                                            	<div class="indent-left">
                                                	<h3 class="p2">Request Information</h3>
                                                     <form id="formail" method="post" action="../mail.php">
                                                        <div id="risposta">
                                                        </div>
                                                        <span class="label">Name:<input type="text" id="nome" name="nome"  value="" /></span><br />
                                                        
                                                        <span class="label">E-mail:<input type="text" id="email" name="email"  value="" /></span><br />
                                                        
                                                       
                                                       
                                                        <p>Message:</p>
                                                        <textarea id="messaggio" name="messaggio" rows="9" cols="20"></textarea><br />
                                                        <input type="submit" id="invia" name="invia" value="SUBMIT" />
                                                     </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                                
                                
                                
                            
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
                                                Calzature artigiane con consegna in tutta Italia. Tempo di consegna garantito.
                                                </p>
                                                <p class="benefits_call_to_action">
                                                Tutte le nostre calzature sono prodotte e lavorate con materiale italiano.
                                                </p>
                                                <p class="benefits_call_to_action">
                                                Con noi avrete il 100% di garanzia sul prodotto. Reso e sostituzione in caso di rottura.
                                                </p> 
                                               <p class="benefits_call_to_action">
                                                Con noi è semplice. Contattateci per avere la nostra offerta!
                                                </p>
                                        
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
