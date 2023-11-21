<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" href="{{ resources('css/app.css') }}">
        <title>EGGPAGE</title>
    </head>
    <body>
        <header>Profile
            <section class="egger">
                {{$Profile->Summary}}
            </section>
        </header>
        <section class="egg">
        </section>
        <section class="egg">Frameworks
            <p class="egger">
                @foreach ($Profile->Frameworks as $Frameworks)
                     <li>{{ $Frameworks->Name }}</li>
                     <li>{{ $Frameworks->Level }}</li>
                     <li>{{ $Frameworks->year }}</li>
                @endforeach
            </p>
        </section>
        <section class="egg1">Hobbies
            <p class="egger">
                @foreach ($Profile->Hobbies as $Hobbies)
                     <li>{{ $Hobbies->Name }}</li>
                     <li>{{ $Hobbies->Description}}</li>
                @endforeach
            </p>
        </section>
    </body>
</html>