<!DOCTYPE html>

<html lang="en">

<head>

  <title>U H C Barcode Generator</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>

</head>

<body style="background-color:black;">


<div class="container">

  <div style="margin: 10%;">

  	<h2 class="text-center" style="color:#FFD700">U H C BARCODE GENERATOR</h2>

  	<form class="form-horizontal" method="post" action="barcode.php" target="_blank">

  	<div class="form-group">

      <label class="control-label col-sm-2" for="product" style="color:#FFD700">User Type:</label>

      <div class="col-sm-10">

        <input autocomplete="OFF" type="text" class="form-control" id="product" name="product" required="">

      </div>

    </div>
    <div class="form-group">

      <label class="control-label col-sm-2" for="product_type" style="color:#FFD700">Member type:</label>

      <div class="col-sm-10">

        <input autocomplete="OFF" type="text" class="form-control" id="product_type" name="product_type" required="">

      </div>

    </div>

    <div class="form-group">

      <label class="control-label col-sm-2" for="product_id" style="color:#FFD700">User name:</label>

      <div class="col-sm-10">

        <input autocomplete="OFF" type="text" class="form-control" id="product_id" name="product_id" required="">

      </div>

    </div>

    <div class="form-group">

      <label class="control-label col-sm-2" for="print_qty" style="color:#FFD700">Barcode Quantity</label>

      <div class="col-sm-10">

        <input autocomplete="OFF" type="print_qty" class="form-control" id="print_qty"  name="print_qty" required="">

      </div>

    </div>


    <div class="form-group">

      <div class="col-sm-offset-2 col-sm-10">

        <button type="submit" class="btn btn-default">Print Barcode</button>
            <a href="index.php?page=home"  class="btn btn-default ">U H C Home</a>

      </div>

    </div>

  </form>

  </div>

</div>


</body>

</html>
