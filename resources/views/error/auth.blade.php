@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <h1 class="row py-xl-5 text-danger">{{ $title }}</h1>
            <h3 class="row py-xl-1">認証に失敗しました</h3>
            <p class="row py-xl-1">ログイン又はユーザ登録をしてください</p>
        </div>
    </div>
</div>
@endsection
