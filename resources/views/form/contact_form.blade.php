@extends('core.layouts.contact')

@push('css')

@endpush

@section('content')
    <main>
        @include('site.partials.notification')
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact active">
            <div class="container">
                <div class="section-title">
                    <h2>{{ __('admin.contact') }}</h2>
                    <p>使用 redis 暫存填寫資料 有效時間 30 分鐘</p>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="ri-map-pin-line"></i>
                                <h4>{{ __('messages.location') }}:</h4>
                                <p>新北市 新莊區</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form action="{{ route('contact.save') }}" method="post" role="form" class="php-email-form contact_form">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('messages.your_name') }}" data-rule="minlen:1" data-msg="{{ __('messages.enter_name') }}" value="{{ $name?? '' }}" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('messages.your_email') }}" data-rule="email" data-msg="{{ __('messages.enter_email') }}" value="{{ $email?? '' }}" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('messages.your_subject') }}" data-rule="minlen:2" data-msg="{{ __('messages.enter_subject') }}" value="{{ $subject?? '' }}" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="{{ __('messages.enter_message') }}" placeholder="{{ __('messages.your_message') }}">{{ $message?? '' }}</textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">已送出</div>
                            </div>
                            <div class="text-center">
                                <button type="submit">{{ __('messages.send_message') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
@endsection

@push('js')
    <script defer src="{{ asset('js/contact.js') }}"></script>
@endpush