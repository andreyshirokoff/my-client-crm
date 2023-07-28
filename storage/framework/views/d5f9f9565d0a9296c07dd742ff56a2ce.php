<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('usr-signature-index', [])->html();
} elseif ($_instance->childHasBeenRendered('Ayghayu')) {
    $componentId = $_instance->getRenderedChildComponentId('Ayghayu');
    $componentTag = $_instance->getRenderedChildComponentTagName('Ayghayu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Ayghayu');
} else {
    $response = \Livewire\Livewire::mount('usr-signature-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('Ayghayu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>














































































<?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/blocks_content/block3_3_usrsignature.blade.php ENDPATH**/ ?>