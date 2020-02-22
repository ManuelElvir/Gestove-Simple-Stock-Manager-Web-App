@extends('templates.template')

@section('titre') {{ __('string.order') }} @endsection

@section('content_title') {{ __('string.create_order') }} @endsection

@section('content_description') {{ __('string.create_order_desc') }} @endsection

@section('content')

@if(isset($message))
{{-- affiche la notification --}}
<div class="row alert alert-info">{{ $message }}</div>
@endif

{{-- affiche le formulaire --}}

@endsection