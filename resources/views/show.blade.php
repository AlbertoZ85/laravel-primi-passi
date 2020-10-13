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
            <div class="cards">
                <div class="card">
                    <h3>{{$card['titolo']}}</h3>
                    <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                </div>
            </div>
        </div>
    </main>
</body>
</html>