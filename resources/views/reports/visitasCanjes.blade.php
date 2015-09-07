@include('reports.base')

<center><h1>Consolidado de Puntos y Canjes</h1></center>

<table class="tg">
  <tr>
    <th class="tg-031e" rowspan="3">Zona</th>
    <th class="tg-031e" rowspan="3">Rango de Fechas</th>
    <th class="tg-031e" rowspan="3">Talleres</th>
    <th class="tg-031e" colspan="{{ $bosch->count() }}">Empaques Bosch</th>
    <th class="tg-031e" rowspan="3">Suma Bosh</th>
  </tr>
  <tr>
    @foreach( $bosch as $empaque )
        <th class="tg-031e vertical-text">{{ $empaque->nombre }}</th>
    @endforeach
  </tr>
  <tr>
    <th class="tg-031e" colspan="4">1</th>
    <th class="tg-031e" colspan="4">3</th>
    <th class="tg-031e" colspan="6">5</th>
    <th class="tg-031e" colspan="4">10</th>
  </tr>

@foreach( $talleres as $taller )
<tr>
    <td class="tg-vn4c" data-zona>{{ $taller->zona->nombre }}</td>
    <td class="tg-vn4c" data-rangos>{{ $rango }}</td>
    <td class="tg-vn4c" data-taller>{{ $taller->nombre }}</td>
    <?php $suma = 0; ?>
    @foreach( $bosch as $empaque )
        @if( $empaqueCanjeado = $taller->empaques->find($empaque) )
            <td class="tg-vn4c" data-empaque-total>{{ $empaqueCanjeado->pivot->total_empaques }}</td>
            <?php $suma += $empaqueCanjeado->pivot->total_empaques; ?>
        @else
            <td class="tg-vn4c" data-empaque-total>0</td>
        @endif
    @endforeach
    <td class="tg-vn4c" data-suma-bosch>{{ $suma }}</td>
</tr>
@endforeach

 </table>
 <p>


 </p>
 <table class="tg">
  <tr>
    <th class="tg-031e" rowspan="3">Zona</th>
    <th class="tg-031e" rowspan="3">Rango de Fechas</th>
    <th class="tg-031e" rowspan="3">Talleres</th>
    <th class="tg-031e" colspan="{{ $fm->count() }}">Empaques FM</th>
    <th class="tg-031e" rowspan="3">Suma FM</th>
  </tr>
  <tr>
    @foreach( $fm as $empaque )
        <th class="tg-031e vertical-text">{{ $empaque->nombre }}</th>
    @endforeach
  </tr>
  <tr>
    <th class="tg-031e" colspan="2">1</th>
    <th class="tg-031e" colspan="2">3</th>
    <th class="tg-031e" colspan="4">5</th>
    <th class="tg-031e" colspan="6">10</th>
  </tr>
@foreach( $talleres as $taller )
    <tr>
        <td class="tg-vn4c" data-zona>{{ $taller->zona->nombre }}</td>
        <td class="tg-vn4c" data-rangos>{{ $rango }}</td>
        <td class="tg-vn4c" data-taller>{{ $taller->nombre }}</td>
        <?php $suma = 0; ?>
        @foreach( $fm as $empaque )
            @if( $empaqueCanjeado = $taller->empaques->find($empaque) )
                <td class="tg-vn4c" data-empaque-total>{{ $empaqueCanjeado->pivot->total_empaques }}</td>
                <?php $suma += $empaqueCanjeado->pivot->total_empaques; ?>
            @else
                <td class="tg-vn4c" data-empaque-total>0</td>
            @endif
        @endforeach
        <td class="tg-vn4c" data-suma-fm>{{ $suma }}</td>
    </tr>
@endforeach
</table>
<p>

</p>
<table class="tg">
  <tr>
    <th class="tg-031e" rowspan="3">Zona</th>
    <th class="tg-031e" rowspan="3">Rango de Fechas</th>
    <th class="tg-031e" rowspan="3">Talleres</th>
    <th class="tg-031e" rowspan="3">Puntos Disponibles</th>
    <th class="tg-031e" colspan="{{ $premios->count() }}">Canje de Premios</th>
    <th class="tg-031e" rowspan="3">Puntos Totales</th>
  </tr>
  <tr>
    @foreach( $premios as $premio )
        <th class="tg-031e vertical-text">{{ $premio->nombre }}</th>
    @endforeach
  </tr>
  <tr>
    <th class="tg-031e" colspan="1">10</th>
    <th class="tg-031e" colspan="6">30</th>
    <th class="tg-031e" colspan="2">50</th>
    <th class="tg-031e" colspan="1">100</th>
    <th class="tg-031e" colspan="2">150</th>
    <th class="tg-031e" colspan="1">200</th>
  </tr>
@foreach( $talleres as $taller )
    <tr>
        <td class="tg-vn4c" data-zona>{{ $taller->zona->nombre }}</td>
        <td class="tg-vn4c" data-rangos>{{ $rango }}</td>
        <td class="tg-vn4c" data-taller>{{ $taller->nombre }}</td>
        <td class="tg-vn4c" data-diferencia>{{ $taller->puntos_disponible }}</td>
        <?php $suma = $taller->puntos_disponible; ?>
        @foreach( $premios as $premio )
            @if( $premioCanjeado = $taller->premios->find($premio) )
                <td class="tg-vn4c" data-premio-total>{{ $premioCanjeado->pivot->total_premios }}</td>
                <?php $suma += $premioCanjeado->pivot->total_premios * $premioCanjeado->valor; ?>
            @else
                <td class="tg-vn4c" data-premio-total>0</td>
            @endif
        @endforeach
        <td class="tg-vn4c" data-puntos-totales>{{ $suma }}</td>
    </tr>
@endforeach
</table>
</body>
</html>