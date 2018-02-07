<?php 

class mobil
{
	public $warna;
	public $jumlah_ban;
	public $merk;

	private $kecepatan;
	private $arah;
	private $speedometer;

	function __construct(){
		$this->warna = "Putih";
		$this->jumlah_ban = 4;
		$this->merk = "Suzuki Swift";

		$this->kecepatan = 0;
		$this->arah = "N";
		$this->speedometer = 0;
	}

	public function getWarna(){
		return $this->warna;
	}

	public function getJumlahBan(){
		return $this->jumlah_ban;
	}

	public function getMerk(){
		return $this->merk;
	}

	public function setWarna($warna){
		$this->warna = $warna;
	}

	public function setMerk($merk){
		$this->merk = $merk;
	}

	public function getArah(){
		return $this->arah;
	}

	public function setArah($arah){
		$this->arah = $arah;
	}

	public function getKecepatan(){
		return $this->kecepatan;
	}

	public function tambahKecepatan($percepatan){
		$this->kecepatan = $this->kecepatan + $percepatan;
	}

	public function kurangiKecepatan($percepatan){
		$this->kecepatan = $this->kecepatan - $percepatan;
	}

	public function getSpeedometer(){
		return $this->speedometer;
	}

	public function tambahSpeedometer($meter){
		$this->speedometer=$this->speedometer + $meter;
	}
	public function kurangiSpeedometer($meter){
		$this->speedometer=$this->speedometer - $meter;
	}
	public function jalan($meter, $waktu){
		if ($this->getArah()=="F") {
			for ($i=0; $i < $waktu; $i++) { 
				$this->tambahKecepatan(($meter/$waktu));
			}
			$this->tambahSpeedometer($meter);
			echo "mobil maju ".$meter." meter";

		}
		else if ($this->getArah()=="B") {
			for ($i=0; $i < $waktu; $i++) { 
				$this->kurangiKecepatan(($meter/$waktu));
			}
			$this->kurangiSpeedometer($meter);
			echo "mobil mundur ".$meter." meter";
		}
		else{
			echo "Mobil dalam keadaan Netral";
		}
	}

}



$mobil = new Mobil();
echo "Warna : ".$mobil->getWarna()."<br>";
echo "Jumlah Ban : ".$mobil->getJumlahBan()."<br>";
echo "Merk : ".$mobil->getMerk()."<br>";

$mobil->setWarna('Biru');
$mobil->setMerk('Mitsubishi Lancer Evo');
echo "<br><br>Setelah Diubah Propertynya<br>";

$mobil->setArah('F');
$mobil->jalan(10, 1);
echo " ||  Speedometer : ".$mobil->getSpeedometer()."m<br>";

$mobil->jalan(100, 5);
echo " || Speedometer : ".$mobil->getSpeedometer()."m<br>";

$mobil->setArah('B');
$mobil->jalan(500, 10);
echo " || Speedometer : ".$mobil->getSpeedometer()."m<br>";
?>