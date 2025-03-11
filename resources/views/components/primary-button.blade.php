<button {{ $attributes->merge(['type' => 'submit', 'class' => 'd-inline-flex align-items-center px-3 py-2 bg-primary text-white border-0 rounded font-weight-bold text-uppercase small transition']) }}>
    {{ $slot }}
</button>
