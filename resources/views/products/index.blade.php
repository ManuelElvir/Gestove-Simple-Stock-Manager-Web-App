@extends('templates.template')

@section('titre') {{ __('string.products') }} @endsection

@section('content_title') {{ __('string.products_list') }} @endsection

@section('content_description') {{ __('string.products_list_desc') }} @endsection


@section('button_add')
    <a class="mb-2 mr-2 btn btn-info" style="color: white;"> {{ __('string.create_product') }} </a>
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