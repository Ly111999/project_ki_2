<footer class="footer">

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div
                        class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                        <h4 style="margin-left: -6px">Bản tin</h4>
                        <p style="margin-left: -10px">Đăng ký nhận bản tin và nhận giảm giá 20% cho lần mua hàng đầu tiên của bạn</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="/">
                        <div
                            class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                            <input id="newsletter_email" type="email" placeholder="Nhập email của bạn" required="required"
                                   data-error="Valid email is required.">
                            <input type="button" id="newsletter_submit" value="Đăng ký" class="newsletter_submit_btn trans_300"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div
                    class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                    <ul class="footer_nav">
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="/contact">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div
                    class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                    <ul>
                        <li><a href="https://www.facebook.com/Bambole-House-285200018723686/"><i class="fa fa-facebook"
                                                                                                 aria-hidden="true"></i></a>
                        </li>
                        <li><a href="https://twitter.com/login?lang=vi"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_nav_container">
                    <div class="cr">©2018 Copyright with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                            href="#">BamboleShop</a></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validateEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email));
        }
        $('#newsletter_submit').click(function () {
            var text = $('#newsletter_email').val();
            var formatE = validateEmail(text);
            if (formatE) {
                swal('Thao tác thành công!', 'Quý khách đã đăng ký thành công!', 'success');
            }else{
                swal('Thao tác không thành công!', 'Vui lòng nhập đúng định dạng email', 'error');
            }
        })
    </script>
</footer>
