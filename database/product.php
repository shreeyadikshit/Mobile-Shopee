<?php

class Product
{
    public $db=null;
   
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;  // to access connection variable
        $this->db=$db;
    }
    
    // fetch product data using getData method
    public function getData($table='product'){
       $result= $this->db->con->query("SELECT * FROM ($table)");

       $resultArray=array();

       //fetch data one by one
       while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC))
       {
         $resultArray[]=$item;
       }
       return $resultArray;
    }
}

?>