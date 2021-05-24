@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{url ('empresas/new')}}">Cadastrar Empresa Jr</a></div>

                <form class="navbar-form navbar-left" role="search" action="{!! url('empresas/pesquisar') !!}" method="post">

                    <div class="form-group">
                      {!! csrf_field() !!}
                      <input type="text" name="texto" class="form-control" placeholder="Pesquisar" style="width: 600px;">
                
                    </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Lista de Empresas</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Empresa</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Federação</th>
                          </tr>
                        </thead>
                    @foreach ( $enterprises as $emp )
                    
                        <tbody>
                          <tr>
                            <th scope="row">{{$emp->id}}</th>
                            <td>{{$emp->nome}}</td>
                            <td></td>
                            <td>{{$emp->federacao_id}}</td>
                          </tr>
                    @endforeach
                        </tbody>
                    </table>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
