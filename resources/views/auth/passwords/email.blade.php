@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('auth.card-header-reset')</div>
                <div class="card-body">
                    @include('common.errors')
                   {!! Form::open(['method' => 'POST', 'routes' =>'password.email']) !!}
                        <div class="form-group row">
                            {!! Form::label('email', trans('auth.lb-email'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::email('email', old('email'), ['class' => "form-control "]) !!}
                                
                                @include('common.errors')
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                               {!! Form::submit(trans('auth.btn-send-password-reset'), ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
