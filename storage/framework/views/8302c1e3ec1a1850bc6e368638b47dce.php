<?php $__env->startSection('title', 'Contact Us'); ?>

<?php $__env->startSection('styles'); ?>
    <!-- Additional styles for this page -->
    <style>
        /* Custom styles specific to this page */
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('banner'); ?>
    <img src="<?php echo e(asset('assets/images/banner/12.jpg')); ?>" alt="banner" uk-cover>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>


<div id="app" class="page-content">
    <!-- isi content disini -->
    <div class="uk-section uk-section-default">
        <div class="uk-container">

            <div uk-grid="" class="uk-grid">
                <div class="uk-width-expand@m">

                    <nav aria-label="Breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><a href="home">Home</a></li>
                            <li><a href="contact">Contact Us</a></li>
                            
                        </ul>
                    </nav>

                    <article class="uk-article " uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-heading-large; delay: 300; repeat: true">
                        
                        <h1 class="uk-heading-large uk-margin-small uk-text-center uk-text-nowrap@m"> Get in touch</h1>
                        <p class="uk-text-lead uk-text-center uk-text-nowrap@m uk-text-capitalize" uk-scrollspy="cls: uk-animation-slide-top; delay: 500; repeat: true">
                            guarantees a free consultation, so don't hesitate to communicate with us</p>
                        <hr class="uk-divider-icon uk-margin">                                                    
                        
                        

                        

                        <div class="uk-child-width-expand uk-grid-small uk-child-width-1-2@s uk-grid-collapse uk-grid-match" uk-grid>
                            
                            
                            <div class="uk-width-2-3@s">
                                <div class="uk-card uk-card-default uk-flex uk-flex-center uk-flex-middle" >
                                    <div class="uk-card-body">
                                        <form action="#">
                                        <legend class="uk-legend">Let's start a conversation</legend>

                                            <div class="uk-margin uk-child-width-1-2@s" uk-grid>
                                                <div>
                                                    <label class="uk-form-label" for="form-s-text">First Name</label>
                                                    <input class="uk-input" id="form-s-text" type="text" name="f_name" placeholder="Your First Name" required>                                                                                
                                                </div>
                                                <div>
                                                    <label class="uk-form-label " for="form-s-text">Last Name</label>
                                                    <input class="uk-input" id="form-s-text" type="text" name="l_name" placeholder="Your Last Name" required>
                                                </div>
                                                
                                                
                                            </div>
                                            
                                            <div class="uk-margin uk-child-width-1-2@s" uk-grid>
                                                <div>
                                                    <label class="uk-form-label" for="form-s-text">Email</label>
                                                    <input class="uk-input" id="form-s-text" type="email" name="email" placeholder="Your Company Email" required>                                                                                
                                                </div>
                                                <div>
                                                    <label class="uk-form-label" for="form-s-text">Phone No.</label>
                                                    <input class="uk-input" id="form-s-text" type="text" name="phone" placeholder="08110000111" required>
                                                </div>
                                            </div>

                                            <div class="uk-margin">
                                                <label class="uk-form-label" for="form-s-textarea">Message</label>
                                                <textarea class="uk-textarea" id="form-s-textarea" rows="5" placeholder="Some your message are here ..."></textarea>
                                            </div>
                                            <div class="uk-margin uk-text-right">
                                                <button type="submit" class="uk-button uk-button-large uk-button-primary">Send</button>
                                                <button type="reset" class="uk-button uk-button-large uk-button-secondary">Reset</button>
                                            </div>
                                            <div class="uk-article-meta">
                                                You can send us a message through the form provided on the page, and we'll aim to respond within 24 hours. Additionally, we've listed our phone number and email address for direct communication. Thank you.
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="uk-width-1-3@s">
                                <div class="uk-card uk-card-secondary">
                                    <div class="uk-card-body">
                                    <h2 class="uk-text-primary uk-heading-divider uk-text-nowrap@s  uk-heading-bullet">Office</h2>
                                    <p class="uk-h6"><a href="https://maps.app.goo.gl/BtUNDevRNqkshN6x6" target="_blank"><span class="uk-margin-small-right" uk-icon="location"></span>Jl. Dr. Mr. Mohd Hasan No.257, <br>Banda Aceh, Aceh - Indonesia</a></p>
                                    </div>
                                    <div class="uk-card-body ">
                                        <h3 class="uk-text-primary uk-heading-divider uk-text-nowrap@s uk-heading-bullet">Want to Talk?</h3>
                                        <p class="uk-margin-remove uk-h6 "><a href="mailto:hello@luxima.id" target="_blank"><span class="uk-margin-small-right" uk-icon="mail"></span>hello@luxima.id</a><br>
                                        <a href="tel:+628116111662" target="_blank"><span class="uk-margin-small-right" uk-icon="receiver"></span>08116111662</a><br>
                                        <a href="https://wa.me/628990001664" target="_blank"><span class="uk-margin-small-right" uk-icon="whatsapp"></span>08990001664</a></p>
                                    
                                        <h3 class="uk-text-primary uk-heading-divider uk-text-nowrap@s uk-heading-bullet">Social Media</h3>
                                        <p class="uk-text-center uk-h6">
                                            <a href="https://www.facebook.com/luxima.photo" class="uk-icon-link  uk-margin-small-right" uk-icon="facebook" style="color:#a78656" target="_blank" uk-tooltip="title:Facebook; pos: bottom"></a>
                                            <a href="https://www.instagram.com/luxima.id" class="uk-icon-link  uk-margin-small-right" uk-icon="instagram" style="color:#a78656" target="_blank" uk-tooltip="title:Instagram; pos: bottom"></a>
                                            <a href="https://www.twitter.com/luximaid" class="uk-icon-link  uk-margin-small-right" uk-icon="twitter" style="color:#a78656" target="_blank" uk-tooltip="title:Twitter; pos: bottom"></a>
                                            <a href="https://www.tiktok.com/@luxima.id" class="uk-icon-link  uk-margin-small-right" uk-icon="tiktok" style="color:#a78656" target="_blank" uk-tooltip="title:Tiktok; pos: bottom"></a>
                                            <a href="https://www.youtube.com/@luxima-id" class="uk-icon-link  uk-margin-small-right" uk-icon="youtube" style="color:#a78656" target="_blank" uk-tooltip="title:Youtube; pos: bottom"></a>
                                        </p>
                                    </div>
                                </div>
                        </div>
                            
                        </div>

                        
                    </article>
                  
                    <hr class="uk-margin-medium">
                     
                </div>

            </div>

            

            

        </div>
    </div>
    
    <div class="uk-section uk-section-default uk-section-small uk-padding-remove-bottom" uk-height-viewport="offset-top: true; offset-bottom: 50">
        
        <div class="uk-margin" uk-slider="autoplay: true">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@s uk-child-width-1-6@m uk-grid">
                    <li>
                        <img src="assets/images/vendor/clients-img-07.png" width="200px" height="90px" alt="">
                    </li>
                    <li>
                        <img src="assets/images/vendor/clients-img-08.png" width="200px" height="90px" alt="">
                    </li>
                    <li>
                        <img src="assets/images/vendor/clients-img-11.png" width="200px" height="90px" alt="">
                    </li>
                    <li>
                        <img src="assets/images/vendor/clients-img-12.png" width="200px" height="90px" alt="">
                    </li>
                    <li>
                        <img src="assets/images/vendor/clients-img-15.png" width="200px" height="90px" alt="">
                    </li>
                    <li>
                        <img src="assets/images/vendor/clients-img-07.png" width="200px" height="90px" alt="">
                    </li>
                    <li>
                        <img src="assets/images/vendor/clients-img-08.png" width="200px" height="90px" alt="">
                    </li>
                    <li>
                        <img src="assets/images/vendor/clients-img-11.png" width="200px" height="90px" alt="">
                    </li>
                    <li>
                        <img src="assets/images/vendor/clients-img-12.png" width="200px" height="90px" alt="">
                    </li>
                    <li>
                        <img src="assets/images/vendor/clients-img-15.png" width="200px" height="90px" alt="">
                    </li>
                </ul>
            
               
            </div>

            
        </div>
        <hr>
        <div class="uk-cover-container uk-height-large uk-position-bottom">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15885.204788591189!2d95.3304455!3d5.5222484!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304039c9d8e950c7%3A0xe71e0f833ab2cf36!2sLUXIMA%20ID!5e0!3m2!1sid!2sid!4v1710239721548!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" uk-cover></iframe>
        </div>
    </div>

    <!-- akhir konten -->
</div>

<?php $__env->stopSection(); ?>




<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/siddiq/Desktop/WEB DEV/LISTING/resources/views/frontend/contact.blade.php ENDPATH**/ ?>