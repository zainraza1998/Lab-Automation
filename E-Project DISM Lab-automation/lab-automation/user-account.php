<?php include('header.php'); 
$ob->user_account();
$ob->add_edit_user();

?>
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<?php 
if(isset($_GET['id'])){
  $a = $_GET['id'];
  foreach($ob->edit_user($a) as $data){

echo('<!-- breadcrumbs -->
<nav aria-label="breadcrumb" class="mb-4">
  <ol class="breadcrumb my-breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    
    <li class="breadcrumb-item active" aria-current="page">Edit </li>
  </ol>
</nav>
<!-- //breadcrumbs -->

<!-- card heading -->
<div class="cards__heading">
  <h3>Edit</h3>
</div>
<!-- //card heading -->

<!-- content block style 1-->
<div class="card card_border p-lg-5 p-3 mb-4">
  <div class="card-body py-3 p-0">
    <form method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6">
        <input type="text" name="fname" class="form-control" value='.$data['u_fullname'].'>
      </div>
      <div class="col-md-6">
        <input type="email" name="email" class="form-control " value='.$data['u_email'].'>
      </div>
      
</div>

<div class="row">
    
      <div class="col-md-6">
        <input type="" name="psw" class="form-control mt-4" value='.$data['u_psw'].'>
      </div>
      <div class="col-md-6">
      <input type="file" name="img" class="form-control mt-4" multiple>
      <input type="hidden" name="img" value="'.$data['u_img'].'">
      </div>
</div>





<div class="row">
  <div class="col-md-12">
      <input type="submit" name="btn-edit-user" class="btn btn-warning mt-4">
</div>
</form>
</div>');
    
  }
}else{
  echo('<!-- breadcrumbs -->
  <nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb my-breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      
      <li class="breadcrumb-item active" aria-current="page">User Registered</li>
    </ol>
  </nav>
  <!-- //breadcrumbs -->

  <!-- card heading -->
  <div class="cards__heading">
    <h3>User Registered</h3>
  </div>
  <!-- //card heading -->

  <!-- content block style 1-->
  <div class="card card_border p-lg-5 p-3 mb-4">
    <div class="card-body py-3 p-0">
    
      <form method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
          <input type="text" name="fname" class="form-control" placeholder="Enter Full Name ">
        </div>
        <div class="col-md-6">
          <input type="email" name="email" class="form-control " placeholder="Enter Your Email  ">
        </div>
        
  </div>

<div class="row">
      
        <div class="col-md-6">
          <input type="" name="psw" class="form-control mt-4" placeholder="Enter Your Password">
        </div>
        <div class="col-md-6">
          <select name="role" class="form-control mt-4">
            <option value="">Select One</option>
            <option value="SRS">SRS</option>
            <option value="Admin">Admin</option>
            <option value="CPRI">CPRI</option>

          </select>
        </div>
  </div>



  <div class="row">
    <div class="col-md-12">
      <input type="file" name="img" class="form-control mt-4" multiple>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
        <input type="submit" name="btn-user" class="btn btn-warning mt-4">
</div>
</form>
  </div>');

}

?>
    

</div>
</div>
<?php  include('footer.php'); ?>