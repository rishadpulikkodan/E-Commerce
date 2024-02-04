<div id="rainbow-progress-bar"></div>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><?php 
    if($ur == 'home'){ echo"Ecommerce";}
    else if($ur == 'about'){ echo "About Us"; }
    else if($ur == 'branches'){ echo "Our Branches"; }
    else if($ur == 'contact'){ echo "Contact Us"; }
    else if($ur == 'gallery'){ echo "Gallery"; }
    else if($ur == 'products'){ echo "Products"; }
    else{ echo"Ecommerce"; } ?>
  </a>
  <button style="outline:none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" style="text-align: right;">
    <ul class="navbar-nav">
        
      <li class="nav-item <?php if($ur == 'home'){ ?>active<?php } ?>">
        <a class="nav-link" <?php if($ur != 'home'){ ?>href="<?=base_url()?>home#Home" onclick="progresson();" <?php } else{ ?>href="#"<?php } ?>>
        Home
        </a>
      </li>
      <li class="nav-item <?php if($ur=='products'){ ?>active<?php } ?>">
        <a class="nav-link" <?php if($ur != 'products'){ ?>href="<?=base_url()?>products#Products" onclick="progresson();" <?php } else{ ?>href="#"<?php } ?>>
        Products
        </a>
      </li>
      <li class="nav-item <?php if($ur=='about'){ ?>active<?php } ?>">
        <a class="nav-link" <?php if($ur != 'about'){ ?>href="<?=base_url()?>about#About" onclick="progresson();" <?php } else{ ?>href="#"<?php } ?>>
        About Us
        </a>
      </li>
      <li class="nav-item <?php if($ur=='gallery'){ ?>active<?php } ?>">
        <a class="nav-link" <?php if($ur != 'gallery'){ ?>href="<?=base_url()?>gallery#Gallery" onclick="progresson();" <?php } else{ ?>href="#"<?php } ?>>
        Gallery
        </a>
      </li>
      <li class="nav-item <?php if($ur=='contact'){ ?>active<?php } ?>">
        <a class="nav-link" <?php if($ur != 'contact'){ ?>href="<?=base_url()?>contact#Contact" onclick="progresson();" <?php } else{ ?>href="#"<?php } ?>>
        Contact Us
        </a>
      </li>
      <li class="nav-item <?php if($ur=='branches'){ ?>active<?php } ?>">
        <a class="nav-link" <?php if($ur != 'branches'){ ?>href="<?=base_url()?>branches#Branches" onclick="progresson();" <?php } else{ ?>href="#"<?php } ?>>
        Branches
        </a>
      </li>
      <li>
        <hr>
      </li>

    </ul>
  </div>
</nav>