<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <?php $gambar=$this->m_user->cek($this->session->userdata('username'))->row_array();?>
            <img src="<?php echo base_url('assets/img/'.$gambar['foto']);?>" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
            <p><?php echo $this->session->userdata('username');?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->session->userdata('level');?></a>
        </div>
    </div>
    <!-- search form -->
    <form action="" method="post" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="active">
            <a href="<?php echo site_url('home');?>">
                <i class="fa fa-dashboard"></i> <span>Beranda</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-edit"></i> <span>Laporan</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('laporan/barang_masuk');?>"><i class="fa fa-angle-double-right"></i> Barang Masuk</a></li>
                    <li><a href="<?php echo site_url('laporan/barang_keluar');?>"><i class="fa fa-angle-double-right"></i> Barang Keluar</a></li>
                    <li><a href="<?php echo site_url('laporan/stok_barang');?>"><i class="fa fa-angle-double-right"></i> Stok Barang</a></li>
                </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-gavel"></i> <span>Setting</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo site_url('home/password');?>"><i class="fa fa-angle-double-right"></i> Ubah Password</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php echo site_url('home/logout');?>">
                <i class="fa fa-power-off"></i> <span>Logout</span>
            </a>
        </li>
    </ul>
</section>