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
        if($(window).width() < 400)
        {

            let container = document.querySelector('.block3_twoje_konto')
            let as = container.querySelectorAll('a')
            as.forEach((a) => {
                a.style.width = container.clientWidth + 'px!important'
            })

        }
    },

    headerLewy: function()
    {
        $('#header #header-lewy').click(() => {
            window.location.href = '/'
        })
    }

}
