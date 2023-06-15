<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <h1 class="text-center mt-5 mb-5">Magazijn Jamin</h1>




         <a href="{{route('magazijn.create')}}" class="btn btn-primary">Product toevoegen</a>
        
        <table class="table ms-4">
            <tr>
                <th>Barcode</th>
                <th>Naam</th>
                <th>Verpakkingseenheid</th>
                <th>Aantalaanwezig</th>
                <th>Allergenen info</th>
                <th>Leverantie info</th>
            </tr>

            @foreach($magazijn as $magazijn)

            <tr>
                <td>{{$magazijn->barcode}}</td>
                <td>{{$magazijn->product_naam}}</td>
                <td>{{$magazijn->verpakkingseenheid}}</td>
                <td>{{$magazijn->aantalaanwezig}}</td>
                <td><a href="{{route('allergeen.index', $magazijn->product_id)}}">Allergeen info</a></td>
                <td><a href="{{route('leverancier.index', $magazijn->product_id)}}">Leverantie info</a></td>
                

            </tr>

            @endforeach
</body>
</html>


            





