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
			<p style = "margin-left:30px; margin-top:50px; font-size:14pt; font-weight:bold;">U H C Sales Data Report&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
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
								    <th>#</th>
									<th>Refrance No</th>
									<th>Customer id</th>
                                    <th>Total Amount</th>
                                    <th>Amount Tendered</th>
                                    <th>Amount Change</th>
                                    <th>Discount Value</th>
                                    <th>Tax Value</th>
								</tr>
						  </thead>
						  <tbody>
<?php
                                include('db_connect.php');
                                $i = 1;
								$doctor = $conn->query("SELECT * FROM sales_list order by id asc");
								while($row=$doctor->fetch_assoc()):
?>
							<tr>
							    <td style="text-align:center;"><?php echo $i++ ?></td>
								<td style="text-align:center;"><?php echo $row['ref_no']; ?></td>
								<td style="text-align:center;"><?php echo $row['customer_id']; ?></td>
                                <td style="text-align:center;"><?php echo $row['total_amount']; ?></td>
                                <td style="text-align:center;"><?php echo $row['amount_tendered']; ?></td>
                                <td style="text-align:center;"><?php echo $row['amount_change']; ?></td>
                                <td style="text-align:center;"><?php echo $row['discountvalue']; ?></td>
                                <td style="text-align:center;"><?php echo $row['taxvalue']; ?></td>
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