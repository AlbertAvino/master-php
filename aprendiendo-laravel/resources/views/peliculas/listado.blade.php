@include('includes.header')


<!-- IMPRIMIR POR PANTALLA -->

<h1>{{$titulo}}</h1>

<h2>{{$listado[2]}}</h2>

<p>{{date('')}}</p>
<!-- COMENTARIOS -->
{{-- ESTO ES UN COMENTARIO DE BLADE --}}

<!-- MOSTRAR SI EXISTE -->
<!-- <?= isset($director) ? $director : 'N o hay director' ;?> -->

{{ $director ?? 'No hay ningun director' }}


<!-- CONDICIONALES -->
    @if($titulo && count($listado) >= 5 )
    <h1>El titulo existe y es este : {{$titulo}} y el listado es mayor de 5</h1>
    @elseif ($titulo)
        <h1>El listado existe y el listado NO ES MAYOR DE 5</h1>
    @else
       El titulo no existe
    @endif
    
<!-- BUCLES -->

    @for($i = 1 ; $i <= 20 ; $i++)
        El número es : {{$i}} <br/>
    @endfor
    <hr/>
    <?php $contador = 1?>
    @while($contador < 50)
        @if($contador % 2 == 0)
            NUMERO PAR : {{$contador}}<br/>
        @endif
        <?php $contador++ ?>
    @endwhile
    <hr/>
    
    @foreach($listado as $pelicula)
    <p>{{$pelicula}}</p>
    @endforeach
    
    @include('includes.footer')