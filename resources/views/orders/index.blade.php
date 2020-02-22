@extends('templates.template')

@section('titre') {{ __('string.orders') }} @endsection

@section('content_title') {{ __('string.orders_list') }} @endsection

@section('content_description') {{ __('string.orders_list_desc') }} @endsection

@section('button_add')
    <a class="mb-2 mr-2 btn btn-info" style="color: white;"> {{ __('string.new_order') }} </a>
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