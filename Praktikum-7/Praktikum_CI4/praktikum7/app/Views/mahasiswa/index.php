<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: white;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 50px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
        padding-left: 400px;
	}

	</style>
<body>
    <div class="countainer">
        <h1>Daftar Mahasiswa</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gender</th>
                    <th scope="col">IPK</th>
                    <th scope="col">Predikat</th>
                </tr>
            </thead>
            <?php
            $nomor = 1;
            foreach($list_mhs as $mhs):
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?=$nomor?></th>
                    <td><?=$mhs->nim?></td>
                    <td><?=$mhs->nama?></td>
                    <td><?=$mhs->gender?></td>
                    <td><?=$mhs->ipk?></td>
                    <td><?=$mhs->predikat()?></td>
                </tr>
        
            </tbody>
            <?php
            $nomor++;
            endforeach;
            ?>
        </table>
    </div>
</body>
</html>