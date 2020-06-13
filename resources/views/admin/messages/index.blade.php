@extends('layouts.admin')
@section('content')
    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">


        <h2>Список Сообщений</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Автор</th>
                    <th>Email</th>
                    <th>Тема сообщения</th>
                    <th>Сообщение</th>
                    <th>Действие</th>
                    <th>Дата добавления</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{$message->id}}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->subject}}</td>
                        <td>{!!$message->message!!}</td>
                        <td><a href="javascript:;" class="delete" rel="{{$message->id}}">Удалить</a></td>
                        <td>{{$message->created_at->format('d-m-Y  H:i') }}</td>
                    </tr>
                @endforeach



                </tbody>
            </table>
        </div>
    </main>
@stop
@section('js')
    <script>
        $(function(){
            $(".delete").on('click', function () {
                if(confirm("Вы действительно хотите удалить ето сообщение ?")) {
                    let id = $(this).attr("rel");
                    $.ajax({
                        type: "DELETE",
                        url: "{!! route('messages.delete') !!}",
                        data: {_token:"{{csrf_token()}}", id:id},
                        complete: function() {
                            alert("Сообщение удалено");
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

