<?php
$qry_ft=DB::table('posts')->where(['post_status' => 1, 'post_type' => 'page'])->whereIn('id', [1, 2, 3,4,5])->get();

?>
    <!-- site__footer -->
    <footer class="site__footer">
        <div class="site-footer">
            <div class="decor site-footer__decor decor--type--bottom">
                <div class="decor__body">
                    <div class="decor__start"></div>
                    <div class="decor__end"></div>
                    <div class="decor__center"></div>
                </div>
            </div>
            <div class="site-footer__widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xl-4">
                            <div class="site-footer__widget footer-contacts">
                                <h5 class="footer-contacts__title">Contact Us</h5>
                                <div class="footer-contacts__text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Integer in feugiat lorem.
                                </div>
                                <address class="footer-contacts__contacts">
                                    <dl>
                                        <dt>Hotline Free 24/7:</dt>
                                        <dd>(+970) 123 456 789</dd>
                                    </dl>
                                    <dl>
                                        <dt>Email Address</dt>
                                        <dd>Support@asp.com.ae</dd>
                                    </dl>
                                    <dl>
                                        <dt>Our Location</dt>
                                        <dd>The Barn, Henley in Dubai B578.</dd>
                                    </dl>
                                    <dl>
                                        <dt>Working Hours</dt>
                                        <dd>Mon-Sat 10:00am - 7:00pm</dd>
                                    </dl>
                                </address>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-xl-2">
                            <div class="site-footer__widget footer-links">
                                <h5 class="footer-links__title">Information</h5>
                                <ul class="footer-links__list">
                                    <li class="footer-links__item"><a href="" class="footer-links__link">About Us</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Delivery Information</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Privacy Policy</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Brands</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Contact Us</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Returns</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-xl-2">
                            <div class="site-footer__widget footer-links">
                                <h5 class="footer-links__title">My Account</h5>
                                <ul class="footer-links__list">
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Store Location</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Order History</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Wish List</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Newsletter</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Specials</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Gift Certificates</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Affiliate</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="site-footer__widget footer-newsletter">
                                <h5 class="footer-newsletter__title">Newsletter</h5>
                                <div class="footer-newsletter__text">
                                    Enter your email address below to subscribe to our newsletter and keep up to date with discounts and special offers.
                                </div>
                                <form action="" class="footer-newsletter__form">
                                    <label class="sr-only" for="footer-newsletter-address">Email Address</label>
                                    <input type="text" class="footer-newsletter__form-input" id="footer-newsletter-address" placeholder="Email Address...">
                                    <button class="footer-newsletter__form-button">Subscribe</button>
                                </form>
                                <div class="footer-newsletter__text footer-newsletter__text--social">
                                    Follow us on social networks
                                </div>
                                <div class="footer-newsletter__social-links social-links">
                                    <ul class="social-links__list">
                                        <li class="social-links__item social-links__item--facebook"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-links__item social-links__item--twitter"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-links__item social-links__item--youtube"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                        <li class="social-links__item social-links__item--instagram"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li class="social-links__item social-links__item--rss"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fas fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="site-footer__bottom-row">
                        <div class="site-footer__copyright">
                            <!-- copyright -->
                            Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2020 <a href="#" target="_blank">YomGold</a> All Rights Reserved.
                            <!-- copyright / end -->
                        </div>
                        <div class="site-footer__payments">
                            <img src="images/payments.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
