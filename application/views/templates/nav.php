<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('pages/view/home') ?>">Application</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if(current_url()== base_url('pages/view/home')) echo  'class="active"' ?>><a href="<?php echo base_url('pages/view/home') ?>">Home</a></li>
                <li <?php if(current_url()== base_url('pages/view/about')) echo  'class="active"' ?>><a href="<?php echo base_url('pages/view/about') ?>">About</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>