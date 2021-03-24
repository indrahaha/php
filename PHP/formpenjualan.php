<?php
  include 'run.php';
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
      *{
        font-family: helvetica;
      }
    body{
      background-color: lightslategrey;
    }
    .row {
      border: 2px solid red;
      margin-top: 100px;
      color: white;
    }
    .jual{
      background-color: black;
      color: white;
    }
    </style>
  </head>
  <body>
<?php

  if (isset($_POST['prosesbeli'])){
    $jumlahbeli = $_POST['beli'];

    $totalharga = totalharga($jumlahbeli);
    $totaldiskon = totaldiskon($totalharga, $jumlahbeli);
    $totalbayar = totalbayar($totalharga, $totaldiskon);
  }
?> 
  <h2 align=center>Form Penjualan buku</h2>
  <form name="pembelian" method="POST">
      <div class="container" >
      </div>
        <div class="row" align=center>
          <div class="col">
          <label for="">Jumlah Buku</label>
          <input type="number" required name="beli">
          <br>
          <button type="submit" name="prosesbeli">submit</button>
          </div>
          <div class="w-100"></div>
          <div class="col"></div>
          
       </div>
      
  </div>
  </form>
  
  <div class="jual" align=center>
    <p>total harga :
      <?php if(isset($totalharga)){
        echo "Rp. ".number_format($totalharga,2,",",".");
        } ?>
    </p>  
      <p>total harga :  
      <?php if (isset($totaldiskon)){
        echo "Rp. ".number_format($totaldiskon,2,",",".");
      } ?>
      </p>
    <p> total bayar :
      <?php if (isset($totalbayar)){
          echo "Rp. ".number_format($totalbayar,2,",",".");
      } ?>
    </p>
  </div>

  <blockquote class="blockquote text-center">
  <p class="mb-0">>A well-known quote, contained in a blockquote element.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>


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

<?php
 
  
?>