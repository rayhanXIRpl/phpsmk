<?php 
     // array dimensi
     // $nama = array("rayhan", "farel", "firman", "daniel", 100, 2.5);


     //var_dump($nama);

     //echo '<br>';
     // for ($1=0; $1 <5 ; $1++) {
         // echo '<br>'. $nama[$1];

         //}
          
         // foreach ($nama as $key){
             // echo $key . '<br>';

         //}

    // array asosiatif
    $nama = array(
        "rayhan" => "banyuwangi",
        "farel" => "surabaya",
        "firman" => "kalimantan",
        "daniel" => "nganjuk"

    );

    var_dump($nama);

    echo '<br>';
     echo $nama['rayhan'];
      foreach ($nama as $key => $value){
          echo '<br>'.$key.' => '.$value;

      }

        



     











?>