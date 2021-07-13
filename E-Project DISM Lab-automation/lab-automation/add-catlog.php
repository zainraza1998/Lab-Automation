<?php include('header.php'); 
// $ob->add_catlog();
$ob->update_catlog()

?>
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<?php
if(isset($_GET['id'])){
  $a = $_GET['id'];
  foreach($ob->edit_catlog($a) as $data){
echo('<!-- breadcrumbs -->
<nav aria-label="breadcrumb" class="mb-4">
  <ol class="breadcrumb my-breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    
    <li class="breadcrumb-item active" aria-current="page">Edit Product Catigory</li>
  </ol>
</nav>
<!-- //breadcrumbs -->

<!-- card heading -->
<div class="cards__heading">
  <h3>Edit Product Catigory</h3>
</div>
<!-- //card heading -->

<!-- content block style 1-->
<div class="card card_border p-lg-5 p-3 mb-4">
  <div class="card-body py-3 p-0">


    <form method="post" id="clear">
    <div class="row">
      <div class="col-md-6">
        <input type=""  id="name" name="name" class="form-control" value='.$data['c_name'].'>
        <div id="find" style="color: red;"></div>
      </div>
      <div class="col-md-6">
        <input type=""  id="des" name="des"  class="form-control" value='.$data['c_des'].'>
      </div>
      
</div>


<div class="row">
  <div class="col-md-12">
    <input type="submit" name="btn-edit-catlog" class="btn btn-warning mt-4">
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
        
        <li class="breadcrumb-item active" aria-current="page">Product Catigory</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
      <h3>Product Catigory</h3>
    </div>
    <!-- //card heading -->

    <!-- content block style 1-->
    <div class="card card_border p-lg-5 p-3 mb-4">
      <div class="card-body py-3 p-0">


      	<form method="" id="clear">
        <div class="row">
        	<div class="col-md-6">
        		<input type=""  id="name" class="form-control" placeholder="Enter Product Name">
            <div id="find" style="color: red;"></div>
        	</div>
        	<div class="col-md-6">
        		<input type=""  id="des" class="form-control" placeholder="Enter Product Description">
        	</div>
          
    </div>


    <div class="row">
    	<div class="col-md-12">
      <button type="button" id="btn-catlog" class="btn btn-warning mt-4">Submit</button>
    		
</div>
</form>
    </div>
    ');
}

?>

</div>
</div>

<script>

document.getElementById('btn-catlog').addEventListener("click",function(){
	
  var name = document.getElementById('name').value;

var des = document.getElementById('des').value;

$.ajax({

type:"get",
url:"main.php",
data:{btn_catlog:"true",name:name,des:des},
success: function(response){
    if(response == 1){
      echo ('Done');
  document.getElementById('clear').reset();
  
    }else{
  
      echo ('This Catigory is already Added....!!');
				
}
  
  
  }

})

});

document.getElementById('name').addEventListener("keyup",function(){
var name = document.getElementById('name').value;
var fin = document.getElementById('find');

$.ajax({
  type:"get",
  url:"main.php",
  data:{btn_find:"true",name:name},
  success: function(response){
    if(response == 1){
      fin.innerHTML = "Fine";
    }
    else{
      fin.innerHTML = "catigory name is  already exist..";
    }
  }
  
})

});

</script>
<?php  include('footer.php'); ?>