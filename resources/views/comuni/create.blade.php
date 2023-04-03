<x-layout>
    <div class="container my-5">
        <div class="row my-5">
            <div class="col-12">
                <h1>Aggiungi Comune</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row my-5">
            <div class="col-12">
                <form enctype="multipart/form-data" method="post" action="{{ route('comuni.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                      <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Immagine</label>
                        <input type="file" name="img" class="form-control" id="exampleInputEmail1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
