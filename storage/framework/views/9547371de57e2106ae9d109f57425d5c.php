<?php $__env->startSection('content'); ?>
    <div class="box">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('clients.create-clients-item', [])->html();
} elseif ($_instance->childHasBeenRendered('5oOwczO')) {
    $componentId = $_instance->getRenderedChildComponentId('5oOwczO');
    $componentTag = $_instance->getRenderedChildComponentTagName('5oOwczO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5oOwczO');
} else {
    $response = \Livewire\Livewire::mount('clients.create-clients-item', []);
    $html = $response->html();
    $_instance->logRenderedChild('5oOwczO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\my-client-crm\resources\views/client_create.blade.php ENDPATH**/ ?>