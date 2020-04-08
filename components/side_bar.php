<div class="span3">
    <div class="sidebar">
        <ul class="widget widget-menu unstyled">
            <li class="active">
                <a href="index.php"><i class="menu-icon icon-dashboard"></i>Home</a>
            </li>
            <?php
            if ($_SESSION['pengguna_level'] == "Gudang") {
                ?>
                <!-- Staff Gudang -->
                <li>
                    <a href="index.php?page=data_supply"><i class="menu-icon icon-exchange"></i>Transaksi Barang Masuk</a>
                </li>
                <li>
                    <a href="index.php?page=data_supplier"><i class="menu-icon icon-book"></i>Supplier</a>
                </li>
                <li>
                    <a href="index.php?page=data_barang"><i class="menu-icon icon-table"></i>Barang</a>
                </li>
                <!-- Staff Gudang -->
            <?php } ?>
            <?php
            if ($_SESSION['pengguna_level'] == "Kasir") {
                ?>
                <!-- Kasir -->
                <li>
                    <a href="index.php?page=data_distribusi"><i class="menu-icon icon-exchange"></i>Transaksi Distribusi Barang</a>
                </li>
                <li>
                    <a href="index.php?page=data_pelanggan"><i class="menu-icon icon-group"></i> Konsumen</a>
                </li>
                <!-- Kasir -->
            <?php } ?>
        </ul>
        <?php
        if ($_SESSION['pengguna_level'] == "Admin") {
            ?>
            <ul class="widget widget-menu unstyled">
                <li><a class="collapsed" data-toggle="collapse" href="#Master"><i class="menu-icon icon-cog">
                        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                        </i>Master</a>
                    <ul id="Master" class="collapse unstyled">
                        <li>
                            <a href="index.php?page=data_supply"><i class="icon-exchange"></i>Transaksi Barang Masuk</a>
                        </li>
                        <li>
                            <a href="index.php?page=data_distribusi"><i class="icon-exchange"></i>Transaksi Penjualan</a>
                        </li>
                        <li><a href="index.php?page=data_kategori"><i class="icon-bold"></i> Kategori</a></li>
                        <li><a href="index.php?page=data_barang"><i class="icon-table"></i> Barang</a></li>
                        <li><a href="index.php?page=data_pelanggan"><i class="icon-group"></i> Konsumen</a></li>
                        <li><a href="index.php?page=data_supplier"><i class="icon-book"></i> Supplier</a></li>
                        <li><a href="index.php?page=data_pengguna"><i class="icon-user"></i> Pengguna</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="widget widget-menu unstyled">
                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-print">
                        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                        </i>Laporan</a>
                    <ul id="togglePages" class="collapse unstyled">
                        <li>
                            <a href="index.php?page=data_laporan_barang"><i class="icon-inbox"></i>Laporan Barang</a>
                        </li>
                        <li>
                            <a href="index.php?page=data_laporan_supply"><i class="icon-inbox"></i>Laporan Supply</a>
                        </li>
                        <li>
                            <a href="index.php?page=data_laporan_distribusi"><i class="icon-inbox"></i>Laporan Distribusi</a>
                        </li>
                    </ul>
                </li>
            </ul>
        <?php } ?>

        <!--/.widget-nav-->
        <?php
        if ($_SESSION['pengguna_level'] == "Pimpinan") {
            ?>
            <ul class="widget widget-menu unstyled">
                <li><a class="collapsed" data-toggle="collapse" href="#Master"><i class="menu-icon icon-cog">
                        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                        </i>Master</a>
                    <ul id="Master" class="collapse unstyled">
                        <li>
                            <a href="index.php?page=data_supply"><i class="icon-exchange"></i>Transaksi Barang Masuk</a>
                        </li>
                        <li>
                            <a href="index.php?page=data_distribusi"><i class="icon-exchange"></i>Transaksi Penjualan</a>
                        </li>
                        <li><a href="index.php?page=data_kategori"><i class="icon-bold"></i> Kategori</a></li>
                        <li><a href="index.php?page=data_barang"><i class="icon-table"></i> Barang</a></li>
                        <li><a href="index.php?page=data_pelanggan"><i class="icon-group"></i> Konsumen</a></li>
                        <li><a href="index.php?page=data_supplier"><i class="icon-book"></i> Supplier</a></li>
                        <li><a href="index.php?page=data_pengguna"><i class="icon-user"></i> Pengguna</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="widget widget-menu unstyled">
                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-print">
                        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                        </i>Laporan</a>
                    <ul id="togglePages" class="collapse unstyled">
                        <li>
                            <a href="index.php?page=data_laporan_barang"><i class="icon-inbox"></i>Laporan Barang</a>
                        </li>
                        <li>
                            <a href="index.php?page=data_laporan_supply"><i class="icon-inbox"></i>Laporan Supply</a>
                        </li>
                        <li>
                            <a href="index.php?page=data_laporan_distribusi"><i class="icon-inbox"></i>Laporan Distribusi</a>
                        </li>
                    </ul>
                </li>
            </ul>
        <?php } ?>
        <ul class="widget widget-menu unstyled">
            <li><a href="index.php?page=logout"><i class="menu-icon icon-signout"></i>Logout </a></li>
        </ul>

    </div>
    <!--/.sidebar-->
</div>