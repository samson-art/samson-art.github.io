<!--==============================footer=================================-->
    
    
    <?php if ($language == 'it') { ?>
    
        <footer>
            <div class="main">
                <div class="container_12">
                
                    <div class="wrapper">
                        <p style="font-size: 13px; font-weight: bold; text-align:center;">
                         Calzaturificio Dal Molin S.A.S. - Calzaturificio e Spaccio aziendale | P.I.: 00145480240 | Via Palazzon, 92 - Mason Vicentino (VI) 36064 <br />
                         Copyright © <?php echo date('Y'); ?> - Tutti i diritti riservati | <a href="privacy-cookie-policy/" target="_blank">Privacy & Cookie Policy</a> | Powered by AF
                        </p>
                        
                        <div class="grid_4">
                            <span class="phone-numb"> Tel e Fax: (+39) 0424 75300</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
    <?php } ?>
    
    <?php if ($language == 'en') { ?>
    
     <footer>
        <div class="main">
        	<div class="container_12">
            	<div class="wrapper">
                    <p style="font-size: 13px; font-weight: bold; text-align:center;">
                     Calzaturificio Dal Molin S.A.S. - Handmade Italian Shoes and Shop | P.I.: 00145480240 | Via Palazzon, 92 - Mason Vicentino (VI) 36064 <br />
                     Copyright © <?php echo date('Y'); ?> - All right reserved | <a href="privacy.php" target="_blank">Privacy Policy</a>
                    </p>

                    <div class="grid_4">
                    	<span class="phone-numb"> Phone / Fax: (+39) 0424 75300</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>  
    
    <?php } ?>
    
    
    
    
    
    
    <script src="<?php get_theme_url(); ?>/js/cookiechoices.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function(event) {
    cookieChoices.showCookieConsentBar('Questo sito fa uso di cookie tecnici per garantire un migliore utilizzo del sito. Se procedi con la navigazione accetti i cookie.',
      'OK', 'informativa estesa', 'privacy-cookie-policy/');
  });
</script>
