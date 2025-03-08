@extends('core.layouts.master')

@push('css')
    <link href="{{ asset('css/404.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="error-container">
                    <div class="error-code">404</div>
                    <div class="error-message">{{ __('messages.404 Not Found') }}</div>
                    <a href="{{ route('index') }}" class="btn btn-primary">返回首頁</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    
@endpush