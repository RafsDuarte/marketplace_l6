<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketplace L6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 40px">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">Marketplace L6</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @auth
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link @if(request()->is('admin/stores*')) active @endif" href="{{ route('admin.stores.index') }}">Lojas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link @if(request()->is('admin/products*')) active @endif" href="{{ route('admin.products.index') }}">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->is('admin/categories*')) active @endif" href="{{ route('admin.categories.index') }}">Categorias</a>
                  </li>
              </ul>

              <div class="my-2 my-lg-0">
                  <ul class="navbar-nav me-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.querySelector('form.logout').submit();">Sair</a>

                        <form action="{{ route('logout') }}" class="logout" method="POST" style="display:none;">
                        @csrf
                        </form>
                      </li>
                      <li class="nav-item">
                        <span class="nav-link">{{ auth()->user()->name }}</span>
                      </li>
                    </ul>
              </div>
            @endauth
          </div>
        </div>
      </nav>
    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>
</body>
