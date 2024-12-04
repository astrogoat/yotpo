@props(['instanceId', 'productId'])

<div
    class="yotpo-widget-instance"
    data-yotpo-instance-id="{{ $instanceId }}"
    data-yotpo-product-id="{{ $productId }}"
></div>

@pushonce('strata:frontend:end')
    @include('yotpo::script')
@endpushonce
