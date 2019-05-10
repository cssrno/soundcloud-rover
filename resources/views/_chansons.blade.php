<div class="row">
    @foreach($chansons as $c)
        <div class="col-md-2">
            <div class="card">
                <div class="card-img" style="background-image: url('/img/default-song-image.jpg')"></div>
                <div class="card-text">
                    <a class="chanson" data-file="{{ $c->fichier }}" href="#"> {{ $c->nom }} </a> par l'utilisateur <a href="/utilisateur/{{ $c->utilisateur-> id }}" data-pjax>{{ $c->utilisateur-> name }}</a>
                </div>
            </div>
        </div>
    @endforeach
</div>