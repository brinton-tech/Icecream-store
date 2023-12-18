<?php

include('../config/app.php');
include_once('../controllers/AuthenticationController.php');
$authenticated = new AuthenticationController;


include_once('controller/IceController.php');




include('includes/header.php');


?>

<div class="container-fluid px-4">
  
   

    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('../message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Books Edit</h4>
                </div>
                <div class="card-body">

                    <?php
                        if(isset($_GET['id']))
                        {
                            $ice_id = validateInput($db->conn, $_GET['id']);
                            $ice = new IceController;
                            $result = $ice->edit($ice_id);

                            if($result)
                            {
                                ?>


                    
                    <form action="codes/bookcode.php" method="post">
                        <input type="hidden" name="book_id" value="<?=$result['id'] ?>">
                        <div class="mb-3">
                        <div class="mb-3">
                            <label for="">Flavour</label>
                            <input type="text " value="<?= $result['flavour']  ?>" class="form-control" name="flavour" required>
                        </div>
                            <label for="">Price</label>
                            <input type="number" value="<?= $result['price']  ?>" class="form-control" name="price" required>
                        </div>
                        

                        <div class="mb-3">
                            
                            <input type="submit" value="Update IceCream" class="btn btn-primary" name="update" >
                        </div>
                    </form>

                    
                    <?php
                            }else{
                                echo "<h4>No record found</h4>";
                            }
                        }else{
                            echo "<h4>Something Went Wrong</h4>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>


    
</div>
<?php

include('includes/footer.php');
include('includes/scrits.php');


?>