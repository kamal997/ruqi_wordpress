<div class="container-fluid footer pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-4 footer-inner">
            <!-- Logo -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.avif" class="img-fluid rounded-circle"
                    alt="Logo" width="100%" height="100%" />
            </div>

            <!-- Footer Description -->
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="footer-item mt-5">
                    <span class="text-light mb-4">
                        <span style="color: #68912B; font-size: 20px;">
                            مقرأة الرقي
                        </span>
                    </span>
                    <p class="mb-4 text-white">
                        هي منصة تعليمية متخصصة تهدف إلى تعليم وتجويد القرآن الكريم للمسلمين حول العالم عبر الإنترنت.
                        تقدم المقرأة دروسًا شاملة في القراءة والتجويد والتفسير، مع التركيز على استخدام التقنيات الحديثة
                        لتعزيز الفهم وتطبيق أحكام التلاوة بشكل صحيح.
                    </p>
                    <a href="/" class="btn btn-primary py-2 px-4">
                        تبرع الآن
                    </a>
                </div>
            </div>

            <!-- Explore Links -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item mt-5">
                    <div class="mb-2">
                        <span style="color: #68912B; font-size: 20px;">
                            روابط سريعة
                        </span>
                    </div>
                    <div class="d-flex flex-column align-items-start">
                        <a class="text-white mb-2" href="/">
                            <i class="fa fa-check text-primary me-2"></i>
                            الصفحة الرئيسية
                        </a>
                        <a class="text-white mb-2" href="/about">
                            <i class="fa fa-check text-primary me-2"></i>
                            من نحن
                        </a>
                        <a class="text-white mb-2" href="/blog">
                            <i class="fa fa-check text-primary me-2"></i>
                            مدونة
                        </a>
                        <a class="text-white mb-2" href="/contact">
                            <i class="fa fa-check text-primary me-2"></i>
                            تواصل معنا
                        </a>
                        <a class="text-white mb-2" href="/donate">
                            <i class="fa fa-check text-primary me-2"></i>
                            تبرع الآن
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="container py-4">
        <div class="border-top border-secondary pb-4"></div>
        <div class="row">
            <div class="col-md-12 text-white text-center text-md-center mb-3 mb-md-0">
                &copy; <?php echo date("Y"); ?> Quran Learning App.
                <?php echo __("All rights reserved", "your-text-domain"); ?>
            </div>
        </div>
    </div>
</div>
<!-- JavaScript Code -->
<script>
    document.addEventListener('scroll', function () {
        const header = document.querySelector('div.container-fluid:nth-child(1)');
        if (window.scrollY > 50 && window.innerWidth > 992) {
            header.classList.add('bg-white');
            header.classList.add('scroll_top');

        } else {
            header.classList.remove('bg-white');
            header.classList.remove('scroll_top');
        }
    });
    document.addEventListener("DOMContentLoaded", function () {
        const adminBar = document.getElementById("wpadminbar");
        const containerFluid = document.querySelector("div.container-fluid:nth-child(1)");

        if (adminBar && containerFluid) {
            const adminBarHeight = window.innerWidth > 782 ? 32 : 46; // Height based on screen size
            containerFluid.style.marginTop = `${adminBarHeight}px`;

            // Adjust dynamically on window resize
            window.addEventListener("resize", function () {
                const newHeight = window.innerWidth > 782 ? 32 : 46;
                containerFluid.style.marginTop = `${newHeight}px`;
            });
        }
    });
</script>

<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</div>
</body>

</html>