{{-- ho usato il Controller (path: app/Http/Controllers/Products.php) --}}

<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>La Molisana</title>
</head>

<body>
    @include('partials.header')
    <main>
        <div class="container">
            <section id="long">
                <h2>Le lunghe</h2>
                <div class="cards">
                @foreach ($long as $key => $card)
                    <div class="card">
                        <a href="{{route('show',['id' => $key])}}"><h3>{{$card['titolo']}}</h3></a>
                        <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                    </div>
                @endforeach
                </div>
            </section>

            <section id="short">
                <h2>Le corte</h2>
                <div class="cards">
                @foreach ($short as $key => $card)
                    <div class="card">
                        <a href="{{route('show',['id' => $key])}}"><h3>{{$card['titolo']}}</h3></a>
                        <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                    </div>
                @endforeach
                </div>
            </section>

            <section id="very-short">
                <h2>Le cortissime</h2>
                <div class="cards">
                @foreach ($veryShort as $key => $card)
                    <div class="card">
                        <a href="{{route('show',['id' => $key])}}"><h3>{{$card['titolo']}}</h3></a>
                        <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                    </div>
                @endforeach
                </div>
            </section>
        </div>
    </main>
</body>
</html>