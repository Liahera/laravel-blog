@extends('layouts.admin')
@section('content')

    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1>Редактировать О нас</h1>
        <br>
        <form  action="" method="post">
            {!! csrf_field() !!}
            <p>Введите текст:<br><textarea name="full_text" class="form-control" >{!! $object->full_text !!}</textarea></p>
            <button type="submit" class="btn btn-success"  style="cursor: pointer; float: right;" >Редактировать</button>
            <br><br>
        </form>
    </main>
    <script>
        CKEDITOR.replace( 'full_text' );
    </script>
@stop
