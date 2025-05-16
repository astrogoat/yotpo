@props(['instanceId', 'product'])

<div
    class="yotpo-widget-instance"
    data-yotpo-instance-id="{{ $instanceId }}"
    data-yotpo-product-id="{{ $product->shopify_id }}"
    data-yotpo-name="{{ $product->title }}"
    data-yotpo-url="{{ $product->getShowRoute() }}"
></div>

@pushonce('strata:frontend:end')
    @include('yotpo::script')
@endpushonce
