<?php

?>

<div class="case-sidebar default-sidebar">
    <div id="sidebar-primary" class="sidebar">
        <?php if (is_active_sidebar('sidebar-1')) : ?>
            <?php dynamic_sidebar('sidebar-1'); ?>
        <?php else : ?>
            <aside id="search" class="widget widget_search">
                <div class="sidebar-widget search-widget">
                    <form action="https://st.ourhtmldemo.com/new/PureHearts/donation-details.html" method="post" class="search-form">
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
                            <?php
                            // Get the taxonomy's terms
                            $terms = get_terms(
                                array(
                                    'taxonomy'   => 'donation-category',
                                    'hide_empty' => true,
                                )
                            );
                            // Check if any term exists
                            if (!empty($terms) && is_array($terms)) {

                                foreach ($terms as $term) { ?>
                                    <?php
                                    $args = (array(
                                        'post_type' => 'donation',
                                        'cat' => $term->id,
                                    ));
                                    $query = new \WP_Query($args);
                                    $count = $query->found_posts;
                                    ?>
                                    <li><a href="#"><?php echo $term->name; ?><span><?php echo $term->count; ?></span></a></li>

                            <?php

                                }
                            }
                            ?>
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
                                    <a href="donation-details.html"><i class="fas fa-expand-alt"></i></a>
                                </figure>
                            </li>
                            <li>
                                <figure class="image">
                                    <img src="assets/images/case/gallery-2.jpg" alt="">
                                    <a href="donation-details.html"><i class="fas fa-expand-alt"></i></a>
                                </figure>
                            </li>
                            <li>
                                <figure class="image">
                                    <img src="assets/images/case/gallery-3.jpg" alt="">
                                    <a href="donation-details.html"><i class="fas fa-expand-alt"></i></a>
                                </figure>
                            </li>
                            <li>
                                <figure class="image">
                                    <img src="assets/images/case/gallery-4.jpg" alt="">
                                    <a href="donation-details.html"><i class="fas fa-expand-alt"></i></a>
                                </figure>
                            </li>
                            <li>
                                <figure class="image">
                                    <img src="assets/images/case/gallery-5.jpg" alt="">
                                    <a href="donation-details.html"><i class="fas fa-expand-alt"></i></a>
                                </figure>
                            </li>
                            <li>
                                <figure class="image">
                                    <img src="assets/images/case/gallery-6.jpg" alt="">
                                    <a href="donation-details.html"><i class="fas fa-expand-alt"></i></a>
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
                <?php get_search_form(); ?>
            </aside>
        <?php endif; ?>
    </div>
</div>