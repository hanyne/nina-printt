<div class="container-fluid bg-secondary mb-5">
                    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
                        <h1 class="font-weight-semi-bold text-uppercase mb-3">Notre boutique</h1>
                        <div class="d-inline-flex">
                            <p class="m-0"><a href="">Accueil</a></p>
                            <p class="m-0 px-2">-</p>
                            <p class="m-0">Notre boutique</p>
                        </div>
                    </div>
                </div>
            
            
                <!-- Shop Start -->
                <div class="container-fluid pt-5">
                    <div class="row px-xl-5">
                        <!-- Shop Sidebar Start -->
                        <div class="col-lg-3 col-md-12">
                            <!-- Price Start -->
                            <div class="border-bottom mb-4 pb-4">
                                <h5 class="font-weight-semi-bold mb-4">Filtrer Par Prix</h5>
                                <form>
                                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                        <input type="checkbox" class="custom-control-input" checked id="price-all">
                                        <label class="custom-control-label" for="price-all">All Price</label>
                                        <span class="badge border font-weight-normal">1000</span>
                                    </div>
                                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                        <input type="checkbox" class="custom-control-input" id="price-1">
                                        <label class="custom-control-label" for="price-1">0 - 100 TND</label>
                                        <span class="badge border font-weight-normal">150</span>
                                    </div>
                                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                        <input type="checkbox" class="custom-control-input" id="price-2">
                                        <label class="custom-control-label" for="price-2">100 - 200 TND</label>
                                        <span class="badge border font-weight-normal">295</span>
                                    </div>
                                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                        <input type="checkbox" class="custom-control-input" id="price-3">
                                        <label class="custom-control-label" for="price-3">200 - 300 TND</label>
                                        <span class="badge border font-weight-normal">246</span>
                                    </div>
                                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                        <input type="checkbox" class="custom-control-input" id="price-4">
                                        <label class="custom-control-label" for="price-4">300 - 400 TND</label>
                                        <span class="badge border font-weight-normal">145</span>
                                    </div>
                                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                        <input type="checkbox" class="custom-control-input" id="price-5">
                                        <label class="custom-control-label" for="price-5">400 - 500 TND</label>
                                        <span class="badge border font-weight-normal">168</span>
                                    </div>
                                </form>
                            </div>
                            <!-- Price End -->
                            
                            
            
                        
                        </div>
                        <!-- Shop Sidebar End -->
            
            
                        <!-- Shop Product Start -->
                        <div class="col-lg-9 col-md-12">
                            <div class="row pb-3">
                                <div class="col-12 pb-1">
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <form action="">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search by name">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-transparent text-primary">
                                                        <i class="fa fa-search"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="dropdown ml-4">
                                            <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                        Trier par
                                                    </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                                <a class="dropdown-item" href="#">Plus Récent</a>
                                                <a class="dropdown-item" href="#">Le plus demandé</a>
                                                <a class="dropdown-item" href="#">Le meilleur</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="{{asset('assets/img/product-1.jpg')}}" alt="">
                                        </div>
                                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                            <h6 class="text-truncate mb-3">Autocollants</h6>
                                            <div class="d-flex justify-content-center">
                                                <h6>27.00 TND</h6><h6 class="text-muted ml-2"><del>35.00 TND</del></h6>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between bg-light border">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Voir Details</a>
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Ajouter Au Panier</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="{{asset('assets/img/impression-banderole-impression-bache-lamine.jpg')}}" alt="">
                                        </div>
                                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                            <h6 class="text-truncate mb-3">banderole</h6>
                                            <div class="d-flex justify-content-center">
                                                <h6>150.00 TND</h6><h6 class="text-muted ml-2"><del>185.00 TND</del></h6>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between bg-light border">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Voir Details</a>
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Ajouter au panier </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="{{asset('assets/img/impression-vinyle-autocollant-adhesif.jpg')}}" alt="">
                                        </div>
                                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                            <h6 class="text-truncate mb-3">Vinyle-autocollant</h6>
                                            <div class="d-flex justify-content-center">
                                                <h6>65.00 TND</h6><h6 class="text-muted ml-2"><del>68.00 TND</del></h6>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between bg-light border">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Voir Details</a>
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Ajouter Au Panier</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="{{asset('assets/img/impression-papier-poster.jpg')}}" alt="">
                                        </div>
                                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                            <h6 class="text-truncate mb-3">Papier Poster</h6>
                                            <div class="d-flex justify-content-center">
                                                <h6>23.00 TND</h6><h6 class="text-muted ml-2"><del>27.00 TND</del></h6>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between bg-light border">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Voir Details</a>
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Ajouter Au Panier</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="{{asset('assets/img/roll-up.jpg')}}" alt="">
                                        </div>
                                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                            <h6 class="text-truncate mb-3">Roll-UP</h6>
                                            <div class="d-flex justify-content-center">
                                                <h6>245.00 TND</h6><h6 class="text-muted ml-2"><del>255.00 TND</del></h6>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between bg-light border">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Voir Details</a>
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Ajouter Au Panier</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="{{asset('assets/img/mug-isoterme.jpg')}}" alt="">
                                        </div>
                                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                            <h6 class="text-truncate mb-3">Mug Personnalisé</h6>
                                            <div class="d-flex justify-content-center">
                                                <h6>12.500 TND</h6><h6 class="text-muted ml-2"><del>15.00 TND</del></h6>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between bg-light border">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Voir Details</a>
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Ajouter Au Panier</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="{{asset('assets/img/cat-5.jpg')}}" alt="">
                                        </div>
                                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                            <h6 class="text-truncate mb-3">Sac Personnalisé</h6>
                                            <div class="d-flex justify-content-center">
                                                <h6>35.00 TND</h6><h6 class="text-muted ml-2"><del>38.00 TND</del></h6>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between bg-light border">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Voir Details</a>
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Ajouter Au Panier</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="{{asset('assets/img/impression-cartes-de-visite.jpg')}}" alt="">
                                        </div>
                                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                            <h6 class="text-truncate mb-3">Carte visite</h6>
                                            <div class="d-flex justify-content-center">
                                                <h6>24.00 TND</h6><h6 class="text-muted ml-2"><del>25.00 TND</del></h6>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between bg-light border">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Voir Details</a>
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Ajouter Au Panier</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="{{asset('assets/img/panneau-mousse-10-mm.jpg')}}" alt="">
                                        </div>
                                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                            <h6 class="text-truncate mb-3">Panneau-mouse</h6>
                                            <div class="d-flex justify-content-center">
                                                <h6>25.00 TND</h6><h6 class="text-muted ml-2"><del>28.00 TND</del></h6>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between bg-light border">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Voir Details</a>
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Ajouter Au Panier</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 pb-1">
                                    <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center mb-3">
                                        <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        </li>
                                    </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
