<?php

/*************
template for displaying donation
 */
get_header();
?>


<section id="boxed_wrapper">
    <!-- Page Title -->
    <!-- sidebar-page-container -->
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="content-one">
                            <div class="upper-box">
                                <?php
                                /* FIRST
 * Note: This function only returns results from the default “category” taxonomy. For custom taxonomies use get_the_terms().
 */
                                $categories = get_the_terms($post->ID, 'blog-category');
                                // now you can view your category in array:
                                // using var_dump( $categories );
                                // or you can take all with foreach:
                                foreach ($categories as $category) {
                                    echo '<span>#' . $category->name . '</span>';
                                }
                                ?>
                                <h2><?php the_title(); ?></h2>
                                <ul class="post-info clearfix">
                                    <li><i class="far fa-user"></i>By <?php the_field('post_author'); ?></li>
                                    <li><i class="far fa-comment"></i>08 Cmts</li>
                                    <li><i class="far fa-eye"></i>25 Views</li>
                                </ul>
                            </div>
                            <figure class="image-box">
                                <img src="<?php echo get_the_post_thumbnail(); ?>" alt="">
                                <span class="post-date"><?php the_field('date'); ?></span>
                            </figure>
                            <div class="text">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="content-two">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                    <figure class="image-box"><img src="assets/images/news/news-15.jpg" alt=""></figure>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 quote-column">
                                    <blockquote>
                                        <div class="icon-box"><i class="fas fa-quote-left"></i></div>
                                        <h3>There are no secrets to success. It is the result of preparation, hard work & learning failure.</h3>
                                        <h4>Dertram Irvin, <span>Journalist</span></h4>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="content-three">
                            <div class="text">
                                <h3>Donate Books to Orphanage</h3>
                                <p>Best we denounce with righteous indignation and dislikes men who are beguiled demoralized by the charms of pleasure of the moment, so that they cannot foresee.</p>
                                <h5>Our charity causes includes:</h5>
                                <ul class="list clearfix">
                                    <li>An effort made for the happiness of others</li>
                                    <li>Doing nothing for others is the undoing of ourselves</li>
                                    <li>It is more agreeable to have the power to give than receive.</li>
                                </ul>
                                <p>Every pain avoided. But in certain circumstances and owing to the claims of duty or the obligation of business it will frequently occur that pleasures have to be repudiated and accepted. The therefore always holds in these matters this principle one rejects dislikes or avoids pleasure itself, because it is pleasure but because those who do not know how.</p>
                            </div>
                        </div>
                        <div class="post-share-option clearfix">
                            <ul class="tags-list pull-left clearfix">
                                <li>
                                    <h5>Tags:</h5>
                                </li>
                                <li><a href="blog-details.html">activities</a></li>
                                <li><a href="blog-details.html">benefits</a></li>
                                <li><a href="blog-details.html">education</a></li>
                            </ul>
                            <ul class="social-links pull-right clearfix">
                                <li><a href="blog-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="blog-details.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="blog-details.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="blog-details.html"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                        <div class="author-box">
                            <figure class="author-thumb"><img src="assets/images/news/author-1.jpg" alt=""></figure>
                            <div class="content-box">
                                <h3>About Richardson</h3>
                                <h6>Visit Blog Page: <a href="blog-details.html">http://my.blog.com</a></h6>
                                <p>Denouncing pleasure and praising pain was born and I will give complete all account of the system & expound.</p>
                                <ul class="social-links clearfix">
                                    <li><a href="blog-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="blog-details.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="blog-details.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav-btn-box clearfix">
                            <div class="single-item text-left pull-left">
                                <figure class="thumb-box"><img src="assets/images/gallery/btn-1.jpg" alt=""></figure>
                                <h5><a href="blog-details.html">Aid for Country: <br />The Charity for Orphans</a></h5>
                                <span>03.03.2021</span>
                            </div>
                            <div class="single-item text-right pull-right">
                                <figure class="thumb-box"><img src="assets/images/gallery/btn-2.jpg" alt=""></figure>
                                <h5><a href="blog-details.html">I Want to Get <br />Every People Volunteer...</a></h5>
                                <span>24.02.2021</span>
                            </div>
                        </div>
                        <div class="comment-box">
                            <div class="group-title">
                                <h3>Comments (02)</h3>
                            </div>
                            <div class="comment">
                                <figure class="thumb-box">
                                    <img src="assets/images/news/comment-1.jpg" alt="">
                                </figure>
                                <div class="comment-inner">
                                    <div class="comment-info clearfix">
                                        <h3>Isaac Herman</h3>
                                        <span class="post-date">05.03.2021 [11.00am]</span>
                                    </div>
                                    <p>How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                                    <a href="blog-details.html" class="reply-btn"><i class="icon-reply"></i>Reply</a>
                                </div>
                            </div>
                            <div class="comment replay-comment">
                                <figure class="thumb-box">
                                    <img src="assets/images/news/comment-2.jpg" alt="">
                                </figure>
                                <div class="comment-inner">
                                    <div class="comment-info clearfix">
                                        <h3>William Cobus</h3>
                                        <span class="post-date">04.03.2021 [10.00am]</span>
                                    </div>
                                    <p>Undertakes laborious physical exercise, except to obtain some advantage from it but who has any right to find fault.</p>
                                    <a href="blog-details.html" class="reply-btn"><i class="icon-reply"></i>Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comments-form-area">
                            <div class="group-title">
                                <h3>Leave a Reply</h3>
                                <p>Your email address will not be published. Required fields are marked *</p>
                            </div>
                            <div class="form-inner">
                                <form method="post" action="https://st.ourhtmldemo.com/new/PureHearts/blog-details.html" class="comment-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Your Comment *"></textarea>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="name" placeholder="Your Name *" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Email *" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <div class="form-group">
                                                <label class="custom-control material-checkbox">
                                                    <input type="checkbox" class="material-control-input">
                                                    <span class="material-control-indicator"></span>
                                                    <span class="description">Save my name, email & website in this browser for the next time I comment.</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar default-sidebar">
                        <div class="sidebar-widget search-widget">
                            <form action="https://st.ourhtmldemo.com/new/PureHearts/blog-details.html" method="post" class="search-form">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Your Keyword . . ." required="">
                                    <button type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="blog-details.html">CONTRIBUTIONS<span>06</span></a></li>
                                    <li><a href="blog-details.html">Environment<span>08</span></a></li>
                                    <li><a href="blog-details.html">Heath & Food<span>03</span></a></li>
                                    <li><a href="blog-details.html">Treatment<span>14</span></a></li>
                                    <li><a href="blog-details.html">National Day<span>12</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget post-widget">
                            <div class="widget-title">
                                <h3>Popular Post</h3>
                            </div>
                            <div class="post-inner">
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-4.jpg" alt=""></a></figure>
                                    <h5><a href="blog-details.html">Aid for Country: The Charity for Orphans</a></h5>
                                    <span class="post-date">03.03.2021</span>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-5.jpg" alt=""></a></figure>
                                    <h5><a href="blog-details.html">I Want to Get Every People Volunteer...</a></h5>
                                    <span class="post-date">24.02.2021</span>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-6.jpg" alt=""></a></figure>
                                    <h5><a href="blog-details.html">The Last Day of World Hunger Month</a></h5>
                                    <span class="post-date">08.01.2021</span>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget tags-widget">
                            <div class="widget-title">
                                <h3>Tag Cloud</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="tags-list clearfix">
                                    <li><a href="blog-details.html">activities</a></li>
                                    <li><a href="blog-details.html">awareness</a></li>
                                    <li><a href="blog-details.html">benefits</a></li>
                                    <li><a href="blog-details.html">education</a></li>
                                    <li><a href="blog-details.html">environment</a></li>
                                    <li><a href="blog-details.html">gift card</a></li>
                                    <li><a href="blog-details.html">heath</a></li>
                                    <li><a href="blog-details.html">protection</a></li>
                                    <li><a href="blog-details.html">women care</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget gallery-widget">
                            <div class="widget-title">
                                <h3>Gallery</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="image-list clearfix">
                                    <li>
                                        <figure class="image">
                                            <img src="assets/images/case/gallery-1.jpg" alt="">
                                            <a href="blog-details.html"><i class="fas fa-expand-alt"></i></a>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure class="image">
                                            <img src="assets/images/case/gallery-2.jpg" alt="">
                                            <a href="blog-details.html"><i class="fas fa-expand-alt"></i></a>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure class="image">
                                            <img src="assets/images/case/gallery-3.jpg" alt="">
                                            <a href="blog-details.html"><i class="fas fa-expand-alt"></i></a>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure class="image">
                                            <img src="assets/images/case/gallery-4.jpg" alt="">
                                            <a href="blog-details.html"><i class="fas fa-expand-alt"></i></a>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure class="image">
                                            <img src="assets/images/case/gallery-5.jpg" alt="">
                                            <a href="blog-details.html"><i class="fas fa-expand-alt"></i></a>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure class="image">
                                            <img src="assets/images/case/gallery-6.jpg" alt="">
                                            <a href="blog-details.html"><i class="fas fa-expand-alt"></i></a>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget subscribe-widget centred">
                            <div class="widget-content">
                                <div class="upper-content" style="background-image: url(assets/images/case/case-30.jpg);">
                                    <div class="icon-box"><i class="icon-email-open-sketched-envelope"></i></div>
                                    <h3>Subscribe Us</h3>
                                    <p>Subscribe us and get latest news and upcoming events.</p>
                                </div>
                                <div class="lower-content">
                                    <form action="https://st.ourhtmldemo.com/new/PureHearts/contact.html" method="post" class="subscribe-form">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Enter email address" required="">
                                            <button type="submit" class="theme-btn btn-one">Subscribe</button>
                                        </div>
                                    </form>
                                    <p><span>*</span>Never share your email with others.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->
</section>

<?php
get_footer();
