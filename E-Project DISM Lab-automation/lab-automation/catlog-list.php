
<?php include('header.php'); 


?>
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        
        <li class="breadcrumb-item active" aria-current="page">Product Catigory List</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
      <h3>Product Catigory List</h3>
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
				
                <th>User Name</th>
				
				
				<th>Catigory Name</th>
                <th>Description</th>
              
                <th>Date</th>
                
                
                
			</tr>
		</thead>
		<tbody>
       
            <?php
            foreach($ob->catlog_list() as $view){
                echo('
                <tr>
                <td>'.$view['c_id'].'</td> 
                ');
                foreach($ob->user_data() as $user){
                    echo('<td>'.$user['u_fullname'].'</td>
                    
                <td>'.$view['c_name'].'</td>            
                    <td>'.$view['c_des'].'</td>            
                    
                     <td>'.$view['c_datetime'].'</td>


           
             <td>
                    <a href=""><i class="fa fa-trash"></i></a>
                    <a href="add-catlog.php?id='.$view['c_id'].'"><i class="fa fa-edit"></i></a>
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
<?php include('footer.php'); 