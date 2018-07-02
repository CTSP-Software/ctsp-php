@extends("template.app")

@section("content")


<div class="size">
    <div class="container mt-5">
        <h1 id="titulowelcomepage">Projeto criado com sucesso!</h1>
        <br>
        <div class="list-group">
            <p class="list-group-item list-group-item-action active">Next Steps: </p>
            <a href="{{ route('papeis') }}" class="list-group-item list-group-item-action"> 1 - Create Team Members</a>
            <a href="#" class="list-group-item list-group-item-action">2 - Assing Team Members To Scrum Roles</a>
            <a href="#" class="list-group-item list-group-item-action">3 - Create a Product Backlog for the Project</a>
            <a href="#" class="list-group-item list-group-item-action disabled">4 - Create a Sprint</a>
        </div>
    </div>
</div>

@endsection