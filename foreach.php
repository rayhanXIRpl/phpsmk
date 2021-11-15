<?php 
// $nama = array('tejo', 'budi', 'siti', 100)
// var_dump($nama);
// echo '<br>';

 // foreach (4nama as key){
     echo $key.'<br>';

// }
$nama =array(
    "tejo" => "banyuwangi",
    "budi" => "tanggulangin",
    "siti" => "magetan"
);

 var_dump($nama);

 echo '<br>';
 foreach ($nama as key => $value) {
     echo $key.' => '.$value. '<br>;
 }
    