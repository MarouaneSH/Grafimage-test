@extends('home.layout.master')

@section('content')
<header id="main-header">
    <nav id="main-nav">
        <div class="nav-content">
            <nav class="nav flex-column">
                <div class="hide-nav">
                        <img class="hide-nav" src="{{asset('img/exit.png')}}" alt="">
                </div>
                <a class="nav-link" href="#">Le site Boomerang</a>
                <a class="nav-link" href="#"> Communiqué de presse</a>
                <a class="nav-link" href="#">Réglement du jeu</a>
                <a class="nav-link" href="#">Mentions légales</a>
                <a class="nav-link" href="#">Politique cookies</a>
            </nav>
        </div>
        <button class="nav-toggle">
            <img src="{{asset('img/toggle.png')}}" alt="">
        </button>
    </nav>
    <div class="header-bg row flex-column justify-content-center">
        <div class="br-brand">
                <p>UN évènement</p>
            <img src="{{asset('img/brand.svg')}}"> 
        </div>
        <img class="br-logo" src="{{asset('img/logo.png')}}">
    </div>
</header>
<section id="main-content">
    <section class="br-section">
        <div class="container br-content text-center">
            <div class="event-date">
                    <img src="{{asset('img/Date.png')}}">
            </div>
            <img class="event-participe" src="{{asset('img/participer.png')}}">
            <p class="event-desc">
                À l’occasion de la fête des pères, Boomerang, la chaîne des stars du dessin animé, organise la première
                Coupe de France du jeu de la Barbichette.
                <span>Qui rira en premier ?</span>
                <button class="btn btn-primary btn-inscription">INSCRIVEZ-VOUS</button>
            </p>
        </div>
    </section>
    <section class="br-section br-section-info">
        <div class="br-info-content">
            <div class="container">
                <div class="video-player">
                    <img src="{{asset('img/play-button.png')}}">
                </div>
                <div class="event-location">
                    <p>Venez vous amusez le samedi 17 juin dès 10h <span>au Parvis Myboat du Parc de La Villette à Paris.</span> </p>
                    <div class="spacing-1"></div>
                    <p>
                        <span>10h-14H : MATCHS LIBRES, ANIMATIONS</span>
                        <span>14h-17H : phases DE qualificatiON</span>
                        <span> 17h : PHASES FinaleS</span>
                    </p> 
                    <p>
                        Avec, au programme, également, <span>des animations pour toute la famille:</span>
                    </p>
                    <div class="spacing-2"></div>
                    <ul>
                        <li> <span>Rencontre et photos avec les héros de Boomerang  </span></li>
                        <li> <span>Ateliers Maquillage </span></li>
                        <li> <span>Sculpture de Ballons  </span></li>
                        <li> <span>Des quizz et des défis </span></li>
                        <li> <span>Et d’autres surprises ! </span></li>
                    </ul>
                </div>
                <div class="br-info-img">
                        <img class="br-info-absolute dessin-right" src="{{asset('img/dessin1.png')}}"/>
                        <img class="br-info-absolute dessin-left" src="{{asset('img/dessin2.png')}}"/>
                        <img class="br-info-absolute br-copyright" src="{{asset('img/copyright.png')}}"/>
                    </div>
            </div>
        </div>
    </section>  
    <div class="br-section br-section-inscription">
            <div class="br-inscription-top">
            <span class="d-block">Retrouvez le <span class="d-bold">Looney Tunes Show</span> </span>
            tous les jours sur Boomerang
            </div>
        <div class="br-inscription-content br-content">
            <div class="container">
                <h1>J’inscris mon équipe</h1>
                <h3>Inscription par équipe de 1 à 3 personnes</h3>
                <button class="btn btn-secondary">Régles de LA COMPéTITION</button>
                <form id="br-form" action="{{route('inscription')}}" method="POST">
                    <div class="form-group row">
                        <label class="col-form-label">Heure de passage</label>
                        <div class="col">
                            <input required class="form-control" id="pickerhour" type="text" name="hour_passage"  >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label">Nom de l’équipe</label>
                        <div class="col">
                            <input required class="form-control" type="text" name="team_name" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label">Nom du chef d’équipe</label>
                        <div class="col">
                            <input required class="form-control" type="text" name="team_leader">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label">Nombre de participants*</label>
                        <div class="col">
                            <input required class="form-control" name="nbr_participant" type="number" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label">Email*</label>
                        <div class="col">
                            <input required class="form-control" name="email" type="email" >
                        </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-form-label">Téléphone*</label>
                            <div class="col">
                                <input required class="form-control" name="phone" type="number" >
                            </div>
                    </div>
                    <p class="br-terms">
                        * Les enfants doivent être accompagnés d’un adulte.
                    </p>
                    <p class="br-terms">
                        **"informatique et libertés" du 6 janvier 1978 modifiée, vous bénéficiez d’un droit d’accès et de rectification aux informations qui vous concernent. Si vous souhaitez exercer ce droit et obtenir communication des informations vous concernant, veuillez vous adresser à boomerang@boomerangtv.fr
                    </p>
                    <div class="d-flex">
                        <label class="checkbox-container mt-1">
                            <input type="checkbox" name="settlement">
                            <span class="checkmark"></span>
                        </label>
                        <p class="br-terms pl-1">
                            Je reconnais être majeur ou avoir l’autorisation de mon tuteur légal.
                            J’ai pris connaissance du règlement et j’accepte les conditions de participation à la Barbichette Cup.
                        </p>
                        </div>
                        <div id="validation-errors"></div>
                        <button type="submit" class="btn btn-valid">VALIDER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="br-section br-section-offre">
        <div class="br-offre-content br-content">
            <div class="br-offre-top">
                <h1>PREMIER PRIX</h1>
                <h2>de la barbichette cup</h2>
            </div>
            <div class="br-offre-second">
                <h1>un voyage à Madrid pour 4 personnes</h1>
                <h2>avec visite du parQUE Warner</h2>
            </div>
            <img class="mt-4" src="{{asset('img/dotation.png')}}" alt="">
            <div class="br-offre-bottom">
                <h1>Et aussi des coffrets cadeaux VIVABOX, et plein d’autres cadeaux !</h1>
                <h2>Bonne chance à tous ! </h2>
            </div>
        </div>
    </div>
    <div class="br-section br-section-details">
        <div class="br-details-content br-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('img/plan.png')}}" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3>INFOS PRATIQUES</h3>
                        <h5><span>ParC de la Villette</span>
                            Parvis My Boat, 211 avenue Jean Jaurès, 75019 Paris
                        </h5>
                        <div class="spacing">-</div>
                        <p>Parking Vinci Park 211 avenue Jean Jaurès, 75019 Paris</p>
                        <div class="spacing">-</div>
                        <div class="br-details-info">
                            <div class="row">
                                    <div class="col-2">
                                        <span>Métro :</span>
                                    </div>
                                    <div class="col">
                                        Porte de Pantin 
                                        <div class="br-rounded br-rounded-orange">5</div>
                                        <span class="ml-3">Porte de la Villette</span>
                                        <div class="br-rounded br-rounded-pink">5</div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-2">
                                        <span>TRAM :</span>
                                    </div>
                                    <div class="col">
                                            Ligne 3b – Porte de Pantin ou Porte de la Villette
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <span>BUS :</span>
                                </div>
                                <div class="col">
                                    <span class="d-block">BUS : 	Lignes 75, 151 – Porte de Pantin</span> 
                                    <span>Lignes 139, 150, 152 – Porte de la Villette</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="br-section br-section-brand">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>En PARTENARIAT AVEC : </h3>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('img/brands/1.png')}}" alt="">
                    <img src="{{asset('img/brands/2.png')}}" alt="">
                    <img src="{{asset('img/brands/3.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <section id="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="video-player">
                            <img src="{{asset('img/play-button.png')}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Boomerang, La chaîne des stars du dessin animé !</p>
                    <p>
                    <span class="d-block">Boomerang, c’est la chaîne des stars du dessin animé.</span>
                    <span class="d-block">Elle propose chaque jour des programmes tous plus drôles</span>
                    <span class="d-block">les uns que les autres pour les enfants de 3 à 7 ans et pour toute la famille !</span>
                    <span class="d-block">Retrouvez toute la journée les nouvelles aventures de vos séries préférées </span>
                    <span class="d-block">et amusez-vous avec Bugs, Scooby-Doo, Tom & Jerry, Garfield, La Panthère Rose,</span>
                    <span class="d-block">les Looney Tunes, Mr Bean et bien d’autres encore.</span>
                    </p>
                    <h5>www.boomerangTV.fr</h5>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('img/brand.svg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="bottom-footer" class="text-center">
        <ul class="nav-links">
            <li>Le site Boomerang</li>
            <li> Communiqué de presse</li>
            <li>Réglement du jeu</li>
            <li>Mentions légales</li>
            <li>Politique cookies</li>
        </ul>
    </section>
</footer>
@endsection