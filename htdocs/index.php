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

<?php
	include("footer.php");
?>