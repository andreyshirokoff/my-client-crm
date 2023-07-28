<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('your-account-index', [])->html();
} elseif ($_instance->childHasBeenRendered('zSDQ9Z6')) {
    $componentId = $_instance->getRenderedChildComponentId('zSDQ9Z6');
    $componentTag = $_instance->getRenderedChildComponentTagName('zSDQ9Z6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zSDQ9Z6');
} else {
    $response = \Livewire\Livewire::mount('your-account-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('zSDQ9Z6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>






















































<?php /**PATH D:\Projects\my-client-crm\resources\views/blocks_content/block3_twoje_konto.blade.php ENDPATH**/ ?>