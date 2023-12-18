<?php

include('../../config/app.php');
include_once('../controller/IceController.php');


if(isset($_POST['delete']))
{
    $id = validateInput($db->conn, $_POST['delete']);
    $ice = new IceController;
    $result = $ice->delete($id);
    if($result){
        redirect("IceCream Deleted Successfully","../viewicecream.php");

    }else{
        redirect("Something Went Wrong","../add_icecream.php");

    }
}

if(isset($_POST['update']))
{
    $id = validateInput($db->conn,$_POST['ice_id']);
    $inputdata = [

        'flavour' => validateInput($db->conn,$_POST['flavour']),
        'price' => validateInput($db->conn,$_POST['price']),
        
    
    ];

    $ice = new IceController;
    $result = $ice->update($inputdata, $id);
    if($result){
        redirect("IceCream Updated Successfully","./add_icecream.php");

    }else{
        redirect("Something Went Wrong","../viewicecream.php");

    }
}

if(isset($_POST['submit']))
{
    $inputdata = [

    'flavour' => validateInput($db->conn,$_POST['flavour']),
    'price' => validateInput($db->conn,$_POST['price']),
    

    ];
    
    $ice = new IceController;
    $result = $ice->create($inputdata);
    if($result){
        redirect("IceCream Added Successfully","./viewicecream.php");
    }else{
        redirect("Something Went wrong","./add_icecream.php");

    }
}


?>