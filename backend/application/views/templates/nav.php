<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('pages/home') ?>">Application</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if(current_url()== base_url('pages/home')) echo  'class="active"'?>>
                    <a href="<?php echo base_url('pages/home') ?>">Home</a>
                </li>
                <li <?php if(current_url()== base_url('pages/about')) echo  'class="active"'?>>
                    <a href="<?php echo base_url('pages/about') ?>">About</a>
                </li>
                <li <?php if(current_url()== base_url('login')) echo  'class="active"'?>>
                    <a href="<?php echo base_url('login') ?>">Login</a>
                </li>
                <li>
                    <a href="<?php echo base_url('login/logout') ?>">Logout</a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container">

