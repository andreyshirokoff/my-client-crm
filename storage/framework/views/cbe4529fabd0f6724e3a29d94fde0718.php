<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('history-index', [])->html();
} elseif ($_instance->childHasBeenRendered('MDn6mvT')) {
    $componentId = $_instance->getRenderedChildComponentId('MDn6mvT');
    $componentTag = $_instance->getRenderedChildComponentTagName('MDn6mvT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MDn6mvT');
} else {
    $response = \Livewire\Livewire::mount('history-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('MDn6mvT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>








<?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/blocks_content/block3_pakiet_sms_i_historia.blade.php ENDPATH**/ ?>