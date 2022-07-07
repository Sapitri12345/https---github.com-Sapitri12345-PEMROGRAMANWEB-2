<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Daftar Dosen</title>
</head>

<body>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Daftar Dosen</h1>
            </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Dosen</li>
                    </ol>
                </div>
            </div>
        </div>
        </section>

        <!-- Main content -->
        <section class="content">

        <!-- Default box -->
            <div class="card">

                <div class="col-md-12">
                    <table class="table" border="1" width="100%">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>NIDN</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Pendidikan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $nomor=1;
                                foreach($list_dsn as $dsn){
                            ?>
                            <tr>
                                <th><?=$nomor?></th>
                                <th><?=$dsn->nidn?></th>
                                <th><?=$dsn->nama?></th>
                                <th><?=$dsn->gender?></th>
                                <th><?=$dsn->tmp_lahir?></th>
                                <th><?=$dsn->tgl_lahir?></th>
                                <th><?=$dsn->pendidikan?></th>
                            </tr>
                            <?php
                                $nomor++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
</body>
</html>






