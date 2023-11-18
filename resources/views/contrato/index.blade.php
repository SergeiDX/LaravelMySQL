@extends('layouts.app')

@section('template_title')
    Contrato
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contrato') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contratos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Descripcion Contrato</th>
										<th>Fecha Inicio</th>
										<th>Fecha Limite</th>
										<th>Id Desarrollador</th>
										<th>Id Empresa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contratos as $contrato)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contrato->descripcion_contrato }}</td>
											<td>{{ $contrato->fecha_inicio }}</td>
											<td>{{ $contrato->fecha_limite }}</td>
											<td>{{ $contrato->id_desarrollador }}</td>
											<td>{{ $contrato->id_empresa }}</td>

                                            <td>
                                                <form action="{{ route('contratos.destroy',$contrato->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contratos.show',$contrato->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contratos.edit',$contrato->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $contratos->links() !!}
            </div>
        </div>
    </div>
@endsection
