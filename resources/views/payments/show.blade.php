@extends('templates.template')

@section('titre') {{ __('string.payment') }} @endsection

@section('content_title') {{ __('string.new_payment') }} @endsection

@section('content_description') {{ __('string.create_payment') }} @endsection

@section('icon') <i class="pe-7s-file icon-gradient bg-mean-fruit"> @endsection

@section('content')

@if(isset($message))
{{-- affiche la notification --}}
<div class="row alert alert-info">{{ $message }}</div>
@endif

{{-- affiche le formulaire --}}

@endsection