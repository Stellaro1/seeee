<?php

$connection = mysqli_connect('localhost','root','','card');


?>
<body class="bg-dark">
    <div class="container mt-4 ">
        <div class="row justify-content-center ">
            <!-- header section  -->
            <div class="col">
                <div class="d-flex justify-content-between">
                    <a href="index.php" class="mt-1"><i class="fa-brands fa-galactic-senate text-warning mt-2"></i></a>
                    <h4 class="text-center text-warning">သင်နှစ်သက်ရာမေးခွန်းကိုရွေးချယ်ပါ။</h4>
                    <a href="index.php" class="mt-1"><i class="fa-brands fa-galactic-senate text-warning mt-2"></i></a>

                </div>
                <hr class="text-warning">

            </div>
            <?php 
            $title = "select * from card";
            $description =mysqli_query($connection,$title);

            
            foreach ($description as $question) : ?>
                <div class="">
                    <ul class="list-unstyled">
                        <li class="text-warning">
                            <i class="fa-solid fa-clipboard-question text-warning"></i>
                           <form action="second.php" method="get">
                           <a href="second.php?cardid=<?php echo $question['id'] ?>" class="text-decoration-none text-white">
                                <?php echo $question['q1'] ?>
                            </a>
                           </form>

                        </li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>