<html>

<head>
		<title>UHC</title>

		<style>


.container {
	width:75%;
	margin:auto;
}

.table {
    width: 100%;
    margin-bottom: 20px;
}

.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
    background-color: #f9f9f9;
}

@media print{
#print {
display:none;
}
}

#print {
	width: 90px;
    height: 30px;
    font-size: 18px;
    background: white;
    border-radius: 4px;
	margin-left:28px;
	cursor:hand;
}

		</style>
<script>
function printPage() {
    window.print();
}
</script>

</head>


<body>
	<div class = "container">
		<div id = "header">
		<br/>
<button type="submit" id="print" onclick="printPage()">Print</button>
			<p style = "margin-left:30px; margin-top:50px; font-size:14pt; font-weight:bold;">U H C Inventory Data Report&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <div align="right">
		<b style="color:blue;">Date Prepared:</b>
		<?php include('current-date.php'); ?>
        </div>
		<br/>
	<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover">
						<table class="table table-striped">
						  <thead>
								<tr>
								    <th >#</th>
								    <th >Product Name</th>
								    <th >Stock In</th>
								    <th >Stock Out</th>
								    <th >Stock Available</th>
								</tr>
						  </thead>
						  <tbody>
<?php
                                include('db_connect.php');
                                $i = 1;
								$product = $conn->query("SELECT * FROM product_list r order by name asc");
								while($row=$product->fetch_assoc()):
								$inn = $conn->query("SELECT sum(qty) as inn FROM inventory where type = 1 and product_id = ".$row['id']);
								$inn = $inn && $inn->num_rows > 0 ? $inn->fetch_array()['inn'] : 0;
								$out = $conn->query("SELECT sum(qty) as `out` FROM inventory where type = 2 and product_id = ".$row['id']);
								$out = $out && $out->num_rows > 0 ? $out->fetch_array()['out'] : 0;
								$available = $inn - $out;
?>
							<tr>
							    	<td style="text-align:center;"><?php echo $i++ ?></td>
									<td style="text-align:center;"><?php echo $row['name'] ?></td>
									<td style="text-align:center;"><?php echo $inn ?></td>
									<td style="text-align:center;"><?php echo $out ?></td>
									<td style="text-align:center;"><?php echo $available ?></td>
							</tr>


							<?php
							 endwhile;
							?>
						  </tbody>
						</table>
                        </table>
					</div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </body>

</html>