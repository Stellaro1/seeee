<?php

$connection = mysqli_connect('localhost','root','','card');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    
  <div>
  <div class="w-full text-center mt-4">
    <table class="w-full table-auto">
      <thead class="border-b-2 border-gray-400 bg-gray-200">
        <tr>
        <th class="font-serif text-sm">ID</th>
         
          <th class=" border border-slate-700 p-2 font-serif text-sm">Qusetion</th>
          <th class=" border border-slate-700 p-2 font-serif text-sm">Answer1</th>
          <th class=" border border-slate-700 font-serif text-sm">Answer2</th>
          <th class=" border border-slate-700 p-2 font-serif text-sm">Answer3</th>
          <th class=" border border-slate-700 p-2 font-serif text-sm">Answer4</th>
          
        </tr>
      </thead>
      <?php
         $select = "select * from card";
         $selectResult = mysqli_query($connection,$select);
         if($selectResult){
          foreach($selectResult as $row){
            echo "<tbody class='border-b-2 border-gray-400 bg-gray-200 border border-slate-700 text-sm'> 
           <td class='border border-slate-700'>$row[id]</td>";
          
            echo "
            <td class='border border-slate-700' >$row[q1]</td>";
            echo "
            <td class='border border-slate-700'>$row[a1]</td>";
            echo "
            <td class='border border-slate-700'>$row[a2]</td>";
            echo "
            <td class='border border-slate-700'>$row[a3]</td>";
            echo "
            <td class='border border-slate-700' >$row[a4]</td></tbody>";
            
            
          
          }
         }
       ?>
    </table>
  </div>
  </div><!--showdata-->
</body>
</html>