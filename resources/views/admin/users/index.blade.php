@extends('layouts.admin')
@section('content')
    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1>Список пользователей</h1>
        <br>

        <br><br><br>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>E-mail</th>
                <th>Роль</th>
                <th>Действие</th>
                <th>Дата регистрации</th>

            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>@if($user->isAdmin) Администратор @else Пользователь @endif </td>
                    <td><a href="{!! route('user.accepted', ['id' => $user->id]) !!}">Повысить</a>||
                        <a href="{!! route('user.down', ['id' => $user->id]) !!}">Понизить</a>||
                        <a href="javascript:;" class="delete" rel="{{$user->id}}">Удалить</a></td>
                    <td>{{ $user->created_at->format('d-m-Y H:i') }}</td>

                </tr>
            @endforeach
        </table>
    </main>
@stop
@section('js')
    <script>
        $(function(){
            $(".delete").on('click', function () {
                if(confirm("Вы действительно хотите удалить пользователя ?")) {
                    let id = $(this).attr("rel");
                    $.ajax({
                        type: "DELETE",
                        url: "{!! route('users.delete') !!}",
                        data: {_token:"{{csrf_token()}}", id:id},
                        complete: function() {
                            alert("Пользователь удален");
                            location.reload();
                        }
                    });
                }else{
                    alertify.error("Дествие отменено пользователем");
                }
            });
        });
    </script>
@stop
