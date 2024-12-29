<?php
/*
Template Name: Team
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
<div class="container-fluid team pb-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
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