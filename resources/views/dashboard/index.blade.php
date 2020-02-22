@extends('templates.template')

@section('titre') {{ __('string.dashboard') }} @endsection

@section('content_title') {{ __('string.dashboard') }} @endsection

@section('content_description') {{ __('string.dashboard_desc') }} @endsection

@section('icon') <i class="pe-7s-rocket icon-gradient bg-mean-fruit"> @endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('string.dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
				    {!! Form::open(['url' => 'logout']) !!}
                        {!! Form::submit('Logout', ['class' => 'btn btn-info pull-right']) !!}
				    {!! Form::close() !!}

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
