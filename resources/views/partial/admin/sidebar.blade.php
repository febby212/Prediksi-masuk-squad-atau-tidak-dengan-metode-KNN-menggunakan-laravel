  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link {{ $title === 'Dashboard' ? '' : 'collapsed' }}" href="/dashboard">
                  <i class="ri-dashboard-line"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->
          <li class="nav-item">
              <a class="nav-link {{ $title === 'Data Pemain' ? '' : 'collapsed' }}" href="/dataPemain">
                  <i class="ri-database-2-line"></i>
                  <span>Data Pemain</span>
              </a>
          </li><!-- End Dashboard Nav -->
          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                  <i class="ri-file-add-line"></i><span>Tambah Data</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="/tambahPenyerang">
                          <i class="bi bi-circle"></i><span>Tambah Data Penyerang</span>
                      </a>
                  </li>
                  <li>
                      <a href="/tambahGelandang">
                          <i class="bi bi-circle"></i><span>Tambah Data Gelandang</span>
                      </a>
                  </li>
                  <li>
                      <a href="/tambahBertahan">
                          <i class="bi bi-circle"></i><span>Tambah Data Bertahan</span>
                      </a>
                  </li>
                  <li>
                      <a href="/tambahGk">
                          <i class="bi bi-circle"></i><span>Tambah Data GK</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End Icons Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#prediksi" data-bs-toggle="collapse" href="#">
                <i class="ri-line-chart-fill"></i><span>Coba Prediksi</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="prediksi" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="/prediksiPenyerang">
                          <i class="bi bi-circle"></i><span>Penyerang</span>
                      </a>
                  </li>
                  <li>
                      <a href="/prediksiGelandang">
                          <i class="bi bi-circle"></i><span>Gelandang</span>
                      </a>
                  </li>
                  <li>
                      <a href="/prediksiBertahan">
                          <i class="bi bi-circle"></i><span>Bertahan</span>
                      </a>
                  </li>
                  <li>
                      <a href="/prediksiGk">
                          <i class="bi bi-circle"></i><span>GK</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End Icons Nav -->

          {{-- <li class="nav-heading">Profile</li> --}}

          <li class="nav-item">
              <a class="nav-link {{ $title === 'Profile' ? '' : 'collapsed' }}" href="/updateK">
                  <i class="ri-swap-line"></i>
                  <span>Ubah Nilai K</span>
              </a>
          </li><!-- End Profile Page Nav -->

      </ul>

  </aside><!-- End Sidebar-->
