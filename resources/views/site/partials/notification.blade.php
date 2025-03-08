<div class="container mt-3">
    @if (Session::has('success'))
        <p class="notice-success h3 text-success text-center">
            {{ Session::get('success') }}
        </p>
    @endif

    @if (Session::has('error'))
        <p class="notice-error h3 text-danger text-center">
            {{ Session::get('error') }}
        </p>
    @endif

    @if (Session::has('warning h3 text-warning text-center'))
        <div class="alert alert-warning alert-dismissable">
            {{ Session::get('warning') }}
        </div>
    @endif

    {{-- 所有錯誤訊息 --}}
    @foreach ($errors->all() as $message)
        <p class="notice-error h3 text-danger text-center">{{$message}}</p>
    @endforeach
</div>
