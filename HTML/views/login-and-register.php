<?php
require_once "header.php";
?>
    <!-- ============================================================= Header End ============================================================= -->
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="home-v1.php">Home</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>My Account
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="customer-login-form">
                                        <span class="or-text">or</span>
                                        <div id="customer_login" class="u-columns col2-set">
                                            <div class="u-column1 col-1">
                                                <h2>Đăng nhập</h2>
                                                <form method="post" class="woocomerce-form woocommerce-form-login login">
                                                    <p class="before-login-text">
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="username">Tên tài khoản hoặc email
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" class="input-text" name="username" id="username" value="" />
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="password">Mật khẩu
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input class="input-text" type="password" name="password" id="password" />
                                                    </p>
                                                    <p class="form-row">
                                                        <input class="woocommerce-Button button" type="submit" value="Đăng nhập" name="login">
                                                        <label for="rememberme" class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember me
                                                        </label>
                                                    </p>
                                                    <p class="woocommerce-LostPassword lost_password">
                                                        <a href="#">Quên mật khẩu</a>
                                                    </p>
                                                </form>
                                                <!-- .woocommerce-form-login -->
                                            </div>
                                            <!-- .col-1 -->
                                            <div class="u-column2 col-2">
                                                <h2>Đăng ký</h2>
                                                <form class="register" method="post">
                                                    <p class="before-register-text">
                                                      Hãy tạo tài khoản mới ngay hôm nay để nhận được những lợi ích từ trải nghiệm mua sắm được cá nhân hóa.
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_email">Email
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="email" value="" id="reg_email" name="email" class="woocommerce-Input woocommerce-Input--text input-text">
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_password">Mật khẩu
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="password" id="reg_password" name="password" class="woocommerce-Input woocommerce-Input--text input-text">
                                                    </p>
                                                    <p class="form-row">
                                                        <input type="submit" class="woocommerce-Button button" name="register" value="Đăng ký" />
                                                    </p>
                                                    <div class="register-benefits">
                                                        <h3>Đăng ký ngay hôm nay và bạn sẽ có thể:</h3>
                                                        <ul>
                                                            <li>Thanh toán nhanh chóng</li>
                                                            <li>Theo dõi đơn hàng của bạn một cách dễ dàng
                                                            </li>
                                                            <li>Lưu trữ thông tin về tất cả các giao dịch mua hàng của bạn</li>
                                                        </ul>
                                                    </div>
                                                </form>
                                                <!-- .register -->
                                            </div>
                                            <!-- .col-2 -->
                                        </div>
                                        <!-- .col2-set -->
                                    </div>
                                    <!-- .customer-login-form -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .entry-content -->
                        </div>
                        <!-- .hentry -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>
    <!-- #content -->
 <?php
require_once "footer.php";
?>