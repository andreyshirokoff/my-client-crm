<?php $__env->startSection('content'); ?>
    <div class="box">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('clients.create-clients-item', [])->html();
} elseif ($_instance->childHasBeenRendered('HWBbrSB')) {
    $componentId = $_instance->getRenderedChildComponentId('HWBbrSB');
    $componentTag = $_instance->getRenderedChildComponentTagName('HWBbrSB');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('HWBbrSB');
} else {
    $response = \Livewire\Livewire::mount('clients.create-clients-item', []);
    $html = $response->html();
    $_instance->logRenderedChild('HWBbrSB', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('addit_js'); ?>
    <script>
        document.addEventListener('success-add-client', (e) => {
            Swal.fire(
                'Dodano pomyślnie!',
                'Twój klient został pomyślnie dodany do bazy danych klientów!',
                'success'
            )
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/client_create.blade.php ENDPATH**/ ?>