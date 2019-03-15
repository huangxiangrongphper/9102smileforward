@extends('layouts.default')
@section('content')
    @if (Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
                <h4>动态列表</h4>
                <hr>
                @include('shared._feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info', ['user' => Auth::user()])
                </section>
                <section class="stats mt-2">
                    @include('shared._stats', ['user' => Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div class="jumbotron">
            <h1>Hello Friend</h1>
            <p>
                在这里，你可以了解关于我的最新动态。
            </p>
            <p>
                <a class="btn btn-lg btn-success" href="{{ route('users.show',['id' => 1]) }}" role="button">立即浏览</a>
            </p>
        </div>
    @endif
@stop
