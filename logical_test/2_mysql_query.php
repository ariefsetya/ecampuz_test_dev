<?php

$dsn = "mysql:host=localhost:3307;dbname=ecampuz_db_ariefsetya";
$user = "root";
$pass = "";

$pdo = new PDO($dsn, $user, $pass);

$query = "SELECT b.mhs_nama 
			FROM `tb_mahasiswa_nilai` a 
			LEFT JOIN tb_mahasiswa b ON a.mhs_id=b.mhs_id 
			LEFT JOIN tb_matakuliah c ON a.mk_id=c.mk_id 
			WHERE c.mk_kode='MK303' 
			ORDER BY a.nilai DESC 
			LIMIT 1";

$stm = $pdo->query($query);
$data = $stm->fetch(PDO::FETCH_OBJ);

echo $data->mhs_nama;