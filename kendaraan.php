<?php
// Implementasi abstract class Kendaraan
abstract class Kendaraan {
    private $merk;
    private $tahun;

    public function __construct($merk, $tahun) {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    // Getter dan setter
    public function getMerk() {
        return $this->merk;
    }

    public function setMerk($merk) {
        $this->merk = $merk;
    }

    public function getTahun() {
        return $this->tahun;
    }

    public function setTahun($tahun) {
        $this->tahun = $tahun;
    }

    public function kendarai() {
        echo $this->merk . " sedang dikendarai.";
    }

    // Abstraksi
    abstract public function tampilkanInfo();
}
?>
