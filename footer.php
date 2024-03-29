    <!-- footer section start -->
    <footer class="dark-footer footer-style-1">
        <div class="cookies-eu-banner hidden">
        By clicking ”OK”, you agree to the storing of cookies on your device to
        enhance site navigation, analyze site usage, and improve marketing.
        <button>Accept</button>
        </div>
        <section class="section-b-space darken-layout">
            <div class="container">
                <div class="row footer-theme partition-f">
                    <div class="col-lg-4 col-md-6 sub-title">
                        <div class="footer-title footer-mobile-title">
                            <h4>about</h4>
                        </div>
                        <div class="footer-contant">
                            <div class="footer-logo">
                            <img src="customer/assets/images/dashboard/BenShop-logos.png" class="ml-5" alt=""></div>
                             <ul class="contact-list">
                                <li><i class="fa fa-map-marker"></i>BenShop Products
                                </li>
                                <li><i class="fa fa-phone"></i>Call Us: 254-712-581-281</li>
                                <li><i class="fa fa-envelope-o"></i>Email Us: <a href="#">Support@BenShop.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>my account</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Start Selling</a></li>
                                    <li><a href="#">My Account</a></li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>information</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Health & Beauty</a></li>
                                    <li><a href="#">Fashion</a></li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>follow us</h4>
                            </div>
                            <div class="footer-contant">
                                <p class="mb-cls-content">Get Nofified once a new product is uploaded</p>
                                <form class="form-inline">
                                    <div class="form-group me-sm-3 mb-2">
                                        <label for="inputPassword2" class="sr-only">Password</label>
                                        <input type="password" class="form-control" id="inputPassword2" placeholder="Enter Your Email">
                                    </div>
                                    <button type="submit" class="btn btn-solid mb-2">subscribe</button>
                                </form>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sub-footer dark-subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-end">
                            <p><i class="fa fa-copyright" aria-hidden="true"></i> 2023 BenShop Online Shop
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->

    <script>
        (() => {
        const getCookie = (name) => {
            const value = " " + document.cookie;
            console.log("value", `==${value}==`);
            const parts = value.split(" " + name + "=");
            return parts.length < 2 ? undefined : parts.pop().split(";").shift();
        };

        const setCookie = function (name, value, expiryDays, domain, path, secure) {
            const exdate = new Date();
            exdate.setHours(
            exdate.getHours() +
                (typeof expiryDays !== "number" ? 365 : expiryDays) * 24
            );
            document.cookie =
            name +
            "=" +
            value +
            ";expires=" +
            exdate.toUTCString() +
            ";path=" +
            (path || "/") +
            (domain ? ";domain=" + domain : "") +
            (secure ? ";secure" : "");
        };

        const $cookiesBanner = document.querySelector(".cookies-eu-banner");
        const $cookiesBannerButton = $cookiesBanner.querySelector("button");
        const cookieName = "cookiesBanner";
        const hasCookie = getCookie(cookieName);

        if (!hasCookie) {
            $cookiesBanner.classList.remove("hidden");
        }

        $cookiesBannerButton.addEventListener("click", () => {
            setCookie(cookieName, "closed");
            $cookiesBanner.remove();
        });
        })();
    </script> 