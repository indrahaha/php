<?php
    function ceklogin($nama, $password){
        $succes = $nama == 'admin' && $password =='admin';
        return $succes;
    }

    // {
    //     if($nama == "pengguna" && $password == "passwordpengguna"){
    //     header("location:halamanpenjualan.php");
    // }
    //     else {
    //         echo "<script> 
    //                 alern('username dan password anda masih salah');
    //               </script>";
    //     }
 
    // }
        $harga = 9000;
        $diskon = 0.05;

        function totalHarga($jumlahbeli){
            global $harga;
            $jmltotalharga = $harga * $jumlahbeli;
            return $jmltotalharga;
        }

        function totaldiskon($totalharga, $jumlahbeli){
            global $diskon;
            if ($jumlahbeli > 36){
                $jumlahtotaldiskon = $totalharga * $diskon;
            }
            else {
                $jumlahtotaldiskon = $diskon * 0;

            }
            return $jumlahtotaldiskon;
        }

        function totalbayar($totalharga, $totaldiskon){
            $jmltotalbayar = $totalharga - $totaldiskon;
            return $jmltotalbayar;
        }
?>
