layout = {

    colorbox33: function()
    {
        if($(window).width() > 768)
        {
            let container = $('.head-links')
            $('.colorbox33', container).css('height', 'calc(' + $(container).height() + 'px - 10px)')
        }
    },

    bottomButtons: function ()
    {
        $(window).resize(() => {

            if ($(window).width() < 500) {
                console.log($(window).width())
                let container = $('.block3_twoje_konto')
                let as = $('.link1', container)
                $(as).each((i, a) => {
                    $(a).css('width', $(window).width() + 'px')
                    $('button', a).css('width', 'calc(' + $(window).width() + 'px - 150px)')
                })

            }
            else
            {
                let container = document.querySelector('.block3_twoje_konto')
                let as = container.querySelectorAll('.link1')
                as.forEach((a) => {
                    a.style.width = 'inherit'
                })
            }
        })
        if ($(window).width() < 500) {
            console.log($(window).width())
            let container = $('.block3_twoje_konto')
            let as = $('.link1', container)
            $(as).each((i, a) => {
                $(a).css('width', $(window).width() + 'px')
                $('button', a).css('width', 'calc(' + $(window).width() + 'px - 150px)')
            })

        }
        else
        {
            let container = document.querySelector('.block3_twoje_konto')
            let as = container.querySelectorAll('.link1')
            as.forEach((a) => {
                a.style.width = 'inherit'
            })
        }
    },

    headerLewy: function()
    {
        $('#header #header-lewy').click(() => {
            window.location.href = '/'
        })
    },

    loginForm: function()
    {
        $(window).resize(() => {
            let container = $('#login-box')
            if($(window).width() <= 1152)
            {
                console.log($(window).width())
                $(container).css('width', $(window).width() + 'px')
            }
        })
        let container = $('#login-box')
        if($(window).width() <= 1152)
        {
            console.log($(window).width())
            $(container).css('width', $(window).width() + 'px')
        }

    }

}
