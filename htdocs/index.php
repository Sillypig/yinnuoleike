<?php
	include("header.php");
?>

    <div class="container-fluid">
      <div class="row-fluid" style="margin-top:40px">
		<?php
			include("left.php");
		?>

        <div class="span9">
		<?php 
		if($succeedMessage!==NULL){ 
		?>	
			<div id="succeed_message" class="alert alert-success"><?php echo $succeedMessage; ?></div>
		<?php
		}
		?>
        <div id="page_home">
          <div class="hero-unit">
			<div id="preloader"></div>
			<?php
				include("maincontent/1$f_end");
	
			?>
          </div><!--/hero-unit-->
        
        </div><!--/page_home-->
		
		<div id="page_rest">
			
			<div id="page_services">
				<?php
					include("maincontent/2$f_end");
				?>
			</div><!--/page_services-->
			
			<div id="page_prices">
				<?php
					include("maincontent/4$f_end");
				?>
			</div><!--/page_prices-->
			
			<div id="page_features">
				<?php
					include("maincontent/5$f_end");
				?>
			</div><!--/page_features-->
			
			<div id="page_about">
				<?php
					include("maincontent/6$f_end");
					include("maincontent/8$f_end");
				?>
			</div><!--/page_about-->
			
			<div id="page_contact">     
				<?php
					include("maincontent/7$f_end");
				?>
			</div><!--/page_contact-->
			
			<div id="page_orderForm">
				<?php
					include("maincontent/9$f_end");
				?>
			</div><!--/page_orderForm-->
			
		</div><!--/page_rest-->

<?php
	include("footer.php");
?>