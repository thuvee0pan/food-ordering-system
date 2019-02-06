<?php 
   	if(isset($_POST['order'])){

    $name= mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
		$phone= mysqli_real_escape_string($conn,$_POST['phone']);


		  if(empty($name)){
			array_push($errors,"Name is required");
		  }
		   if(empty($phone)){
			array_push($errors,"Phone is required");
		  } if(empty($email)){
        array_push($errors,"Email is required");
        }
		 
		  if(count($errors) == 0){
					   $query= "SELECT * FROM `customer` WHERE `phone` = '{$phone}'";
					  $result = mysqli_query($conn, $query);
             $row = mysqli_fetch_assoc($result);
             CheckQuary($result);
             if(mysqli_num_rows($result)==1){
               //log user in
               $_SESSION['customer']= $row['_id'];
               $_SESSION['name']= $row['name'];
               $_SESSION['phone']= $row['phone'];
              redirect_to("order.php");
             }else {
              $query= "INSERT INTO `customer`(`name`, `email`, `phone`) VALUES ('{$name}','{$email}','{$phone}')";
              $result = mysqli_query($conn, $query);
              $row = mysqli_fetch_assoc($result);

              CheckQuary($result);
              $_SESSION['customer']= $row['_id'];
              $_SESSION['name']= $row['name'];
              $_SESSION['phone']= $row['phone'];
              redirect_to("order.php");

             }
					}
                }

 ?>