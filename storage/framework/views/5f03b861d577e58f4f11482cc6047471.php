<!doctype html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset(\App\Models\Theme::where('id', Auth::user()->theme_id)->first()->path)); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <?php echo $__env->yieldContent('additional_css'); ?>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <title><?php echo e(env('PROJECT_NAME')); ?></title>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="sitecontent">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<?php echo \Livewire\Livewire::scripts(); ?>

<script src="https://kit.fontawesome.com/3c6f321247.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/b675a8d36a.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
<script src="<?php echo e(asset('js/script.js')); ?>"></script>
<script src="<?php echo e(asset('js/layout.js')); ?>"></script>
<script>
    $(document).ready(() => {
        layout.headerLewy()
        layout.headerHover()
        script.clickBtn()
    })

    document.addEventListener('error-more-shows', (e)=>{
        e.preventDefault();
        Swal.fire(
            'Błąd wyświetlacza',
            'Zbyt często przeglądasz numery telefonów. Spróbuj później!',
            'error'
        )
    })
</script>
<?php echo $__env->yieldContent('addit_js'); ?>
</body>
</html>
<?php /**PATH D:\Projects\my-client-crm\resources\views/layout/app.blade.php ENDPATH**/ ?>