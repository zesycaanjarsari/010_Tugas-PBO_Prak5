<!-- Nama : Zesyca Dwi Anjarsari - NIM: 21091397010 -->
<!-- Prodi: D4 Manajemen Informatika - 2021 B-->
<!-- Soal NO 1 Praktikum 5 -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 5 no2</title>
</head>
<body>
    <div class="container">
        <h2>Prak 5 no2</h2>

        <?php
class Pegawai
{
	public  $nama;
	public $gaji;
	public	function __construct($nama, $gaji)
	{
		$this->nama = $nama;
		$this->gaji = $gaji;
	}
	public	function infoGaji()
	{
		return $this->gaji;
	}
}
class Manajer extends Pegawai
{
	private $tunjangan;
	public	function __construct($nama, $gaji, $tunjangan)
	{
		parent::__construct($nama, $gaji);
		$this->tunjangan = $tunjangan;
	}
	public	function infoGaji()
	{
		return $this->gaji;
	}
	public	function infoTunjangan()
	{
		return $this->tunjangan;
	}
}
class Programmer extends Pegawai
{
	private $bonus;
	public	function __construct($nama, $gaji, $bonus)
	{
		parent::__construct($nama, $gaji);
		$this->bonus = $bonus;
	}
	public	function infoGaji()
	{
		return $this->gaji;
	}
	public	function infoBonus()
	{
		return $this->bonus;
	}
}
class Bayaran
{
	public function hitungBayaran($peg)
	{
		$uang = $peg->infoGaji();
		
		return $uang;
	}
	public static function main($args)
	{
		echo "Zesyca Dwi Anjarsari - 21091397010";
        echo "<br>";
		$man = new Manajer("Anjar", 1000000, 1000000);
        echo "<br>", "<br>";
		$prog = new Programmer("Sari", 600000, 600000); 
        echo "<br>", "<br>";
		$hr = new Bayaran();
		echo "<br> Gaji Manajer nama: ". $man->nama." = Rp. ".strval($hr->hitungBayaran($man)) , "\n";
        echo "<br>", "<br>";
		echo "<br>Gaji Programmer nama: ".$prog->nama. " = Rp. ".strval($hr->hitungBayaran($prog)) , "\n";
      
	}
}
Bayaran::main(array());
        ?>
        <!-- END PHP  -->
    </div>
</body>
</html>