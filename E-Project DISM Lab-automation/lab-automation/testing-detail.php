
<?php include('header.php'); ?>
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        
        <li class="breadcrumb-item active" aria-current="page">Testing Details</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
      <h3>Testing Details</h3>
    </div>

    <div class="card card_border p-lg-5 p-3 mb-4">
      <div class="card-body py-3 p-0">
     <section class="container-fluid">

	
     <div class="search-box">
          <form>
            <input  class="light-table-filter" data-table="order-table" placeholder="Search Here..." type="search" id="search">
            <button class="search-submit" value=""><span class="fa fa-search"></span></button>
          </form>
        </div>
	   <!-- <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" /> -->

     <?php
if(isset($_GET['pid'])){
  $a = $_GET['pid'];
  foreach($ob->edit_pro($a) as $data){



 
  echo('
    	<table class="order-table table">
		<thead>
			<tr>
      
				<th>Product Name</th>
				
				<th>Product add-User</th>
				              <th>Product Details</th>
				
                <th>Catigory Name</th>
                <th>Catigory add-user</th>
                <th>Catigory Description</th>
                <th>Testing code</th>
                <th>Testing Date</th>
                <th>Result</th>
                
                
                
                
			</tr>
		</thead>
	
                <tr>
                    <td>'.$data['p_name'].'</td> ');

                    foreach($ob->user_data() as $user){
                      echo('<td>'.$user['u_fullname'].'</td>  

                     
                               
                      <td>'.$data['p_des'].'</td>
                      <td>'.$data['c_name'].'</td>
                      ');

                      foreach($ob->user_data() as $user){
                        echo('<td>'.$user['u_fullname'].'</td>           
                                     
                        <td>'.$data['c_des'].'</td>    
                        ');

                        foreach($ob->sel_testing() as $user){
                          echo('<td>'.$user['t_code'].'</td> 
                          <td>'.$user['t_datetime'].'</td>  

                          <td>Approved</td> 
                    <td>
                    <a href="testing-list.php?pid='.$data['p_id'].'"><button class="btn btn-warning ">Done</button></a>
                    
                    </td>
                        
                    </tr>        

                ');
                      }
            }
          
          echo('
		</tbody>
	</table>

  ');
  }
}
}
?>
  </section>

  </div>
  </div>

</div>
</div>
<?php include('footer.php'); ?>