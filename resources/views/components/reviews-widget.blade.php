@props(['instanceId', 'productId', 'productTitle', 'productUrl'])

<div
    {{ $attributes }}
    class="yotpo-widget-instance"
    data-yotpo-instance-id="{{ $instanceId }}"
    data-yotpo-product-id="{{ $productId }}"
    data-yotpo-name="{{ $productTitle }}"
    data-yotpo-url="{{ $productUrl }}"
></div>

@pushonce('strata:frontend:end')
    @include('yotpo::script')
@endpushonce
