<?php 
require_once "myFunction.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <title id="judul">mencari luas dan keliling</title>
  </head>
  <body>
  <div class="satu" align="center"></div>
	<div class="dua" align="justify">
		<ul>
			<li><a class="active" href="#">Home</a></li>
			<li><a href="https://twitter.com/shiftpagi" target="_blank">Contact Me</a></li>
			<li><a href="../html/form.html" target="_blank">Formulir</a></li>
			<li><a href="about.html" target="_blank">About</a></li>	
			<div class="nav2">
				<li class="dropdown">
    		<a href="javascript:void(0)" class="dropbtn">Create Account</a>
    		<div class="dropdown-content">
      			<a href="https://accounts.google.com/signup/v2/webcreateaccount?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&dsh=S872865573%3A1614134380952027&gmb=exp&biz=false&flowName=GlifWebSignIn&flowEntry=SignUp" target="_blank">create account for personal</a>
     		 	<a href="https://accounts.google.com/signup/v2/webcreateaccount?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&dsh=S1208754105%3A1614134450696564&gmb=exp&biz=true&flowName=GlifWebSignIn&flowEntry=SignUp" target="_blank">create accout for business</a>
     		 	<a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank">Sign Up</a>
     			</div>
     		</li>				
			<li class="dropdown"> <a href="javascript:void(0)" class="dropbtn">Follow Me!</a>
				<div class="dropdown-content">
					<a class="twitter" href="https://twitter.com/shiftpagi" target="_blank">twitter</a>
					<a href="https://instagram.com" target="_blank">instagram</a>
					<a href="https://facebook.com" target="_blank">facebook</a>
				</div>
			</li>
			</div>
			</div>
			</div>
		</ul>
	</div>
    <div class="container">
    <h1 align="center">Mencari luas dan keliling</h1>

    <div class="row">
    <div class="col">
        <P>lingkaran</P>
        <!-- <button onclick="showFormLingkaran()" style="margin-bottom:10px;"> show form lingkaran</button> -->
        <!-- <form id="formLingkaran" action="" method="POST" style="display:none"> -->
        <form id="formLingkaran" action="" method="POST" >
            <input type="number" name="r" required min=0 placeholder="masukkan r" >
            <br>
            <input type="submit" name="hitungLuasLingkaranBtn" value="Hitung luas">
            <input type="submit" name="hitungKelilingLingkaranBtn" value="hitung keliling">
            <div id="pesanLingkaran">LuasLingkaran dengan jari-jari 1 adalah 3.14 </div>
            <button type="reset" onclick="resetNilai()">reset</button>
        </form>
        
    </div>

    <div class="col">
    
        <p>segitiga</p>
        <form name="formSegitiga" action="" method="POST">
            <input type="number" name="alas" placeholder="masukkan alas">
            <input type="number" name="tinggi"  placeholder="masukkan tinggi">
            <br>
            <input type="number" name="sisiA"  placeholder="masukkan sisi">
            <input type="number" name="sisiB"  placeholder="masukkan sisi">
            <input type="number" name="sisiC"  placeholder="masukkan sisi">
            <br>
            <input type="submit" name="hitungLuasSegitigaBtn" value="Hitung luas">
            <input type="submit" name="hitungKelilingSegitigaBtn" value="hitung keliling">
        </form>
    </div>

    <div class="col">

    <p>jajar genjang</p>
        <form name="formJajarGenjang" action="" method="POST">
            <input type="number" name="alas"  placeholder="masukkan alas">
            <input type="number" name="tinggi"  placeholder="masukkan tinggi">
            <input type="number" name="miring"  placeholder="masukkan miring ">
            <br> "submit" name="hitungLuasJajarGenjangBtn" value="Hitung luas">
            <input type="submit" name="hitungKelilingJajarGenjangBtn" value="hitung keliling">
        </form>
    </div>

<?php
    if(isset($_POST['hitungLuasLingkaranBtn'])){
        echo "Luas Lingkaran dengan jari-jari " .$_POST['r']." adalah : " .hitungluasLingkaran($_POST['r']);
    }
    if(isset($_POST['hitungKelilingLingkaranBtn'])){
        echo "Keliling Lingkaran dengan jari-jari " .$_POST['r']." adalah : " .hitungkelilinglingkaran($_POST['r']);
    }

    if(isset($_POST['hitungLuasSegitigaBtn'])){
        echo "Luas Segitiga dengan alas " .$_POST['alas']." dan tinggi " .$_POST['tinggi']. " adalah : " .luasSegitiga($_POST['alas'], $_POST['tinggi']);
    }

    if(isset($_POST['hitungKelilingSegitigaBtn'])){
        echo "Keliling Segitiga dengan alas " .$_POST['sisiA']." dan  " .$_POST['sisiB']. " dan  " .$_POST['sisiC']. " adalah : " .kelilingSegitiga($_POST['sisiA'],$_POST['sisiB'],$_POST['sisiC']);
    }

    if(isset($_POST['hitungLuasJajarGenjangBtn'])){
        echo "Luas JajarGenjang dengan alas " .$_POST['alas']. " dan tinggi " .$_POST['tinggi']. " adalah : " .luasjajargenjang($_POST['alas'],$_POST['tinggi']);
    }
    if(isset($_POST['hitungKelilingJajarGenjangBtn'])){
        echo "Keliling JajarGenjang dengan alas " .$_POST['alas']. " dan miring " .$_POST['miring']. " adalah : " .kelJajar($_POST['alas'],$_POST['miring']);
    }
   
?>    
    <script src="myscript.js"></script>



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

