@extends('layouts.admin')
@section('content')
    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        @if(!DB::table('abouts')->get()->count())
        <h1>Добавление Информации на страничку о нас</h1>
        <form  action="{!!  route('abouts_submit')!!}" method="post">
            {!! csrf_field() !!}
            <p>Введите текст:<br><textarea name="full_text" class="form-control"></textarea></p>
            <button type="submit" class="btn btn-success" style="cursor: pointer; float: right;">Добавить</button>
            <br><br>
        </form>
        @endif
        <table class="table table-bordered">
            <tr>

                <th>Текст</th>
                <th>Действия</th>
                <br>
                <br>
                <br>
            </tr>
            @foreach($abouts as $about)
                <tr>
                
                <td>  {!!  $about->full_text!!}</td>
                    <td><a href="{!! route('editAbout', ['id' => $about->id]) !!}">Редактировать</a> ||
                    <a href="javascript:;" class="delete" rel="{{$about->id}}">Удалить</a></td>
                </tr>
            @endforeach
        </table>
    </main>
    <script>

        CKEDITOR.replace( 'full_text' );
    </script>
@stop
@section('js')

    <script>
        $(function(){
            $(".delete").on('click', function () {
                if(confirm("Вы действительно хотите удалить эту запись ?")) {
                    let id = $(this).attr("rel");
                    $.ajax({
                        type: "DELETE",
                        url: "{!! route('abouts.delete') !!}",
                        data: {_token:"{{csrf_token()}}", id:id},
                        complete: function() {
                            alert("Запись О нас  удалена");
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
