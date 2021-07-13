<?php session_start();

class over_store{

	function con(){
		$con = mysqli_connect('localhost','root','','lab_automation');
		return $con;
	}



	function user_account(){
		if(isset($_POST['btn-user'])){

			$a = $_POST['fname'];
			
			$c = $_POST['email'];
			$d = $_POST['psw'];
			
			$f = $_POST['role'];
			$img = $_FILES['img']['name'];
			
			$qu = mysqli_query($this->con(),"INSERT INTO `user_register`
			( `u_fullname`, `u_email`, `u_psw`, `u_role`,  `u_img`) VALUES ('$a','$c','$d','$f','$img')");

			move_uploaded_file($_FILES['img']['tmp_name'],"assets/images/user/".$img);
		}
	}


	function user_login(){
		
		if(isset($_POST['btn_login'])){
			
		
			$email = $_POST['username'];
			$psw = $_POST['psw'];

			$qu = mysqli_query($this->con(),"SELECT * FROM `user_register` WHERE u_email = '$email' and u_psw = '$psw'");
			$count = mysqli_num_rows($qu);
			if($count == 0){

				echo('<script>alert("Email and Password incorrect")</script>');
			}
			else{

				$_SESSION['register'] = $_POST['username'];
				header('location:index.php');
				
			}
		}
		
	}

	function user_data(){
		$qu = mysqli_query($this->con(),"SELECT  * FROM user_register WHERE u_email = '".$_SESSION['register']."' ");
		return $qu;
	}


	function cat_data(){
			$a = $_GET['name'];
			$b = $_GET['des'];
			

			$query = mysqli_query($this->con(),"INSERT INTO `product_category`( `c_name`, `c_des`) VALUES ('$a','$b')");
			
			if($query){
				echo ('1');

			}
			else{
				echo ('0');
				
			}
			return $query;
		
	}


	

	function catlog_list(){
		$query = mysqli_query($this->con(),"SELECT * FROM `product_category`");
		return $query;
	}

	function ad_products(){
		if(isset($_POST['btn-product'])){

			$a = $_POST['p-name'];
			$img = $_FILES['p-img']['name'];
			$b = $_POST['p-code'];
			$d = $_POST['p-catlog'];
			
			$c = $_POST['p-des'];
			
			// $im = json_encode($img);
			// $txt = $_POST['p-dec'];

			$query = mysqli_query($this->con(),"INSERT INTO `products`( `p_name`, `p_img`, `p_code`, `p_cid`, `p_des`) VALUES
			 ('$a','$img','$b','$d','$c')");
			 move_uploaded_file($_FILES['p-img']['tmp_name'],"assets/images/product/".$img);
			 
			

				// $count = count($img);
				// for($i=0; $i< $count ; $i++){
				// 	$tmp = $_FILES['p-img']['tmp_name'][$i];
				// 	move_uploaded_file($tmp,"assets/images/product/".$img[$i]);
				// }
			//  return $query;
			
		}
	}


	
	function add_edit_user(){
		if(isset($_POST['btn-edit-user'])){

			$pid = $_GET['id'];
			$a = $_POST['fname'];
			$b = $_POST['email'];
			$c = $_POST['psw'];
			
			
			$img = $_FILES['img']['name'];
		
			if($img == ''){
				$im = $_POST['img'];
			}
			else{
				$im = $_FILES['img']['name'];

			}

			$query = mysqli_query($this->con(),
			"UPDATE `user_register` SET `u_fullname`='$a',`u_email`='$b',`u_psw`='$c',`u_img`='$im' WHERE u_id=$pid"
			 );

			 move_uploaded_file($_FILES['img']['tmp_name'],"assets/images/product/".$im);
			 if($query){
				echo('<script>window.location.href="view-user-account.php"</script>');
			 }
			 return $query;
			
		}
	}


	function add_edit_pro(){
		if(isset($_POST['btn-edit-product'])){

			$pid = $_GET['pid'];
			$a = $_POST['p-name'];
			$b = $_POST['p-code'];
			$c = $_POST['p-des'];
			$d = $_POST['p-catlog'];
			
			
			$img = $_FILES['p-img']['name'];
		
			if($img == ''){
				$im = $_POST['img'];
			}
			else{
				$im = $_FILES['img']['name'];

			}

			$query = mysqli_query($this->con(),
			"UPDATE `products` SET `p_name`='$a',`p_code`='$b',`p_des`='$c',`p_cid`='$d',`p_img`='$im' WHERE p_id=$pid"
			 );

			 move_uploaded_file($_FILES['img']['tmp_name'],"assets/images/product/".$im);
			 if($query){
				echo('<script>window.location.href="view-product.php"</script>');
			 }
			 return $query;
			
		}
	}




	function view_pro(){
		$qu = mysqli_query($this->con(),"SELECT p.p_id,p.p_name,p.p_img,p.p_code,c.c_id,c.c_name,c.c_des,p.p_des,p.p_status,p.p_datetime FROM
		 `products` AS p LEFT JOIN product_category AS c ON p.p_cid=c.c_id where p.p_status='Ready'");
		return $qu;
	}
	

	function trash_pro(){
		$qu = mysqli_query($this->con(),"SELECT p.p_id,p.p_name,c.c_name,p.p_stock,p.p_price,p.p_sale_price,p.p_img,p.p_datetime
		 FROM `product` AS p LEFT JOIN catlog AS c ON p.p_cid=c.c_id where p.p_status=2");
		return $qu;
	}



	function move_to_trash(){
		$a = $_GET['id'];
		$qu = mysqli_query($this->con(),"UPDATE `product` SET p_status=2 WHERE p_id=$a");
		return $qu;
	}


	


	function edit_pro($a){
		$qu = mysqli_query($this->con(),"SELECT * FROM products AS p LEFT JOIN product_category AS c ON p.p_cid=c.c_id where p_id=$a");
		return $qu;
	}

	function edit_user($a){
		$qu = mysqli_query($this->con(),"SELECT * FROM user_register where u_id=$a");
		return $qu;
	}

	function edit_product(){
		$qu = mysqli_query($this->con(),"SELECT * FROM products AS p LEFT JOIN product_category AS c ON p.p_cid=c.c_id ");
		return $qu;
	}

	function view_accounts(){
		$query  = mysqli_query($this->con(),"SELECT * FROM `user_register`");
		return $query;
	}

	
function total_admin(){
	$qu = mysqli_query($this->con(),"SELECT COUNT(u_role) as Total_Admin FROM `user_register` WHERE u_role = 'Admin'
	");
		return $qu;
}

function total_srs(){
	$qu = mysqli_query($this->con(),"SELECT COUNT(u_role) as Total_srs FROM `user_register` WHERE u_role = 'SRS'
	");
		return $qu;
}

function total_cpri(){
	$qu = mysqli_query($this->con(),"SELECT COUNT(u_role) as Total_cpri FROM `user_register` WHERE u_role = 'CPRI'
	");
		return $qu;
}

function testing_type() {
	if(isset($_POST['btn-testing'])){
		$a = $_POST['t-code'];
		$b = $_POST['t-type'];
		
		$query  = mysqli_query($this->con(),"INSERT INTO `test_product`( `t_code`, `t_type`) VALUES ('$a','$b')");
		if($query){
			echo ('<script>alert("Done")</script>');

		}
		else{
			echo ('<script>alert("This Testing Code is already Exits....!!")</script>');
			
		}
		return $query;
	}
	
}

function sel_testing(){
	$query = mysqli_query($this->con(),"SELECT * FROM `test_product`");
	return $query;
}


function cat_name()
{
	$a = $_GET['name'];
	
	$qu = mysqli_query($this->con(),"select c_name from product_category where c_name ='$a'");
	$count = mysqli_num_rows($qu);
	if($count == 0){
		echo(1);
	}else{
		echo(0);
	}
}

function edit_catlog(){
	$a = $_GET['id'];
	$query = mysqli_query($this->con(),"SELECT * FROM `product_category` where c_id='$a'");
		return $query;
}


function update_catlog(){
	if(isset($_POST['btn-edit-catlog'])){
		$a = $_GET['id'];
		$b = $_POST['name'];
		$c = $_POST['des'];
		
		$query = mysqli_query($this->con(),"UPDATE `product_category` SET `c_name`='$b',`c_des`='$c' WHERE c_id=$a");
		if($query){
			echo('<script>window.location.href="catlog-list.php"</script>');
		 }
		 
		return $query;
	}
}

}

$ob = new over_store;

// if(isset($_POST['btn-product'])){
// 	$ob->add_product();
// }


if(isset($_GET['btn_catlog'])){
	$ob->cat_data();
}

// if(isset($_GET['btn_login'])){
// 	$ob->user_login();
// }

if(isset($_GET['btn_find'])){
	$ob->cat_name();
}

?>