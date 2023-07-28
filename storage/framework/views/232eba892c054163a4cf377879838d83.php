<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('usr-signature-index', [])->html();
} elseif ($_instance->childHasBeenRendered('nriex9o')) {
    $componentId = $_instance->getRenderedChildComponentId('nriex9o');
    $componentTag = $_instance->getRenderedChildComponentTagName('nriex9o');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nriex9o');
} else {
    $response = \Livewire\Livewire::mount('usr-signature-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('nriex9o', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>














































































<?php /**PATH D:\Projects\my-client-crm\resources\views/blocks_content/block3_3_usrsignature.blade.php ENDPATH**/ ?>