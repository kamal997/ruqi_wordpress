<?php
/*
Template Name: About
*/
get_header();
?>

<div class="container-fluid hero-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-header-inner animated zoomIn">
                    <h2 class="Title"><?php echo get_the_title(); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid about pb-5">
    <div class="container py-5">
        <div class="row g-5 mb-5">
            <div class="col-xl-6">
                <div class="row g-4">
                    <div class="col-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about-1.avif"
                            class="img-fluid h-100 w-100 wow zoomIn" data-wow-delay="0.1s" alt="About_1" width="100%"
                            height="100%" />
                    </div>
                    <div class="col-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about-2.avif"
                            class="img-fluid pb-3 wow zoomIn" data-wow-delay="0.1s" alt="About_2" width="100%"
                            height="100%" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about-3.avif"
                            class="img-fluid pt-3 wow zoomIn" data-wow-delay="0.1s" alt="About_3" width="100%"
                            height="100%" />
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeIn" data-wow-delay="0.5s">
                <p class="fs-5 text-uppercase text-primary">حول مقرأة الرقي</p>
                <h1 class="display-5 pb-4 m-0">مقرأة الرقي لتعليم القرآن</h1>
                <p class="pb-4">مقرأة الرقي هي منصة تعليمية متخصصة تهدف إلى تعليم وتجويد القرآن الكريم للمسلمين في شتى
                    أنحاء العالم. من خلال هذه المقرأة، يمكن للطلاب من مختلف البلدان أن يتعلموا عن بُعد عبر الإنترنت، مما
                    يوفر لهم فرصة الوصول إلى تعليم قرآني نوعي من منازلهم. تقدم المقرأة برامج تعليمية شاملة تشمل دروساً
                    في القراءة والتجويد والتفسير، مع التركيز على تيسير عملية التعلم باستخدام التقنيات الحديثة. يعمل في
                    المقرأة مجموعة من الأكاديميين والمشايخ المتخصصين في القرآن الكريم، الذين يحرصون على تقديم تعليم
                    متميز يعزز من فهم الطلاب ويطبق أحكام التلاوة بشكل صحيح. تسعى المقرأة إلى تحقيق التواصل الروحي
                    والثقافي بين المسلمين في جميع أنحاء العالم، وتعزيز القيم الدينية من خلال تعليم القرآن الكريم.</p>

                <div class="bg-light p-3 mb-4">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.avif" width="100%"
                                height="100%" class="img-fluid rounded-circle" alt="Logo" />
                        </div>
                        <div class="col-9">
                            <p class="mb-0">لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى)
                                ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص </p>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-6">
                        <p class="mb-2">
                            <i class="fa fa-check text-primary me-3"></i>تعليم قرآن عن بُعد
                        </p>
                        <p class="mb-0">
                            <i class="fa fa-check text-primary me-3"></i>برامج تجويد وتفسير
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-2">
                            <i class="fa fa-check text-primary me-3"></i>مدرسون متخصصون
                        </p>
                        <p class="mb-0">
                            <i class="fa fa-check text-primary me-3"></i>تواصل عالمي عبر الإنترنت
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center bg-primary py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row g-4 align-items-center">
                <div class="col-lg-2">
                    <i class="fa fa-quran fa-5x text-white"></i>
                </div>
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="mb-0">"وَرَتِّلِ الْقُرْآنَ تَرْتِيلا"</h1>
                </div>
                <div class="col-lg-3">
                    <a href="/" class="btn btn-light py-2 px-4">
                        ابدأ رحلتك في التعلم
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>