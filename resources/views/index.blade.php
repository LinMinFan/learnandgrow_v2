@extends('core.layouts.master')

@push('css')

@endpush

@section('content')
    @include('site.partials.notification')

    <!-- 主頁面內容 -->
    <div class="container mt-5">
        <h1>歡迎來到首頁！</h1>
        <p>這是一個簡單的網站，擁有固定在頁面頂部的導航列。</p>
    </div>
    
@endsection

@push('js')
    
@endpush