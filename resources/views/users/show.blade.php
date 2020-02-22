@extends('templates.template')

@section('titre') {{ __('string.users') }} @endsection

@section('content_title') {{ __('string.new_user') }} @endsection

@section('content_description') {{ __('string.create_user') }} @endsection

@section('icon') <i class="pe-7s-add-user icon-gradient bg-mean-fruit"> @endsection

@section('content')

@if(isset($message))
{{-- affiche la notification --}}
<div class="row alert alert-info">{{ $message }}</div>
@endif

{{-- affiche le formulaire --}}

@endsection