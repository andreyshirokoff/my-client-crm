CSS = {

    colorbox33: function()
    {
        if($(window).width() > 768)
        {
            let container = $('.head-links')
            $('.colorbox33', container).css('height', 'calc(' + $(container).height() + 'px - 1)')
        }
    }

}
