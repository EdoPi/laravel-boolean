
<h1>Lista Automobili</h1>
@foreach ($cars as $item)    
    <div>
        <h3><a href="/car/{{$item -> id - 1}}">Indice {{$item -> id - 1}} </a></h3>
        <ul>
            <li><b>Marca: </b><span style="text-transform: capitalize">{{$item -> modello}}</span></li>
            <li><b>Modello: </b><span style="text-transform: capitalize">{{$item -> marca}}</span></li>
            <li><b>Prezzo: </b><span>{{$item-> prezzo}}</span></li>
        </ul>
    </div>
@endforeach