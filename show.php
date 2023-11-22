<?php

$connection = mysqli_connect('localhost','root','','card');


?>
<?php
$result = [];

function getResult($val)
{
  $connection = mysqli_connect('localhost', 'root', '', 'card');
  $query = "SELECT * FROM card";
  return $val = mysqli_query($connection, $query);
}

$result = getResult($result)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class=" container ml-10">
    
  
  <div class="w-full text-center mt-4">
    <table class="shadow-purpl-800 w-full table-auto">
      <thead class="border-b-2 border-gray-400 bg-purple-200">
        <tr>
        <th class="border border-slate-700 p-2   font-serif text-sm">ID</th>
         
          <th class=" border border-slate-700 p-2 font-serif text-sm">‌မေးခွန်း</th>
          <th class=" border border-slate-700 p-2 font-serif text-sm">‌အဖြေ ၁</th>
          <th class=" border border-slate-700 font-serif text-sm">‌အဖြေ ၂</th>
          <th class=" border border-slate-700 p-2 font-serif text-sm">‌အဖြေ ၃</th>
          <th class=" border border-slate-700 p-2 font-serif text-sm">‌အဖြေ ၄</th>
          <th class=" border border-slate-700 p-2 font-serif text-sm">အသစ်</th>
          <th class=" border border-slate-700 p-2 font-serif text-sm">ဖြတ်ရန်</th>
          <th class=" border border-slate-700 p-2 font-serif text-sm">ပြင်ဆင်ရန်</th>
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
            <td class='border border-slate-700' >$row[a4]</td>";
            echo"<td class='border py-2 border-slate-700'><a href='insert.php' class='px-3 bg-yellow-100 hover:bg-yellow-300 rounded text-xs p-1 font-serif'> New</a></td>";
            echo"<td class='border border-slate-700'><a href='show.php?id_to_delete=$row[id]'  class='px-3 text-white hover:bg-red-800 bg-red-600 rounded text-xs p-1 font-serif'> Delete</a></td>";
            echo"<td class='border border-slate-700' ><a href='insert.php?id_to_update=$row[id]' class='px-3 bg-purple-200 hover:bg-purple-500 rounded text-xs p-1 font-serif'>Update</a></td>";
          }
         }
       ?>
    </table>
  </div>
  </div><!--showdata-->
</body>
</html>
<?php
if (isset($_GET['id_to_delete'])) {
  $connection = mysqli_connect('localhost','root','','card');

  $delete_id = $_GET['id_to_delete'];
  $ok = "DELETE FROM card WHERE id=$delete_id";
  $resude = mysqli_query($connection, $ok);
  if ($resude) {
    $result=getResult($resude);
    echo "<script> alert('Successfully Deleted');</script>";
  } else {
    die('Error' . mysqli_error($connection));
  }}
  ?>
 