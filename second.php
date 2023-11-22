<?php

$connection = mysqli_connect('localhost','root','','card');


?>
<?php

require_once('./operation.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pick-a-pile </title>
   
</head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">
    <div class="container mt-3">
        <!-- header section  -->
        <div class="row justify-content-center ">
            <div class="col">
                <?php 
                  $idcard = $_GET['cardid'];
                  $title = "select * from card";
                  $description =mysqli_query($connection,$title);
      
                
                foreach ($description as $qu) : ?>
                    <?php if ($qu['id'] == $idcard) : ?>

                        <div class="d-flex  justify-content-between">
                            <a href="index.php"><i class="fa-brands fa-galactic-senate text-warning mt-2"></i></a>
                            <h5 class=" text-warning"><?php echo $qu['q1'] ?></h5>
                            <a href="first.php">
                                <button class="btn btn-warning">နောက်သို့</button>
                            </a>
                        </div>
                        <hr class="text-warning">
                        <h5 class=" text-warning">တစ်ပုံတည်းသာသေချာအာရုံစိုက်ရွေးချယ်ပြီး ထိုရွေးချယ်ထားသောပုံအောက်မှစာတစ်ခုတည်းသာဖတ်ပေးပါ‼️ မြင်သလက် General ရေးထားတာမို့လို့ မတော်တဆလွဲချော်မှုရှိခဲ့သော် Admin ကိုနားလည်ခွင့်လွှတ်ပေးဖို့မေတ္တာရပ်ခံအပ်ပါတယ်ရှင်
    </div></h5>


                    <?php endif; ?>
                <?php endforeach; ?>


            </div>

        </div>
        
        <div class=" flex justify-center mt-16">
    <div>
 
  <div class="col-span-1 flex space-x-12">
  <button onclick="myFunction()">
  <div id="demo" class="border-x-emerald-800 shadow-red-950 hover:scale-105 duration-1000 bg-purple-100 shadow-2xl p-10 rounded-3xl hover:bg-purple-500 " > <img class=" w-32 h-64 rounded-3xl" src="download.jpg"><h5 id="demo" class=" text-center mt-3 font-serif font-bold ">Pile 1</h5></div>
</button>
   
<button onclick="myFunction2()">
<div id="demo1" class="border-x-emerald-800 shadow-red-950 hover:scale-105 duration-1000 bg-purple-100 shadow-2xl p-10 rounded-3xl hover:bg-red-500 " > <img class=" w-32 h-64 rounded-3xl" src="download.jpg"><h5 class=" text-center mt-3 font-serif font-bold hover:fill-white">Pile 2</h5></div>
</button>

<button onclick="myFunction3()">
    <div id="demo2" class="border-x-emerald-800 shadow-red-950 hover:scale-105 duration-1000 bg-purple-100 shadow-2xl p-10 rounded-3xl hover:bg-red-500 " > <img class=" w-32 h-64 rounded-3xl" src="download.jpg"><h5 class=" text-center mt-3 font-serif font-bold hover:fill-white">Pile 3</h5></div>
    </button>
  </div>
 </div>
</div>
    
    
        </div>
    </div>
</body>
<script>
function myFunction() {

  document.getElementById("demo").innerHTML ="<?php echo $qu['a1'] ?>";
}
function myFunction2() {
   
  document.getElementById("demo1").innerHTML ="<?php echo $qu['a2'] ?>";
}
function myFunction3() {
 
  document.getElementById("demo2").innerHTML ="<?php echo $qu['a3'] ?>";
}
</script>
</html>