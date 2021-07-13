
<?php include('header.php'); ?>
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">



  
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        
        <li class="breadcrumb-item active" aria-current="page">Start Testing List</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
      <h3>Start Testing List</h3>
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
     foreach($ob->edit_product() as $data){

 
      echo('
    	<table class="order-table table">
		<thead>
			<tr>
      
				<th>Id</th>
				
				<th>User Name</th>
				
				<th>Product Name</th>
				<th>Product Catigory</th>
        <th>Product Code</th>
        
        <th>Product Details</th>
				<th>Date</th>
        <th>Testing Type</th>
        <th>Action</th>
                
                
                
                
			</tr>
		</thead>
	
                <tr>
                <td>'.$data['p_id'].'</td> ');
                
                foreach($ob->user_data() as $user){
                  echo('<td>'.$user['u_fullname'].'</td>  
                  
                  <td>'.$data['p_name'].'</td> 
                  <td>'.$data['c_name'].'</td>
                      <td>'.$data['p_code'].'</td>            
                      <td>'.$data['p_des'].'</td>
                      <td>'.$data['p_datetime'].'</td>
                      <td>
                      
                               ');
                      foreach($ob->sel_testing() as $sel){
                        echo('<option value="'.$sel['t_id'].'" >'.$sel['t_type'].'</option>');
                    } 
                                     
                       
                        echo(' 
                        </select>
                        </td>
                    <td>
                    <a href="testing-detail.php?pid='.$data['p_id'].'"><button class="btn btn-warning ">Start Testing</button></a>
                    
                    </td>
                        
                    </tr>        

                ');
                      }
            }
          
          echo('
		</tbody>
	</table>

  </section>

  </div>
  </div>

  ');
  

?>
</div>
</div>
<?php include('footer.php'); ?>