@extends("template.app")

@section("content")
    <div class="panel-group">
        @foreach($users as $user)
            <br>
            <div class="col-md-2">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><p><strong>Nome: </strong></p>{{ $user -> name }}</li>
                        <li class="list-group-item"><p><strong>Sobrenome: </strong></p>{{ $user -> last_name }}</li>
                        <li class="list-group-item"><p><strong>Data Nascimento: </strong></p>{{ $user -> birth_date }}</li>
                        <li class="list-group-item"><p><strong>Habilidade: </strong></p>{{ $user -> abillity }}</li>
                        <li class="list-group-item"><p><strong>Telefone: </strong></p>{{ $user -> tel }}</li>
                    </ul>
                </div>
            </div>
            <br>
        @endforeach
    </div>
@endsection