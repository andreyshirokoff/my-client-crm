<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('your-account-index', [])->html();
} elseif ($_instance->childHasBeenRendered('2qJTMCv')) {
    $componentId = $_instance->getRenderedChildComponentId('2qJTMCv');
    $componentTag = $_instance->getRenderedChildComponentTagName('2qJTMCv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2qJTMCv');
} else {
    $response = \Livewire\Livewire::mount('your-account-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('2qJTMCv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>






















































<?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/blocks_content/block3_twoje_konto.blade.php ENDPATH**/ ?>