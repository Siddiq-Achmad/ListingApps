    <!-- MODAL -->
    <div id="modal-login" class="uk-modal-full uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-margin-auto-vertical">
            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
            <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                <div class="uk-background-cover uk-visible@s" style="background-image: url('assets/images/wedding/alexandra-gornago-o2zFDffQnDM-unsplash.jpg');" uk-height-viewport></div>
                <div class="uk-padding-large">
                    <h1>Log in</h1>
                    <p>Welcome to LUXIMA Directory & Listing App </p>
                    <form id="form_login" class="uk-form-stacked uk-width-1-2@s" action="<?php echo e(route('login')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <fieldset class="uk-fieldset">

                            <legend class="uk-legend">Sign In</legend>
    
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-s-email">Email</label>
                                <input class="uk-input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> uk-form-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="form-s-email" type="email"  value="<?php echo e(old('email', 'admin@luxima.id')); ?>" id="username" name="email" placeholder="Enter username">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-s-password">Password</label>
                                <input class="uk-input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> uk-form-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="form-s-password" type="password"  name="password" placeholder="Enter password" id="password-input" value="12345678" >
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="uk-margin">
                                <button type="submit" class="uk-button uk-button-primary">Log in</button>
                                <button type="reset" class="uk-button uk-button-default uk-modal-close" >Cancel</button>
                            </div>
                            <div class="uk-text-light">
                                Not registered? <a href="<?php echo e(route('register')); ?>" class="login-opener" uk-switcher-item="0" uk-toggle>Sign Up</a>
                              </div>
                        </fieldset>
                            
    
                    </form>
                </div>
            </div>
        </div>
    </div>
    



    <div id="offcanvas-menu" uk-offcanvas="flip: true" class="uk-offcanvas" style="" tabindex="-1">
      <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-text-center" role="dialog" style="">
          
          <button class="uk-offcanvas-close uk-close-large uk-icon uk-close" type="button" uk-close="" uk-toggle="cls: uk-close-large; mode: media; media: @s" aria-label="Close"><svg width="20" height="20" viewBox="0 0 20 20"><line fill="none" stroke="#000" stroke-width="1.4" x1="1" y1="1" x2="19" y2="19"></line><line fill="none" stroke="#000" stroke-width="1.4" x1="19" y1="1" x2="1" y2="19"></line></svg></button>
  
          <div class="uk-margin">
              <img src="<?php echo e(asset('assets/images/luxima.png')); ?>" class="" alt="logo main"/>
          </div>
          <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical" uk-nav="">
              <li class="uk-active"><a href="<?php echo e(route('index')); ?>">HOME</a></li>
              <li class="uk-parent">
                  <a href="#" id="uk-nav-9" role="button" aria-controls="uk-nav-10" aria-expanded="false" aria-disabled="false">PAGES <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"><svg width="14" height="14" viewBox="0 0 14 14"><polyline fill="none" stroke="#000" stroke-width="1.1" points="1 4 7 10 13 4"></polyline></svg></span></a>
                  <ul class="uk-nav-sub" hidden="" id="uk-nav-10" role="region" aria-labelledby="uk-nav-9">
                      <li role="presentation"><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                      <li role="presentation"><a href="<?php echo e(route('gallery')); ?>">Gallery</a></li>
                      <li role="presentation"><a href="<?php echo e(route('packages')); ?>">Package List</a></li>
                      <li role="presentation"><a href="<?php echo e(route('howItWork')); ?>">How it Work</a></li>
                      
                  </ul>
              </li>
              <li class="uk-parent">
                  <a href="#" id="uk-nav-9" role="button" aria-controls="uk-nav-10" aria-expanded="false" aria-disabled="false">LISTINGS <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"><svg width="14" height="14" viewBox="0 0 14 14"><polyline fill="none" stroke="#000" stroke-width="1.1" points="1 4 7 10 13 4"></polyline></svg></span></a>
                  <ul class="uk-nav-sub" hidden="" id="uk-nav-10" role="region" aria-labelledby="uk-nav-9">
                      <li role="presentation"><a href="<?php echo e(route('listing')); ?>">Listing</a></li>
                      <li role="presentation"><a href="#">Listing Maps</a></li>
                      <li role="presentation"><a href="#">Listing Detail</a></li>
                      <li role="presentation"><a href="#">Listing Category</a></li>
                      
                  </ul>
              </li>
              <li class="uk-parent">
                  <a href="#" id="uk-nav-9" role="button" aria-controls="uk-nav-10" aria-expanded="false" aria-disabled="false">BLOGS <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"><svg width="14" height="14" viewBox="0 0 14 14"><polyline fill="none" stroke="#000" stroke-width="1.1" points="1 4 7 10 13 4"></polyline></svg></span></a>
                  <ul class="uk-nav-sub" hidden="" id="uk-nav-10" role="region" aria-labelledby="uk-nav-9">
                      <li role="presentation"><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
                      <li role="presentation"><a href="#">Listing Maps</a></li>
                      <li role="presentation"><a href="#">Listing Detail</a></li>
                      <li role="presentation"><a href="#">Listing Category</a></li>
                      
                  </ul>
              </li>
              <li class="uk-parent">
                  <a href="#" id="uk-nav-9" role="button" aria-controls="uk-nav-10" aria-expanded="false" aria-disabled="false">SHOP <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"><svg width="14" height="14" viewBox="0 0 14 14"><polyline fill="none" stroke="#000" stroke-width="1.1" points="1 4 7 10 13 4"></polyline></svg></span></a>
                  <ul class="uk-nav-sub" hidden="" id="uk-nav-10" role="region" aria-labelledby="uk-nav-9">
                      <li role="presentation"><a href="<?php echo e(route('shop')); ?>">Shop</a></li>
                      <li role="presentation"><a href="#">Listing Maps</a></li>
                      <li role="presentation"><a href="#">Listing Detail</a></li>
                      <li role="presentation"><a href="#">Listing Category</a></li>
                      
                  </ul>
              </li>
              
              <li><a href="<?php echo e(route('contact')); ?>">CONTACT</a></li>
          </ul>
  
          <div>
              <div class="uk-grid-small uk-child-width-auto uk-flex-inline uk-grid uk-grid-stack" uk-grid="">
                  <div class="uk-first-column">
                      <a class="uk-icon-button uk-icon" href="https://www.facebook.com/luxima.photo" uk-icon="icon: facebook"><svg width="20" height="20" viewBox="0 0 20 20"><path d="M11,10h2.6l0.4-3H11V5.3c0-0.9,0.2-1.5,1.5-1.5H14V1.1c-0.3,0-1-0.1-2.1-0.1C9.6,1,8,2.4,8,5v2H5.5v3H8v8h3V10z"></path></svg></a>
                  </div>
                  <div>
                      <a class="uk-icon-button uk-icon" href="https://www.instagram.com/luxima.id" uk-icon="icon: instagram"><svg width="20" height="20" viewBox="0 0 20 20"><path d="M13.55,1H6.46C3.45,1,1,3.44,1,6.44v7.12c0,3,2.45,5.44,5.46,5.44h7.08c3.02,0,5.46-2.44,5.46-5.44V6.44 C19.01,3.44,16.56,1,13.55,1z M17.5,14c0,1.93-1.57,3.5-3.5,3.5H6c-1.93,0-3.5-1.57-3.5-3.5V6c0-1.93,1.57-3.5,3.5-3.5h8 c1.93,0,3.5,1.57,3.5,3.5V14z"></path><circle cx="14.87" cy="5.26" r="1.09"></circle><path d="M10.03,5.45c-2.55,0-4.63,2.06-4.63,4.6c0,2.55,2.07,4.61,4.63,4.61c2.56,0,4.63-2.061,4.63-4.61 C14.65,7.51,12.58,5.45,10.03,5.45L10.03,5.45L10.03,5.45z M10.08,13c-1.66,0-3-1.34-3-2.99c0-1.65,1.34-2.99,3-2.99s3,1.34,3,2.99 C13.08,11.66,11.74,13,10.08,13L10.08,13L10.08,13z"></path></svg></a>
                  </div>
                  <div>
                      <a class="uk-icon-button uk-icon" href="mailto:hello@luxima.id" uk-icon="icon: mail"><svg width="20" height="20" viewBox="0 0 20 20"><polyline fill="none" stroke="#000" points="1.4,6.5 10,11 18.6,6.5"></polyline><path d="M 1,4 1,16 19,16 19,4 1,4 Z M 18,15 2,15 2,5 18,5 18,15 Z"></path></svg></a>
                  </div>
                  <div>
                      <a class="uk-icon-button uk-icon" href="tel:+628116111662" uk-icon="icon: receiver"><svg width="20" height="20" viewBox="0 0 20 20"><path fill="none" stroke="#000" stroke-width="1.01" d="M6.189,13.611C8.134,15.525 11.097,18.239 13.867,18.257C16.47,18.275 18.2,16.241 18.2,16.241L14.509,12.551L11.539,13.639L6.189,8.29L7.313,5.355L3.76,1.8C3.76,1.8 1.732,3.537 1.7,6.092C1.667,8.809 4.347,11.738 6.189,13.611"></path></svg></a>
                  </div>
              </div>
          </div>
  
      </div>
  </div>





    <div id="modal-search" class="uk-modal-full uk-modal menu-full" uk-modal tabindex="-1">
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport="" role="dialog" aria-modal="true" style="min-height: calc(927px);">

            <button class="uk-modal-close-full uk-close-large uk-icon uk-close" type="button" uk-close="" aria-label="Close"><svg width="20" height="20" viewBox="0 0 20 20"><line fill="none" stroke="#000" stroke-width="1.4" x1="1" y1="1" x2="19" y2="19"></line><line fill="none" stroke="#000" stroke-width="1.4" x1="19" y1="1" x2="1" y2="19"></line></svg></button>

            <div>

                <ul class="uk-nav-primary uk-nav-center uk-nav" uk-nav="">
                    <li class="uk-active"><a href="<?php echo e(route('index')); ?>">HOME</a></li>
                    <li class="uk-parent"><a href="#">PAGES</a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                            <li><a href="<?php echo e(route('gallery')); ?>">Gallery</a></li>
                            <li><a href="<?php echo e(route('packages')); ?>">Package List</a></li>
                            <li><a href="<?php echo e(route('howItWork')); ?>">How it Work</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent"><a href="#">SHOP</a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?php echo e(route('shop')); ?>">Shop</a></li>
                            <li><a href="#">Layout</a></li>
                            <li><a href="#">Shop Single</a></li>
                            <li><a href="#">Shop Page</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent"><a href="#">LISTING</a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?php echo e(route('listing')); ?>">Listing</a></li>
                            <li><a href="#">Listing Maps</a></li>
                            <li><a href="#">Listing Single</a></li>
                            <li><a href="#">Listing Page</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent"><a href="#">BLOG</a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?php echo e(route('blog')); ?>">Blog Detail</a></li>
                            <li><a href="#">Right Sidebar</a></li>
                            <li><a href="#">Left Sidebar</a></li>
                            <li><a href="#">No Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo e(route('contact')); ?>">CONTACT</a></li>
                </ul>

                <div class="uk-margin">
                    <form class="uk-search uk-search-large">
                        <input class="uk-search-input uk-text-center" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>

            </div>

        </div>
    </div>

   <?php /**PATH /Users/siddiq/Desktop/WEB DEV/LISTING/resources/views/frontend/partials/modals.blade.php ENDPATH**/ ?>