<?php

/*************
template for displaying donation
 */
get_header();
?>


<section id="boxed_wrapper">
    <!-- Page Title -->
    <section class="page-title details-page" style="background-image: url(assets/images/background/12.jpg);">
        <div class="auto-container">
            <div class="content-box">

                <div class="title">

                    <?php
                    /* FIRST
 * Note: This function only returns results from the default “category” taxonomy. For custom taxonomies use get_the_terms().
 */
                    $categories = get_the_terms($post->ID, 'donation-category');
                    // now you can view your category in array:
                    // using var_dump( $categories );
                    // or you can take all with foreach:
                    foreach ($categories as $category) {
                        echo '<h6>#' . $category->name . '</h6>';
                    } ?>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- case-details -->
    <section class="case-details">
        <div class="auto-container">
            <div class="upper-box">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                        <div class="donate-inner clearfix">
                            <div class="pattern-layer-2" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                            <div class="amount-box">
                                <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                <h5>Charity Raised</h5>
                                <div class="price">$<?php the_field('raised_amount'); ?> <span>/ $<?php the_field('charity_target_amount'); ?></span></div>
                            </div>
                            <div class="percentage-box">
                                <div class="bar"></div>
                                <h5>53%</h5>
                            </div>
                            <div class="btn-box">
                                <button class="donate-box-btn">Donate Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                        <ul class="info-box clearfix">
                            <li>
                                <i class="far fa-calendar-alt"></i>
                                <h5>Days</h5>
                                <p><?php the_field('days'); ?> Days Left</p>
                            </li>
                            <li>
                                <i class="fas fa-users"></i>
                                <h5><?php the_field('suppoters'); ?>+</h5>
                                <p>Suppoters</p>
                            </li>
                            <li class="share">
                                <i class="fas fa-share-alt"></i>
                                <h5><a href="index.html">Share 👍</a></h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="lower-box">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="case-details-content">
                            <div class="content-one">
                                <figure class="image-box"><?php echo get_the_post_thumbnail(); ?></figure>
                                <div class="text">

                                    <h3>Project for Poor Rural Child</h3>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>

                            <div class="donate-content">
                                <div class="title">
                                    <h3>Make Your Donation</h3>
                                    <p>You have the power to save lives. Help us create the change today!</p>
                                </div>
                                <form action="https://st.ourhtmldemo.com/new/PureHearts/index.html" method="post" class="default-form">
                                    <div class="donate-box">
                                        <div class="donate-option">
                                            <h3>How Much?</h3>
                                            <ul class="donate-list clearfix">
                                                <li>
                                                    <input type="radio" id="donate-amount-7" name="donate-amount" checked="checked" />
                                                    <label for="donate-amount-7" data-amount="1000">$10</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="donate-amount-8" name="donate-amount" />
                                                    <label for="donate-amount-8" data-amount="2000">$20</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="donate-amount-9" name="donate-amount" />
                                                    <label for="donate-amount-9" data-amount="3000">$50</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="donate-amount-10" name="donate-amount" />
                                                    <label for="donate-amount-10" data-amount="4000">$100</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="donate-amount-11" name="donate-amount" />
                                                    <label for="donate-amount-11" data-amount="5000">$500</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="donate-amount-12" name="donate-amount" />
                                                    <label for="donate-amount-12" data-amount="5000">$1000</label>
                                                </li>
                                            </ul>
                                            <div class="other-amount">
                                                <div class="text">
                                                    <h4>Like to Donate</h4>
                                                    <p>Enter your custom amount</p>
                                                </div>
                                                <div class="amount-box">
                                                    <div class="item-quantity"><input class="quantity-spinner" type="text" value="750" name="quantity"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="payment-option">
                                            <h3>Choose Payment Option</h3>
                                            <ul class="payment-list clearfix">
                                                <li>
                                                    <input type="radio" id="payment-method-4" name="payment-method" checked="checked" />
                                                    <label for="payment-method-4">Net Banking</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="payment-method-5" name="payment-method" />
                                                    <label for="payment-method-5">Credit - Debit Card</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="payment-method-6" name="payment-method" />
                                                    <label for="payment-method-6">Offline Payment</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-inner">
                                        <h3>Donar Information</h3>
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Your Name <span>*</span></label>
                                                    <input type="text" name="name" placeholder="example name" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Email Address <span>*</span></label>
                                                    <input type="email" name="email" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" name="address" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <label class="custom-control material-checkbox">
                                                        <input type="checkbox" class="material-control-input">
                                                        <span class="material-control-indicator"></span>
                                                        <span class="description">I would like to donate automatically repeat each month</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                <div class="form-group message-btn">
                                                    <button type="submit" class="theme-btn btn-one">Donate Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- case-details end -->
</section>

<?php
get_footer();
