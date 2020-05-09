  <ul class="nav nav-tabs" style="margin-bottom:10px;">
    <li <?php if($active == 'general') echo 'class="active"' ?> >
      <a href="<?php echo site_url('sximo/config/getTemplate/')?>"> General </a>
    </li>

	  <li <?php if($active == 'grid') echo 'class="active"' ?> >
      <a href="<?php echo site_url('sximo/config/getTemplate/grid')?>"> Grid </a>
    </li>

    <li <?php if($active == 'typography') echo 'class="active"' ?> >
      <a href="<?php echo site_url('sximo/config/getTemplate/typography')?>"> Typography </a>
    </li>

    <li <?php if($active == 'panel') echo 'class="active"' ?> >
      <a href="<?php echo site_url('sximo/config/getTemplate/panel')?>">Tabs & Panel </a>
    </li>

    <li <?php if($active == 'forms') echo 'class="active"' ?> >
      <a href="<?php echo site_url('sximo/config/getTemplate/forms')?>">Forms </a>
    </li>

    <li <?php if($active == 'tables') echo 'class="active"' ?> >
      <a href="<?php echo site_url('sximo/config/getTemplate/tables')?>">Tables </a>
    </li>

    <li <?php if($active == 'icons') echo 'class="active"' ?> >
      <a href="<?php echo site_url('sximo/config/getTemplate/icons')?>">Icons </a>
    </li>

	  <li <?php if($active == 'iconmoon') echo 'class="active"' ?> >
      <a href="<?php echo site_url('sximo/config/getTemplate/iconmoon')?>">Icons Moon </a>
    </li>
  </ul> 