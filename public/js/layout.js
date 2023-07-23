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

    },

    loginForm: function()
    {
        $(window).resize(() => {
            let container = $('#login-box')
            if($(window).width() <= 1152)
            {
                $(container).css('width', $(window).width() + 'px')
            }
        })
        let container = $('#login-box')
        if($(window).width() <= 1152)
        {
            $(container).css('width', $(window).width() + 'px')
        }

    },

    canvasElement: function()
    {
        $(window).resize(() => {
            let container = $('#signature-pad')
            if($(window).width() <= 1001)
            {
                $(container).css('width', $('.canvas-element').width() + 'px')
            }
        })
        let container = $('#signature-pad')
        if($(window).width() <= 1001)
        {
            $(container).css('width', $('.canvas-element').width() + 'px')
        }
    },

    headerHover: function()
    {
        $('.header-prawy__desktop_btn').hover((e) => {
            let item = $(e.target).is('.header-prawy__desktop_btn') ? $(e.target) : $(e.target).closest('.header-prawy__desktop_btn')
            $('span', item).css('color', '#e2dede')
            $('i', item).css('color', '#e2dede')
        }, (e) => {
            let item = $(e.target).is('.header-prawy__desktop_btn') ? $(e.target) : $(e.target).closest('.header-prawy__desktop_btn')
            $('span', item).css('color', 'white')
            $('i', item).css('color', 'white')
        })

        $('#header-lewy-dane').hover((e) => {
            let item = $(e.target).is('#header-lewy-dane') ? $(e.target) : $(e.target).closest('#header-lewy-dane')
            $('p a', item).css('transition', 'color 0.3s ease 0s')
            $('p a', item).css('color', '#e2dede')
        }, (e) => {
            let item = $(e.target).is('#header-lewy-dane') ? $(e.target) : $(e.target).closest('#header-lewy-dane')
            $('p a', item).css('color', 'white')
        })
    }

}
