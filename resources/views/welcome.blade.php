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

                        <h1 class="display-4 font-weight-bold ">Optimisez votre prodution d'energie.<br><span class="">Reduisez votre impact sur l'environement.</span></h1>

                        <hr class="hr-light">

                        <p>
                            <strong>Faire des économies tout en sauvant l'environement.</strong>
                        </p>

                        <p class="mb-4 d-none d-md-block">
                            <strong>L'impact sur la biodiversité de l'installation d'équipements produisant de l'énergie verte est bien souvent négligée. Découvrez les enjeux et comment adapter vos pratiques.</strong>
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
                    <h3 class="h3 mb-3">Laravel / MDBootstrap</h3>
                    <p>Le design du site a été développé autour du framework CSS <strong>MDB</strong> afin de garantir un responsive design à toute épreuve ainsi qu'un style moderne et agréable.</p>
                    <p>Le framework garantit aussi une compatibilité avec tout les navigateurs quel que soit le système hôte.</p>
                    <p>Le backoffice est quand à lui assuré par <strong>Laravel 6.13</strong> pour contrôler au mieux les accès au site, le MVC et bien plus encore...</p>
                    <!-- Main heading -->

                    <hr>

                    <div class="row">
                        <div class="col-3 mb-3 text-center">
                            <img src="https://mdbootstrap.com/img/logo/mdb-transparent-big.png" class="img-fluid z-depth-1"
                                 alt="Responsive image">
                        </div>
                        <div class="col-3 mb-3 text-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3d/LaravelLogo.png" class="img-fluid z-depth-1 "
                                 alt="Responsive image">
                        </div>
                        <div class="col-3 mb-3 text-center">
                            <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/6/62/MySQL.svg/1200px-MySQL.svg.png" class="img-fluid z-depth-1 "
                                 alt="Responsive image">
                        </div>
                    </div>

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
                            <p class="grey-text">Suivez en temps réel votre production et votre consommation d'énergie pour adapter vos usages et <span class="font-weight-bold">reduire vos factures.</span></p>
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
                            <p class="grey-text">Earthquake vous fournis tous les outils pour <span class="font-weight-bold">améliorer vos installations</span> au cours du temps.
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
                            <p class="grey-text">Nos outils d'analyse avancée sont capable de <span class="font-weight-bold">définir l'impact de vos équipements</span> sur la biodiversité locale et de <span class="font-weight-bold">vous proposer des solutions adaptées</span> à votre situation pour maintenir la biodversité dans votre environemment.</p>
                        </div>
                    </div>
                    <!--/Third row-->

                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12">

                    <p class="h5 text-center mb-4">Regarder notre vidéo de présentation</p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="http://codejam.arthursicard.fr" allowfullscreen></iframe>
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

            <h2 class="my-5 h3 text-center">Fonctionnalité terminé</h2>

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
                            <h6 class="feature-title">Système d'authenfication</h6>
                            <p class="grey-text">Il est possible de se créer un compte puis de ce connecter.
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
                            <h6 class="feature-title">Système de mail</h6>
                            <p class="grey-text">Le système de mail pour la vérification d'adresse email à l'inscription ou encore la réinitialisation de mot passe est fonctionnel. Malheuresement le service  utilisé (mailtrap.io) ne permet l'envoi de mail jusqu'au vrai destinataire en mode sandbox.
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
                            <h6 class="feature-title">Dashbord</h6>
                            <p class="grey-text">Une fois connecté vous avez accès via votre bouton de profil. Tout les graphiques sont fonctionnel et interactif. Les données affiché sont prédéfinie.</p>
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
                            <h6 class="feature-title">Responsive</h6>
                            <p class="grey-text">Le site est compatible PC, Smartphone et tablette.</p>
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
                            <h6 class="feature-title">Base de données</h6>
                            <p class="grey-text">La base implementé est cohérente avec une utilisation en production du service.
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
                            <h6 class="feature-title">BackOffice fonctionnel</h6>
                            <p class="grey-text">Même si parfois le Front ne reflète pas les données en bases, le Backoffice est quand à lui bien fonctionnel ! <br><small>(INSERT, DELETE, UPDATE, GET)</small></p>
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
                            <h6 class="feature-title">CRUD</h6>
                            <p class="grey-text">Toute les tables peuvent être peuplé et visualisé via different formulaire personalisé pour prendre en compte les relations et faciliter le Mass Assignement.
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
                            <h6 class="feature-title">Ergonomique</h6>
                            <p class="grey-text">Malgré les 48h pour réaliser ce projet nous avons fais au mieux pour concevoir des interfaces clair, fluide et user-friendly.</p>
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

            <h2 class="my-5 h3 text-center">Installation</h2>

            <!--First row-->
            <div class="row features-small mt-5 wow fadeIn">

                <!--Grid column-->
                <div class="col-xl-3 col-lg-6">
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-download fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2 pl-3">
                            <h5 class="feature-title font-bold mb-1">Télécharger les sources</h5>
                            <p class="grey-text mt-2">Récupérer les sources présente sur le dépot FTP où GitHub.
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
                            <i class="fas fa-database fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2">
                            <h5 class="feature-title font-bold mb-1">Configurer la base de données</h5>
                            <p class="grey-text mt-2">Le site necessite une base de données MySQL 5.7. Généré la base en important le fichier <small>earthquake.sql</small><br>Si la base n'est pas local, modifier le fichier <small>.env</small>
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
                            <i class="fas fa-user fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2">
                            <h5 class="feature-title font-bold mb-1">Ajouter un user à la base</h5>
                            <p class="grey-text mt-2">Ajouter un utilisateur a votre base données qui à tout les droits sur <small>codejam</small>.<br><small>User: codejam</small><br><small>Password: jloZEozLRDczAlbR</small>
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
