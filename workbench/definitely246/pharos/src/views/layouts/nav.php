<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">PHAROS</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">

        <?= render('pharos::elements.nav.envelope') ?>
        <?= render('pharos::elements.nav.tasks') ?>
        <?= render('pharos::elements.nav.alerts') ?>
        <?= render('pharos::elements.nav.profile') ?>

    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                </li>

                <li>
                    <a href="<?= route('pharos.analytics.index') ?>"><i class="fa fa-pie-chart fa-fw"></i> Analytics</a>
                </li>

                <li>
                    <a href="<?= route('pharos.filters.index') ?>"><i class="fa fa-filter fa-fw"></i> Filters</a>
                </li>

                <li>
                    <a class="active" href="<?= route('pharos.resources.index') ?>"><i class="fa fa-table fa-fw"></i> Resources</a>
                </li>

            </ul>
        </div>
    </div>
</nav>


<!--

IF YOU WANT TO DO 2 LEVELS DEEP THEN USE THIS
<li>
    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="flot.html">Flot Charts</a>
        </li>
        <li>
            <a href="morris.html">Morris.js Charts</a>
        </li>
    </ul>
</li>


IF YOU WANT TO DO 3 LEVELS DEEP ON THE NAV BAR USE THIS

<li>
    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="#">Second Level Item</a>
        </li>
        <li>
            <a href="#">Second Level Item</a>
        </li>
        <li>
            <a href="#">Third Level <span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
                <li>
                    <a href="#">Third Level Item</a>
                </li>
                <li>
                    <a href="#">Third Level Item</a>
                </li>
                <li>
                    <a href="#">Third Level Item</a>
                </li>
                <li>
                    <a href="#">Third Level Item</a>
                </li>
            </ul>
        </li>
    </ul>
</li>

-->