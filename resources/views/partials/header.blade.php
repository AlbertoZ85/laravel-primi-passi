<header>
    <div class="container">
        <h1>
            <a href="{{route('home')}}"><img src="https://cdn.shortpixel.ai/client/q_lossy,ret_img,w_250,h_145/https://www.lamolisana.it/wp-content/uploads/2020/05/marchio-sito-test.png" alt="la-molisana"></a>
        </h1>
        <nav>
            <ul>
                <li><a href="{{route('home')}}" class="{{url()->current() == route('home') ? 'active' : 'inactive'}}">Home</a></li>
                <li><a href="{{route('prodotti')}}" class="{{url()->current() == route('prodotti') ? 'active' : 'inactive'}}">Prodotti</a></li>
                <li><a href="{{route('contatti')}}" class="{{url()->current() == route('contatti') ? 'active' : 'inactive'}}">Contatti</a></li>
            </ul>
        </nav>
    </div>
</header>