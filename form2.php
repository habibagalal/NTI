<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
$url=$_POST['URL'];
$gender=$_POST['Gender'];
$cv=$_POST['CV'];

// identify
if(empty($name) && filter_var($name,FILTER_VALIDATE_INT)) {
    echo "INVALID NAME";

}
else{
    echo $name."<hr>";
}

// name

if(empty($address)&&strlen($address)<=10){
echo "INVALID ADDRESS"."<hr>";


}
  else{
      echo $address."<hr>";
  }

//   address
}

if(empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){

    echo "INVALID email"."<hr>";
}
else{
    echo $email."<hr>";

}
// email
if(empty($password)){
    echo "INVALID PASS"."<hr>";

}

else{
    echo $password."<hr>";


}
//password

if(empty($url)&&filter_var($url,FILTER_VALIDATE_URL)){
    echo "INVALID URL"."<hr>";
}
else{
    echo $url."<hr>";


}

// url

echo $gender;
 

// gender

if(empty($cv)){
    echo "INVALID"."<hr>";

}
else{
    echo $cv;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
  <form  action="<?php echo $_SERVER['PHP_SELF'];?>"   method="post"   enctype ="multipart/form-data">

  

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text"  name="name"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"   name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1"> address</label>
    <input type="text"   name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter address" >
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password"   name = "password"  class="form-control" id="exampleInputPassword1" placeholder="Password" minlength="6">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Gender</label>
    <input type="radio"   name = "Gender" value ="male" class="form-control" id="exampleInputPassword1" <?php if(isset($gender)&& $gender=="male");echo "checked"?> >Male
    <input type="radio"   name = "Gender" value ="female" class="form-control" id="exampleInputPassword1"<?php if(isset($gender)&& $gender=="female");echo "checked"?> >Female

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">LINKEDIN URL</label>
    <input type="url"   name = "URL"  class="form-control" id="exampleInputPassword1" placeholder="LINKEDIN">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">CV</label>
    <input type="File"   name = "CV"  class="form-control" id="exampleInputPassword1" placeholder="UPLOAD CV" value="Habiba Galal.pdf" accept="application/pdf">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>