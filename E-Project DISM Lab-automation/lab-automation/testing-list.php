
<?php include('header.php'); ?>
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        
        <li class="breadcrumb-item active" aria-current="page">Testing List</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
      <h3>Testing List</h3>
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

    	<table class="order-table table">
		<thead>
			<tr>
      
				<th>Id</th>
				
				
				<th>Product Name</th>
               
                <th>Product Catigory</th>
                <th>Product detail</th>
                <th>Testing Code</th>
                <th>Testing Type</th>
                <th>Date</th>
                
                
                <th>Action</th>
                
                
			</tr>
		</thead>
		<tbody>
       
            <?php
            foreach($ob->view_pro() as $view){
                echo('
                <tr>
                    <td>'.$view['p_id'].'</td>             
                    <td>'.$view['p_name'].'</td>            
                             
                                
                    <td>'.$view['c_name'].'</td>
                    <td>'.$view['p_des'].'</td>
                                
                    ');

                    foreach($ob->sel_testing() as $user){
                      echo('<td>'.$user['t_code'].'</td> 
                      
                      <td>'.$user['t_type'].'</td> 

                      <td>'.$user['t_datetime'].'</td> 

                      <td>
                    <a href="pro-detail.php?pid='.$view['p_id'].'"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                    </td>
                        
                    </tr>        

                ');

            }
          }
            ?>
		
		</tbody>
	</table>

  </section>

  </div>
  </div>
</div>
</div>
<?php include('footer.php'); ?>