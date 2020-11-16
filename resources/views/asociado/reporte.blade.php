@extends('layouts.asociado')

@section('content')
<div class="container-fluid"></br>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            
                <div class="panel-heading">Registrados en mis comunidades</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table id="usuarios" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Patrocinador</th> 
                                <th>Registrados</th>
                                <th>Comunidad</th>
                                <th>Fecha Alta</th>   
                                <th>Estatus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                //dd($matrices);
                            @endphp
                            @if($usuarios !== NULL)
                                @foreach($usuarios as $user)
                                    @if ($user['nombre'] == '') 
                                        @php
                                            continue;
                                        @endphp

                                    @endif
                                    <tr>
                                        <td>{{ @$user['codigo'] }}</td>
                                        <td>{{ $patrocinador['nombre'] }} {{ $patrocinador['apellidoPaterno'] }}  {{ $patrocinador['apellidoMaterno'] }}</td>
                                        <td>{{ $user['nombre'] }} {{ $user['apellidoPaterno'] }} {{ $user['apellidoMaterno'] }}</td>
                                        <td>
                                            {{ $matrices->nombre }}
                                        </td>
                                        <td>
                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user['created_at'])->format('Y-m-d') }}
                                        </td>
                                        <!-- Mauricio -->
                                        <td>
                                            @if($user['estatus'] == 0) 
                                                Desactivado
                                            @else
                                                Activado
                                            @endIf 
                                        </td>
                                        <!-- <td>@foreach ($bancos as $banco)
                                            @if($banco->idUser==Auth::id()) 
                                            {{$banco->nombre}}
                                            @endIf 
                                        @endforeach</td>  -->





                                       

                                     

                                        

                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Patrocinador</th>
                                <th>Registrados</th>
                                <th>Comunidad</th>
                                <th>Fecha Alta</th>
                                <th>Estatus</th>
                                <!-- <th>Banco</th> -->
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/dataTableMaster.js')}}"></script>
@endsection