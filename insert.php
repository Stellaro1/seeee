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

$query = "INSERT INTO card( `q1`, `a1`, `a2`, `a3`, `a4`) VALUES ('$q1','$a1','$a2','$a3','$a4')";
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
<body class="">
  <div class="mt-20 flex justify-center space-x-9">
    <div class="h-96  w-64 rounded-xl p-4 shadow-2xl  duration-1000 hover:scale-105 shadow-red-800">
      <h1 class="mb-3 text-center font-serif text-lg font-bold">အသစ်တည်ဆောက်ရန်</h1>

      <form action="insert.php" method="post" enctype="multipart/form-data">
        <?php  inputFild("Question1","q1","textaera"); ?>
        <?php  inputFild("Answer1","a1","textaera"); ?>
        <?php  inputFild("Answer2","a2","textaera"); ?>
        <?php  inputFild("Answer3","a3","textaera"); ?>
        <?php  inputFild("Answer4","a4","textaera"); ?>

        <button class="rounded-md bg-pink-300 p-2 px-3 font-serif text-xs font-bold duration-1000 hover:scale-105" name="add">ထည့်ရန်</button>
      </form>
    </div>
    <div class="flex h-96 w-64 justify-center">
      <div class="w-64 rounded-xl p-4 shadow-lg shadow-purple-950 duration-1000 hover:scale-105">
        <h1 class="mb-3 text-center font-serif font-bold">ပြင်ဆင်ရန်</h1></h1>
        <textarea name="q1" type="text" class="rounded-lg bg-purple-200 px-8"></textarea>
        <textarea name="q1" type="text" class="rounded-lg bg-purple-200 px-8"></textarea>
        <textarea name="q1" type="text" class="rounded-lg bg-purple-200 px-8"></textarea>
        <textarea name="q1" type="text" class="rounded-lg bg-purple-200 px-8"></textarea>
        <textarea name="q1" type="text" class="mb-2 rounded-lg bg-purple-200 px-8"></textarea>
        <button class="rounded-md bg-purple-300 p-2 px-3 font-serif text-xs font-bold duration-1000 hover:scale-105">ထည့်ရန်</button>
      </div>
    </div>

    <!--add-->
  </div>
</body>

</html>


