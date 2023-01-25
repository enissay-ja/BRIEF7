<?php

    require_once '../core/Database.php';

class AddProduct
{
    protected $Db;
    public function __construct(){

        $this->Db = new Database();

    }

    public function Add($productinfo){


        
        $sql = "INSERT INTO brief7.product (image,name,price,quantity,description) values (:image, :name, :price, :quantity, :description)";
        $this->Db->query($sql);
        $this->Db->bind(":image", $productinfo['image']);
        $this->Db->bind(":name", $productinfo['name']);
        $this->Db->bind(":price", $productinfo['price']);
        $this->Db->bind(":quantity", $productinfo['quantity']);
        $this->Db->bind(":description", $productinfo['description']);

        $row = $this->Db->execute();

        if($row){
            return $row;
        }else{
            return false;

        }



    }

    public function update($productinfo){

        $sql = "UPDATE brief7.product SET name=:name,price=:price,quantity=:quantity,description=:description WHERE id=:id";
        $this->Db->query($sql);
        $this->Db->bind(":id", $productinfo['id']);
        $this->Db->bind(":name", $productinfo['name']);
        $this->Db->bind(":price", $productinfo['price']);
        $this->Db->bind(":quantity", $productinfo['quantity']);
        $this->Db->bind(":description", $productinfo['description']);

        $row = $this->Db->execute();

        if($row){
            return $row;
        }else{
            return false;

        }



    }


    public function DisplayProduct(){
        $sql = "SELECT * FROM brief7.product";
        return  $this->Db->multiple($sql);
    }

    public function DisplayProductById($id){
        $sql = "SELECT * FROM brief7.product WHERE id = :id";
        $this->Db->query($sql);
        $this->Db->bind(":id", $id);
        $this->Db->execute();
        $ProductById = $this->Db->single();

        if($ProductById){

            return $ProductById;

        }else{

            return false;

        }
    }

    public function Delete($productid){
        $sql ="DELETE FROM brief7.product WHERE id = $productid";
        $this->Db->query($sql);
        
        if ($this->Db->execute()) {
            return true;
        } else {
            return false;
        }
        
    }

    public function countProducts() {
        $sql = "SELECT * FROM brief7.product;";
        $this->Db->query($sql);
        $this->Db->execute();
        return $this->Db->rowCount();
    }


}
