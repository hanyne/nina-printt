<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=GxRIMpCwH4frW6RYRKVhvKO9U6cz7bmhT2rP3xfb3Hk-2Eff-W-2leAzdE6Y4dUqBjZuxXa2Z-IzVUgjiG7kboiKWTy0Lk0PoDFVFL2-K1VHvaUIVJ2y9fRpwlKh62nvRbCzvfozb-wfkbzD4JE9jUToQHXKkajlYAy8QTOVzrHTtRLD_BeIfTCoCxYSM-7yqsTJAGsSQl_c6sz9xVmlyYyuq2IQ9nz5rceBsif3rd9Jav599iJf-8lUV0FhV1hEzFMAWeNiUogJdyI9svU9YMUaXCMV6zB-Dvd_J9_7ktOmqZ62eHULbz7rqlH8lbIsLG3RjSR3Z_8em7LQO0vP6y1I5wmICzzPLUhSizVfrXTwuLcVnkLt4DxRc9y4S8iV" charset="UTF-8"></script></head>
    @livewireStyles

   <!-- Navbar Start -->
   <div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">services</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">Impression numérique  <i class="fa fa-angle-down float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            <a href="" class="dropdown-item">Carte visite </a>
                            <a href="" class="dropdown-item">Flayers</a>
                            <a href="" class="dropdown-item">Dépliants</a>
                            <a href="" class="dropdown-item">Invitations </a>
                            <a href="" class="dropdown-item">Etiquettes</a>
                            <a href="" class="dropdown-item">Calendriers</a>
                        </div>

                    </div>
                    <a href="" class="nav-item nav-link">Grand Format</a>
                 
                    <a href="" class="nav-item nav-link">Stickers autocollants</a>
                    <a href="" class="nav-item nav-link">Structeur PLV</a>
                    <a href="" class="nav-item nav-link">Articles Publicitaire</a>
                    
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Nina</span>Print</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="/" class="nav-item nav-link active">Accueil</a>
                        <a href="/shop" class="nav-item nav-link">Notre Boutique</a>
                        <a href="/detail" class="nav-item nav-link">Achat en detail</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="/cart" class="dropdown-item">Consultez le panier</a>
                                <a href="/checkout" class="dropdown-item">vérifier</a>
                            </div>
                        </div>
                        <a href="contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        @if(Route::has('login'))
                        @auth
                            @if(Auth::user()->role === 'ADM')
                        <li class"menu-item menu-item-has-children parent">
                            <a href="" class="nav-item nav-link active">Mon Compte ({{Auth::user()->name}})</a>
                            <ul class="submenu cruency">
                                <li class="menu-item">
                                     <a href="{{route('admin.dashbors')}}" class="nav-item nav-link">tableau de bord</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnecxion </a>
                            </li>
                            <form id="logout-form" method="POST" action="{{route('logout')}}">
                                @csrf
                           
                            </form>
                        </ul>
                    </li>
                            
                            </ul>
                        </li>
                            @else
                            <li class"menu-item menu-item-has-children parent">
                                <a href="home" class="nav-item nav-link active">Mon Compte ({{Auth::user()->name}})</a>
                                <ul class="submenu cruency">
                                    <li class="menu-item">
                                        <a href="{{route('user.dashboard')}}" class="nav-item nav-link">tableau de bord</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnecxion </a>
                                </li>
                                <form id="logout-form" method="POST" action="{{route('logout')}}">
                                    @csrf
                               
                                </form>
                                   
                                
                                </ul>
                            </li>
                                    
                            @endif

                        @else
                            <a href="{{route('login')}}" class="nav-item nav-link">Connecter</a>
                            <a href="{{route('register')}}" class="nav-item nav-link">S'inscrire</a>
                        @endif

                    @endif

                    </div>
                </div>
            </nav>
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 410px;">
                        <img class="img-fluid" src="{{asset('assets/img/carousel.jpg')}}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">20% Remise pour votre première commande</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Livraison à domicile </h3>
                                <a href="shop" class="btn btn-light py-2 px-3">Commander maintenant</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 410px;">
                        <img class="img-fluid" src="{{asset('assets/img/carousel-2.png')}}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">20% Remise pour votre première commande</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Prix Resonnable</h3>
                                <a href="/shop" class="btn btn-light py-2 px-3">Commander maintenant</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 410px;">
                        <img class="img-fluid" src="{{asset('assets/img/carousel-3.png')}}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">20% Remise pour votre première commande</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">conception conçu exclusivement pour vous</h3>
                                <a href="/shop" class="btn btn-light py-2 px-3">Commander maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-prev-icon mb-n2"></span>
                    </div>
                </a>
                <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-next-icon mb-n2"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->

{{$slot}}
   <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">Nina</span>Print</h1>
                </a>
                <p> <b>Nina Print  S.A.R.L</b> offre un service de conception graphique, jusqu'à l'impression sur les différents supports.

Imprimez tous vos documents: cartes de visite, flyer, porte documents, invitations, chemises... nous vous proposons aussi l'impression de grands formats tels que: bâche, vinyle, vinyle perforé....</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>cité Jerbi-Korba,Nabeul ,Tunisia</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>Ninaprint@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+216 50 474 080</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Accès Rapide</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Accueil</a>
                            <a class="text-dark mb-2" href="/shop"><i class="fa fa-angle-right mr-2"></i>Notre boutique</a>
                            <a class="text-dark mb-2" href="/detail"><i class="fa fa-angle-right mr-2"></i>Achat en Detail</a>
                            <a class="text-dark mb-2" href="/cart"><i class="fa fa-angle-right mr-2"></i> Panier</a>
                            <a class="text-dark mb-2" href="/checkout"><i class="fa fa-angle-right mr-2"></i>Vérfication</a>
                            <a class="text-dark" href="/contact"><i class="fa fa-angle-right mr-2"></i>Contacter nous</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Accès Rapide</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Accueil</a>
                            <a class="text-dark mb-2" href="/shop"><i class="fa fa-angle-right mr-2"></i>Notre boutique</a>
                            <a class="text-dark mb-2" href="/detail"><i class="fa fa-angle-right mr-2"></i>Achat en Detail</a>
                            <a class="text-dark mb-2" href="/cart"><i class="fa fa-angle-right mr-2"></i>Pannier</a>
                            <a class="text-dark mb-2" href="/checkout"><i class="fa fa-angle-right mr-2"></i>Vérification</a>
                            <a class="text-dark" href="/contact"><i class="fa fa-angle-right mr-2"></i>Contacter nous</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">pour consulter les nouveautés </h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Votre Nom" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Votre Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Abonner Vous </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">Nina Print </a>. Tous les droits sont réservés - Crée par 
                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">Ben Ali Hanine</a><br>
                    
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="{{asset('img/payments.png')}}" alt="">
            </div>
        </div>
    </div>
</div></div></div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('assets/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('assets/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    @livewireScripts
</body>