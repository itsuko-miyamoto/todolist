@extends('layouts.app')

@section('header')
    <title>{{ config('app.name') }}</title>
@endsection

@section('content')

    <div class="container px-3 py-3 pt-md-3 pb-md-3 clearfix">

        <div class="container-fluid pl-0 mt-3">
            <div class="row">
                <div class="col-md-12">
                    <!-- card -->
                    <div class="card card-default card-primary">
                        <!-- card-header -->
                        <div class="card-header">
                            <h3 class="card-title">新規登録</h3>
                        </div>
                        <form action="" method="post" name="input_form" id="input_form">
                        @csrf
@include('todolist.form')
                            <div class="card-footer">
                                <button type="submit" class="btn btn-base-dark" value="add" id="save">登録</button>
                                <button type="button" class="btn btn-secondary" onclick="history.back()" id="cancel">キャンセル</button>
                            </div>
                        </form>
                    </div>
                    <!-- /card -->
                </div>
            </div>
        </div>
    </div>

@endsection
