@extends('layouts.app')

@section('content')

    <h1>Editar Produto</h1>

    <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="POST">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label>Nome do Produto</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name', $product->name ?? '')}}">

            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description', $product->description ?? '')}}">

            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Conteúdo</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror">{{old('body', $product->body ?? '')}}</textarea>

            @error('body')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Preço</label>
            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price', $product->price ?? '')}}">

            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Categorias</label>
            <select name="categories[]" id="" class="form-control" multiple>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" @if ($product->categories->contains($category)) selected @endif>
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{old('slug', $product->slug ?? '')}}">
        </div>

        <div>
            <button type="submit" class="btn btn-lg btn-success" style="margin-top: 40px">Editar Produto</button>
        </div>
    </form>
@endsection
