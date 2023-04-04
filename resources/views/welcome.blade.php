<x-layout>
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Bentornato @auth{{ Auth::user()->name }}@endauth</h3>
            </div>
        </div>
    </div>
    @auth
    <div class="container my-3">
        <div class="row">
            @foreach($comunis as $comuni)
            <div class="col-12 col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="{{ Storage::url($comuni->img) }}"class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $comuni->name }}</h5>
                      <p class="card-text">{{ $comuni->description }}</p>
                      <p class="card-text"> Inserito da:{{ $comuni->user->name }}</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-md-4 my-2">
               <x-googleAutocomplete/>
        </div>
    </div>
    @endauth
</x-layout>