<!-- CONTENT HEADER -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">History Peminjaman Buku</h1>
            </div>

            <div class="col-sm-8">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">History</a></li>
                    <li class="breadcrumb-item active">History Peminjaman</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- ISI KONTEN -->
<div class="container text-center">
    <div class="row justify-content-start">
        <div class="col">
            <div class="container p-5">
                <div class="card bg-info bg-gradient border border-dark">
                    <div class="card-header">
                        History Peminjaman
                    </div>
                    <div class="card-body">
                        <input type="search" name="" placeholder="Cari..." class="form-control light-table-filter mt-3" data-table="table-hover">
                        <table class="table align-middle table-hover table-primary table-striped mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nis</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Pegembalian</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Denda</th>

                                </tr>
                            </thead>
                            <?php
                            $hasil = history();
                            $urut = 1;

                            while ($r2 = mysqli_fetch_assoc($hasil)) {

                            ?>
                                <tr>
                                    <th scope="row"><?php echo $urut++ ?></th>
                                    <td scope="row"><?php echo $r2['nis'] ?></td>
                                    <td scope="row"><?php echo $r2['nama'] ?></td>
                                    <td scope="row"><?php echo $r2['date_loan'] ?></td>
                                    <td scope="row"><?php
                                                    if ($r2['fine'] == 0) {
                                                       echo '<button class="btn btn-primary" disabled><i class="fa-solid fa-circle-check"></i></button>';
                                                    }else {
                                                        echo '<button class="btn btn-danger" disabled><i class="fa-solid fa-circle-xmark"></i></button>';
                                                    }

                                                    ?></td>
                                    <td scope="row"><?php echo $r2['fine'] ?></td>

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