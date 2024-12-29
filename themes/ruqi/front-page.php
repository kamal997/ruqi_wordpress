<?php get_header(); ?>

<div class="container-fluid hero-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-header-inner animated zoomIn">
                    <p class="fs-4 text-dark">
                        مرحبًا بكم في مقرأة الرقي لتعيلم القرآن.
                    </p>
                    <h1 class="display-1 mb-5 text-dark">
                        مركز متخصص في تعليم القرآن
                    </h1>
                    <a href="/" class="btn btn-primary py-3 px-5">
                        تعرف على المزيد
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid about py-5">
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

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-primary">مدونة</p>
            <h1 class="display-3">أحدث الأخبار من مدونتنا</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6, // عدد المنشورات المعروضة
            );
            $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()):
                    $query->the_post(); ?>
                    <div class="col-lg-6 col-xl-4">
                        <div class="blog-item wow fadeIn" data-wow-delay="0.1s">
                            <div class="blog-img position-relative overflow-hidden">
                                <?php if (has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid w-100']); ?>
                                    </a>
                                <?php endif; ?>
                                <div class="bg-primary d-inline px-3 py-2 text-center text-white position-absolute top-0 end-0">
                                    <?php echo get_the_date('Y-m-d'); ?>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="blog-meta d-flex justify-content-between pb-2">
                                    <small>
                                        <i class="fas fa-user me-2 text-muted"></i>
                                        <span class="text-muted">بواسطة: <?php the_author(); ?></span>
                                    </small>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="d-inline-block h4 lh-sm mb-3">
                                    <?php echo wp_trim_words(get_the_title(), 10, '...'); ?>
                                </a>
                                <p class="mb-4">
                                    <?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary px-3">
                                    المزيد من التفاصيل
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    لا توجد منشورات متاحة حاليًا.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-primary">فريقنا</p>
            <h1 class="display-3">تعرف على منظمتنا</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-xl-5">
                <div class="team-img wow zoomIn" data-wow-delay="0.1s">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/team-1.avif" class="img-fluid"
                        alt="Team President" width="100%" height="100%" />
                </div>
            </div>
            <div class="col-lg-8 col-xl-7">
                <div class="team-item wow fadeIn" data-wow-delay="0.1s">
                    <h1>أحمد المنصور</h1>
                    <span class="fw-normal fst-italic text-primary mb-4">المؤسس والرئيس</span>
                    <p class="mb-4">
                        أحمد قائد رؤيوي يتمتع بخبرة تزيد عن 15 عامًا في تطوير المجتمع وإدارة المنظمات غير الربحية.
                    </p>
                    <div class="team-icon d-flex pb-4 mb-4 border-bottom border-primary">
                        <a href="/facebook/AhmedAlMansour" class="btn btn-primary btn-md-square me-2"
                            aria-label="Facebook Profile">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="/twitter/AhmedAlMansour" class="btn btn-primary btn-md-square me-2"
                            aria-label="Twitter Profile">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="/instagram/AhmedAlMansour" class="btn btn-primary btn-md-square me-2"
                            aria-label="Instagram Profile">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="/linkedin/AhmedAlMansour" class="btn btn-primary btn-md-square me-2"
                            aria-label="LinkedIn Profile">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="team-item wow zoomIn" data-wow-delay="0.2s">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/team-2.avif"
                                class="img-fluid w-100" alt="Mustafa Kamal" width="100%" height="100%" />
                            <div class="team-content text-light text-center py-3">
                                <div class="team-content-inner">
                                    <span class="mb-0">محمد الكعبي</span>
                                    <p class="text-light">إمام</p>
                                    <div class="team-icon d-flex align-items-center justify-content-center">
                                        <a href="/facebook/MohammedAlKaabi" class="btn btn-primary btn-md-square me-2"
                                            aria-label="Facebook Profile">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="/twitter/MohammedAlKaabi" class="btn btn-primary btn-md-square me-2"
                                            aria-label="Twitter Profile">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="/instagram/MohammedAlKaabi" class="btn btn-primary btn-md-square me-2"
                                            aria-label="Instagram Profile">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a href="/linkedin/MohammedAlKaabi" class="btn btn-primary btn-md-square me-2"
                                            aria-label="LinkedIn Profile">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-item wow zoomIn" data-wow-delay="0.2s">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/team-3.avif"
                                class="img-fluid w-100" alt="Nahiyan Momen" width="100%" height="100%" />
                            <div class="team-content text-light text-center py-3">
                                <div class="team-content-inner">
                                    <span class="mb-0">يوسف النجار</span>
                                    <p class="text-light">الأستاذ</p>
                                    <div class="team-icon d-flex align-items-center justify-content-center">
                                        <a href="/facebook/YoussefAlNajar" class="btn btn-primary btn-md-square me-2"
                                            aria-label="Facebook Profile">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="/twitter/YoussefAlNajar" class="btn btn-primary btn-md-square me-2"
                                            aria-label="Twitter Profile">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="/instagram/YoussefAlNajar" class="btn btn-primary btn-md-square me-2"
                                            aria-label="Instagram Profile">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a href="/linkedin/YoussefAlNajar" class="btn btn-primary btn-md-square me-2"
                                            aria-label="LinkedIn Profile">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-item wow zoomIn" data-wow-delay="0.2s">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/team-4.avif"
                                class="img-fluid w-100" alt="Asfaque Ali" width="100%" height="100%" />
                            <div class="team-content text-light text-center py-3">
                                <div class="team-content-inner">
                                    <span class="mb-0">علي الحمادي</span>
                                    <p class="text-light">متطوع</p>
                                    <div class="team-icon d-flex align-items-center justify-content-center">
                                        <a href="/facebook/AliAlHammadi" class="btn btn-primary btn-md-square me-2"
                                            aria-label="Facebook Profile">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="/twitter/AliAlHammadi" class="btn btn-primary btn-md-square me-2"
                                            aria-label="Twitter Profile">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="/instagram/AliAlHammadi" class="btn btn-primary btn-md-square me-2"
                                            aria-label="Instagram Profile">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a href="/linkedin/AliAlHammadi" class="btn btn-primary btn-md-square me-2"
                                            aria-label="LinkedIn Profile">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
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


<?php get_footer(); ?>