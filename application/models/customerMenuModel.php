<?php 

	/**
	 * 
	 */
	class customerMenuModel extends database
	{
		
		function __construct()
		{
			$this->db=$this->dbcon();
		}

		public function getCategoryItems($branch_id,$category_id){
			$categoryItems=array();
			$i=0;
			$sql1="SELECT
						item_id,
						item_name,
						quantity,
						price
					FROM
						menu
					WHERE
						category_id = ".$category_id."
					AND
						branch_id = ".$branch_id;
			$res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db));
			while ($row1=mysqli_fetch_assoc($res1)) {
				$data['item_id']=$row1['item_id'];
				$data['item_name']=$row1['item_name'];
				$data['quantity']=$row1['quantity'];
				$data['price']=$row1['price'];
				$categoryItems[$i]=$data;
				$i++;
			}
			return $categoryItems;
		}

		public function getSpecialCategoryItems($category_id){
			$categoryItems=array();
			$i=0;
			$sql2="SELECT
						item_id,
						item_name,
						price
					FROM
						menu
					WHERE
						category_id = ".$category_id."
						 AND menu_id=1";

			$res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
			while ($row2=mysqli_fetch_assoc($res2)) {
				$data['item_id']=$row2['item_id'];
				$data['item_name']=$row2['item_name'];
				$data['price']=$row2['price'];
				$categoryItems[$i]=$data;
				$i++;
			}
			return $categoryItems;
		}

		public function getCategories(){
			$categoryData=array();
			$i=0;
			$sql3="SELECT
						*
					FROM
						menu_category";

			$res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db));

			while ($row3=mysqli_fetch_assoc($res3)) {
				$data['category_id']=$row3['category_id'];
				$data['category_name']=$row3['category_name'];
				$categoryData[$i]=$data;
				$i++;
			}

			return $categoryData;

		}

		public function getCategoryName($category_id){
			$sql4="SELECT
						category_name
					FROM
						menu_category
					WHERE
						category_id=".$category_id;

			$res4=mysqli_query($this->db,$sql4) or die('4->'.mysqli_error($this->db));

			$row4=mysqli_fetch_assoc($res4);
			return $row4['category_name'];
		}
	}

 ?>