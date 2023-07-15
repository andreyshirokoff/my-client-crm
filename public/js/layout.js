layout = {

    colorbox33: function()
    {
        console.log(33)
        if($(window).width() > 768)
        {
            let container = $('.head-links')
            $('.colorbox33', container).css('height', 'calc(' + $(container).height() + 'px - 10px)')
        }
    },

    headerLewy: function()
    {
        $('#header #header-lewy').click(() => {
            window.location.href = '/'
        })
    }

}
