<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('history-index', [])->html();
} elseif ($_instance->childHasBeenRendered('U4DOAG4')) {
    $componentId = $_instance->getRenderedChildComponentId('U4DOAG4');
    $componentTag = $_instance->getRenderedChildComponentTagName('U4DOAG4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('U4DOAG4');
} else {
    $response = \Livewire\Livewire::mount('history-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('U4DOAG4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>








<?php /**PATH D:\Projects\my-client-crm\resources\views/blocks_content/block3_pakiet_sms_i_historia.blade.php ENDPATH**/ ?>