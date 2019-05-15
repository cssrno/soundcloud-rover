@foreach($chansons as $c)
    <tr>
        <td><img src="/img/default-song-image.jpg" alt="" style="height: 30px;"></td>
        <td><a class="chanson" data-file="{{ $c->fichier }}" href="#"> {{ $c->nom }} </a>par l'utilisateur <a href="/utilisateur/{{ $c->utilisateur-> id }}" data-pjax>{{ $c->utilisateur-> name }}</a></td>
    </tr>
@endforeach