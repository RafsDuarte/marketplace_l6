@extends('layouts.app')

@section('content')

    <h1>Editar Loja</h1>

    <form action="{{route('admin.stores.update', ['store' => $store->id])}}" method="POST">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label> Nome da Loja</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name', $store->name ?? '')}}">

            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description', $store->description ?? '')}}">

            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone', $store->phone ?? '')}}">

            @error('phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror

        </div>

        <div class="form-group">
            <label>Celular</label>
            <input type="text" name="mobile_phone" class="form-control @error('mobile_phone') is-invalid @enderror" value="{{old('mobile_phone', $store->mobile_phone ?? '')}}">

            @error('mobile_phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{old('slug', $store->slug ?? '')}}">
        </div>

        <div>
            <button type="submit" class="btn btn-lg btn-success" style="margin-top: 40px">Editar Loja</button>
        </div>
    </form>
@endsection
