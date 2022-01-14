@component('mail::message')

    Nouveau message : Demande formulaire de contact

    Nom : {{$data['nom']}}
    Téléphone : {{$data['telephone']}}
    Email : {{$data['email']}}
    ________________________________________________

    Message :
    {{$data['message']}}

@endcomponent
