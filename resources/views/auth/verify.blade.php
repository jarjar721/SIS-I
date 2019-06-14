@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique su dirección de correo electrónico.') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nuevo link de verificación ha sido enviado a su correo.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor confirme su email con el link de verificación enviado.') }}
                    {{ __('Si no recibió el email') }}, <a href="{{ route('verification.resend') }}">{{ __('click aquí para solicitarlo otra vez') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
