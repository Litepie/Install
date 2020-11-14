@extends('install::layouts.master-update')

@section('title', trans('install::messages.updater.final.title'))
@section('container')
    <p class="paragraph text-center">{{ session('message')['message'] }}</p>
    <div class="buttons">
        <a href="{{ url('/') }}" class="button">{{ trans('install::messages.updater.final.exit') }}</a>
    </div>
@stop
