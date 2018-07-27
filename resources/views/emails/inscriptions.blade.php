@component('mail::message')
# Bonjour {{$inscription->team_leader}},

<p>
    Merci pour votre inscription au "BARBICHETTE CUP", <br>
    Vos informations ont bien été prises en compte. <br>
    Venez nous retrouver le samedi 17 juin dès 10h au Parvis Myboat du Parc de La Villette.
</p>

<p>
        Au plaisir de vous y retrouver <br>
        L’équipe BOOMERANG 
</p>


{{ config('app.name') }}
@endcomponent
