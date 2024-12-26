<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU</li>

    <?php
    $parent_home = $menu_parent == "home" ? "active" : "";
    ?>
    <li class="<?php echo $parent_home; ?>">
        <a href="index.php">
            <i class="fa fa-link"></i> <span>Home</span>
        </a>
    </li>

    <?php
    $parent_trx = $menu_parent == "trx" ? "active" : "";
    ?>
    <li class="<?php echo $parent_trx; ?>">
        <a href="trx.php">
            <i class="fa fa-link"></i> <span>Transaksi</span>
        </a>
    </li>

    <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Menu</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#">Parent A</a></li>
            <li><a href="#">Parent B</a></li>
        </ul>
    </li>
</ul>