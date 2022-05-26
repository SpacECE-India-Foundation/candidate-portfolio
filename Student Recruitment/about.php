 <!-- Masthead-->
        <header class="container">
            <div class="card d-flex justify-content-center text-center">
                <div class="card-header">
                    <h3 class="text-uppercase text-black font-weight-bold">About Us</h3>
                    <hr class="divider my-4" />
                </div>
                <div class="card-body">
                    <?php echo html_entity_decode(isset($_SESSION['setting_about_content'])?$_SESSION['setting_about_content']:'') ?>
                </div>
            </div>
        </header>

      
    <hr><hr>
    <footer class="py-2">
            <div class="container contact-footer">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Contact us</h2>
                        <hr class="divider my-4" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div><?php echo $_SESSION['setting_contact'] ?></div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:<?php echo $_SESSION['setting_email'] ?>"><?php echo $_SESSION['setting_email'] ?></a>
                    </div>
                </div>
            </div>
            <br>
            <div class="container"><div class="small text-center text-muted">Welcome - <?php echo $_SESSION['setting_name'] ?> | <a href="https://1sourcecodr.blogspot.com" target="_blank">1 Source Code</a></div></div>
        </footer>      
            
</div>
</section>