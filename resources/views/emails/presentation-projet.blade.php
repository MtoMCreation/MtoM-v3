@component('mail::message')

    Nouveau message : Présentation d'un projet

    Nom : {{$data['nom']}}
    Téléphone : {{$data['telephone']}}
    Email : {{$data['courriel']}}
    Vous êtes : {{ $data['type'] }}
    Demande : {{ $data['demande_concerne'] }}
    ________________________________________________

    Message :
    {{$data['message']}}

@endcomponent
