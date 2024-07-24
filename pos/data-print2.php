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
			<p style = "margin-left:30px; margin-top:50px; font-size:14pt; font-weight:bold;">U H C Receiving Data Report&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
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
									<th>Ref_no</th>
									<th>Supplier_id</th>
									<th>Amount</th>
								</tr>
						  </thead>
						  <tbody>
<?php
                                include('db_connect.php');
                                $i = 1;
								$receiving = $conn->query("SELECT * FROM receiving_list order by id asc");
								while($row=$receiving->fetch_assoc()):
?>
							<tr>
							    <td style="text-align:center;"><?php echo $i++ ?></td>
								<td style="text-align:center;"><?php echo $row['ref_no']; ?></td>
								<td style="text-align:center;"><?php echo $row['supplier_id']; ?></td>
								<td style="text-align:center;"><?php echo $row['total_amount']; ?></td>
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