<!--Top Area-->
<div class="top_area uk-visible@m">
    <div class="widget_holder top_area_left">
        <div class="widget top_area_text_left">
            <div class="text_widget">
                <span>hello@luxima.id</span>
            </div>
        </div>
    </div>
    <div class="widget_holder top_area_center">
        <div class="widget top_area_text_center">
            <div class="text_widget">
                <span>Temukan apa yang anda cari</span>
            </div>
        </div>
    </div>
    <div class="widget_holder top_area_right">
            <?php if(Auth::check()): ?>
            <div class="widget top_area_text_right">
                <div id="user-opener" class="login_opener top-bar-widget"> 
                    <div class="login-opener user-logged--in">
                        <a href="<?php echo e(route('profile')); ?>" class="login-opener">
                            <span class="login-opener-text"><?php echo e(Auth::user()->name); ?></span>
                            <span uk-icon="icon: users">
                        </a> 
                    </div>
                </div> 
            </div>
            <?php else: ?>
            <div class="widget top_area_text_right">
                <div id="login-opener" class="login_opener top-bar-widget"> 
                    <div class="login-opener user-logged--out">
                        <a href="#modal-login" class="login-opener" uk-toggle>
                            <span class="login-opener-text">Log In</span>
                            <span uk-icon="icon: users">
                        </a> 
                    </div>
                </div> 
            </div>
            <?php endif; ?>
            <div class="widget top_area_text_right">
                <div id="offcanvas-flip" class=" top-bar-widget"> 
                    <div class="widget">
                        <a class="login-opener" href="#offcanvas-menu"  uk-toggle  role="button">
                            <span uk-icon="icon: menu">
                            </span>
                        </a>
                    </div>
                </div> 
            </div>
    </div>
</div>



