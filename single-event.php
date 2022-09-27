<?php

/*************
template for displaying donation
 */
get_header();
?>


<section id="boxed_wrapper">
    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/12.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>Event Details</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- event-details -->
    <section class="event-details">
        <div class="auto-container">
            <div class="event-details-content">
                <div class="upper-box centred">
                    <h2><?php the_title(); ?></h2>
                    <ul class="events-info clearfix">
                        <li><i class="far fa-calendar"></i><?php the_field('date'); ?></li>
                        <li><i class="far fa-clock"></i><?php the_field('time'); ?></li>
                        <li><i class="far fa-map"></i><?php the_field('location'); ?></li>
                    </ul>
                    <figure class="image-box"><img src="<?php echo get_the_post_thumbnail(); ?>" alt=""></figure>
                </div>
                <div class="tabs-box">
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1"><i class="icon-right-arrow"></i>Event Overview</li>
                            <li class="tab-btn" data-tab="#tab-2"><i class="icon-right-arrow"></i>Special Participants</li>
                            <li class="tab-btn" data-tab="#tab-3"><i class="icon-right-arrow"></i>Contact Details</li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="overview-inner">
                                <div class="content-one">
                                    <?php the_content(); ?>
                                </div>
                                <!-- <div class="content-two">
                                    <h3>What will You Learn?</h3>
                                    <ul class="list clearfix">
                                        <li>How to use social media to reach local, national and international audiences</li>
                                        <li>How to set up and market events, using online tools, so you no longer depend on venues or festivals to organise on your behalf</li>
                                        <li>How to create and run online shows, adapt your performance techniques and manage your audience throughout a show</li>
                                        <li>Takeaway training material</li>
                                        <li>Mentoring and troubleshooting and post-training support from Jason</li>
                                    </ul>
                                </div> -->
                                <div class="lower-box clearfix">
                                    <div class="btn-box pull-left">
                                        <a href="event-details.html" class="theme-btn btn-one">Register</a>
                                        <span>$<?php the_field('registration_fee'); ?></span>
                                    </div>
                                    <div class="share-option pull-right">
                                        <h5>Share With Friends<a href="event-details.html"><i class="fas fa-share-alt"></i></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="participants-inner">
                                <h3>Judges & Chief Guests</h3>
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <figure class="image-box"><img src="assets/images/events/events-16.jpg" alt=""></figure>
                                            <span class="designation">Professor</span>
                                            <h3>Benjie Alphonso</h3>
                                            <ul class="social-links clearfix">
                                                <li><a href="event-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="event-details.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="event-details.html"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <figure class="image-box"><img src="assets/images/events/events-17.jpg" alt=""></figure>
                                            <span class="designation">Actress</span>
                                            <h3>Marian Lenora</h3>
                                            <ul class="social-links clearfix">
                                                <li><a href="event-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="event-details.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="event-details.html"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <figure class="image-box"><img src="assets/images/events/events-18.jpg" alt=""></figure>
                                            <span class="designation">Socialist</span>
                                            <h3>Harriat Ellizabeth</h3>
                                            <ul class="social-links clearfix">
                                                <li><a href="event-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="event-details.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="event-details.html"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <figure class="image-box"><img src="assets/images/events/events-19.jpg" alt=""></figure>
                                            <span class="designation">Doctor</span>
                                            <h3>Herman Gordon</h3>
                                            <ul class="social-links clearfix">
                                                <li><a href="event-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="event-details.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="event-details.html"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-box clearfix">
                                    <div class="btn-box pull-left">
                                        <a href="event-details.html" class="theme-btn btn-one">Register</a>
                                        <span>$180</span>
                                    </div>
                                    <div class="share-option pull-right">
                                        <h5>Share With Friends<a href="event-details.html"><i class="fas fa-share-alt"></i></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
                            <div class="contact-inner">
                                <h3>Book for Participate in Event</h3>
                                <div class="row clearfix">
                                    <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                                        <div class="form-inner">
                                            <form action="https://st.ourhtmldemo.com/new/PureHearts/contact.html" method="post" class="default-form">
                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Your Name</label>
                                                            <input type="text" name="name" placeholder="example name" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Email Address</label>
                                                            <input type="email" name="email" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Phone Num</label>
                                                            <input type="text" name="phone" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" name="address" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>No.of Partcipants</label>
                                                            <input type="text" name="partcipants" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Payment via</label>
                                                            <div class="select-box">
                                                                <select class="wide">
                                                                    <option data-display="Google Pay">Google Pay</option>
                                                                    <option value="1">Apple Pay</option>
                                                                    <option value="2">Payple</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Message</label>
                                                            <textarea name="message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                        <div class="form-group message-btn">
                                                            <button type="submit" class="theme-btn btn-one">Register</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-column">
                                        <div class="sidebar-inner">
                                            <div class="event-organizer">
                                                <h3>Event Organizer</h3>
                                                <ul class="list-item clearfix">
                                                    <li>Organizer <p>Herman Gordon</p>
                                                    </li>
                                                    <li>Phone <p><a href="tel:4488845678">+44 888 45 678</a></p>
                                                    </li>
                                                    <li>Email <p><a href="mailto:mail@info.com">mail@example.com</a></p>
                                                    </li>
                                                    <li>Social <p><a href="event-details.html">Facebook</a>&nbsp;<a href="event-details.html">Twitter</a></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="map-inner">
                                                <div class="google-map" id="contact-google-map" data-map-lat="40.712776" data-map-lng="-74.005974" data-icon-path="assets/images/icons/map-marker.png" data-map-title="Brooklyn, New York, United Kingdom" data-map-zoom="12" data-markers='{
                                                            "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                                                        }'>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event-details end -->

</section>

<?php
get_footer();
