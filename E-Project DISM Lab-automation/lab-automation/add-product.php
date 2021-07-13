<?php include('header.php'); 
$ob->ad_products();
$ob->add_edit_pro();

?>
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<?php
if(isset($_GET['pid'])){
  $a = $_GET['pid'];
  foreach($ob->edit_pro($a) as $pro){
    echo('<!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        
        <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
      <h3>Edit Product</h3>
    </div>
    <!-- //card heading -->

    <!-- content block style 1-->
    <div class="card card_border p-lg-5 p-3 mb-4">
      <div class="card-body py-3 p-0">
      	<form method="post" enctype="multipart/form-data">
        <div class="row">
        	<div class="col-md-6">
        		<input type="text" name="p-name" class="form-control" value='.$pro['p_name'].'>
        	</div>
        	<div class="col-md-6">
        		<input type="text" name="p-code" class="form-control " value='.$pro['p_code'].'>
        	</div>
          
    </div>

  <div class="row">
        
        	<div class="col-md-6">
        		<input type="text" name="p-des" class="form-control mt-4" value='.$pro['p_des'].'>
        	</div>
          <div class="col-md-6">
        		<select name="p-catlog" class="form-control mt-4">
        			<option selected value='.$pro['c_id'].'>'.$pro['c_name'].'</option>
                   ');
        			foreach($ob->catlog_list() as $sel){
                      echo('<option value="'.$sel['c_id'].'" >'.$sel['c_name'].'</option>');
                  } 
echo('
        		</select>
        	</div>
    </div>


  
    <div class="row">
    	<div class="col-md-12">
    		<input type="file" name="p-img" class="form-control mt-4" >
        <input type="hidden" name="img" value="'.$pro['p_img'].'">
          
    	</div>
    </div>

    <div class="row">
    	<div class="col-md-12">
    			<input type="submit" name="btn-edit-product" class="btn btn-warning mt-4">
</div>
</form>
    </div>');

  }

}else{
echo('
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        
        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
      <h3>Add Product</h3>
    </div>
    <!-- //card heading -->

    <!-- content block style 1-->
    <div class="card card_border p-lg-5 p-3 mb-4">
      <div class="card-body py-3 p-0">
      	<form method="post" enctype="multipart/form-data">
        <div class="row">
        	<div class="col-md-6">
        		<input type="text" name="p-name" class="form-control" placeholder="Enter Product Name ">
        	</div>
        	<div class="col-md-6">
        		<input type="text" name="p-code" class="form-control " placeholder="Enter Product Code (10 digits) ">
        	</div>
          
    </div>

  <div class="row">
        
        	<div class="col-md-6">
        		<input type="text" name="p-des" class="form-control mt-4" placeholder="Enter Product Description">
        	</div>
          <div class="col-md-6">
        		<select name="p-catlog" class="form-control mt-4">
        			<option value="">Select One</option>
');                    
        			foreach($ob->catlog_list() as $sel){
                      echo('<option value="'.$sel['c_id'].'" >'.$sel['c_name'].'</option>');
                  } 
echo('
        		</select>
        	</div>
    </div>


  
    <div class="row">
    	<div class="col-md-12">
    		<input type="file" name="p-img" class="form-control mt-4" >
    	</div>
    </div>

    <div class="row">
    	<div class="col-md-12">
    			<input type="submit" name="btn-product" class="btn btn-warning mt-4">
</div>
</form>
    </div>

    ');

  }
  
  ?>

</div>
</div>
<?php  include('footer.php'); ?>