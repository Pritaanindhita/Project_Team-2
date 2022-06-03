<style>
    .sidebar-nav .gambar {
        margin-top: 30%;
        position: relative;
        bottom: 0;
    }

    .sidebar-nav .gambar img {
        width: 80%;
    }
</style>
<!-- Sidebar -->
<div id="sidebar-wrapper">
    <div class="sidebar-nav">
        <div class="sidebar-brand mb-5">
            <div class="brand">
                <a href="#">
                    <img src="{{url ('assets/logo_safety.png') }}"> E-Safety
                    <a href="#menu-toggle" class="btn btn-default menu-toggle" id="menu-toggle"><i class="fas fa-times"></i></a>
                </a>
            </div>
        </div>
        <div class="menu">
            <div class="item">
                <a href="#"><img src="assets/nav_dash_icon.png" class="mr-3">Dashboard</a>
            </div>
            <div class="item">
                <a class="sub-btn"><img src="assets/nav_inspeksi_icon.png" class="mr-3">Inspeksi<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="#" class="sub-item">Inspeksi APD</a>
                    <a href="#" class="sub-item">Inspeksi APAR</a>
                    <a href="#" class="sub-item">Inspeksi Hydrant</a>
                </div>
            </div>
            <div class="item">
                <a href="#"><img src="assets/nav_pekerja_icon.png" class="mr-3">Data Pekerja</a>
            </div>
            <div class="item">
                <a class="sub-btn"><img src="assets/nav_laporan_icon.png" class="mr-3">Laporan<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="#" class="sub-item">Laporan APD</a>
                    <a href="#" class="sub-item">Laporan APAR</a>
                    <a href="#" class="sub-item">Laporan Hydrant</a>
                </div>
            </div>
        </div>
        <div class="gambar">
            <img src="assets/nav_bottom.png">
        </div>
    </div>
</div>
<!-- /#sidebar-wrapper -->