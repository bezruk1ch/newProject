<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>

<header>
    <a href="{{ route('home') }}">Главная</a>
</header>

    <div class="container">
        @foreach($array as $item)
            <div class="card">
                <img src="{{ $item['path'] }}" alt="{{ $item['title'] }}">
                <div class="card-title">{{ $item['title'] }}</div>
                <div class="card-price">{{ $item['price'] }} ₽</div>
            </div>
        @endforeach
    </div>

</body>
</html>