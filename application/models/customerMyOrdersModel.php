<?php 

	/**
	 * 
	 */
	class customerMyOrdersModel extends database
	{
		
		function __construct()
		{
			$this->db=$this->dbcon();
		}

		public function getMyOrders($customer_id){
			$orders=array();
			$quickOrder=array();
			$specialOrder=array();
			$i=0;
			$sql1="SELECT
						order_id,
						total_amount,
						menu_id,
						placed_date_and_time,
						order_status
					FROM
						order_details
					WHERE
						customer_id=".$customer_id."
					AND
						order_type=1
					ORDER BY 
						order_id DESC";

			$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
			if (mysqli_num_rows($res1)>0) {
				while ($row1=mysqli_fetch_assoc($res1)) {
				$data['order_id']=$row1['order_id'];
				$data['total_amount']=$row1['total_amount'];
				$data['menu_id']=$row1['menu_id'];
				$data['placed_date_and_time']=$row1['placed_date_and_time'];
				$data['order_status']=$row1['order_status'];
				$quickOrder[$i]=$data;
				$i++;
			}
			$i=0;
			}
			
			
			$sql2="SELECT
						order_id,
						total_amount,
						menu_id,
						placed_date_and_time,
						order_status
					FROM
						order_details
					WHERE
						customer_id=".$customer_id."
					AND
						order_type=2
					ORDER BY 
						order_id DESC";

			$res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));

			if (mysqli_num_rows($res2)>0) {
				while ($row2=mysqli_fetch_assoc($res2)) {
				$data['order_id']=$row2['order_id'];
				$data['total_amount']=$row2['total_amount'];
				$data['menu_id']=$row2['menu_id'];
				$data['placed_date_and_time']=$row2['placed_date_and_time'];
				$data['order_status']=$row2['order_status'];
				$specialOrder[$i]=$data;
				$i++;
			}
			}
			

			$orders[1]=$quickOrder;
			$orders[2]=$specialOrder;

			return $orders;
		}

		public function getOrderDetails($order_id,$menu_id){
			$basicDeails=array();
			$foodItems=array();
			$orderDetails=array();
			$i=0;

			$sql3="SELECT
						customer_id,
						placed_date_and_time,
						needed_date,
						needed_time,
						order_status,
						receiving_method,
						delivery_person_id,
						total_amount,
						order_type
					FROM
						order_details
					WHERE
						order_id=".$order_id;

			$res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));
			while ($row3=mysqli_fetch_assoc($res3)) {
				$data['order_id']=$order_id;
				$data['customer_id']=$row3['customer_id'];
				$data['placed_date']=$row3['placed_date_and_time'];
				$data['needed_date']=$row3['needed_date'];
				$data['needed_time']=$row3['needed_time'];
				$data['order_status']=$row3['order_status'];
				$data['reveiving_method']=$row3['receiving_method'];
				$data['delivery_person_id']=$row3['delivery_person_id'];
				$data['total_amount']=$row3['total_amount'];
				$data['order_type']=$row3['order_type'];
				$data['menu_id']=$menu_id;
				$basicDeails=$data;
			}

			$sql4="SELECT
						menu.item_name,
						menu.price,
						order_items.quantity
					FROM
						order_items
					LEFT JOIN
						menu
					ON
						order_items.item_id=menu.item_id
					WHERE
						order_items.order_id=".$order_id.
					" AND
						menu.menu_id = ".$menu_id;

			$res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db));

			while ($row4=mysqli_fetch_assoc($res4)) {
				$data['item_name']=$row4['item_name'];
				$data['price']=$row4['price'];
				$data['quantity']=$row4['quantity'];
				$foodItems[$i]=$data;
				$i++;
			}

			$orderDetails[1]=$basicDeails;
			$orderDetails[2]=$foodItems;
			return $orderDetails;
		}

		public function rateOrder($customer_id,$order_id,$rate,$review){
			$review=$this->db->real_escape_string($review);
			$sql5="INSERT INTO
						ratings_and_reviews(
							customer_id,
							order_id,
							rating,
							review,
							review_type)
						VALUES("
							.'"'.$customer_id.'"'	.","
							.'"'.$order_id.'"'		.","
							.'"'.$rate.'"'			.","
							.'"'.$review.'"'		.","
							."1)";

			$res5=mysqli_query($this->db,$sql5) or die('5->'.mysqli_error($this->db));
		}

		public function cancelOrder($order_id){
			$sql6="UPDATE
						order_details
					SET
						order_status=8
					WHERE
						order_id=".$order_id;

			$res6=mysqli_query($this->db,$sql6) or die('6->'.mysqli_error($this->db));
		}
	}

 ?>