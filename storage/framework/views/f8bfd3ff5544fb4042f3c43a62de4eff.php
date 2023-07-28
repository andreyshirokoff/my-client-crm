<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('css/themes/myClient.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/themes/beautyCheck.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/slider.css')); ?>">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="crossorigin="anonymous"></script>
    <style>
        .icona-bc{
            background: url('<?php echo e(url('image/login/BCLogo_svg_sygnet.svg')); ?>') no-repeat;
        }
    </style>
    <title>Dev</title>
</head>
<body>
<body class="login-page">
<div class="wrapper">
    <div id="login-top">
        <div style="display:flex;flex-direction:row;" class="login__logo">
            <img src="<?php echo e(url('image/login/BCLogo_svg_napis.svg')); ?>" style="display:flex;margin-left: 30px;height:110px;margin-top:100px;">
        </div>
    </div>

    <div id="login-box">
        <div style="font-weight:300;font-size:26px;" class="login__pre-title">Logowanie</div>
        <div style="font-weight:600;font-size:50px;" class="login__title">ZALOGUJ SIĘ</div>
        <div style="margin-bottom:40px;font-weight:300;font-size:18px;text-align:center;">Podaj adres e-mail i hasło do konta właściciela miejsca beauty lub konta pracownika.</div>

        <div id="savedprofiles" class="savedprofiles tab">
            <div class="profileswrap">
            </div>
            <div class="loginfooter">
                <p>lub zaloguj na kogoś innego:</p>

                <button type="button" class="btn-login switch-content" id="loginotheruser" data-toggle="#loginform">Zaloguj na inne konto</button>

            </div>
        </div>



        <div class="loginremeberedform_pin tab" id="loginremeberedform_pin">
            <p>Podaj pin do konta</p>
            <form action="functions/login_pin.php" method="post" style="width: 100%;" autocomplete="off">
                <input type="hidden" name="userid" class="loginfield-field userid">
                <div style="display:flex; flex-direction:row;margin:0px;padding:0px;justify-content:center;align-items:center;margin:10px 0px;">
                    <div class="loginfield-icon">
                        <i class="fa fa-hashtag" aria-hidden="true"></i>
                    </div>
                    <input type="password" name="pin" class="loginfield-field" placeholder="pin" maxlength="4" pattern="\d{4}" autocomplete="off">
                </div>

                <button type="submit" value="Zaloguj" class="btn-login">Zaloguj</button>

            </form>

            <div class="loginfooter">
                <p>lub zamiast tego:</p>

                <button type="button" class="btn-login switch-content" id="loginbypassword" data-toggle="#loginremeberedform_password">Zaloguj za pomocą hasła</button>
                <button type="button" class="btn-login switch-content" data-toggle="#savedprofiles">Przejdź do zapamiętanych profili</button>
            </div>
        </div>




        <div class="loginremeberedform_password tab" id="loginremeberedform_password">
            <p>Podaj hasło do konta</p>
            <form action="functions/login.php" method="post" style="width: 100%;" autocomplete="off">
                <input type="hidden" name="mail" class="loginfield-field email" placeholder="e-mail">
                <div style="display:flex; flex-direction:row;margin:0px;padding:0px;justify-content:center;align-items:center;margin:10px 0px;">
                    <div class="loginfield-icon">
                        <i class="fas fa-key" aria-hidden="true"></i>
                    </div>
                    <input type="password" name="haslo" class="loginfield-field" placeholder="hasło" autocomplete="off">
                </div>

                <button type="submit" value="Zaloguj" class="btn-login">Zaloguj</button>

            </form>
            <div class="loginfooter">
                <p>lub zamiast tego:</p>

                <button type="button" class="btn-login switch-content" id="loginbypin" data-toggle="#loginremeberedform_pin">Zaloguj za pomocą pinu</button>
                <button type="button" class="btn-login switch-content" data-toggle="#savedprofiles">Przejdź do zapamiętanych profili</button>
            </div>
        </div>






        <div class="loginform tab" id="loginform" style="display:block;">
            <form action="<?php echo e(route('login')); ?>" method="post" style="width: 100%;" autocomplete="off">
                <?php echo csrf_field(); ?>
                <div style="display:flex; flex-direction:row;margin:0px;padding:0px;justify-content:center;align-items:center;margin:10px 0px;">
                    <div class="loginfield-icon">
                        <i class="fas fa-envelope" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="email" class="loginfield-field" placeholder="e-mail">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div style="display:flex; flex-direction:row;margin:0px;padding:0px;justify-content:center;align-items:center;margin:10px 0px;">
                    <div class="loginfield-icon">
                        <i class="fas fa-key" aria-hidden="true"></i>
                    </div>
                    <input type="password" name="password" class="loginfield-field" placeholder="hasło">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <button type="submit" value="Zaloguj" class="btn-login">Zaloguj</button>
                <div style="width:100%;display:flex;flex-direction:row;align-items:center;justify-content:flex-start; margin: 10px 0px;gap: 10px;">
                    <label class="switch" style="flex: 0 0 75px">
                        <input type="checkbox" name="rememberme">
                        <span class="slider round"></span>
                    </label>
                    <p style="">Zapamiętaj mnie i pozwalaj na szybkie logowanie</p>
                </div>
            </form>


        </div>
        <div style="font-size:26px;font-weight:300;color:white;position: absolute;bottom: -100px" class="login__copyright">
            (C) Prawa autorskie - MyClient.pl
        </div>





    </div>

    <div id="login-bot">

    </div>

</div>
<div class="modal fade" id="confirmProfileDelete" tabindex="-1" aria-labelledby="confirmProfileDeleteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmProfileDeleteLabel">Zapomnij profil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Zapomnieć ten profil na tym urządzeniu?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>
                    Anuluj</button>
                <button type="button" class="btn" data-bs-dismiss="modal" id="confirmdelete"><i class="fas fa-trash" aria-hidden="true"></i>Usuń profil</button>
            </div>
        </div>
    </div>
</div>


<script src="https://kit.fontawesome.com/b675a8d36a.js" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('js/layout.js')); ?>"></script>
<script>
    layout.loginForm()
</script>
<!-- Wrzucenie footera -->
<!--Beauty plany start -->
<script src="/functions/beautyplans/lib/jquery-3.6.2.min.js"></script>
<!--script to deal with ajax-->
<script src="/functions/beautyplans/assets/js/beautyplans.js"></script>
<!--additional css-->
<link rel="stylesheet" href="/functions/beautyplans/assets/css/beautyplans.css">
<script src="/lib/select2/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.area_choose.select2').select2();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script><script>
    $(".switch-content").click(function(){
        $tabtoshow = $(this).attr("data-toggle");
        $(".tab").css("display","none");
        $($tabtoshow).css("display","block");
        if ( $(this).hasClass("signin"))
        {
            $("#loginremeberedform_password").find("input.email").val($(this).attr("data-useremail"));
            $("#loginremeberedform_pin").find("input.userid").val($(this).attr("data-userid"));
        }

    });

    $(".iconbutton.deletesavedprofile").click(function(){
        $userid = $(this).attr("data-userid");
        $("#confirmdelete").attr("data-userid",$userid);
    });
    $("#confirmdelete").click(function(){
        $userid = $(this).attr("data-userid");
        $cookiename = "user_" + $userid;
        document.cookie = $cookiename + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        $(".savedprofile_wrapper[data-userid='"+$userid+"']").remove();
        //check if any profiles
        if( !$('.savedprofile_wrapper').length )
        {
            location.reload();
        }

    });

</script>



</body>
</body>
</html>
<?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/auth/login.blade.php ENDPATH**/ ?>