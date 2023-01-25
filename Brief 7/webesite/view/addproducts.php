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
                <h2 class="text-dark text-center mt-3">Create New Product</h2>

                <div class="my-4 position-fixed-top w-100">
                        <a href="dashboard.php"><input class="btn btn-dark " name="add new form" type="submit" value="Back To Dashboard"></a>
                        <input id ="btn" class="btn btn-dark position-absolute end-0 me-1" id="addbtn" name="add new form" type="submit" value="Add New Form">
                </div>
        


                <form action="../controller/Products.php" class="col-md-6  text-dark fw-bold p-4"id="form" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="TYPE" value="ADD" >
                    <h4 class="text-dark text-center mt-3">Form 1</h4>
                    <div class="mb-3 text-dark">
                        <label for="validationText" class="form-label">Title</label>
                        <input class="form-control" name="name[]" placeholder="Required Product Title" value="">
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="validationText" class="form-label">Description</label>
                        <input class="form-control" name="description[]" placeholder="Required Product Description" value="">
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="validationText" class="form-label">Price</label>
                        <input class="form-control" type="number" min="1" name="price[]" placeholder="Required Product Price" value="">
            
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="validationText" class="form-label">Quantity</label>
                        <input class="form-control " type="number" min="1" name="quantity[]" placeholder="Required Product Quantity" value="">
                    </div>

                    <div class="mb-3 text-dark">
                        <label for="validationText" class="form-label">Image</label>

                        <input class="form-control " type="file" name="image[]" id="file" value="" placeholder="Required a Product Image">
                       
                    </div>

                    <div class="dataForm"></div>

                    <div class="my-4 text-center ">
                        <input class="btn btn-dark" name="add" type="submit" value="Submit Forms">
                    </div>
                </form>
            </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).on('click', '.remove-btn', function (){
        $(this).closest('.main-form'). remove ();
        console.log("deleted")
    });

    $('.document').ready(function() {
       var  $counter = 2;
        $('#btn').click(function(e) {
            e.preventDefault();

            $('.dataForm').append(`

            <div class="main-form">
                    <h4 class="text-dark text-center mt-5 ">Form`+$counter+`</h4>

                    <div class="mb-3 text-dark">
                        <label for="validationText" class="form-label">Title</label>
                        <input class="form-control" name="name[]" placeholder="Required Product Title" value="">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="validationText" class="form-label">Description</label>
                        <input class="form-control" name="description[]" placeholder="Required Product Description" value="">
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="validationText" class="form-label">Price</label>
                        <input class="form-control" type="number" min="1" name="price[]" placeholder="Required Product Price" value="">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    
                    <div class="mb-3 text-dark">
                        <label for="validationText" class="form-label">Quantity</label>
                        <input class="form-control " type="number" min="1" name="quantity[]" placeholder="Required Product Quantity" value="">
                    </div>


                    <div class="mb-3 text-dark">
                        <label for="validationText" class="form-label">Image</label>

                        <input class="form-control " type="file" name="image[]" id="formFile" value="" placeholder="Required a Product Image">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="my-4 text-center ">
                        <button type="button" class="btn btn-dark remove-btn">Delete this form</button>
                    </div>
                </div>
        `);
        $counter++;
        }); 


    });







// let addMoreBtn = document.getElementById('addbtn');
// let form = document.getElementById('form');

// addMoreBtn.addEventListener('click', showForm);

// function showForm(e) {
//     // cancel the event of the button that send form information
//     e.preventDefault();

//     // create new element
//     const newform = document.createElement('div');

//     // insert into div that created this html
//     newform.innerHTML = `<div id="formInp">
//                             <div class="form-group mb-6">
//                                 <input type="text" name="name[]" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="Product Name">
//                             </div>
//                             <div class="form-group mb-6 flex gap-4">
//                                 <div class="">
//                                     <input type="number" name="price[]" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Product Price">
//                                 </div>
//                                 <div class="">
//                                     <input type="number" name="quantity[]" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Product Quantity">
//                                 </div>
//                             </div>
//                             <div class="form-group mb-6">
//                                 <textarea name="description[]" class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "  rows="3" placeholder="Product Description" ></textarea>
//                             </div>
//                             <div class="form-group mb-6 w-full">
//                                 <input type="file" name="image[]" class="block">
//                             </div>
//                             <hr class="border-2 my-4">
//                         </div>`;

//     // insert the newForm before the lase element childe inside form
//     form.insertBefore(newform,form.lastElementChild);
// }
</script>


</div>
</body>
</html>