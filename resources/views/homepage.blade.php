<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            
            <div class="row gx-5 p-3 justify-content-center">

                @foreach ($movies as $movie)
                {{-- <div class="card col-4 m-3" >
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div> --}}
                <div class="card col-4 m-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Titolo: {{$movie->title}}</li>
                        <li class="list-group-item">Titolo originale: {{$movie->original_title}}</li>
                        <li class="list-group-item">Nazionalita: {{$movie->nationality}}</li>
                        <li class="list-group-item">Data d'uscita: {{$movie->date}}</li>
                        <li class="list-group-item">Voto: {{$movie->vote}}</li>
                    </ul>
                </div>
                @endforeach
            </div>
            

        </div>
    </main>

</body>

</html>
