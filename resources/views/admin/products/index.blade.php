@extends('layouts.app')

@section('content')

    <a href="{{route('admin.products.create')}}" class="btn btn-lg btn-success" style="margin-bottom: 40px">Criar Produto</a>

    <table class="table table-striped">
        <head>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </head>
        <body>
            @foreach ($products as $product )
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>R$ {{number_format($product->price, 2, ',', '.')}}</td>
                <td>{{$product->store->name}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('admin.products.edit', ['product' => $product->id])}}" class="btn btn-sm btn-primary" style="margin-right: 20px">Editar</a>

                        <form action="{{route('admin.products.destroy', ['product' => $product->id])}}" method="POST">
                            @csrf
                            @method("DELETE")

                            <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </body>
    </table>

    {{$products->links()}}
@endsection
