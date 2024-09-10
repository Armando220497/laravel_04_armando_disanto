<x-layout>
  

  
    {{-- card article --}}
    <div class="container mt-4">
        <div class="row">
            @foreach($articoli as $articolo)
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 15rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="foto articolo">
                        <div class="card-body">
                            <h5 class="card-title">{{ $articolo['titolo'] }}</h5>
                            <p class="card-text">{{ Str::limit($articolo['contenuto'], 100) }}</p>
                            <a href="{{ route('Dettagli', ['article' => $articolo['id']]) }}" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- card article end --}}
</x-layout>