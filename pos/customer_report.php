<?php include('db_connect.php');?>

<div class="container-fluid">

	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Customer</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								$customer = $conn->query("SELECT * FROM customer_list order by id asc");
								while($row=$customer->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										<p>Name : <b><?php echo $row['name'] ?></b></p>
										<p><small>Contact : <b><?php echo $row['contact'] ?></b></small></p>
										<p><small>Address : <b><?php echo $row['address'] ?></b></small></p>
										<p><small>Amount : <b><?php echo $row['amount'] ?></b></small></p>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
                        <div>
								<button onclick="window.print()"> print</button>
							</div>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>

</div>
<style>

	td{
		vertical-align: middle !important;
	}
	td p{
		margin:unset;
	}
</style>
<script>

	$('#manage-customer').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_customer',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully added",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					alert_toast("Data successfully updated",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	})
	$('.edit_customer').click(function(){
		start_load()
		var cat = $('#manage-customer')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='name']").val($(this).attr('data-name'))
		cat.find("[name='contact']").val($(this).attr('data-contact'))
		cat.find("[name='address']").val($(this).attr('data-address'))
		cat.find("[name='amount']").val($(this).attr('data-amount'))
		end_load()
	})
	$('.delete_customer').click(function(){
		_conf("Are you sure to delete this customer?","delete_customer",[$(this).attr('data-id')])
	})
	function delete_customer($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_customer',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>