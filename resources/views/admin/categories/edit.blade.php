@extends('layouts.app')


@section('content')

    <h1>Editar Categoria</h1>

    <form action="{{route('admin.categories.update', ['category' => $category->id])}}" method="post">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name', $category->name ?? '')}}">

            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control" value="{{old('description', $category->description ?? '')}}">

            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{old('slug', $category->slug ?? '')}}">
        </div>

        <div>
            <button type="submit" class="btn btn-lg btn-success" style="margin-top: 40px">Editar Categoria</button>
        </div>
    </form>
@endsection
