<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body style="background-color:Teal">


            <div style="background:; border-radius:10px;padding:5px;">
                <marquee><h1 style="font-size:30px;">Veuillez Ajouter un Candidat</h1></marquee>
            </div>
            <a style="border:1px solid; background:Chartreuse; padding:5px;
                    font-size:15px;border-radius:2px; color:black" href="{{ route('candidat.index') }}">
                        Voir les Candidats</a>
            <br>
            <center>
            <div style="background-color:Aqua; width:100%">
            <table>
            <div >
            <form method="POST" action="{{ route('candidat.store') }}">
                @csrf
                
                <label for=""> Nom 
                <input type="text" name="nom" placeholder="nom">
                </label>
                <br>
                <br>
                <label for=""> Prenom 
                <input type="text" name="prenom" placeholder="prenom">
                </label>
                <br>
                <br>
                <label for="">E-mail</label>
                <input type="text" name="email" placeholder="email">
                <br>
                <br>
                <label for="">Age</label>
                <input type="number" name="age" placeholder="age">
                <br>
                <br>
                <label for=""> NiveauEtude 
                <input type="text" name="niveauEtude" placeholder="niveauEtude">
                </label>
                <br>
                <br>
                <label for=""> Sexe 
                <select name="sexe" id="">
                    <option value="">---------</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
                </label>
                <br>
                <br>
                <label for="">  Formations
                <select name="formations" id="">
                    @foreach($formations as $formation)
                        <option value="{{$formation->id}}">{{$formation->nom}}</option>
                    @endforeach
                </select>
                </label>
               <br>
               <br>
               <label for="">  Referenciels
                <select name="referenciels" id="">
                    @foreach($referenciels as $referenciel)
                        <option value="{{$referenciel->id}}">{{$referenciel->libelle}}</option>
                    @endforeach
                </select>
                </label>
                <br>
                <br>
                <label for="">  Types
                <select name="types" id="">
                    @foreach($types as $type)
                        <option value="{{$type->id}}">{{$type->libelle}}</option>
                    @endforeach
                </select>
                </label>
                <br>
                <br>
                <input type="submit" name="" value="Enregistrer" >
                
                
    
             </div>
            </form>
            </table>
            </div>
            </center>
        
        
       
    </body>
</html>