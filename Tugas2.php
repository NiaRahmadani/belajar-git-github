<?php
class Karyawan {
    public $hariKerja;
    public $level;
    public $gajiHarian;

    public function __construct($hariKerja, $level, $gajiHarian = 500000) {
        $this->hariKerja = $hariKerja;
        $this->level = $level;
        $this->gajiHarian = $gajiHarian;
    }

    public function hitungBonus() {
        if ($this->hariKerja >= 17 && $this->hariKerja <= 20) {
            if ($this->level == 'senior') {
                return 2 * $this->gajiHarian; 
            } else if ($this->level == 'junior') {
                return 1 * $this->gajiHarian; 
            }
        }
        return 0; 
    }

    public function hitungTotalGaji() {
        $bonus = $this->hitungBonus();
        $totalGaji = ($this->gajiHarian * $this->hariKerja + $bonus);
        return $totalGaji;
    }
}

$gajiHarianjunior = 30000; 
$gajiHariansenior = 40000;

$karyawan1 = new Karyawan(18, 'senior', $gajiHariansenior);
$totalGaji1 = $karyawan1->hitungTotalGaji();

$karyawan2 = new Karyawan(20, 'junior', $gajiHarianjunior);
$totalGaji2 = $karyawan2->hitungTotalGaji();

echo "Karyawan " . $karyawan1->level . " masuk " . $karyawan1->hariKerja . " hari kerja, bayarannya adalah Rp " . number_format($totalGaji1, 0, ',', '.') . "\n";
echo "Karyawan " . $karyawan2->level . " masuk " . $karyawan2->hariKerja . " hari kerja, bayarannya adalah Rp " . number_format($totalGaji2, 0, ',', '.') . "\n";

?>
