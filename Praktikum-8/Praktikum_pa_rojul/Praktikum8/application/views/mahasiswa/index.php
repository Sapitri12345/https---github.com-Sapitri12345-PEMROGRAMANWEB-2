<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Daftar Mahasiswa</title>

	
</head>
<body>
      <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Daftar Mahasiswa</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
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
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>IPK</th>
                                <th>Predikat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $nomor=1;
                                foreach($list_mhs as $mhs){
                            ?>
                            <tr>
                                <th><?=$nomor?></th>
                                <th><?=$mhs->nim?></th>
                                <th><?=$mhs->nama?></th>
                                <th><?=$mhs->gender?></th>
                                <th><?=$mhs->ipk?></th>
                                <th><?=$mhs->predikat()?></th>
                            </tr>
                            <?php
                                $nomor++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
</body>
</html>

