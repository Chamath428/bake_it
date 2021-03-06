<?php

class deliveryPersonAvailabilityController extends bakeItFramework
{
    function __construct()
    {
        $this->deliveryPersonAvailabilityModel = $this->model("deliveryPersonAvailabilityModel");
    }
    public function index()
    {
        $data = array();
        $this->view("deliveryPerson/availability", $data);
    }
    public function insertAvailability()
    {
        $availability = $_POST['availability'];
        if (isset($_SESSION['islogged'])) {
            $staff_id = $_SESSION['staff_id'];
            $this->deliveryPersonAvailabilityModel->updateAvailability($staff_id, $availability);
            $this->setSession("availability",$availability);
            $data['confirmation']="Availability Updated Succesfully!";
            $this->view("deliveryPerson/availability",$data);
        }
    }
}
