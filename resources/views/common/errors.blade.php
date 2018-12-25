
@if ($errors->has('email'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif

@if ($errors->has('password'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif

@if ($errors->has('name'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
@endif

@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show col col-8" role="alert">
        <strong>{{ Session::get('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(Session::has('fail'))
    <div class="alert alert-danger alert-dismissible fade show col col-8" role="alert">
        <strong>{{ Session::get('fail') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session('resent'))
    <div class="alert alert-success" role="alert">
        {{ __('A fresh verification link has been sent to your email address.') }}
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
