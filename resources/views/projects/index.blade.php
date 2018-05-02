@extends("template.app")

@section("content")
    <div class="panel-group">
        @foreach($projects as $project)
            <br>
            <div class="col-md-2">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><p><strong>Projeto: </strong></p>{{ $project -> name }}</li>
                        <li class="list-group-item"><p><strong>Data Início: </strong></p>{{ $project -> started_date }}</li>
                        <li class="list-group-item"><p><strong>Data Término: </strong></p>{{ $project -> end_date }}</li>
                    </ul>
                </div>
            </div>
            <br>
        @endforeach
    </div>
@endsection