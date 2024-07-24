<style>
	.logo {
    margin: auto;
    font-size: 30px;
    background: black;
    padding: 5px 13px;
    border-radius: 50% 50%;
    color: Gold;
}
</style>

<nav class="navbar navbar-dark bg-dark fixed-top " style="padding:0;">
  <div class="container-fluid mt-1 mb-1">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
  				<i class="fa fa-coins"></i>
  			</div>
  		</div>
      <div class="col-md-4 float-left text-white">
        <large><b><h2>U H C System</h2></b></large>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?><i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>

</nav