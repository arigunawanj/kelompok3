<div class="sidebar close">
    <div class="logo-details">
        <i class='bx bx-library'></i>
        <span class="logo_name">Perpustakaan</span>
    </div>
        <ul class="nav-links">
          <!-- MENU DATA -->
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
              <li><a href="home_siswa.php?page=buku-siswa">Daftar Buku</a></li>
            </ul>
            </li>
          
          <!-- MENU TRANSAKSI -->
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
                  <li><a href="home_siswa.php?page=pengembalian-siswa">Pengembalian</a></li>
                  <li><a href="home_siswa.php?page=peminjaman-siswa">Peminjaman</a></li>
              </ul>
          </li>

          
          
          <!-- ISI PROFILE -->
          <li>
            <div class="profile-details">
              <div class="profile-content">
                <!-- <img src="../asset/images/profile.png" alt="profileImg"> -->
              </div>
              <div class="name-job">
                <div class="profile_name"><?= $_SESSION['nama']?></div>
                <div class="job"><?= $_SESSION['alamat']?></div>
              </div>
              <a href="logout.php">
                <i class='bx bx-log-out'></i>
              </a>
            </div>
          </li>
        </ul>
  </div>