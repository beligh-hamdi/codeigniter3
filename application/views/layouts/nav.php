<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('home') ?>">Application</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if(current_url()== base_url('home')) echo  'class="active"' ?>><a href="<?php echo base_url('home') ?>">Home</a></li>
                <li <?php if(current_url()== base_url('about')) echo  'class="active"' ?>><a href="<?php echo base_url('about') ?>">About</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
