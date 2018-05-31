<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <?php
    define('BASE_URL','/kmail/panel/');
    ?>
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li  class="<?php echo ($_SERVER['PHP_SELF'] == "/kmail/panel/index.php"?"active":"")?>">
            <a href="<?php echo BASE_URL ?>index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/kmail/panel/calendar.php"?"active":"")?>">
            <a href="<?php echo BASE_URL ?>calendar.php"><i class="fa fa-fw fa-calendar-o"></i> Calender</a>
        </li>
        <li class="<?php echo (substr($_SERVER['PHP_SELF'], 0, 19) == "/kmail/panel/local/"?"active":"")?>">
            <a href="<?php echo BASE_URL ?>local"><i class="fa fa-fw fa-newspaper-o"></i> Local</a>
        </li>
        <li class="<?php echo (substr($_SERVER['PHP_SELF'], 0, 21) == "/kmail/panel/foreign/"?"active":"")?>">
            <a href="<?php echo BASE_URL ?>foreign"><i class="fa fa-fw fa-plane"></i> Foreign</a>
        </li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/kmail/panel/jobs/index.php"?"active":"")?>">
            <a href="<?php echo BASE_URL ?>jobs"><i class="fa fa-fw fa-suitcase"></i> Jobs</a>
        </li>
        <li class="<?php echo (substr($_SERVER['PHP_SELF'], 0, 20) == "/kmail/panel/action/"?"active":"")?>">
            <a href="<?php echo BASE_URL ?>action"><i class="fa fa-fw fa-universal-access"></i> Action</a>
        </li>
        <li class="<?php echo (substr($_SERVER['PHP_SELF'], 0, 25) == "/kmail/panel/subscribers/"?"active":"")?>">
            <a href="<?php echo BASE_URL ?>subscribers"><i class="fa fa-fw fa-universal-access"></i> Subscribers</a>
        </li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/kmail/panel/reported/index.php"?"active":"")?>">
            <a href="<?php echo BASE_URL ?>reported"><i class="fa fa-fw fa-video-camera"></i> Reported Stories</a>
        </li>

        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/kmail/panel/feedback/index.php"?"active":"")?>">
            <a href="<?php echo BASE_URL ?>feedback"><i class="fa fa-fw fa-file"></i> Feedbacks</a>
        </li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/kmail/panel/visits.php"?"active":"")?>">
            <a href="<?php echo BASE_URL ?>visits.php"><i class="fa fa-fw fa-automobile"></i> Visits</a>
        </li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/kmail/panel/proposals/index.php"?"active":"")?>">
            <a href="<?php echo BASE_URL ?>proposals"><i class="fa fa-fw fa-automobile"></i> Proposals</a>
        </li>
        <li>
            <a href="<?php echo BASE_URL ?>comments/upload/backend"><i class="fa fa-fw fa-comment"></i> Comments</a>
        </li>
        <li>
            <a href="http://www.kelymail.com/cpanel"><i class="fa fa-fw fa-warning"></i> CPanel</a>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              