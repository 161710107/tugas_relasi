<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Data Siswa</title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
		<center><h3><small>bonus</small></h3></center>
			@foreach ($mahasiswa as $dendi)
				<h3> <small><strong>Nama Mahasiswa : </strong>{{$dendi->mahasiswa}}</small><br>
				<small><strong>Nis :</strong> [{{$dendi->nis}}]</small></h3>


					<li><strong>Nama Wali :</strong> {{$dendi->wali->nama}}</li>
					<li><strong>Alamat Wali : </strong>{{$dendi->wali->alamat}}</li>					

				</h4>
				<hr/>
				<h4>
					<li><strong>Nama Dosen :</strong> {{$dendi->dosen->nama}}</li>
					<li><strong>Jurusan : </strong>{{$dendi->jurusan->nama_jurusan}}</li>
					<li><strong>Mata Kuliah :</strong> 
					@foreach($dendi->matkul as $navi) 
					{{$navi->nama_matkul}},
					@endforeach
					</li>
					

				</h4>
				<hr/>
			@endforeach
		</div>
	</body>
</html>