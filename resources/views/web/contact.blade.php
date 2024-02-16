@extends('web.layouts.app')


@section('content')
   
    <section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Contact</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('accueil')}}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section> <!-- Contact Section Start -->
    <section class="contact-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="materialContainer">
                        <div class="material-details">
                            <div class="title title1 title-effect mb-1 title-left">
                                <h2>Contactez-nous</h2>
                                <p class="ms-0 w-100">Your email address will not be published. Required fields are
                                    marked *</p>
                            </div>
                        </div>
                        <div class="row g-4 mt-md-1 mt-2">
                            <div class="col-md-6">
                                <label for="first" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="first" placeholder="Entrez votre nom"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="last" class="form-label">Prenom</label>
                                <input type="text" class="form-control" id="last" placeholder="Entrez votre prenom"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Entrez votre email" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email2" class="form-label">Telehone</label>
                                <input type="text" class="form-control" id="email2"
                                    placeholder="Entrez votre telephone" required="">
                            </div>

                            <div class="col-12">
                                <label for="comment" class="form-label">Commentaire</label>
                                <textarea class="form-control" id="comment" rows="5" required=""></textarea>
                            </div>

                            <div class="col-auto">
                                <button class="btn btn-solid-default" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="contact-details">
                        <div>
                            <h2>Contactez-nous</h2>
                            <h5 class="font-light">Nous sommes ouvert a toute suggestion ou simplement pour discuter</h5>
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i data-feather="map-pin"></i>
                                </div>
                                <div class="contact-title">
                                    <h4>Adresse:</h4>
                                    <p>NIT, Faridabad, Haryana, India</p>
                                </div>
                            </div>

                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i data-feather="phone"></i>
                                </div>
                                <div class="contact-title">
                                    <h4>Numero de telephone:</h4>
                                    <p>+1 0000000000</p>
                                </div>
                            </div>

                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i data-feather="mail"></i>
                                </div>
                                <div class="contact-title">
                                    <h4>Adresse email:</h4>
                                    <p>contact@surfsidemedia.in</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
   

   
    
  