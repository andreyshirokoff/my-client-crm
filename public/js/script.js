script = {

    clickBtn: function()
    {
        $(document).click((e) => {
            //бургер
            if(
                $(e.target).is('#burger')
                || $(e.target).closest('#burger').length > 0
            )
            {

                $('.navbar-mobile').toggleClass('active')
                $('.navbar-mobile__body').toggleClass('active')
                if($('.navbar-mobile').hasClass('active')) $('body').css('overflow', 'hidden')
                else $('body').css('overflow', 'auto')
            }
            if($(e.target).is('.pokazformula-btn'))
            {
                $('.pokazformula-item').each((i, item) => {
                    $(item).removeClass('active')
                })
                let identify = $(e.target).attr('data-click')
                $(identify).addClass('active')
            }

            //pokazFormula

        })
    }
}
