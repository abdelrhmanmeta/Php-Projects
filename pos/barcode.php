<html>
<head>
<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style type="text/css" media="save">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>
</head>
<body onload="window.print();">
	<div style="margin-left: 5%">
		<?php
		include 'barcode128.php';
		$product = $_POST['product'];
		$product_id = $_POST['product_id'];
		$product_type = $_POST['product_type'];


		for($i=1;$i<=$_POST['print_qty'];$i++){
			echo "<p class='inline'><span ><b>Item: $product</b></span>".bar128(stripcslashes($_POST['product_id']))."<span ><span></p>&nbsp&nbsp&nbsp";
            echo "<p class='inline'><span ><b>Member_type: $product_type</b></span>";
		}

		?>
	</div>
</body>
</html>