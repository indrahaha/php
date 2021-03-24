<?php
session_start();
error_reporting(0);
        $user = array(
                        "user" => "demo",
                        "pass"=>"demo"            
                );
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']){
        //Membuat Session
        $_SESSION["username"] = $_POST['username']; 
        echo "Anda Berhasil Login $_POST[username] , Silahkan lanjut ke form penjualan <a href='logout.php'>Klik Logout</a>";

        /*Jika Ingin Pindah Ke Halaman Lain*/
        // header("Location: admin.php"); //Pindahkan Kehalaman Admin
        header("Location: formpenjualan.php");
    } else {
        // Tampilkan Pesan Error
        display_login_form();
        echo '<p>Username Atau Password Tidak Benar</p>';
    }
}    
else { 
    display_login_form();
}
function display_login_form(){ ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
    <label for="username">username</label>
    <input type="text" name="username" id="username">
    <label for="password">password</label>
    <input type="password" name="password" id="password">
    <input type="submit" name="submit" value="submit">
    </form>    
<?php } ?>

