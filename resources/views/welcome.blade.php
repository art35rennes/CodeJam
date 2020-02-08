@extends('layouts.menu')
@section('header-content')
    <!-- Full Page Intro -->
    <div id="home" class="view full-page-intro">

        <!--Video source-->
        <video class="video-intro" autoplay loop muted>
            <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4" />
        </video>

        <!-- Mask & flexbox options-->
        <div class="mask rgba-blue-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="container">

                <!--Grid row-->
                <div class="row d-flex h-100 justify-content-center align-items-center wow fadeIn">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4 white-text text-center text-md-left">

                        <h1 class="display-4 font-weight-bold ">Optimiser votre prodution d'energie.<br><span class="">Reduiser votre impact sur l'environement</span></h1>

                        <hr class="hr-light">

                        <p>
                            <strong>Faire des économies tout en sauvant l'environement.</strong>
                        </p>

                        <p class="mb-4 d-none d-md-block">
                            <strong>L'impact sur la biodiversité de l'installation d'équipements de la production d'énergie renouvlable est bien souvent négliger, découvrer les enjeux et comment adapter vos pratiques</strong>
                        </p>

                        <a target="_blank" href="http://bl-evolution.com/energies-renouvelables-impacts-biodiversite/" class="btn btn-outline-white">En savoir plus sur les enjeux
                            <i class="fas fa-globe-europe ml-2"></i>
                        </a>
                        <a target="_blank" href="{{ route('register') }}" class="btn btn-outline-white">Commencer à utiliser Earthquake
                            <i class="fas fa-play ml-2"></i>
                        </a>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-xl-5 mb-4">

                        <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new.png" alt="" class="img-fluid">

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
            <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

    </div>
    <!-- Full Page Intro -->
@endsection

