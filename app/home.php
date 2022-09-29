<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrasi Perpustakaan</title>
    <link rel="icon" href="../asset/images/icons/library.png">
    <!-- ICON FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- FONT Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-dark" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-dark text-white"><i class="fa-solid fa-book"></i> Perpustakaan</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-dark  p-3"><i class="fa-solid fa-gauge"></i> Dashboard</a>
                
                <a class="list-group-item list-group-item-action list-group-item-dark p-3" data-bs-toggle="collapse" href="#data"><i class="fa-solid fa-pen"></i> Kelola Data </a>
                
                <div class="collapse" id="data">
                    <div class="card card-body">
                        <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="#!"><i class="fa-solid fa-book"></i> Data Buku</a>
                        <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="#!"><i class="fa-solid fa-person"></i> Data Anggota</a>
                    </div>
                </div>

                <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="#!"><i class="fa-solid fa-arrows-rotate"></i>  Sirkulasi</a>
                <a class="list-group-item list-group-item-action list-group-item-dark p-3" data-bs-toggle="collapse" href="#log"><i class="fa-solid fa-bookmark"></i> Log Data</a>
                <div class="collapse" id="log">
                    <div class="card card-body">
                        <a class="list-group-item  list-group-item-action list-group-item-dark p-3" href="#!"><i class="fa-solid fa-truck-moving"></i> Peminjaman</a>
                        <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="#!"><i class="fa-solid fa-truck-ramp-box"></i> Pengembalian</a>
                    </div>
                </div>

                <a class="list-group-item list-group-item-action list-group-item-dark p-3" data-bs-toggle="collapse" href="#report"><i class="fa-solid fa-print"></i> Laporan</a>
                <div class="collapse" id="report">
                    <div class="card card-body">
                        <a class="list-group-item  list-group-item-action list-group-item-dark p-3" href="#!"><i class="fa-solid fa-file"></i> Laporan Buku</a>
                        <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="#!"><i class="fa-solid fa-person"></i> Laporan Anggota</a>
                        <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="#!"><i class="fa-solid fa-copy"></i> Laporan Peminjaman</a>
                        <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="#!"><i class="fa-solid fa-file-export"></i> Laporan Pengembalian</a>
                    </div>
                </div>

                <a class="list-group-item list-group-item-action list-group-item-dark p-3" ><i class="fa-solid fa-people-arrows"></i> Administrator</a>                
                              
                
            </div>
        </div>

        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Navbar Atas-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-dark" id="sidebarToggle"><i class="fa-solid fa-bars"></i></button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="#!"><i class="fa-solid fa-house"></i> Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!"><i class="fa-solid fa-database"></i> Data</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-person"></i> Profil</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Action</a>
                                    <a class="dropdown-item" href="#!">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="asset/script.js"></script>
</body>
</html>