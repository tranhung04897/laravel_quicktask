@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('auth.card-header-verify')</div>

                <div class="card-body">
                    @include('common.errors')

                    @lang('auth.verify-check-email')
                    @lang('auth.verify-mail-fail'), <a href="{{ route('verification.resend') }}">@lang('auth.link-verify-resend')</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
