<?php
    include 'myClass.php';
    if(isset($_POST['hitung'])){
        $lingkaran = new lingkaran($_POST['r']);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    .container{
        width: 300px;
    }
    </style>
  </head>
  <body>
  <form name="lingkaran" action="" method="POST">
    <div class="container">
        <div class="card">
        <div class="card-header text-danger" align="center">
         <label for="inputjarijari">Masukkan Nilai Jari-jari</label>
         <input type="number" name="r" required>
         <input type="submit" name="hitung">
        </div>
         
        </div>  
    </div>
  </form>

    <form name="lingkaran" action="" method="POST">
        <div class="container" align="center">
            <div class="card" align="center">
            <div class="card-header text-danger" align="center">
            <h4>Hasil Perhitungan</h4></div>
            <div class="card-body text-dark" align="left">
                <?php
                    if (isset($_POST['hitung'])) {
                        echo "Nilai r (Jari-jari) Lingkaran adalah = ". $_POST['r'];
                        echo "<br/>";
                        echo "Keliling Lingkaran adalah = ". $lingkaran->getKeliling();
                        echo "<br/>";
                        echo "Luas Lingkaran adalah = ". $lingkaran->getluaslingkaran();
                    }
                ?>
                </div>
            </div>
        </div>
    </form> 
<!--     
    <form name="hasil" action="" method="POST">
    <div class="container">
        <div class="card">
        </div>
    </div>
    </form> -->
    <?php


    //    if(isset($_POST['luasling'])){
    //        $formlingkaran = new lingkaran($_POST['r']);
    //     echo "Luas Lingkaran dengan jari-jari " .$_POST['r']." adalah : " .$formlingkaran->getluaslingkaran();
    
    //     $formlingkaran = new lingkaran($_POST['r']);
    //     echo "Keliling Lingkaran dengan jari-jari " .$_POST['r']." adalah : " .$formlingkaran->getKeliling();
    
    ?>
       
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
     <?php
        //objek
        // pembuatan objek
        // $pesawatA = new PesawatTerbang('abu-abu');
        // echo "warna pesawat A di awal adalah ".$pesawatA->getWarna();
        // echo "<br/>";
        // // memberikan nilai
        // $pesawatA->setWarna('merah');
        // //mendapatkan nilai
        // echo "Warna pesawat A adalah : ".$pesawatA->getWarna();
        // echo "<br/>";
        // echo "<br/>";
        //pembuatan objek

        // objek mobil
        
        // $mobilA = new mobil('merah');
        // echo "<hr/>";
        // echo "warna mobilA adalah : " .$mobilA->getWarna();
        // echo "<br/>";
        // echo "keceptatan mobil a adalah : " .$mobilA->getKecepatan();
     
        // $mobilA->getKecepatan();
        // $mobilA->tambahKecepatan(20);
        // echo "<br/>";
        // echo "kecepatan mobil a adalah : " .$mobilA->getKecepatan();
        // echo "<br/>";
        // $mobilA->getKecepatan();
        // $mobilA->tambahKecepatan(30);
        // echo "kecepatan mobil a adalah : " .$mobilA->getKecepatan();
        // echo "<br/>";
        

        // $mobilB = new MobilBalap("biru");
        // echo "<hr/>";
        // echo "warna mobil b adalah : ".$mobilB->getWarna();
        // echo "<br/>";
        // $mobilB->getKecepatan();
        // echo "kecepatan mobil b adalah : " .$mobilB->getKecepatan();
        // $mobilB->tambahKecepatan(10);
        // echo "<br/>";
        // echo "kecepatan mobil b adalah : " .$mobilB->getKecepatan();
        // $mobilB->getKecepatan();
        // $mobilB->tambahKecepatan(10);
        // echo "<br/>";
        // echo "kecepatan mobil b adalah : " .$mobilB->getKecepatan();
        // echo "<br/>";
        

        // $lingkaran = new lingkaran(7);
        // echo "<hr/>";
        // echo "keliling lingkaran " .$lingkaran->getKeliling() ;
        // echo "<br/>";
        // echo "Luas lingkaran " .$lingkaran->getluaslingkaran() ;


        // $segitiga = new segitiga(4,5,6);
        // echo "<hr/>";
        // echo "luas segitiga " .$segitiga->getluas();
        // echo "<br/>";
        // echo "keliling segitiga " .$segitiga->getkeliling();


        // $jajargenjang = new jajargenjang(4,5,6);
        // echo "<hr/>";
        // echo "luas jajar genjang " .$jajargenjang->getluas();
        // echo "<br/>";
        // echo "keliling jajar genjang " .$jajargenjang->getKeliling(); 

     ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>