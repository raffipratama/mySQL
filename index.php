<!DOCTYPE html>
<html>
<head>
	<title>SMK Coding</title>
    <meta charset="UTF-8">
    <meta name="author" content="M. Rayhan Raffi Pratama">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style type="text/css">
		html, 
        body { 
            height: 100%; 
            background: url('1 1.png') no-repeat center center;
            background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
        }
		.mid-center { 
            top: 50%; 
            left: 50%; 
            transform: translateX(-50%) translateY(-50%); 
        }
        
        h1 {
            color: white
            font-size: 4em;
        }
        .notifikasiy {
            color: green;
        }
        .notifikasin {
            color: red;
        }
        footer {
            margin-top: 300px;
            color: black;
        }
	</style>
</head>
<body>
	<div class="position-relative h-100">	
		<div class="position-absolute mid-center">
        <div class="py-5 my-5 text-center bg-light col-20 mx-auto shadow-lg rounded" style="width: 800px; height: 300px;">
		    <h2>Welcome to SMK Coding</h2>
            <p class="lead my-3">Silahkan pilih menu di bawah ini:</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-4">
            <a class="btn btn-outline-info btn-lg mx-3 px-5 gap-5" href="form-daftar.php">Daftar Baru</a>
            <a class="btn btn-outline-info btn-lg mx-3 px-5" href="list-siswa.php">Pendaftar</a>
            </div>
            <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "<p class='text-center notifikasiy'>Pendaftaran siswa baru berhasil!</p>";
                } else {
                    echo "<p class='text-center light notifikasin'>Pendaftaran gagal!</p>";
                }
            ?>
        </p>
    </div>
        <?php endif; ?>
            <footer class="text-center">
                &copy; Copyright 2021 M. Rayhan Raffi Pratama
            </footer>
	</div>
</div>
</body>
</html>