<form method="POST" action="">
	<tr>
		<td>Tinggi :</td>
		<td><input type="text" name="tinggi" value=""></td><br>
	</tr>
	<tr>
		<td>Berat Badan :</td>
		<td><input type="text" name="berat" value=""></td><br>
	</tr>
	<tr>
		<td>Jenis Kelamin :</td>
		<td>
			<input type="radio" name="jk" value="wanita">wanita
			<input type="radio" name="jk" value="laki-laki">laki-laki
		</td><br>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="SUBMIT"></td>
	</tr>

</form>
<?php 

class Kalkulator{

	public $berat=0;
	public $tinggi=0;
	public $hasil_bmi=0;
	public $jk="";
	public function tampil(){
		echo "BMI Anda ".$this->hasil_bmi;
	}

	public function Hasil_Perhitungan(){
		$this->berat = $_POST['berat'];
	$this->tinggi = $_POST['tinggi']/100;
	$this->jk = $_POST['jk'];
		$this->hasil_bmi = $this->berat/($this->tinggi*$this->tinggi);
		
		if ($this->jk == 'wanita') {
			if ($this->hasil_bmi<18) {
				echo "Under Weight/Kurus <br>";
			}
			elseif ($this->Hasil_Perhitungan=18||$this->Hasil_Perhitungan<25) {
				echo "Normal <br>";
			}
			elseif ($this->Hasil_Perhitungan=25||$this->Hasil_Perhitungan<27) {
				echo "Kegemukan <br>";
			}
			elseif ($this->Hasil_Perhitungan=27) {
				echo "Obesitas <br>";
			}

		}

		elseif ($this->jk == 'laki-laki'){
			if ($this->Hasil_Perhitungan<17) {
				echo "Kurus <br>";
			}
			elseif ($this->Hasil_Perhitungan=17||$this->Hasil_Perhitungan<23) {
				echo "Normal <br>";
			}
			elseif ($this->Hasil_Perhitungan=23||$this->Hasil_Perhitungan<27) {
				echo "Kegemukan <br>";
			}
			elseif ($this->Hasil_Perhitungan=27) {
				echo "Obesitas <br>";
			}
		}
	}

}



if (isset($_POST['submit'])) {
	$baru = new Kalkulator();
 	$baru->Hasil_Perhitungan();
 	$baru->tampil();

}

 ?>