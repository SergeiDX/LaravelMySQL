@extends('layouts.app')

@section('template_title')
    Tienda
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tienda') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tiendas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre Tienda</th>
										<th>Id Videojuego</th>
										<th>Id Venta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tiendas as $tienda)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tienda->nombre_tienda }}</td>
											<td>{{ $tienda->id_videojuego }}</td>
											<td>{{ $tienda->id_venta }}</td>

                                            <td>
                                                <form action="{{ route('tiendas.destroy',$tienda->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tiendas.show',$tienda->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tiendas.edit',$tienda->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tiendas->links() !!}
            </div>
        </div>
    </div>
@endsection
