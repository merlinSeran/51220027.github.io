<!DOCTYPE html>
<html>
<head>
	<title>Nilai Akhir</title>
</head>
<body>
		
	<h1>Projek Merlin Seran</h1>
	<h1 >Nila Akhir Mahasiswa</h1>
	<strong>
	
				
	
		
		<?php 
		
		$npm = $_POST['npm'];
		echo "Npm : ", $npm;
		echo "<br>";
		$nama = $_POST['nama'];

		echo "Nama : ", $nama;
		echo "<br>";
		$kehadiran = $_POST['kehadiran'];
		echo "Nilai Kehadiran = ", $kehadiran;
		echo "<br>";
		$tugas = $_POST['tugas'];
		echo "Nilai Tugas = ", $tugas;
		echo "<br>";
		echo "<br>";
		$uts = $_POST['uts'];
		echo "Nilai Uts = ", $uts;
		echo "<br>";
		$uas = $_POST['uas'];
		echo "Nilai Uas = ", $uas;
		echo "<br>";
		$nilai = ($kehadiran*10/100)+($tugas*20/100)+($uts*35/100)+($uas*35/100);
		if($nilai >= 80 && $nilai <= 100){
			echo "Keterangan : Lulus","<br>", "Rata-Rata =",$nilai,"<br>","Nilai Huruf : A";
		}
		elseif($nilai >= 70 && $nilai < 80){
			echo "Keterangan : Lulus","<br>", "Rata-Rata =",$nilai,"<br>","Nilai Huruf : B";
		}
		elseif($nilai >= 60 && $nilai < 70){
			echo "Keterangan : Lulus","<br>", "Rata-Rata =",$nilai,"<br>","Nilai Huruf : C";
		}
		elseif($nilai >= 50 && $nilai >60){
			echo "Keterangan : Tidak Lulus","<br>", "Rata-Rata =",$nilai,"<br>","Nilai Huruf : D";
		}
		elseif($nilai >=0 && $nilai <50){
			echo "Keterangan : Tidak Lulus","<br>", "Rata-Rata =",$nilai,"<br>","Nilai Huruf : E";
		}
		else{
			echo "Keterangan : Tidak Lulus","<br>", "Rata-Rata =",$nilai,"<br>","Tidak Ditentukan";
		}

		 ?>

		 <br>
		<button onclick="goBack()">Kembali</button>
		<script>
			function goBack(){
				window.history.back();
			}
		</script>

		</tr>
		

	</strong>
</table>
</body>
</html>