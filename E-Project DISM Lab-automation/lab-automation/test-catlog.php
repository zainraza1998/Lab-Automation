<?php include('header.php'); 
$ob->testing_type();

?>
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        
        <li class="breadcrumb-item active" aria-current="page">Test Catigory</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
      <h3>Test Catigory</h3>
    </div>
    <!-- //card heading -->

    <!-- content block style 1-->
    <div class="card card_border p-lg-5 p-3 mb-4">
      <div class="card-body py-3 p-0">
      	<form method="post" >
        <div class="row">
        	<div class="col-md-6">
        		<input type="" name="t-code" class="form-control" placeholder="Enter Testing Code ">
        	</div>
        	<div class="col-md-6">
        		<input type="" name="t-type" class="form-control" placeholder="Enter Testing type">
        	</div>
          
    </div>

    <div class="row">
    	<div class="col-md-12">
    			<input type="submit" name="btn-testing" class="btn btn-warning mt-4">
</div>
</form>
    </div>

</div>
</div>
<?php  include('footer.php'); ?>