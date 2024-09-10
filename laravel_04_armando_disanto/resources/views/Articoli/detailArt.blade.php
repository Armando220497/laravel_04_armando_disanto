<x-layout>
    <div class="container art">
        <img src="https://picsum.photos/200" alt="">
        <h1>{{ $articolo['titolo'] }}</h1>
        <p>{{ $articolo['contenuto'] }}</p>
        <a href="{{ route('indiceArticoli') }}" class="btn btn-secondary">Torna indietro</a>
    </div>
</x-layout>