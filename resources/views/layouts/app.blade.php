<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>@yield('title')</title>
     <link href="{{asset('css/app.css')}}" rel="stylesheet">
 </head>
 
 <body>
    @include('layouts.header')

     <main>
         <article>
             <div class="container">  
                 <h1>@yield('title')</h1>
                 @yield('content')
             </div>
         </article>
     </main>
 
     @include('layouts.footer')

 </body>
 
 </html>