@extends('master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Billing') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <x-paddle-button :url="$payLink" class="px-8 py-4">
                            Buy
                        </x-paddle-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
