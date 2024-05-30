<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Asociar Camiones:</h1>

<form action="{{route('truck_truck_driver.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
 

    <br>
    <h1>Camion:</h1>
    <select name="truck_id">
        @foreach($trucks as $truck)
            <option value="{{ $truck->id }}">{{ $truck->id }} - {{ $truck->Tipo }}</option>
        @endforeach
    </select>
    <br>
    <h1>Camionero:</h1>    
    <select name="truck_driver_id">
        @foreach($truckers as $trucker)
            <option value="{{ $truck_driver->id }}">{{ $truck_driver->id }} - {{ $truck_driver->name }}</option>
        @endforeach
    </select>

   
     <br> <br>
    <button type="submit">Enviar Formulario:</button>
    </form>


    
</body>
</html>