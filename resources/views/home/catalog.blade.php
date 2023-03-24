@extends('layouts.app')

@section('content')

<section class="catalog">
    <div class="container">
        <div class="title-box d-flex flex-wrap">
            <h2 class="title">
                Каталог
            </h2>
        <div class="catalog-items ">
            @foreach ($product as $prod)
            <div class="catalog-item card">
                <a href="/public/product/{{ $prod->id }}" class="prod-link">
                    <div class="pic-box">
                        <img src="/public/img/{{$prod -> photo}}" alt="" class="img-fliud">
                    </div>
                    <div class="text-box py-2">
                        <p class="card-title">{{$prod -> title}}</p>
                        <p class="price">{{$prod -> price}} руб.</p>
                    </div>
                    @if (Auth::user())
                        <a href="/public/addtocart/{{$prod -> id}}" class="btn btn-dark">Купить</a>
                    @else
                    <h1 class="no-auth">
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link filter-link" href="{{ route('login') }}">Пожалуйста авторизируйтесь</a>
                        </li>
                    @endif
                    </h1>
                    @endif
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
