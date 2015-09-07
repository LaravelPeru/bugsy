@include('reports.base')

<center><h1>Ruta de hoy: {{ $fecha_visita }} {{ $grupo }}</h1></center>

<table class="tg">
  <tr>
    <th class="tg-031e">Orden</th>
    <th class="tg-031e">Taller o Razon Social</th>
    <th class="tg-031e">Contacto</th>
    <th class="tg-031e">Email</th>
    <th class="tg-031e">Teléfono</th>
    <th class="tg-031e">Zona</th>
    <th class="tg-031e">Distrito</th>
    <th class="tg-031e">Dirección</th>
    <th class="tg-031e">Observaciones</th>
  </tr>
  @foreach( $talleres as $index => $taller )
    <tr>
      <td class="tg-vn4c">{{ $index + 1 }}</td>
      <td class="tg-vn4c">{{ $taller->nombre }}</td>
      <td class="tg-vn4c">{{ $taller->contacto }}</td>
      <td class="tg-vn4c">{{ $taller->email }}</td>
      <td class="tg-vn4c">Tel: {{ $taller->telefono }} / Cel: {{ $taller->celular }}</td>
      <td class="tg-vn4c">{{ $taller->zona->nombre }}</td>
      <td class="tg-vn4c">{{ $taller->distrito->nombre }}</td>
      <td class="tg-vn4c">{{ $taller->direccion }}</td>
      <td class="tg-vn4c"></td>
    </tr>
  @endforeach
</body>