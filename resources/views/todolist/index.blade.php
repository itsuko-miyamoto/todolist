@extends('layouts.app')

@section('header')
    <title>{{ config('app.name') }}</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
@endsection

@section('content')

    <div class="container-fluid px-3 py-3 pt-md-3 pb-md-3 clearfix">

@include('elements.flash_message')

        <div class="container-fluid pl-0 mt-3">
            <div class="row">
                <div class="col">
                    <form action="" method="post" name="input_form" id="input_form">
                    @csrf
                        キーワード検索：
                        <input type="text" name="keyword" id="keyword" value="{{ old('keyword') }}">
                        <button type="submit" class="btn btn-base-dark">検索</button>
                        （入力した文字を含むタイトルまたはメモを検索します）
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid pl-0 mt-3">

            <a href="{{ route('add') }}" class="btn btn-base-dark">新規登録</a>

            <table class="table table-sm mt-3">
                <thead>
                    <tr>
                        <th>タイトル</th>
                        <th>メモ</th>
                        <th>登録日</th>
                        <th></th>
                    </tr>
                    <tr>
                </thead>
                <tbody>
                @foreach ($todolists as $todolist)
                    <tr>
                        <td>{{ $todolist->title }}</td>
                        <td>{{ $todolist->memo }}</td>
                        <td>{{ $todolist->created_at }}</td>
                        <td>
                            <a href="{{ route('edit', [$todolist->id]) }}" class="btn btn-base-dark btn-sm">編集</a>
                            <button type="button" class="btn btn-secondary btn-sm delete" data-id="{{ $todolist->id }}">削除</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

@endsection

@push('scripts')
<script>
$(function() {

    $('.delete').click(function() {
        if (confirm("削除してもよろしいでしょうか？")) {
            var id = $(this).data('id');
            window.location.href = "{{ route('delete') }}/" + id;
        }
    });
});
</script>
@endpush
