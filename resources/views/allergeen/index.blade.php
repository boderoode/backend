<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <h1 class="text-center mt-5 mb-5">Allergenen overzicht</h1>



        
        
        <table class="table ms-4">
            <tr>
                <th>Product naam</th>
                <th>Barcode</th>
                <th>Allergeen naam</th>
                <th>omschrijving</th>
            </tr>

            @foreach($allergeen as $allergeen)

            <tr>
                <td>{{$allergeen->product_naam}}</td>
                <td>{{$allergeen->barcode}}</td>
                <td>{{$allergeen->allergeen_naam}}</td>
                <td>{{$allergeen->omschrijving}}</td>
            </tr>
            

            @endforeach
</body>
</html>