@section('body-content')
    {{--        TODO repair scroll spy--}}
    <div data-spy="scroll" class="container" data-offset="0">

        <!--Section: Main info-->
        <section class="mt-5 wow fadeIn">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half"
                         alt="">

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!-- Main heading -->
                    <h3 class="h3 mb-3">Material Design for Bootstrap</h3>
                    <p>This template is created with Material Design for Bootstrap (
                        <strong>MDB</strong> ) framework.</p>
                    <p>Read details below to learn more about MDB.</p>
                    <!-- Main heading -->

                    <hr>

                    <p>
                        <strong>400+</strong> material UI elements,
                        <strong>600+</strong> material icons,
                        <strong>74</strong> CSS animations, SASS files, templates, tutorials and many more.
                        <strong>Free for personal and commercial use.</strong>
                    </p>

                    <!-- CTA -->
                    <a target="_blank" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" class="btn btn-indigo btn-md">Download
                        <i class="fas fa-download ml-1"></i>
                    </a>
                    <a target="_blank" href="https://mdbootstrap.com/docs/jquery/components/" class="btn btn-indigo btn-md">Live
                        demo
                        <i class="far fa-image ml-1"></i>
                    </a>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Main info-->

        <hr class="my-5">

        <!--Section: Main features & Quick Start-->
        <section id="about-us">

            <h3 class="h3 text-center mb-5">A propos d'Earthquake</h3>

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-lg-6 col-md-12 px-4">

                    <!--First row-->
                    <div class="row">
                        <div class="col-1 mr-3">
                            <i class="fas fa-chart-bar fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h5 class="feature-title">Monitoring</h5>
                            <p class="grey-text">Suivez en temps réel votre production et votre consomation d'energie pour adapter vos usages et <span class="font-weight-bold">reduire vos factures.</span></p>
                        </div>
                    </div>
                    <!--/First row-->

                    <div style="height:30px"></div>

                    <!--Second row-->
                    <div class="row">
                        <div class="col-1 mr-3">
                            <i class="fas fa-chart-line fa-2x blue-text"></i>
                        </div>
                        <div class="col-10">
                            <h5 class="feature-title">Anticipez le futur</h5>
                            <p class="grey-text">Earthquake vous fournis tout les outils pour <span class="font-weight-bold">améliorer vos installations</span> au cours du temps.
                            </p>
                        </div>
                    </div>
                    <!--/Second row-->

                    <div style="height:30px"></div>

                    <!--Third row-->
                    <div class="row">
                        <div class="col-1 mr-3">
                            <i class="fas fa-frog fa-2x cyan-text"></i>
                        </div>
                        <div class="col-10">
                            <h5 class="feature-title">Préservez la biodiversité chez vous</h5>
                            <p class="grey-text">Nos outils d'analyse avancée sont capable de <span class="font-weight-bold">définir l'impact de vos équipements</span> sur la biodiversité local et <span class="font-weight-bold">vous proposez des solutions adaptées</span> à votre situation pour maintenir la biodversité dans votre environement</p>
                        </div>
                    </div>
                    <!--/Third row-->

                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12">

                    <p class="h5 text-center mb-4">Regarder notre vidéo de présentation</p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe>
                    </div>
                </div>
                <!--/Grid column-->

            </div>
            <!--/Grid row-->

        </section>
        <!--Section: Main features & Quick Start-->

        <hr class="my-5">

        <!--Section: Not enough-->
        <section>

            <h2 class="my-5 h3 text-center">Not enough?</h2>

            <!--First row-->
            <div class="row features-small mb-5 mt-3 wow fadeIn">

                <!--First column-->
                <div class="col-md-4">
                    <!--First row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">Free for personal and commercial use</h6>
                            <p class="grey-text">Our license is user-friendly. Feel free to use MDB for both private as well as
                                commercial projects.
                            </p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/First row-->

                    <!--Second row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">400+ UI elements</h6>
                            <p class="grey-text">An impressive collection of flexible components allows you to develop any project.
                            </p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/Second row-->

                    <!--Third row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">600+ icons</h6>
                            <p class="grey-text">Hundreds of useful, scalable, vector icons at your disposal.</p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/Third row-->

                    <!--Fourth row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">Fully responsive</h6>
                            <p class="grey-text">It doesn't matter whether your project will be displayed on desktop, laptop,
                                tablet or mobile phone. MDB
                                looks great on each screen.</p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/Fourth row-->
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4 flex-center">
                    <img src="https://mdbootstrap.com/img/Others/screens.png" alt="MDB Magazine Template displayed on iPhone"
                         class="z-depth-0 img-fluid">
                </div>
                <!--/Second column-->

                <!--Third column-->
                <div class="col-md-4 mt-2">
                    <!--First row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">70+ CSS animations</h6>
                            <p class="grey-text">Neat and easy to use animations, which will increase the interactivity of your
                                project and delight your visitors.
                            </p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/First row-->

                    <!--Second row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">Plenty of useful templates</h6>
                            <p class="grey-text">Need inspiration? Use one of our predefined templates for free.</p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/Second row-->

                    <!--Third row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">Easy installation</h6>
                            <p class="grey-text">5 minutes, a few clicks and... done. You will be surprised at how easy it is.
                            </p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/Third row-->

                    <!--Fourth row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">Easy to use and customize</h6>
                            <p class="grey-text">Using MDB is straightforward and pleasant. Components flexibility allows you deep
                                customization. You will
                                easily adjust each component to suit your needs.</p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/Fourth row-->
                </div>
                <!--/Third column-->

            </div>
            <!--/First row-->

        </section>
        <!--Section: Not enough-->

        <hr class="mb-5">

        <!--Section: More-->
        <section>

            <h2 class="my-5 h3 text-center">...and even more</h2>

            <!--First row-->
            <div class="row features-small mt-5 wow fadeIn">

                <!--Grid column-->
                <div class="col-xl-3 col-lg-6">
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fab fa-firefox fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2 pl-3">
                            <h5 class="feature-title font-bold mb-1">Cross-browser compatibility</h5>
                            <p class="grey-text mt-2">Chrome, Firefox, IE, Safari, Opera, Microsoft Edge - MDB loves all browsers;
                                all browsers love MDB.
                            </p>
                        </div>
                    </div>
                    <!--/Grid row-->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-lg-6">
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-level-up-alt fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2">
                            <h5 class="feature-title font-bold mb-1">Frequent updates</h5>
                            <p class="grey-text mt-2">MDB becomes better every month. We love the project and enhance as much as
                                possible.
                            </p>
                        </div>
                    </div>
                    <!--/Grid row-->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-lg-6">
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-comments fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2">
                            <h5 class="feature-title font-bold mb-1">Active community</h5>
                            <p class="grey-text mt-2">Our society grows day by day. Visit our forum and check how it is to be a
                                part of our family.
                            </p>
                        </div>
                    </div>
                    <!--/Grid row-->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-lg-6">
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2">
                            <h5 class="feature-title font-bold mb-1">jQuery 3.x</h5>
                            <p class="grey-text mt-2">MDB is integrated with newest jQuery. Therefore you can use all the latest
                                features which come along with
                                it.
                            </p>
                        </div>
                    </div>
                    <!--/Grid row-->
                </div>
                <!--/Grid column-->

            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row features-small mt-4 wow fadeIn">

                <!--Grid column-->
                <div class="col-xl-3 col-lg-6">
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-cubes fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2">
                            <h5 class="feature-title font-bold mb-1">Modularity</h5>
                            <p class="grey-text mt-2">Material Design for Bootstrap comes with both, compiled, ready to use
                                libraries including all features as
                                well as modules for CSS (SASS files) and JS.</p>
                        </div>
                    </div>
                    <!--/Grid row-->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-lg-6">
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-question fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2">
                            <h5 class="feature-title font-bold mb-1">Technical support</h5>
                            <p class="grey-text mt-2">We care about reliability. If you have any questions - do not hesitate to
                                contact us.
                            </p>
                        </div>
                    </div>
                    <!--/Grid row-->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-lg-6">
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-th fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2">
                            <h5 class="feature-title font-bold mb-1">Flexbox</h5>
                            <p class="grey-text mt-2">MDB fully supports Flex Box. You can forget about alignment issues.</p>
                        </div>
                    </div>
                    <!--/Grid row-->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-lg-6">
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="far fa-file-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2">
                            <h5 class="feature-title font-bold mb-1">SASS files</h5>
                            <p class="grey-text mt-2">Arranged and well documented .scss files can't wait until you compile them.</p>
                        </div>
                    </div>
                    <!--/Grid row-->
                </div>
                <!--/Grid column-->

            </div>
            <!--/Second row-->

        </section>
        <!--Section: More-->

    </div>
@endsection
