<?php

require_once('./operation.php');

?>
<?php

include('./connected.php');
if(isset($_POST['add'])){

 
 $q1=$_POST['q1'];
 $a1=$_POST['a1'];
 $a2=$_POST['a2'];
 $a3=$_POST['a3'];
 $a4=$_POST['a4'];

$query = "INSERT INTO card(`q1`, `a1`, `a2`, `a3`, `a4`) VALUES ('$q1','$a1','$a2','$a3','$a4')";
$reult = mysqli_query($connection,$query);
if($reult)
{
    echo '<script>alert("You Add one row")</script>'; 
}
else{
  die(mysqli_errno($connection));
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddNew</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" container mt-11">
<div class=" flex justify-center h-screen justify-items-start space-x-6">
  <div>
  <div class="rounded-xl  p-10 w-64 shadow-2xl shadow-amber-800">
    <h1 class=" text-lg text-center  font-serif font-bold mb-3">Create New Card</h1>

   <form action="insert.php" method="post" enctype="multipart/form-data">
   
    <?php  inputFild("Question1","q1","textaera"); ?>
    <?php  inputFild("Answer1","a1","textaera"); ?>
    <?php  inputFild("Answer2","a2","textaera"); ?>
    <?php  inputFild("Answer3","a3","textaera"); ?>
    <?php  inputFild("Answer4","a4","textaera"); ?>
    
    <button class="  font-serif font-bold bg-red-300  rounded-lg p-5" name="add">Add</button>

    </form>


  </div>
  </div><!--add-->

</div>
</body>
</html>


