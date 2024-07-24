<?php include('db_connect.php');?>
            <!-- FORM Panel -->
            	<div class="row mt-1 ml-1 mr-1">
			<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
            <div class="col-md-4">
                    <div >
                            <label><b><h2> Report Form </h2></b> </label>
                  	</div>
                        <div class="card-body">
                            <input type="hidden" name="id">
                            <div class="form-group">
                                <label class="control-label"><b><h4>Customer Report</h4></b></label>
                                <form method="post" action="data-print.php" target="_new" class="form-inline">
                                     <div class="form-group">
                                        <button type="submit" name="search" class="btn btn-primary">Print Customer Data</button>
                                     </div>
                                 </form>
                            </div>

                            <div class="form-group">
                                <label class="control-label"><b><h4>Product Report</h4></b></label>
                                <form method="post" action="data-print1.php" target="_new" class="form-inline">
                                     <div class="form-group">
                                        <button type="submit" name="search" class="btn btn-primary"> Print Product  Data</button>
                                     </div>
                                 </form>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><b><h4>Receiving Report</h4></b></label>
                                <form method="post" action="data-print2.php" target="_new" class="form-inline">
                                     <div class="form-group">
                                        <button type="submit" name="search" class="btn btn-primary"> Print Receiving  Data</button>
                                     </div>
                                 </form>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><b><h4>Doctor Report</h4></b></label>
                                <form method="post" action="data-print3.php" target="_new" class="form-inline">
                                     <div class="form-group">
                                        <button type="submit" name="search" class="btn btn-primary">Print Doctor Data</button>
                                     </div>
                                 </form>
                            </div>

                            <div class="form-group">
                                <label class="control-label"><b><h4>Sales Report</h4></b></label>
                                <form method="post" action="data-print4.php" target="_new" class="form-inline">
                                     <div class="form-group">
                                        <button type="submit" name="search" class="btn btn-primary">Print Sales Data</button>
                                     </div>
                                 </form>
                            </div>
                             <div class="form-group">
                                <label class="control-label"><b><h4>Inventory Report</h4></b></label>
                                 <form method="post" action="data-print5.php" target="_new" class="form-inline">
                                     <div class="form-group">
                                        <button type="submit" name="search" class="btn btn-primary">Print Inventory Data</button>
                                     </div>
                                 </form>
                            </div>
                    </div>
                </div>

            </div>
        </div>
            </div>

            </div>
