<h1>{{$titulo}}</h1>
<p>(acción index del controlador Peliculascontroller)</p>
@if(isset($pagina))
<h3>La página es : {{$pagina}}</h3>
@endif

<a href="{{action('PeliculaController@detalle')}}">Ir al detalle</a>