@extends('layouts.app')


@section('content')

    <a href="{{route('admin.categories.create')}}" class="btn btn-lg btn-success" style="margin-bottom: 40px">Criar Categoria</a>

    <table class="table table-striped">
        <head>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </head>
        <body>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('admin.categories.edit', ['category' => $category->id])}}" class="btn btn-sm btn-primary" style="margin-right: 20px">Editar</a>

                            <form action="{{route('admin.categories.destroy', ['category' => $category->id])}}" method="post">
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

    {{$categories->links()}}
@endsection
