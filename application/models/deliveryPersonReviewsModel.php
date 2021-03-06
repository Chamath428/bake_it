<?php

class deliveryPersonReviewsModel extends database{

    function __construct()
		{
			$this->db=$this->dbcon();
		}
    public function countOfReviews(){
        $sql1 = "SELECT 
                   COUNT(delivery_person_id)
                 FROM
                   ratings_and_reviews
                 WHERE 
                   delivery_person_id = ".$_SESSION['staff_id'];
        $res1=mysqli_query($this->db,$sql1) or die('1->'.mysqli_error($this->db)); 
        $row1=mysqli_fetch_assoc($res1);
        $totalReviews=$row1['COUNT(delivery_person_id)'];   
        return  $totalReviews;
    }
    public function getDeliveryReviewsTable(){
        $deliveryReviewsTable=array();
        $i=0;
        $sql2 ="SELECT 
                  ratings_and_reviews.order_id,
                  ratings_and_reviews.review,
                  ratings_and_reviews.rating,
                  ratings_and_reviews.delivery_person_id,
                  order_details.needed_date
              FROM
                  ratings_and_reviews JOIN order_details ON ratings_and_reviews.order_id = order_details.order_id
              WHERE 
                  ratings_and_reviews.delivery_person_id= ".$_SESSION['staff_id'];

        $res2=mysqli_query($this->db,$sql2) or die('2->'.mysqli_error($this->db));
        while($row2=mysqli_fetch_assoc($res2)){
          $data['order_id']=$row2['order_id'];
          $data['review']=$row2['review'];
          $data['rating']=$row2['rating'];
          $data['needed_date']=$row2['needed_date'];
          $deliveryReviewsTable[$i]=$data;
          $i++;
      }
      return $deliveryReviewsTable;
   }
   public function countOfRatings(){
    $sql3 = "SELECT 
               SUM(rating)
             FROM
               ratings_and_reviews
             WHERE 
               delivery_person_id = ".$_SESSION['staff_id'];
    $res3=mysqli_query($this->db,$sql3) or die('3->'.mysqli_error($this->db)); 
    $row3=mysqli_fetch_assoc($res3);
    $totalRatings=$row3['SUM(rating)'];   
    return  $totalRatings;
}

}
?>