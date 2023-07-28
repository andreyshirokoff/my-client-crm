<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('treatment-list-index', [])->html();
} elseif ($_instance->childHasBeenRendered('vPO8jH9')) {
    $componentId = $_instance->getRenderedChildComponentId('vPO8jH9');
    $componentTag = $_instance->getRenderedChildComponentTagName('vPO8jH9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vPO8jH9');
} else {
    $response = \Livewire\Livewire::mount('treatment-list-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('vPO8jH9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
























<?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/blocks_content/block3_karty_zabiegowe_i_zabiegi.blade.php ENDPATH**/ ?>