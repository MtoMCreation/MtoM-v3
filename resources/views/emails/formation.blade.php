@component('mail::message')

    Nouveau message : Présentation d'un projet

    Nom : {{$data['nom']}}
    Téléphone : {{$data['telephone']}}
    Email : {{$data['email']}}
    Formation : {{ $data['formation'] }}
    ________________________________________________

    Message :
    {{$data['message']}}

@endcomponent
