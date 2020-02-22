@extends('templates.template')

@section('titre') {{ __('string.users') }} @endsection

@section('content_title') {{ __('string.list_users') }} @endsection

@section('content_description') {{ __('string.list_users_desc') }} @endsection

@section('icon') <i class="pe-7s-users icon-gradient bg-mean-fruit"> @endsection

@section('button_add')
    <a class="mb-2 mr-2 btn btn-info" style="color: white;" href=" {{ route('users.create') }} "> {{ __('string.new_user') }} </a>
    <div class="search-wrapper">
        <div class="input-holder">
            <input class="search-input" type="text" placeholder="Type to search">
            <button class="search-icon"><span></span></button>
        </div>
        <button class="close"></button>
    </div>
@endsection

@section('content')
    @if(isset($message))
    {{-- affiche la notification --}}
    <div class="row alert alert-info">{{ $message }}</div>
    @endif

    {{-- affiche la liste --}}
@endsection