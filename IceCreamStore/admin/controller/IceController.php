<?php

class IceController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function index()
    {
        $iceQuery = "SELECT * FROM product";
        $result = $this->conn->query($iceQuery);
        if($result->num_rows){
            return $result;
        }else{
            return false;
        }
    }
    public function create($inputdata)
    {
        $data = "'" . implode ("','",$inputdata) . "'";
        

        $iceQuery = "INSERT INTO product(flavour,price) VALUES ($data)";
        $result = $this->conn->query($iceQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function edit($id)
    {
        $ice_id = validateInput($this->conn, $id);
        $iceQuery = "SELECT * FROM product WHERE id='$ice_id' LIMIT 1";
        $result = $this->conn->query($iceQuery);
        if($result->num_rows == 1){
            $data = $result->fetch_assoc();
            return $data;
        }else{
            return false;
        }
    }

    public function update($inputdata, $id)
    {
        $ice_id = validateInput($this->conn, $id);
        $flavour = $inputdata['flavour'];
        $price = $inputdata['price'];
        

        $iceUpdateQuery = "UPDATE product SET flavour='$flavour', price='$price' WHERE id='$ice_id' LIMIT 1";
        $result = $this->conn->query($iceUpdateQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id)
    {
        $book_id = validateInput($this->conn,$id);
        $icedeleteQuery = "DELETE FROM product WHERE id='$ice_id' LIMIT 1";
        $result = $this->conn->query($icedeleteQuery);

        if($result){
            return true;
        }else{
            return false;
        }
    }
}

?>