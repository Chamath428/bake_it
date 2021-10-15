<?php 
	class loginModel extends database
	{
		
		function __construct()
		{
			$this->db=$this->dbcon();
		}

		public function checkUserName($username){
			$uername=$this->db->real_escape_string($username);
			$sql1="SELECT
						customer_id
					FROM
						registered_customer
					WHERE
						contact_number = ".'"'.$username.'"'."
					OR 
						email = "		  .'"'.$username.'"';
			$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
			if (mysqli_num_rows($res1)>0) {
				return 1;
			}else{
				$sql2="SELECT
						job_role
					FROM
						staff
					WHERE
						contact_number = ".'"'.$username.'"'."
					OR 
						email = "		  .'"'.$username.'"';
			$res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
			if (mysqli_num_rows($res2)>0) {
				$row1=mysqli_fetch_assoc($res2);
				return $row1['job_role'];
			}
		}return 0;
		
	}


		public function checkPassword($username,$password){
			$uername=$this->db->real_escape_string($username);
			$sql3="SELECT
						password
					FROM
						registered_customer
					WHERE
						contact_number = ".'"'.$username.'"'."
					OR 
						email = "		  .'"'.$username.'"';
			$res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));
			
			if (mysqli_num_rows($res3)>0) {
				    $row3=mysqli_fetch_assoc($res3);
				    if (password_verify($password, $row3['password'])) {
				    	return true;
				    }
			} 
			else {
				$sql4="SELECT
						password
					FROM
						staff
					WHERE
						contact_number = ".'"'.$username.'"'."
					OR 
						email = "		  .'"'.$username.'"';
					$res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db));
					$row4=mysqli_fetch_assoc($res4);
					if (password_verify($password, $row4['password'])) {
						    return true;
					}
				}
			return false;
		}


		public function getCustomerId($username)
		{
			$uername=$this->db->real_escape_string($username);
			$sql5="SELECT
						customer_id
					FROM
						registered_customer
					WHERE
						contact_number = ".'"'.$username.'"'."
					OR 
						email = "		  .'"'.$username.'"';
			$res5=mysqli_query($this->db,$sql5) or die('5->'.mysqli_error($this->db));
			$row5=mysqli_fetch_assoc($res5);
			$customer_id=$row5['customer_id'];
			return $customer_id;
		}

		public function getStaffId($username)
		{
			$uername=$this->db->real_escape_string($username);
			$sql6="SELECT
						staff_id
					FROM
						staff
					WHERE
						contact_number = ".'"'.$username.'"'."
					OR 
						email = "		  .'"'.$username.'"';
			$res6=mysqli_query($this->db,$sql6) or die('5->'.mysqli_error($this->db));
			$row6=mysqli_fetch_assoc($res6);
			$staff_id=$row6['staff_id'];
			return $staff_id;
		}
	}

 ?>