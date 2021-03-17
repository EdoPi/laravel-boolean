
<h1>Lista Automobili</h1>
@foreach ($cars as $item)    
    <div>
        <ul>
            <li><b>Marca: </b>{{$item -> modello}}</li>
            <li><b>Modello: </b>{{$item -> marca}}</li>
            <li><b>Prezzo: </b>{{$item-> prezzo}} </li>
        </ul>
    </div>
@endforeach