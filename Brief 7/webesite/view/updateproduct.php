<?php
	require_once '../core/Database.php';
    require_once '../controller/Products.php';

    if($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['updateid'])){
        $Products = $init->displayProductbyId($_GET["updateid"]);
    }else {
        header("location: ./dashboard.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
      <link rel="stylesheet" href="source/css/dashboard.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <title>Add Product</title>
      
</head>
<body class="bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');">

            <div class="row m-0 justify-content-center align-items-center">
                <h2 class="text-dark text-center mt-3">update Product</h2>

                <div class="my-4 position-fixed-top w-100">
                        <a href="dashboard.php"><input class="btn btn-dark " name="add new form" type="submit" value="Back To Dashboard"></a>
                </div>
        


                <form action="../controller/Products.php" class="col-md-6  text-dark fw-bold p-4" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="TYPE" value="UPDATE" >
                    <input type="hidden" name="updateid" value="<?= $Products->id; ?>" readonly>
                    <div class="mb-3 text-dark">
                        <label for="validationText" class="form-label">Title</label>
                        <input class="form-control" name="name" placeholder="Required Product Title" value="<?= $Products->name;  ?>">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="validationText" class="form-label">Description</label>
                        <input class="form-control" name="description" placeholder="Required Product Description" value="<?= $Products->description;?>">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="validationText" class="form-label">Price</label>
                        <input class="form-control" type="number" min="1" name="price" placeholder="Required Product Price" value="<?= $Products->price;?>">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="validationText" class="form-label">Quantity</label>
                        <input class="form-control " type="number" min="1" name="quantity" placeholder="Required Product Quantity" value="<?= $Products->quantity;?>">
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="mb-3 text-dark">
                        <label for="validationText" class="form-label">Image</label>

                        <input class="form-control " type="file" name="image" id="formFile"  placeholder="Required a Product Image" value="">
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="dataForm"></div>

                    <div class="my-4 text-center ">
                        <input class="btn btn-dark" name="update" type="submit" value="Update">
                    </div>
                </form>
            </div>


</div>
</body>
</html>