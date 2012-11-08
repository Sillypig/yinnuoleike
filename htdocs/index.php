<?php
	include("header.php");
?>

    <div class="container-fluid">
      <div class="row-fluid" style="margin-top:40px">
        <div class="span3">
          <div class="well sidebar-nav showhide">
            <a href='#page_products'><?= $lang['tuotteet']; ?></a>
          </div><!--/.well -->
          
          <div class="well sidebar-nav showhide">
            <a href='#page_prices'><?= $lang['hinnasto']; ?></a>
          </div><!--/.well -->
          
          <div class="well sidebar-nav showhide">
            <a href='#page_features'><?= $lang['ominaisuudet']; ?></a>
          </div><!--/.well -->     
          
          <div class="well sidebar-nav showhide">
            <a href="#page_orderForm"><?= $lang['ota_yhteyttä']; ?></a>
          </div><!--/.well -->
		  
		  <!--<div id="facepile">
            <iframe src="//www.facebook.com/plugins/facepile.php?href=https%3A%2F%2Fwww.facebook.com%2Fjippostore&amp;action&amp;size=medium&amp;max_rows=5&amp;width=200&amp;height=210&amp;colorscheme=light&amp;appId=148002341942022" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:210px;" allowTransparency="true"></iframe>
		  </div>-->
		  
		  <div id="facepile" style="height:250px;width:200px;overflow:hidden;">
			  <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fjippostore&amp;width=204&amp;height=254&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;appId=148002341942022" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:204px; height:254px; margin:-2px 0 0 -2px;" allowTransparency="true"></iframe>
		  </div><!--/.well -->
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
			if ($_SESSION["lang_name"] == 'fi'){
				include("maincontent/1$f_end");
			}
			else{
				include("maincontent/1_en$f_end");
			}
			?>
          </div><!--/hero-unit-->
          <div class="row-fluid">
			  <table><tr><td>
            <div class="greenbutton showhide">
				<a href='#page_app'><?= $lang['facebook-verkkokauppa']; ?></a>
            </div><!--/span4--></td><td>
            <div class="greenbutton showhide" style="margin-left: 16px;">
				<a href='#page_dm'><?= $lang['Facebook-kampanjaratkaisu']; ?></a>
            </div><!--/span4-->
					  </td></tr></table>
          </div><!--/row-fluid-->
		
        <div id="home_about">
			<?php
			if ($_SESSION["lang_name"] == 'fi'){
				include("maincontent/8$f_end");
			}
			else{
				include("maincontent/8_en$f_end");
			}
			?>
        </div><!--/page_about-->
        
        </div><!--/page_home-->
        
        
        <div id="page_products">
        	<div class="btn-group" data-toggle="buttons-radio" style="margin-left:240px;margin-bottom:20px;margin-top:50px;width:450px;">
                <button class="btn active" id="product1"><?= $lang['facebook-verkkokauppa']; ?></button>
                <button class="btn" id="product2"><?= $lang['Facebook-kampanjaratkaisu']; ?></button>
            </div>
            <div id="products_product1" style="display:block;">
				<?php
			if ($_SESSION["lang_name"] == 'fi'){
				include("maincontent/2$f_end");
			}
			else{
				include("maincontent/2_en$f_end");
			}
			?>
            </div>
            <div id="products_product2" style="display:none;">
            	<?php
			if ($_SESSION["lang_name"] == 'fi'){
				include("maincontent/3$f_end");
			}
			else{
				include("maincontent/3_en$f_end");
			}
			?>
            </div>
        </div><!--/page_products-->
        
        <div id="page_prices">
			<?php
			if ($_SESSION["lang_name"] == 'fi'){
				include("maincontent/4$f_end");
			}
			else{
				include("maincontent/4_en$f_end");
			}
			?>
		</div><!--/page_prices-->
        
        <div id="page_features">
			<?php
			if ($_SESSION["lang_name"] == 'fi'){
				include("maincontent/5$f_end");
			}
			else{
				include("maincontent/5_en$f_end");
			}
			?>
        </div><!--/page_features-->

        <div id="page_orderForm">
			<?php
			if ($_SESSION["lang_name"] == 'fi'){
				include("maincontent/9$f_end");
			}
			else{
				include("maincontent/9_en$f_end");
			}
			?>
        </div><!--/page_orderForm-->
		
        <div id="page_about">
			<?php
			if ($_SESSION["lang_name"] == 'fi'){
				include("maincontent/6$f_end");
				include("maincontent/8$f_end");
			}
			else{
				include("maincontent/6_en$f_end");
				include("maincontent/8_en$f_end");
			}
			?>
        </div><!--/page_about-->
        
        <div id="page_contact">     
			<?php
			if ($_SESSION["lang_name"] == 'fi'){
				include("maincontent/7$f_end");
			}
			else{
				include("maincontent/7_en$f_end");
			}
			?>
        </div><!--/page_contact-->
        
        <div id="page_app">
			<?php
			if ($_SESSION["lang_name"] == 'fi'){
				include("maincontent/2$f_end");
			}
			else{
				include("maincontent/2_en$f_end");
			}
			?>
        </div><!--/page_app-->
        
        <div id="page_dm">
			<?php
			if ($_SESSION["lang_name"] == 'fi'){
				include("maincontent/3$f_end");
			}
			else{
				include("maincontent/3_en$f_end");
			}
			?>
        </div><!--/page_dm-->

<?php
	include("footer.php");
?>