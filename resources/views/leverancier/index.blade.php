<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <h1 class="text-center">Leverings informatie</h1>

    

    
        
        

        <table class="table ms-4">
            <tr>
                <th>Leverancier naam</th>
                <th>Contact persoon</th>
                <th>Leverancier nummer</th>
                <th>Mobiel</th>
                <th>Naam product</th>
                <th>Datum laatste levering</th>
                <th>Aantal</th>
                <th>Eerstvolgende levering</th>
                <th>Bijvoegen</th>
            </tr>

            @foreach($leverancier as $leverancier)

            

            <tr>
                <td>{{$leverancier->leverancier_naam}}</td>
                <td>{{$leverancier->contact_persoon}}</td>
                <td>{{$leverancier->leverancier_nummer}}</td>
                <td>{{$leverancier->mobiel}}</td>
                <td>{{$leverancier->product_naam}}</td>
                <td>{{$leverancier->datum_levering}}</td>
                <td>{{$leverancier->aantal}}</td>
                <td>{{$leverancier->datum_eerstvolgende_levering}}</td>
                <td><a href="{{route('leverancier.create')}}" class="btn btn-primary">Levering toevoegen</a></td>
            </tr>
                  @endforeach
</body>
</html>


            





