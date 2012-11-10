<?php
	include("header.php");
?>

    <div class="container-fluid">
      <div class="row-fluid" style="margin-top:40px">
		<?php
			include("left.php");
		?>

        <div class="span9">
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
<?php
	include("footer.php");
?>