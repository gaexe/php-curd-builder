<section class="gray-section contact" id="contact">
    <div class="container">
        <div class="row m-b-lg animated fadeInDown delayp1">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contact Us</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
        <div class="row m-b-lg ">
            <div class="col-lg-3 col-lg-offset-3 animated fadeInLeft delayp1">
                <address>
                    <strong><span class="navy">www.lapakcode.net</span></strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
            <div class="col-lg-4 animated fadeInRight delayp1">
                <p class="text-color">
                Lapakcode adalah tempat paling efisien untuk belajar programing. disini anda dapat juga mengunduh project aplikasi yang sudah jadi dengan gratis
                </p>
            </div>
        </div>
		
            <div class="row text-center">
                <div class="contact-form col-md-6 col-sm-12 col-xs-12 col-md-offset-3 animated fadeInUp delayp3" style="opacity: 0;">
                    <?php echo $this->session->flashdata('message');?>
                    <ul class="parsley-error-list">
                        <?php echo $this->session->flashdata('errors');?>
                    </ul>                        
                    <form class="form" action="<?php echo site_url('page/submitcontact');?>"  method="post" enctype="multipart/form-data">                
                        <div class="form-group name">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" placeholder="Name:" class="form-control" name="name">
                        </div><!--//form-group-->
                        <div class="form-group email">
                            <label for="email" class="sr-only">Email</label>
                            <input type="text" placeholder="Email:" class="form-control" name="email">
                        </div><!--//form-group-->
                        <div class="form-group message">
                            <label for="message" class="sr-only">Message</label>
                            <textarea placeholder="Message:" rows="6" class="form-control" name="message"></textarea>
                        </div><!--//form-group-->
                        <button class="btn btn-sm btn-primary" type="submit">Send us mail</button>
                    </form><!--//form-->                 
                </div><!--//contact-form-->
            </div><!--//row-->
        
        <div class="row">
            <div class="col-lg-12 text-center">

                <p class="m-t-sm">
                    Or follow us on social platform
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg animated fadeInUp delayp1">
                <p><strong>© 2015 Company Name</strong><br> consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>