        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        {{-- @if(auth()->user()->status == ['admin', 'warga']) --}}
                        @if(auth()->user()->status == 'admin')
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/informasi" aria-expanded="false"><i class="fas fa-image"></i><span class="hide-menu">Informasi</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/listWarga" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Warga</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/listAdmin" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Admin</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user-plus"></i><span class="hide-menu">Tambah User </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/daftarWarga" class="sidebar-link"><i class="fas fa-users"></i><span class="hide-menu"> Warga </span></a></li>
                                <li class="sidebar-item"><a href="/daftarAdmin" class="sidebar-link"><i class="fas fa-user"></i><span class="hide-menu"> Admin </span></a></li>
                            </ul>
                        </li>
                        {{-- @endif --}}
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/listKomentar" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Komentar Pengunjung</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/daftarPesanWarga" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Pesan Warga</span></a></li>
                        @endif
                        @if(auth()->user()->status == 'warga')
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/pesanWarga/{{ auth()->user()->warga->id }}" aria-expanded="false"><i class="mdi mdi-facebook-messenger"></i><span class="hide-menu">Kirim Pesan</span></a></li>
                        @endif
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
