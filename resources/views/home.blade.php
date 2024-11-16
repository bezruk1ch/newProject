<!DOCTYPE html>
   <html lang="ru">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="{{ asset('css/style.css') }}">
       <title>Главная страница</title>
   </head>
   <body>
       <header>
           <img src="{{ asset('img/logo.png') }}" alt="Логотип сайта">
           <nav>
               <ul>
                   <li><a href="{{ route('home') }}">Главная</a></li>
                   <li><a href="{{ route('array') }}">Массивы</a></li>
               </ul>
           </nav>
       </header>

       <main>
           <h1>Добро пожаловать на сайт!</h1>
           <img src="{{ asset('img/hello.png') }}" alt="Пример картинки">
       </main>

       <footer>
           <p>&copy; Безруков Игорь Александрович 2005 год</p>
       </footer>
   </body>
   </html>