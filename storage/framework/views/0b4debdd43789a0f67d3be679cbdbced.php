<?php $__env->startSection('title', 'Listings'); ?>

<?php $__env->startSection('styles'); ?>
    <!-- Additional styles for this page -->
    <style>
        /* Custom styles specific to this page */
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('banner'); ?>
    <img src="<?php echo e(asset('assets/images/banner/21.jpg')); ?>" alt="banner" uk-cover>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="page-content">

<!-- isi content disini -->
    <!-- konten utama -->
    <div class="uk-container">
        <section id="main-section-links" class="row full-width uk-position-relative">
            <div class="">
                <div uk-grid="" class="uk-grid ">
                    <!-- Content Left -->
                    <div class="uk-width-1-1@m">
                        <!-- isi konten -->
                        <div class="uk-card uk-margin-large-top uk-margin-medium"> 
                            <div class="uk-card uk-margin-large-top uk-margin-small-left uk-margin-medium">
                                <div class="uk-card-body uk-padding-remove">
                                    
                                    <article class="uk-article"  uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-article-title; delay: 300; repeat: true">
                                        <!-- form input -->
                                        <div class="uk-container uk-padding-remove uk-overlay">
                                            <form action="" method="get" class="slide-animasi">
                                                <div class="uk-grid" uk-grid>
                                                    
                                                    <div class="uk-width-1-3">
                                                        <input class="uk-input uk-form-width-large uk-form-medium" type="text" name="keyword" id="keyword" aria-label="Input" placeholder="Keyword">
                                                    </div>
                                                    <div class="uk-width-1-3">
                                                        <select id="category" name="category" class="uk-select uk-form-width-large uk-form-medium" aria-label="Select">
                                                            <option value="A">Categori A</option>
                                                            <option value="B">Categori A</option>
                                                            <option value="C">Categori A</option>
                                                            <option value="D">Categori A</option>
                                                            <option value="E">Categori A</option>
                                                        </select>
                                                    </div>
                                                    <div class="uk-width-1-3">
                                                    <select id="location" name="location" class="uk-select uk-form-width-large uk-form-medium" aria-label="Select">
                                                        <option value="A">Location A</option>
                                                        <option value="B">Location A</option>
                                                        <option value="C">Location A</option>
                                                        <option value="D">Location A</option>
                                                        <option value="E">Location A</option>
                                                    </select>
                                                    </div>
                                                
                                                
                                                </div>
                                                
                                            </form> 
                                        </div>
                                        <!-- tags -->
                                        <div class="uk-margin-large-top">
                                            <p class="uk-margin-remove text-spacing2 uk-text-italic text-gold" uk-scrollspy="cls: uk-animation-slide-top; delay: 250; repeat: true">Filter by Tags</p>
                                                <hr class="uk-divider-small">
                                            <div class="uk-flex uk-flex-wrap uk-flex-wrap-around">
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Accessories</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m  uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Food</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Photographers</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Cakes</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Decoration</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Dresses</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Drinks</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Hotels</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Invitations</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Makeup</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Restaurants</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Shoes</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Suits</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">WiFi</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Flower</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Jewellery</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Rings</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Lingerie</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Invitation</label></a>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@m uk-card uk-card-small uk-margin-small-bottom">
                                                    <a><label class="cursor-pointer"><input class="uk-checkbox uk-form-size uk-margin-small-right" type="checkbox">Comfort</label></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- link -->
                                        <div uk-grid class="uk-margin-large-top uk-width-1-1">
                                            <div class="uk-margin">
                                                <div class="uk-flex uk-text-center">
                                                    <div class="uk-padding-small">
                                                        <span class="margin-top text-spacing2"><a href="#" class="uk-text-primary uk-text-small uk-button-text">FILTER RESULTS</a></span>
                                                    </div>
                                                    <div class="uk-padding-small">
                                                        <span class="margin-top text-spacing2"><a href="#" class="uk-text-primary uk-text-small uk-button-text">SAVE SEARCH</a></span>
                                                    </div>
                                                    <div class="uk-padding-small">
                                                        <span class="margin-top text-spacing2"><a href="#" class="uk-text-primary uk-text-small uk-button-text">RESET ALL</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                                                                                            
                                            
                                        </div>
                                    
                                        <hr class="uk-divider-icon uk-margin-medium"> 

                                        <!-- listing -->
                                        <div class="uk-margin">
                                            <p class="text-spacing2 uk-text-italic text-gold" uk-scrollspy="cls: uk-animation-slide-top; delay: 250; repeat: true">6 Results Found</p>
                                            <div class="uk-grid-medium uk-child-width-1-2@m uk-flex-center uk-text-center" uk-grid>
                                                <div>
                                                    <div class="uk-card">
                                                        <div class="uk-card">
                                                            <div class="uk-card-media-top uk-inline uk-cover-container uk-position-relative uk-inline-clip uk-transition-toggle">
                                                                <a href="listings/index.html">
                                                                <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/h1-listing-img-10.jpg" width="1800" height="1200" alt="">
                                                                <div class="uk-margin uk-position-top-left uk-position-small uk-text-primary"><a href="" uk-icon="heart"></a></div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-card-body  uk-text-center">
                                                                <a href="blank.html">
                                                                    <h3 class="uk-card-title uk-margin-remove text-hover-gold">KRISTEN LEVIS</h3>
                                                                    <h6 class="uk-margin-remove">Photo & Video</h6>
                                                                </a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                                                <p><span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="uk-card">
                                                        <div class="uk-card">
                                                            <div class="uk-card-media-top uk-inline uk-cover-container uk-position-relative uk-inline-clip uk-transition-toggle">
                                                                <a href="listings/index.html">
                                                                <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/h1-listing-img-14.jpg" width="1800" height="1200" alt="">
                                                                <div class="uk-margin uk-position-top-left uk-position-small uk-text-primary"><a href="" uk-icon="heart"></a></div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-card-body  uk-text-center">
                                                                <a href="blank.html">
                                                                    <h3 class="uk-card-title uk-margin-remove text-hover-gold">KRISTEN LEVIS</h3>
                                                                    <h6 class="uk-margin-remove">Photo & Video</h6>
                                                                </a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                                                <p><span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="uk-card">
                                                        <div class="uk-card">
                                                            <div class="uk-card-media-top uk-inline uk-cover-container uk-position-relative uk-inline-clip uk-transition-toggle">
                                                                <a href="listings/index.html">
                                                                <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/h1-img-20.jpg" width="1800" height="1200" alt="">
                                                                <div class="uk-margin uk-position-top-left uk-position-small uk-text-primary"><a href="" uk-icon="heart"></a></div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-card-body  uk-text-center">
                                                                <a href="blank.html">
                                                                    <h3 class="uk-card-title uk-margin-remove text-hover-gold">KRISTEN LEVIS</h3>
                                                                    <h6 class="uk-margin-remove">Photo & Video</h6>
                                                                </a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                                                <p><span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="uk-card">
                                                        <div class="uk-card">
                                                            <div class="uk-card-media-top uk-inline uk-cover-container uk-position-relative uk-inline-clip uk-transition-toggle">
                                                                <a href="listings/index.html">
                                                                <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/h1-listing-img-11.jpg" width="1800" height="1200" alt="">
                                                                <div class="uk-margin uk-position-top-left uk-position-small uk-text-primary"><a href="" uk-icon="heart"></a></div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-card-body  uk-text-center">
                                                                <a href="blank.html">
                                                                    <h3 class="uk-card-title uk-margin-remove text-hover-gold">KRISTEN LEVIS</h3>
                                                                    <h6 class="uk-margin-remove">Photo & Video</h6>
                                                                </a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                                                <p><span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="uk-card">
                                                        <div class="uk-card">
                                                            <div class="uk-card-media-top uk-inline uk-cover-container uk-position-relative uk-inline-clip uk-transition-toggle">
                                                                <a href="listings/index.html">
                                                                <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/h1-listing-img-12.jpg" width="1800" height="1200" alt="">
                                                                <div class="uk-margin uk-position-top-left uk-position-small uk-text-primary"><a href="" uk-icon="heart"></a></div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-card-body  uk-text-center">
                                                                <a href="blank.html">
                                                                    <h3 class="uk-card-title uk-margin-remove text-hover-gold">KRISTEN LEVIS</h3>
                                                                    <h6 class="uk-margin-remove">Photo & Video</h6>
                                                                </a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                                                <p><span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="uk-card">
                                                        <div class="uk-card">
                                                            <div class="uk-card-media-top uk-inline uk-cover-container uk-position-relative uk-inline-clip uk-transition-toggle">
                                                                <a href="listings/index.html">
                                                                <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/h1-listing-img-13.jpg" width="1800" height="1200" alt="">
                                                                <div class="uk-margin uk-position-top-left uk-position-small uk-text-primary"><a href="" uk-icon="heart"></a></div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-card-body  uk-text-center">
                                                                <a href="blank.html">
                                                                    <h3 class="uk-card-title uk-margin-remove text-hover-gold">KRISTEN LEVIS</h3>
                                                                    <h6 class="uk-margin-remove">Photo & Video</h6>
                                                                </a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                                                <p><span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                    <span uk-icon="star"> </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            
                                        </div>

                                        <div class="uk-width-1-4 uk-align-center ">
                                            <button class="btn-animate uk-button uk-button-primary uk-form-width-medium uk-form-large uk-align-left uk-margin-remove-adjacent uk-width-1-1 uk-margin-large-bottom " name="search" type="submit">
                                                <span class="uk-margin-small-left uk-position-relative uk-text-uppercase uk-icon">LOAD MORE</span> 
                                            </button>
                                        </div>
                                    </article>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- akhir konten --> 


<?php $__env->stopSection(); ?>





<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/siddiq/Desktop/WEB DEV/LISTING/resources/views/frontend/listings/listing.blade.php ENDPATH**/ ?>