@extends('templates.template')

@section('titre') {{ __('string.finished_Product') }} @endsection

@section('content_title') {{ __('string.finished_Product') }} @endsection

@section('content_description') {{ __('string.finished_Product_desc') }} {{  __('string.shop')}} @endsection


@section('button_add')
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