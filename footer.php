  <footer id="con">

    	<div class="container">

            <div class="col-md-6 col-sm-6 pad-0">

            	<div class="footer-content">

                	<?php echo of_get_option('q_con','no entry');?>

                </div>

            </div>

            <!--col-md-6 ends....-->

            

            <div class="col-md-6 col-sm-6 pad-0">

                <div class="footer-content2">

                    <ul>

                    	<li><a href="<?php echo of_get_option('fb','no entry');?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                    	<!--<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                    	<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->

					</ul>

                    <p><?php echo of_get_option('copyright_ftext','no entry');?></p>

                </div>

            </div>

            <!--col-md-6 ends....-->

           

        </div>

    </footer>

   <!-- who ends....-->

   

  











<!-- **** JS(Java Script) FILES****** --> 

<!-- Lib -->

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.1.min.js"></script>

<!-- BOOTSTRAP js -->

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>

<!-- Menu JS -->

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/menu-responsive.js"></script>

<!-- uikit  JS -->

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/uikit.js"></script>



<!--//<script type="text/javascript">
//
//	$(window).resize(function(){
//
//		var width = $(window).width();
//
//		
//
//		if(width <= 768){
//
//			$("ul.dropdown li").live('click', function() {
//            	$('.dnt3-menu ul.dropdown').remove();
//        	});
//
//		}
//
//	});
//
//	
//
//</script>-->



        
        
        
       




<!--<script type="text/javascript">

			$('ul.dropdown li').click(function(){

				

				$('.dnt3-menu ul.dropdown').addClass('m');

			});

</script>-->





<?php wp_footer(); ?>

</body>

</html>

