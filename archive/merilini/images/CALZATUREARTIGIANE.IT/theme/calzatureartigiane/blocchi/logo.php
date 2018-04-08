 <header>
    	<div class="row-1">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_12">
                    	<nav>
                            <ul class="menu">
                               <?php get_i18n_navigation($slug, $minlevel=0, $maxlevel=2, $show=I18N_SHOW_MENU); ?>
                               
                                <li>
                                    <div class="lingue">
                                       <a href="<?php echo htmlspecialchars(return_i18n_setlang_url('en')); ?>"><img src="<?php get_theme_url(); ?>/images/en.png" /></a>                      
          								<a href="<?php echo htmlspecialchars(return_i18n_setlang_url('it')); ?>"><img src="<?php get_theme_url(); ?>/images/it.png" /></a>
                                    </div>
                                </li>
          
		
                            </ul>
                        </nav>
                    </div>
                   
                </div>
                <div class="clear"></div>
            </div>
        </div>



    <div class="row-2">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_9">
                    	
                        <h1>
                        
                        <?php if ($language == 'it') { ?>
                            <a class="logo" title="Calzature Artigiane" href="index.php">Calz<strong>a</strong>ture artigiane <span style="font-size:13px; margin-top: 50px; font-style:italic;">dal 1948</span></a>
                            <span>Calzature con rialzo interno. Qualità garantita Made in Italy. Direttamente dal produttore. Consegna in tutta Italia.  </span>
						<?php } ?>
	  					<?php if ($language == 'en') { ?>
							<a class="logo" title="Calzature Artigiane" href="index.php">Handmade Sh<strong>o</strong>es <span style="font-size:13px; margin-top: 50px; font-style:italic;">from 1948</span></a>
                            <span>Height Increase Shoes. Quality Made in Italy. directly from the manufacturer. Delivery in all Europe.  </span>
						<?php } ?>
                        
                        </h1>
                        
                    </div>
                     <div id="scarpa">
                     
                      <p>
                      
                      <?php if ($language == 'it') { ?>
                            Avete domande? Chiamateci! <strong style="color:#FF9600;">(+39) 0424 75300</strong>
						<?php } ?>
	  					<?php if ($language == 'en') { ?>
							Have questions? Call us! <strong style="color:#FF9600;">(+39) 0424 75300</strong>
						<?php } ?>
                      
                      </p>
                      
                      
                     	<img src="<?php get_theme_url(); ?>/images/scarpa.png" style="margin-top: 10px;"  title="Scarpe con rialzo" alt="scarpe su misura" width="318" />
                    </div>
                     <div class="clear"></div>
                </div>
            </div>
        </div>  
        
        
        
        
</header>
    