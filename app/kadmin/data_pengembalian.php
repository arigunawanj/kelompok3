<!-- CONTENT HEADER -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Pengembalian</h1>
            </div>
            
            <div class="col-sm-8">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item active">Data Pengembalian</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- ISI KONTEN -->
<div class="container text-center">
    <div class="row justify-content-start">
        <div class="col">
        <div class="card-body">
        <h1>Data Pengembalian</h1>         
                    <input type="search" name="" placeholder="Cari..." class="form-control light-table-filter mt-3" data-table="table-hover">
                    <table class="table align-middle table-hover table-striped table-bordered border-light mt-4">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Cover</th>
                                <th scope="col">Title</th>
                                <th scope="col">nis</th>
                                <th scope="col">nama</th>
                                <th scope="col">Date Loan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <?php
                        $hasil = read_detailloan();
                        $urut = 1;

                        while ($r2 = mysqli_fetch_assoc($hasil)) {

                            // $id_book = $r2['id_book'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row">
                                    <img src="../asset/images/cover/<?= $r2['cover'] ?>" class="img-thumbnail" alt="" style="width: 100px;">
                                </td>
                                <td scope="row"><?php echo $r2['title'] ?></td>
                                <td scope="row"><?php echo $r2['nis'] ?></td>
                                <td scope="row"><?php echo $r2['nama'] ?></td>
                                <td scope="row"><?php echo $r2['date_loan'] ?></td>
                                <td scope="row"><?php 
                                $loan_date = date(" m/d/ Y");
                                    if ($r2['date_loan']< $loan_date) {
                                        echo "tepat waktu";
                                    }else {
                                        echo "terlambat";
                                    }
                                
                                ?></td>
                                <td scope="row">
                                    <a href="data_pengembalian.php?op=loan&id=<?php echo $id_book ?>"><button type="button" class="btn btn-success">Kembalikan</button></a>
                                    <!-- <a href="index.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a> -->
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </table>

                </div>
            </div>

        </div>
    </div>
</div>  