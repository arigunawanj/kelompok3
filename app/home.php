<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="asset/style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- icon title -->
    <link rel="icon" type="image/png" href="../asset/images/icons/library.png"/>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
    <i class='bx bx-library'></i>
      <span class="logo_name">Perpustakaan</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Beranda</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Beranda</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bx-cabinet' ></i>
            <span class="link_name">Data</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Data</a></li>
          <li><a href="#">Data Siswa</a></li>
          <li><a href="#">Data Buku</a></li>
          
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bx-bookmark-plus'></i>
            <span class="link_name">Transaksi</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Transaksi</a></li>
          <li><a href="#">Data Pengembalian</a></li>
          <li><a href="#">Data Peminjaman</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bx-line-chart-down'></i>
            <span class="link_name">Laporan</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Laporan</a></li>
          <li><a href="#">Laporan Pengembalian</a></li>
          <li><a href="#">Laporan Peminjaman</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!-- <img src="../asset/images/profile.png" alt="profileImg"> -->
      </div>
      <div class="name-job">
        <div class="profile_name">Ari Gunawan</div>
        <div class="job">Admin Perpus</div>
      </div>
      <i class='bx bx-log-out'></i>
    </div>
  </li>
</ul>
  </div>
  
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
  </section>

  
  <script src="asset/script.js"></script>
  <!-- Script bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
