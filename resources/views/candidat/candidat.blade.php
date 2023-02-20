<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:Teal">
    <center>
    <header class="header">
        <div class="container">
            <div class="row">
                <nav class="nav" style="background:; border-radius:10px;  height:70px">
                <br>
                <a style="border:1px solid; background:MidnightBlue; border-radius:15px; padding:10px;
                    font-size:14px;marging-bottom:10px; color:white" href="{{ route('candidat.create') }}">
                            Ajouter Un Candidat
                 </a> 
                <a style="border:1px solid; background:MidnightBlue; border-radius:15px; padding:10px;
                    font-size:14px;marging-bottom:10px; color:white" href="{{ route('candidat.pie') }}">
                            voir le graphe
                 </a>


                
                </nav>
            </div>

        </div>

    </header>
<br>
    
<div style="background:Aqua; border-radius:10px;padding:5px; width:80%; ">
    <div style="">
        <marquee><h1 style="font-size:50px; color:MidnightBlue">Liste des candidats</h1></marquee>
    </div>
    
        <table>
            <tr style="background-color:MidnightBlue; color:white; font-size:20px;padding:5px">
                <td>ID</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>E-mail</td>
                <td>Age</td>
                <td>Niveau Etude</td>
                <td>Sexe</td>
                
                

            @if ($candidats->count() > 0)
                        @foreach ($candidats as $candidat) 
                            <tr>
                            <td>{{ $candidat->id }}</td>
                            <td> {{$candidat->nom }} </td>
                            <td>{{ $candidat->prenom }}</td>
                            <td> {{$candidat->email }} </td>
                            <td> {{$candidat->age }} </td>
                            <td> {{$candidat->niveauEtude }} </td>
                            <td> {{$candidat->sexe }} </td>
                           
                         @endforeach
                @else 
                        <span>Aucun candidat  dans la base</span>
            @endif 
            <br>
           
        </table>
        </div>
        <br><br>
        <section style="background:white; border-radius:10px;padding:5px; width:50%">
            <h2 style="font-size:30px; color:Teal;text-align:center">Nombre de candidats par formation</h2>

        </section>
        <br><br>
        @foreach($formations as $formation)
            <span hidden>{{$cpt = 0}}</span>
            <span hidden>{{$c = "candidats"}}</span>
            <div style="background:#C0C0C0; border-radius:10px;padding:5px;width:30%">
            <h4>{{$formation->nom}}</h4>
            <div style="background:#A9A9A9; border-radius:10px;padding:5px;width:50%; font-weight:bold">
                @foreach ($formation-> candidats as $f)
                    <span hidden>{{$cpt =$cpt +1}}</span>
                @endforeach
                {{$cpt." ".$c}}
            </div>
            </div>
        @endforeach

        <br><br>
        <section style="background:white; border-radius:10px;padding:5px; width:50%">
            <h2 style="font-size:30px; color:Teal;text-align:center">Nombre de formations par referenciel</h2>

        </section>
        <br><br>
        @foreach($referenciels as $referenciel)
            <span hidden>{{$cpt = 0}}</span>
            <span hidden>{{$c = "formations"}}</span>
            <div style="background:#C0C0C0; border-radius:10px;padding:5px;width:30%">
            <h4>{{$referenciel->libelle}}</h4>
            <div style="background:#A9A9A9; border-radius:10px;padding:5px;width:50%; font-weight:bold">
                @foreach ($referenciel-> formations as $f)
                    <span hidden>{{$cpt =$cpt +1}}</span>
                @endforeach
                {{$cpt." ".$c}}
            </div>
            </div>
        @endforeach
        <br><br>
        <section style="background:white; border-radius:10px;padding:5px; width:50%">
            <h2 style="font-size:30px; color:Teal;text-align:center">Nombre d'Hommes </h2>

        </section>
        <br><br>
            <span hidden>{{$cpt = 0}}</span>
            <span hidden>{{$for = "Hommes"}}</span>
            <h4>Homme</h4>
                @foreach($candidats as $candidat)
                    @if ($candidat->sexe == "Homme")
                    <span hidden>{{$cpt =$cpt +1}}</span>
                    @endif
                @endforeach
                {{$cpt." ".$for}}
            </div>
            </div>
            <br><br>
        <section style="background:white; border-radius:10px;padding:5px; width:50%">
            <h2 style="font-size:30px; color:Teal;text-align:center">Nombre de femmes </h2>

        </section>
        <br><br>
            <span hidden>{{$cpt = 0}}</span>
            <span hidden>{{$for = "Femmes"}}</span>
            <h4>Homme</h4>
                @foreach($candidats as $candidat)
                    @if ($candidat->sexe == "Femme")
                    <span hidden>{{$cpt =$cpt +1}}</span>
                    @endif
                @endforeach
                {{$cpt." ".$for}}
            </div>
            </div>
        
        
    </center>
    
</body>
</html>