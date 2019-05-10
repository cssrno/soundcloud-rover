<header>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('/img/home/swiper1.jpg')">
                <div class="swiper-content">
                    <h2>Découvrez-en davantage grâce à RoverCloud Go+</h2>
                    <p>RoverCloud Go+ vous permet d'écouter plus de 150 millions de titres (et bientôt bien plus encore) hors connexion et sans publicité.</p>
                    <button type="button" class="btn btn-primary">En savoir plus</button>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('/img/home/swiper2.jpg')">
                <div class="swiper-content">
                    <h2>Les prochaines tendances musicales sont d'abord sur RoverCloud</h2>
                    <p>Uploadez votre premier titre et commencez votre aventure. SoundCloud vous offre l'espace nécessaire pour créer, trouver vos fans et entrer en contact avec d'autres artistes.</p>
                    <button type="button" class="btn btn-primary">Commencez à uploader dès aujourd'hui</button>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</header>
@guest
@else
    <section class="container-search">
        <form id="search" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" name="search" required placeholder="Recherchez des artistes, des groupes, des titres et des podcasts">
            <input class="btn btn-primary"  type="submit">
        </form>
    </section>
@endguest