<?php
	include("header.php");
?>

    <div class="container-fluid">
      <div class="row-fluid" style="margin-top:40px">
        <div class="span3">
          <div class="well sidebar-nav showhide">
            <a href='#page_products'>Products</a>
          </div><!--/.well -->
          
          <div class="well sidebar-nav showhide">
            <a href='#page_prices'>Prices</a>
          </div><!--/.well -->
          
          <div class="well sidebar-nav showhide">
            <a href='#page_features'>Features</a>
          </div><!--/.well -->     
          
          <div class="well sidebar-nav showhide">
            <a href="#page_orderForm">Order</a>
          </div><!--/.well -->
		  
		  <!--<div id="facepile" style="height:250px;width:200px;overflow:hidden;">
			  <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fjippostore&amp;width=204&amp;height=254&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;appId=148002341942022" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:204px; height:254px; margin:-2px 0 0 -2px;" allowTransparency="true"></iframe>
		  </div>--><!--/.well -->
		  <!--/.well -->
        </div><!--/span3-->

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
        
        
        <div id="page_products">
        	
            <div id="products_product1" style="display:block;">
				<?php
				include("maincontent/2$f_end");
			?>
            </div>
            <div id="products_product2" style="display:none;">
            	<?php
				include("maincontent/3$f_end");
			?>
            </div>
        </div><!--/page_products-->
        
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

        <div id="page_orderForm">
			<?php
				include("maincontent/9$f_end");
			?>
        </div><!--/page_orderForm-->
		
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
        
        <div id="page_app">
			<?php
				include("maincontent/2$f_end");
			?>
        </div><!--/page_app-->
        
        <div id="page_dm">
			<?php
				include("maincontent/3$f_end");
			?>
        </div><!--/page_dm-->

<?php
	include("footer.php");
?>