<?php
require_once '../module/AddProduct.php';
class Products
{
protected $ProductModel;

public function __construct(){
    $this->ProductModel = new AddProduct;
}

public function OneProduct(){
    $count = count($_POST["name"]);

    for ($i = 0; $i < $count; $i++) {

        $file = $_FILES['image'];
        $fileTemp = $file['tmp_name'][$i];
        $filename = $file['name'][$i];
        $fileError = $file['error'][$i];
        $fileExt = explode('.', $filename);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png', 'jfif');
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = '../view/source/productimage/' . $fileNameNew;
                move_uploaded_file($fileTemp, $fileDestination);
                    // echo ($fileNameNew);
            }

            $productinfo = [
                "image" => $fileNameNew,
                "name" => $_POST["name"][$i],
                "price" => $_POST["price"][$i],
                "quantity" => $_POST["quantity"][$i],
                "description" => $_POST["description"][$i]
            ];

                // var_dump($productinfo);

            if (empty($productinfo["name"] || $productinfo["price"] || $productinfo["quantity"] || $productinfo["description"] || $productinfo["image"])) {
                echo ("Sorry,  you need to fill all inputs");
            } else {
                $this->ProductModel->Add($productinfo);
                header("location: ../view/dashboard.php");
            }
        }
    }
            
}


    public function displayproducts(){
        return $this->ProductModel->DisplayProduct();
    }

    public function displayProductbyId($id){

        return $this->ProductModel->DisplayProductById($id);

    }

    

    public function delete(){

        $productid = $_GET["deleteid"];

        $this->ProductModel->Delete($productid);

        header("location: ../view/dashboard.php");
        return;
    }


    public function update(){
            $productinfo = [
                "id"=> $_POST["updateid"],
                "name" => $_POST["name"],
                "price" => $_POST["price"],
                "quantity" => $_POST["quantity"],
                "description" => $_POST["description"]
            ];
    
                $this->ProductModel->update($productinfo);
                header("location: ../view/dashboard.php");
    
    }

    public function countProducts(){
        return $this->ProductModel->countProducts();
    }
    
    
}
    


$init = new Products;

if($_SERVER["REQUEST_METHOD"] == "POST"){

    switch($_POST["TYPE"]){
        case "ADD":

            $init->OneProduct();
            break;

        case "UPDATE":

            $init->update();
            break;
            
        default:
            break;
    }
} else if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET["deleteid"])) {
    $init->delete();
}