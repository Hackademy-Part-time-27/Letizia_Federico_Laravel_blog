<x-layout title='Contatti'>

        <div class="container mt-5">
        <h1 class="text-center">Contatti</h1>
        <h3 class="text-center">Ciao, ecco i nostri contatti</h3>
        <div class="row mt-5">
            <div class="col-md-6">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                <form action="{{ route('contact.processForm') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Messaggio</label>
                        <textarea name="message" id="message" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Invia</button>
                </form>
            </div>
            <div class="col-md-6">
                <h5>Email:</h5>
                <p>email@example.com</p>
                <h5>Telefono:</h5>
                <p>+123 4567890</p>
                <h5>Indirizzo:</h5>
                <p>Via Example, 123</p>
            </div>
        </div>
    </div>

</x-layout>
