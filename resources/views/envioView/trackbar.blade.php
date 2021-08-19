<div class="card card-timeline px-2 border-none">
    <ul class="bs4-order-tracking">
        @if ($envio->status == 1)
            <li class="step active">
                <div><i class="fas fa-box"></i></div> Nueva
            </li>
            <li class="step">
                <div><i class="fas fa-people-carry"></i></div> Recolectada
            </li>
            <li class="step">
                <div><i class="fas fa-truck"></i></div> En ruta
            </li>
            <li class="step ">
                <div><i class="fas fa-truck-loading"></i></div> Entregada
            </li>
            <li class="step ">
                <div><i class="fas fa-car-crash"></i></div> Incidente
            </li>
        @elseif ($envio->status == 2)
            <li class="step active">
                <div><i class="fas fa-box"></i></div> Nueva
            </li>
            <li class="step active">
                <div><i class="fas fa-people-carry"></i></div> Recolectada
            </li>
            <li class="step">
                <div><i class="fas fa-truck"></i></div> En ruta
            </li>
            <li class="step ">
                <div><i class="fas fa-truck-loading"></i></div> Entregada
            </li>
            <li class="step ">
                <div><i class="fas fa-car-crash"></i></div> Incidente
            </li>
        @elseif ($envio->status == 3)
            <li class="step active">
                <div><i class="fas fa-box"></i></div> Nueva
            </li>
            <li class="step active">
                <div><i class="fas fa-people-carry"></i></div> Recolectada
            </li>
            <li class="step active">
                <div><i class="fas fa-truck"></i></div> En ruta
            </li>
            <li class="step ">
                <div><i class="fas fa-truck-loading"></i></div> Entregada
            </li>
            <li class="step ">
                <div><i class="fas fa-car-crash"></i></div> Incidente
            </li>
        @elseif ($envio->status == 4)
            <li class="step active">
                <div><i class="fas fa-box"></i></div> Nueva
            </li>
            <li class="step active">
                <div><i class="fas fa-people-carry"></i></div> Recolectada
            </li>
            <li class="step active">
                <div><i class="fas fa-truck"></i></div> En ruta
            </li>
            <li class="step active">
                <div><i class="fas fa-truck-loading"></i></div> Entregada
            </li>
            <li class="step ">
                <div><i class="fas fa-car-crash"></i></div> Incidente
            </li>
        @elseif ($envio->status == 5)
            <li class="step active">
                <div><i class="fas fa-box"></i></div> Nueva
            </li>
            <li class="step active">
                <div><i class="fas fa-people-carry"></i></div> Recolectada
            </li>
            <li class="step active">
                <div><i class="fas fa-truck"></i></div> En ruta
            </li>
            <li class="step active">
                <div><i class="fas fa-truck-loading"></i></div> Entregada
            </li>
            <li class="step active">
                <div><i class="fas fa-car-crash"></i></div> Incidente
            </li>
        @else
            <li class="step ">
                <div><i class="fas fa-box"></i></div> Nueva
            </li>
            <li class="step ">
                <div><i class="fas fa-people-carry"></i></div> Recolectada
            </li>
            <li class="step ">
                <div><i class="fas fa-truck"></i></div> En ruta
            </li>
            <li class="step ">
                <div><i class="fas fa-truck-loading"></i></div> Entregada
            </li>
            <li class="step ">
                <div><i class="fas fa-car-crash"></i></div> Incidente
            </li>
        @endif
       
      
      
    </ul>

    @foreach($status as $stat)
        @if ($stat->id == $envio->status)
            <h5 class="text-center"><b>{{$stat->statusNombre}}, </b>{{$stat->statusDescripcion}}</h5>
        @endif
    @endforeach


</div>