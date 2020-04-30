<?php



/************



 *  This is Home page main Template file *



 *  Template Name: HomePage



 ***********/



get_header(); ?>

 <section class="banner-area" id="home">
    	<div class="container">
        	<div class="banner-caption">
                <a href="<?php bloginfo('url'); ?>" title="<?php echo of_get_option('sitename','no entry');?>"><img src="<?php echo of_get_option('logo2','no entry');?>" alt="<?php echo of_get_option('sitename','no entry');?>"></a>
                <p><?php echo of_get_option('tag','no entry');?></p>
            </div>
            <!--banner-caption ends....-->
        </div>	
        <!--container ends....-->
    </section>
    <!--banner-area ends......-->
    
    <section class="home" id="ab">
        	<div class="home-left">
            	<?php echo of_get_option('sw_brief','no entry');?>
            </div>
            <!-- home-left ends....-->
            <div class="home-right">
            	<h2><?php echo of_get_option('dev_title','no entry');?></h2>
                	<?php echo of_get_option('dev_brief','no entry');?>
            </div>
            <!-- home-right ends....-->
    </section>
    <!--home ends........-->
    
    <section class="technology" id="tec">
    	<div class="container">
        	<h2><?php echo of_get_option('tech_title','no entry');?></h2>	
            <div class="col-md-8 col-sm-8 pad-0">
            	<div class="background">
                	 <h3><?php echo of_get_option('back_title','no entry');?></h3>
            		 <p><?php echo of_get_option('back-brief','no entry');?></p>
            	</div>
                
                <div class="Li-Fi">
                	<h3><?php echo of_get_option('li_title','no entry');?></h3>
                    <p><?php echo of_get_option('li-brief','no entry');?></p>
                    
            	</div>	
                	
            </div>
            <!--col-md-8 ends.....-->
            
            
            <div class="col-md-4 col-sm-4 pad-0">
            	<div class="Prin">
                	<h3><?php echo of_get_option('pri_title','no entry');?></h3>
                    <p><?php echo of_get_option('pri-brief','no entry');?></p>
            	</div>	
            </div>
            <!--col-md-4 ends.....-->
            
        </div>
    </section>
    
    <section class="limits">
    	<div class="container">
        	<div class="col-md-12 pad-0">
                <div class="limit-video">
                	 <h3><?php echo of_get_option('lim_title','no entry');?></h3>
                     <p><?php echo of_get_option('lim-brief','no entry');?></p>
                     <?php echo of_get_option('lim-video','no entry');?>
                </div>
                <!--limit-video ends.....-->
            </div>
            <!--col-md-8 ends.....-->
        </div>
    </section>
    <!--limits ends.....-->
    
    <section class="future">
    	<div class="container">
        	<h3><?php echo of_get_option('fu_title','no entry');?></h3>	
            <p><?php echo of_get_option('fu-brief','no entry');?></p>
        </div>	
    </section>
    <!--future ends.......-->
    
    <section class="video-1">
    	<div class="container border p-bot">
        	<div class="col-md-4 col-sm-4 pad-0">
                <div class="video-1-left">
                	<h3><?php echo of_get_option('ex1_title','no entry');?></h3>
                	<p><?php echo of_get_option('ex1-brief','no entry');?></p>
                	
                </div>
                <!--limit-video ends.....-->
            </div>
            <!--col-md-4 ends.....-->
            <div class="col-md-8 col-sm-8 pad-0">
                <div class="video-1-right">
                	<?php echo of_get_option('ex1-video','no entry');?>
                </div>
                <!--limit-video ends.....-->
            </div>
            <!--col-md-8 ends.....-->	.
        </div>
    </section>
    
    <section class="video-2">
    	<div class="container">
        	<div class="col-md-8 col-sm-8 pad-0">
                <div class="video-2-left">
                	<?php echo of_get_option('ex2-video','no entry');?>
                </div>
                <!--limit-video ends.....-->
            </div>
            <!--col-md-8 ends.....-->
            <div class="col-md-4 col-sm-4 pad-0">
                <div class="video-2-right">
                	<h3><?php echo of_get_option('ex2_title','no entry');?></h3>
                    <p><?php echo of_get_option('ex2-brief','no entry');?></p>
                </div>
                <!--limit-video ends.....-->
            </div>
            <!--col-md-4 ends.....-->	.
        </div>
    </section>
    <!--video-2 ends.......-->
    
    <section class="products" id="pro">
    	<div class="container">
        	<h2><?php echo of_get_option('prod_title','no entry');?></h2>
            
            <div class="col-md-6 col-sm-6 pad-0">
            	<div class="headphone-content">
                	<h3><?php echo of_get_option('head_title','no entry');?></h3>				
                    	<?php echo of_get_option('head_brief','no entry');?>
                    
                </div>
            </div>
            <!--col-md-6 ends....-->
            <div class="col-md-6 col-sm-6 pad-0">
            	<div class="headphone-img">
                    <img src="<?php echo of_get_option('head_i','no entry');?>" alt="" />
                </div>	
            </div>
            <!--col-md-6 ends....-->
        </div>
    </section>
   <!-- products ends....-->
   
   
   <section class="speaker">
   		<div class="container">
        	<div class="col-md-6">
                <h2><?php echo of_get_option('ci_title','no entry');?></h2>	
                <p><?php echo of_get_option('ci_brief','no entry');?></p>
            </div>
            
            <div class="col-md-6">
            	<div class="speaker-advantages">
                	<?php echo of_get_option('ci_ad','no entry');?>
                </div>
            </div>
        </div>
   </section>
   
   
   
   <section class="wireless-speaker">
   		<div class="container">
        	<div class="col-md-6">
            	<p><?php echo of_get_option('wi_title','no entry');?></p>
                <?php echo of_get_option('wi_brief','no entry');?>
                
            </div>
            <div class="col-md-6">
            	<img src="<?php echo of_get_option('w_i','no entry');?>" alt="">
            </div>
        	
        </div>
   </section>
   
    <section class="micro">
   		<div class="container">
        	<div class="col-md-6">
            	<h2><?php echo of_get_option('mi_title','no entry');?></h2>	
                <p><?php echo of_get_option('mi_brief','no entry');?></p>	
            </div>
            <!--col-md-6 ends.....-->
            <div class="col-md-6">
            	<img src="<?php echo of_get_option('mi-i','no entry');?>" alt="">
            </div>
            <!--col-md-6 ends.....-->
        </div>
   </section>
   
   
   <section class="paint">
    	<div class="container">
        	<h2><?php echo of_get_option('sp_title','no entry');?></h2>
            <?php echo of_get_option('sp_brief','no entry');?>
        </div>
   </section>
   
   
   <section class="micro-advantages">
   		<div class="container">
        	<div class="col-md-6 col-sm-6">
            	<?php echo of_get_option('sp_ad','no entry');?>
            </div>
            <!--col-md-6 ends.......-->
            
            <div class="col-md-6 col-sm-6">
                <div class="mc-image">
                	<!--<img src="images/mc-image.jpg" alt="">-->
                </div>
            </div>
            <!--col-md-6 ends.......-->
        </div>
   </section>
   
   
   <section class="example">
   		<div class="col-md-4 col-sm-4 pad-0">
        	<div class="single-ex1">
            	<p><?php echo of_get_option('sp-ex1_brief','no entry');?></p>
                <img src="<?php echo of_get_option('sp-ex1','no entry');?>" alt="">
            </div>	
        </div>
        <!-- col-md-4 ends.......-->
        
        <div class="col-md-4 col-sm-4 pad-0">
        	<div class="single-ex2">
            	 <h3>Examples:</h3>
            	 <p><?php echo of_get_option('sp-ex2_brief','no entry');?></p>
                 <img src="<?php echo of_get_option('sp-ex2','no entry');?>" alt="">
            </div>	
        </div>
        <!-- col-md-4 ends.......-->
        
        <div class="col-md-4 col-sm-4 pad-0">
        	<div class="single-ex3">
            	 <p><?php echo of_get_option('sp-ex3_brief','no entry');?></p>
                  <img src="<?php echo of_get_option('sp-ex3','no entry');?>" alt="">
            </div>	
        </div>
        <!-- col-md-4 ends.......-->
   </section>
   
   <section class="benefits">
   		<div class="container">
   		<h2><?php echo of_get_option('ben_title','no entry');?></h2>
   		<div class="col-md-7 col-sm-7 pad-0">
        	<div class="ben">
            	<?php echo of_get_option('ben_brief','no entry');?>
            </div>	
        </div>
        <!--col-md-6 ends......-->
        
        <div class="col-md-5 col-sm-5">
        	<img src="<?php echo of_get_option('ben_img','no entry');?>" alt="">
        </div>
        
        
        </div>
   </section>
   
   
   <section class="cam" id="cam">
    	<div class="container">
        	<h2><?php echo of_get_option('cam_title','no entry');?></h2>
            
            <div class="col-md-6 col-sm-6 pad-0">
            	<div class="cam-content">
                	<!--<p>In short, it is the intention of the SLUX management to undertake an equity crowfunding campaign on the English platform seedrs.com, to enable all people, even the smallest investors, who believe in a near future that is</p>-->
                    <p><?php echo of_get_option('cam_brief','no entry');?></p>
                </div>
            </div>
            <!--col-md-6 ends....-->
            
            <div class="col-md-6 col-sm-6 pad-0">
            	<div class="cam-img">
                	<img src="<?php echo of_get_option('cam_img','no entry');?>" alt="">	
                </div>
            </div>
            <!--col-md-6 ends....-->
           
        </div>
    </section>
   <!-- cam ends....-->
   
   
   <section class="gadget" id="gad">
   		<div class="container">
        	<div class="col-md-6 col-sm-6">
                <div class="mc-image">
                	<img src="<?php echo of_get_option('gad_img','no entry');?>" alt="">
                </div>
            </div>
            <!--col-md-6 ends.......-->
            
        	<div class="col-md-6 col-sm-6">
                <h2><?php echo of_get_option('gad_title','no entry');?></h2>
                <?php echo of_get_option('gad_brief','no entry');?>
            </div>
            <!--col-md-6 ends.......-->
            
        </div>
   </section>
   
   
   
   <section class="who" id="wh">
        <div class="col-md-12 col-sm-12  pad-0">
        	<div class="who-content2">
            	 <h2><?php echo of_get_option('ab_title','no entry');?></h2>
                 <?php echo of_get_option('ab_brief','no entry');?>
            </div>	
        </div>
        <!-- col-md-12 ends.......-->
       
   </section>
   <!-- section who ends....-->
   
    
	<?php get_footer(); ?>