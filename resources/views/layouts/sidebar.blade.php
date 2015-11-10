<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">SISTEM INFORMASI KEMHAN</li>
            <li class="treeview">
                <a href="#"><span>Master</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('kanminvet') }}"><i class="fa fa-circle-o"></i>Kanminvet</a></li>
                    <li><a href="{{ url('babin') }}"><i class="fa fa-circle-o"></i>Babin</a></li>
                    <li><a href="{{ url('provinsi') }}"><i class="fa fa-circle-o"></i>Provinsi</a></li>
                    <li><a href="{{ url('kabupaten') }}"><i class="fa fa-circle-o"></i>Kabupaten</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><span>Transaction</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('dokumen') }}"><i class="fa fa-circle-o"></i>Document</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><span>Report</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Row 1 level 2</a></li>
                    <li><a href="#">Row 2 level 2</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
<!-- /.sidebar -->
</aside>