<!--Header PC-->
<div id="page-header" class="page-header">
    <div id="page-header-inner" class="header-centered uk-light uk-container uk-margin-large-top uk-container-large uk-text-center uk-visible@m uk-inline">
        <a itemprop="url" class="header-logo-link uk-position-center " href="<?php echo e(route('index')); ?>" rel="home">
            <img src="<?php echo e(asset('assets/images/luxima.png')); ?>" class="qodef-header-logo-image qodef--main" alt="logo main" 
            itemprop="image"> 
        </a>
        <div class="uk-position-absolute top_nav uk-position-center uk-overlay" uk-grid>
            <div class="uk-width-1-4 ">
                <div id="social_icons_group" class="widget" data-area="header-widget-two"> 
                    <div class="social-icons-group">
                        <a href="https://www.facebook.com/luxima.photo" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook" style="color:#a78656" target="_blank"></a>
                        <a href="https://www.instagram.com/luxima.id" class="uk-icon-button  uk-margin-small-right" uk-icon="instagram" style="color:#a78656" target="_blank"></a>
                        <a href="https://www.twitter.com/luximaid" class="uk-icon-button  uk-margin-small-right" uk-icon="twitter" style="color:#a78656" target="_blank"></a>
                        <a href="https://www.tiktok.com/@luxima.id" class="uk-icon-button  uk-margin-small-right" uk-icon="tiktok" style="color:#a78656" target="_blank"></a>
                        <a href="https://www.youtube.com/@luxima-id" class="uk-icon-button  uk-margin-small-right" uk-icon="youtube" style="color:#a78656" target="_blank"></a>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <nav class="uk-navbar-container uk-navbar-transparent header-navigation uk-dropnav" uk-dropnav="align: center">
                    <ul id="menu-global" class="menu uk-tab uk-subnav uk-flex-center">
                        <li class="menu_item uk-active">
                            <a href="<?php echo e(route('index')); ?>">
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="menu_item">
                            <a href>Pages <span uk-drop-parent-icon></span></a>
                            <div class="uk-dropdown">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li class="uk-active"><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                                    <li><a href="<?php echo e(route('gallery')); ?>">Gallery</a></li>
                                    <li><a href="<?php echo e(route('packages')); ?>">Package List</a></li>
                                    <li><a href="<?php echo e(route('howItWork')); ?>">How it Work</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu_item">
                            <a href>Shop <span uk-drop-parent-icon></span></a>
                            <div class="uk-dropdown">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li class="uk-active"><a href="<?php echo e(route('shop')); ?>">Shop</a></li>
                                    <li><a href="shop-single">Layout</a></li>
                                    <li><a href="shop-single">Shop Single</a></li>
                                    <li><a href="shop-single">Shop Page</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu_item">
                            <a href>Listings <span uk-drop-parent-icon></span></a>
                            <div class="uk-dropdown">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li class="uk-active"><a href="<?php echo e(route('listing')); ?>">Listing </a></li>
                                    <li><a href="listing-maps">Listing Maps</a></li>
                                    <li><a href="listing-list">Listing List Compact</a></li>
                                    <li><a href="error404">404</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu_item">
                            <a href>Blog <span uk-drop-parent-icon></span></a>
                            <div class="uk-dropdown">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li class="uk-active"><a href="<?php echo e(route('blog')); ?>">Blog </a></li>
                                    <li><a href="sidebar-right">Right Sidebar</a></li>
                                    <li><a href="sidebar-left">Left Sidebar</a></li>
                                    <li><a href="no-sidebar">No Sidebar</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu_item">
                            <a href="<?php echo e(route('contact')); ?>">
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="uk-width-1-4">
                <div class="widget ">
                    <div class="dropdown-cart ">
                        <div class="dropdown-cart-inner m-inner">
                            <a itemprop="url" class="" href="https://luxima-id.com/">
                                <span class="">Cart</span>
                                <span class="">(0)</span>
                            </a>	
                        </div>    
                    </div>                           
                </div>
               
                <div class="widget">
                    <div id="" class="uk-dark" data-area="header-widget-one">
                        <a href="javascript:void(0)" class="" type="button">
                            <span class="search-opener-text">Search</span> 
                            <span class="m-icon qodef--open">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                            <path fill="#646464" d="M13.977,13.245c0.795-1.24,1.142-2.726,0.975-4.183c-0.37-3.235-3.102-5.675-6.354-5.675
                                c-0.243,0-0.489,0.014-0.732,0.042C6.168,3.622,4.647,4.467,3.582,5.807c-1.065,1.34-1.545,3.012-1.352,4.708
                                c0.369,3.234,3.102,5.674,6.356,5.674c0.242,0,0.488-0.015,0.73-0.043c1.698-0.193,3.216-1.037,4.28-2.377l4.268,2.838l0.021,0.015
                                l0.357-0.537L13.977,13.245z M9.244,15.507c-0.219,0.024-0.441,0.037-0.66,0.037c-2.924,0-5.379-2.192-5.711-5.102
                                C2.699,8.917,3.13,7.413,4.088,6.208s2.325-1.964,3.85-2.138c0.218-0.025,0.439-0.038,0.658-0.038c2.923,0,5.38,2.193,5.714,5.103
                                c0.174,1.525-0.259,3.028-1.217,4.233C12.137,14.573,10.77,15.332,9.244,15.507z M14.234,8.545c0.002,0.003,0.002,0.007,0.004,0.011
                                C14.236,8.552,14.236,8.548,14.234,8.545z M5.264,5.063c0.012-0.009,0.025-0.017,0.038-0.026C5.289,5.046,5.276,5.055,5.264,5.063z
                                M6.237,4.51C6.254,4.502,6.272,4.494,6.29,4.487C6.272,4.494,6.254,4.502,6.237,4.51z M7.302,4.156
                                c0.036-0.008,0.073-0.016,0.11-0.023C7.375,4.14,7.338,4.147,7.302,4.156z M4.399,5.814C4.425,5.788,4.45,5.762,4.476,5.735
                                C4.45,5.762,4.425,5.788,4.399,5.814z M11.919,14.512c-0.013,0.01-0.024,0.02-0.039,0.027
                                C11.895,14.529,11.906,14.521,11.919,14.512z M10.945,15.066c-0.019,0.008-0.036,0.016-0.055,0.022
                                C10.909,15.082,10.928,15.074,10.945,15.066z M9.885,15.42c-0.041,0.01-0.081,0.018-0.122,0.025
                                C9.804,15.438,9.845,15.43,9.885,15.42z M12.785,13.759c-0.027,0.028-0.055,0.058-0.081,0.084
                                C12.73,13.814,12.758,13.787,12.785,13.759z"></path>
                            </svg> 
                            </span>
                        </a>
                        <div uk-dropdown="mode: click" class="uk-padding-remove" style="color: #a78656; background: none;">
                            <form id="form_search" action="search" method="get">
                            <div class="uk-margin uk-margin-remove">
                                <div class="uk-inline">
                                    <a class="uk-form-icon uk-form-icon-flip" href="javascript:void(0)" onclick="document.getElementById('form_search').submit();" uk-icon="icon: search"></a>
                                    <input class="uk-input" type="text" name="q" aria-label="Clickable icon" placeholder="Search ">
                                </div>
                            </div>
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Header Mobile-->
<div class="header-mobile uk-position-relative uk-hidden@m">
<div class="uk-child-width-expand uk-grid-small" uk-grid >
    <div class="uk-card uk-width-expand uk-margin-large-left">
        <a itemprop="url"  href="<?php echo e(route('index')); ?>" rel="home">
            <img class="logo-mobile" src="<?php echo e(asset('assets/images/luxima.png')); ?>" class="qodef-header-logo-image qodef--main" alt="logo main" 
            itemprop="image"> 
        </a>
    </div>
    <div class="uk-card uk-width-1-6 uk-margin-left uk-text-right uk-text-top">
        <a href="#modal-login" uk-icon="users" uk-toggle></a>
    </div>
    <div class="uk-card uk-width-1-6 uk-margin-left uk-text-center">
        <nav class="uk-navbar-container uk-navbar-transparent">
            <div class="uk-container">
                <div uk-navbar="dropbar: true; dropbar-anchor: !.header-mobile; target-y: !.header-mobile">
        
                    <div class="uk-navbar">
                        <a class="uk-navbar-toggle uk-navbar-toggle-animate nav-height" uk-navbar-toggle-icon href="#"></a>
                        <div class="uk-navbar-dropdown" uk-drop="boundary: !.header-mobile; stretch: x; flip: false; mode: click">
                            
                                <ul class="uk-nav-default" uk-nav>
                                    <li class="uk-active"><a href="<?php echo e(route('index')); ?>" class="uk-text-uppercase">HOME</a></li>
                                    
                                    <li class="uk-parent">
                                        <a href="#" class="uk-text-uppercase">Pages<span uk-nav-parent-icon></span></a>
                                        
                                            <ul class="uk-nav-sub">
                                                <li class="uk-active"><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                                                <li><a href="<?php echo e(route('gallery')); ?>">Gallery</a></li>
                                                <li><a href="<?php echo e(route('packages')); ?>">Package List</a></li>
                                                <li><a href="<?php echo e(route('howItWork')); ?>">How it Work</a></li>
                                            </ul>
                                        
                                    </li>
                                    <li class="uk-parent">
                                        <a href="#" class="uk-text-uppercase">Shop <span uk-nav-parent-icon></span></a>
                                        
                                            <ul class="uk-nav-sub">
                                                <li class="uk-active"><a href="<?php echo e(route('shop')); ?>">Shop</a></li>
                                                <li><a href="layout.html">Layout</a></li>
                                                <li><a href="shop-detail.html">Shop Single</a></li>
                                                <li><a href="shop-page.html">Shop Page</a></li>
                                            </ul>
                                        
                                    </li>
                                    <li class="uk-parent">
                                        <a href="#" class="uk-text-uppercase">Listings <span uk-nav-parent-icon></span></a>
                                        
                                            <ul class="uk-nav-sub">
                                                <li class="uk-active"><a href="<?php echo e(route('listing')); ?>">Listing </a></li>
                                                <li><a href="listing-maps">Listing Maps</a></li>
                                                <li><a href="listing-list">Listing List Compact</a></li>
                                                <li><a href="listing-location">Location Filter</a></li>
                                            </ul>
                                        
                                    </li>
                                    <li class="uk-parent">
                                        <a href="#" class="uk-text-uppercase">Blog <span uk-nav-parent-icon></span></a>
                                        
                                            <ul class="uk-nav-sub">
                                                <li class="uk-active"><a href="<?php echo e(route('blog')); ?>">Blog </a></li>
                                                <li><a href="sidebar-right.html">Right Sidebar</a></li>
                                                <li><a href="sidebar-left.html">Left Sidebar</a></li>
                                                <li><a href="no-sidebar.html">No Sidebar</a></li>
                                            </ul>
                                        
                                    </li>
                                    <li class="uk-active"><a href="<?php echo e(route('contact')); ?>" class="uk-text-uppercase">Contact</a></li>

                                    <li class="uk-nav-header">OTHER</li>
                                    <li><a href="https://www.facebook.com/luxima.photo" target="_blank"><span class="uk-margin-small-right" uk-icon="icon: facebook"></span> Facebook</a></li>
                                    <li><a href="https://www.instagram.com/luxima.id/" target="_blank"><span class="uk-margin-small-right" uk-icon="icon: instagram"></span> Instagram</a></li>
                                    <li><a href="https://www.twitter.com/luximaid" target="_blank"><span class="uk-margin-small-right" uk-icon="icon: twitter"></span> Twitter</a></li>
                                    <li><a href="https://www.tiktok.com/@luxima.id" target="_blank"><span class="uk-margin-small-right" uk-icon="icon: tiktok"></span> Tiktok</a></li>
                                    <li><a href="https://www.youtube.com/@luxima-id" target="_blank"><span class="uk-margin-small-right" uk-icon="icon: youtube"></span> Youtube</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: sign-in"></span> Register</a></li>
                                </ul>
                            
                                
                        </div>
                    </div>
        
                </div>
            </div>
        </nav>
    </div>
    
</div>


</div>


<?php /**PATH /Users/siddiq/Desktop/WEB DEV/LISTING/resources/views/frontend/partials/header-app.blade.php ENDPATH**/ ?>