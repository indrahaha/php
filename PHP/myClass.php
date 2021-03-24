<?php
    class PesawatTerbang{
        public $warnaPesawat;

        public function __construct($warnaAwal){
            $this->warnaPesawat = $warnaAwal;
        }

        public function gantiWarna($warnaBaru){
            $this->warnaPesawat =$warnaBaru;
            return $this->warnaPesawat;
        }   

        public function setWarna($warnaBaru){
            $this->warnaPesawat=$warnaBaru;
        }

        public function getWarna(){
            return $this->warnaPesawat;
        }
    }

    class mobil{
        protected $warnaMobil;
        protected $kecepatanMobil;
        
        public function __construct($warnaAwalMobil){
            $this->warnaMobil = $warnaAwalMobil;
            $this->kecepatanMobil = 0;
        }
        public function tambahKecepatan($kecepatan)
        {
            $this->kecepatanMobil = $kecepatan+$this->kecepatanMobil;
        }
        public function setWarna($warnaBaru){
            $this->warnaMobil = $warnaBaru;
        }

        public function getWarna(){
            return $this->warnaMobil;
        }
        public function getKecepatan(){
            return $this->kecepatanMobil;
        }
    }
    // inheritance
    class MobilBalap extends Mobil{
        public function tambahKecepatan($kecepatan)
        {
            $this->kecepatanMobil = (2*$kecepatan)+$this->kecepatanMobil;
        }
    }

    class lingkaran
    {
        protected $r;
        protected $keliling;
        protected $luas;

        public function __construct($jari)
        {
            $this->r = $jari;
        }

        public function getKeliling()
        {
            $this->keliling = 2 * 3.14 * $this->r;
            return $this ->keliling;
        }

        public function getluaslingkaran()
        {
            $this->luas = 3.14 * ($this->r * $this->r);
            return $this->luas;
        }
    }

    class segitiga{
        protected $alas;
        protected $tinggi;
        protected $s;
        

        public function __construct($a, $t,$sisi)
        {
            $this->alas = $a;
            $this->tinggi = $t;
            $this->s = $sisi;
        }

        public function getKeliling(){
            $this->keliling = ($this->s + $this->s +$this->s );
            return $this->keliling;
        }
        public function getluas(){
            $this->luas = 1/2 * ($this->alas) *($this->tinggi);
            return $this->luas;
        }

    }

    class jajargenjang{
        protected $alas;
        protected $tinggi;
        protected $sisimiring;
        
        public function __construct($a,$t,$m){
            $this->alas = $a;
            $this->tinggi= $t;
            $this->sisimiring = $m;
        }
        public function getluas(){
            $this->luas = ($this->alas) * ($this->tinggi);
            return $this->luas;
        }
        public function getKeliling(){
            $this->Keliling = 2 *($this->alas + $this->sisimiring);
            return $this->Keliling;
        } 
    }



        // public function KelilingLingkaran($kelilingLing){
        //     $this->kelilingLing = 3.14 * 2 * $kelilingLing->kelilingLing; 
        // }
        // public function luasLingkaran($jariJari){
        //     $this->luasLing = 3.14 *$jariJari *$jariJari ->luasLing;
        // }
        // public function setKeliling(){
        //     $this->jari=$setKeliling;

        
    
?>
