<ul class="nav nav-tabs">
  <li class="<?php echo $this->uri->segment(1)=='blogadmin'?'active':'' ?>" ><a href="<?php echo site_url('blogadmin') ?>">Blog</a></li>
  <li class="<?php echo $this->uri->segment(1)=='blogcat'?'active':'' ?>" ><a href="<?php echo site_url('blogcat') ?>">Categories</a></li>
  <li class="<?php echo $this->uri->segment(1)=='blogcomment'?'active':'' ?>" ><a href="<?php echo site_url('blogcomment') ?>">Comments</a></li>
</ul>