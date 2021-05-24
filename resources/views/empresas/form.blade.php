@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{url ('empresas/add')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Nome da Empresa:</label>
                          <input type="text" name="nome" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Federação_id:</label>
                            <input type="text" name="federacao_id" class="form-control">
                          </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
