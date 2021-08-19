   
   <div style="  padding-top: 50px;">
   @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table id="enviosTable" class="table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Número de rastreo</th>
      <th scope="col">Origen</th>
      <th scope="col">Destino</th>
      <th scope="col">Status</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @php
      $i = 1; 
    @endphp
    @foreach ($envios as $envio)
      <tr>
        <td>{{ $i++ }}</td>
        <td>{{$envio->numeroRastreo}}</td>
        <td>  
          @foreach($estados as $estado)
              @if($estado->id == $envio->origen)
                  {{$estado->name}}
              @endif
          @endforeach
        </td>
        <td>
          @foreach($estados as $estado)
              @if($estado->id == $envio->destinoFinal)
                  {{$estado->name}}
              @endif
          @endforeach
        </td>
        <td>
          @foreach($status as $stat)
              @if($stat->id == $envio->status)
              <b>{{$stat->statusNombre}}</b>
              @endif
          @endforeach
        </td>
      <td>
          <form action="{{ route('envios.destroy',$envio->id) }}" method="POST">
              <a class="btn btn-info" href="{{ route('envios.show',$envio->id) }}" title="Ver detalles de envío"><i class="fas fa-info-circle"></i></a>
              
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" title="Eliminar envío"><i class="fas fa-trash-alt"></i></button>
          </form>
      </td>                  
      </tr>
    @endforeach
  </tbody>
</table>
   </div>
   
    
