<?php


require '../classhelpers/validatorclass.php';
require '../helpers/function.php';
require '../classhelpers/blogclass.php';

#UI 
require '../layouts/header.php';
require '../layouts/topnav.php';


?>
<div id="layoutSidenav">


<?php

require '../layouts/sidNav.php';

?>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $validate = new validator; 

    $title = $validate->clean($_POST['title']);
    $image = $validate->clean($_POST['image']);
    $content = $validate->clean($_POST['content']);
    


    # Image Details ..... 
    $ImageTmp   =  $_FILES['image']['tmp_name'];
    $image  =  $_FILES['image']['name'];
    $ImageSize  =  $_FILES['image']['size'];
    $ImageType  =  $_FILES['image']['type'];

    $TypeArray = explode('/', $ImageType);

    $errors = [];
    #title validate
    if (!$validate->validate($title, 1)) {
        $errors['title'] = " title Required Field";
    }


    # context Validation ... 
    if (!$validate->validate($context, 1)) {
        $errors['contentt'] = " context Field Required";
    
    }
  
     
   

    #IMAGE VALIDATION
    if (!$validate->validate($image, 1)) {
        $errors['image'] = "Image Field Required";
    } elseif (!$validate->validate($TypeArray[1], 6)) {
        $errors['image'] = "Invalid Extension";
    }


    if (count($errors) > 0) {
        $_SESSION['Message'] = $errors;
    } else {
        // DB OP .... 

        $obj = new blog($title,$image,$content) ;

        $FinalName = rand(1, 100) . time() . '.' . $TypeArray[1];

        $disPath = './uploads/' . $FinalName;

        if (move_uploaded_file($ImageTmp, $disPath)) {

            $obj->register();
            
                      if ($result) {

                $_SESSION['Message'] = ['data inserted'];

                header("Location: index.php");

                exit();
            } else {
                $message = "Error Try Again";
            }

           
        }
    }
}


?>


<div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">



                        <?php
                            $check= new check;
                        $txt = "Dashboard / Create Blog";
                        $check->printMessages($txt);


                        ?>



                    </li>
                </ol>




                <div class="container">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">





                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter title">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">CONTEXT</label>
                            <input type="text" name="context" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter context">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">IMAGE</label>
                            <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="image">
                        </div>

                      
                        
                            


                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>

                 





            </div>
        </main>




        <?php

        require '../layouts/footer.php';
        ?>