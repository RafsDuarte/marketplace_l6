@extends('layouts.app')

@section('content')

    @if (!$store)
        <a href="{{route('admin.stores.create')}}" class="btn btn-lg btn-success" style="margin-bottom: 40px">Criar Loja</a>
    @endif

    <table class="table table-striped">
        <head>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Total de Produtos</th>
                <th>Ações</th>
            </tr>
        </head>
        <body>
            <tr>
                <td>{{$store->id}}</td>
                <td>{{$store->name}}</td>
                <td>{{$store->products()->count()}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('admin.stores.edit', ['store' => $store->id])}}" class="btn btn-sm btn-primary" style="margin-right: 20px">Editar</a>

                        <form action="{{route('admin.stores.destroy', ['store' => $store->id])}}" method="POST">
                            @csrf
                            @method("DELETE")

                            <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                        </form>
                    </div>
                </td>
            </tr>
        </body>
    </table>
@endsection
