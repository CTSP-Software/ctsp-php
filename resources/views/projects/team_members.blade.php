@extends("template.app")

@section("content")
<div class="panel panel-default">
    <p class="text-center text-primary display-4">Projeto <em>{{ $resultado2 }}</em> -  Team Members</p>

     <div class="panel-heading">
        Users
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <th>

                    Image

                </th>
                <th>

                    Name

                </th>
                <th>

                    E-mail

                </th>
                <th>

                    Status

                </th>
                <th>

                    Function

                </th>
            </thead>

            <tbody>
                @if($users->count() > 0)
                    @foreach($users as $user)
                        <tr>
                            <td>
                                <img src="{{ url('storage/users/'.$user->image) }}" width="60px" height="60px" style="border-radius: 50%;">
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                @if($user->status)
                                    <a href="{{ route('not_status', ['id' => $user->id, 'project' => $resultado2]) }}" class="btn btn-xs btn-danger">Remove</a>
                                @else
                                    <a href="{{ route('status', ['id' => $user->id, 'project' => $resultado2]) }}" class="btn btn-xs btn-success">Add</a>
                                @endif
                            </td>
                            <td>
                                Desconhecido
                            </td>
                        </tr>
                     @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No users</th>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection