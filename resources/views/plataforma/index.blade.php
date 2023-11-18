@extends('layouts.app')

@section('template_title')
    Plataforma
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Plataforma') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('plataformas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre Plataforma</th>
										<th>Fabricante</th>
										<th>Id Videojuego</th>
										<th>Id Usuario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plataformas as $plataforma)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $plataforma->nombre_plataforma }}</td>
											<td>{{ $plataforma->fabricante }}</td>
											<td>{{ $plataforma->id_videojuego }}</td>
											<td>{{ $plataforma->id_usuario }}</td>

                                            <td>
                                                <form action="{{ route('plataformas.destroy',$plataforma->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('plataformas.show',$plataforma->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('plataformas.edit',$plataforma->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $plataformas->links() !!}
            </div>
        </div>
    </div>
@endsection
