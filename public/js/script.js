script = {

    clickBtn: function()
    {
        $(document).click(async(e) => {
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

            //pokazFormula
            if($(e.target).is('.pokazformula-btn'))
            {
                $('.pokazformula-item').each((i, item) => {
                    $(item).removeClass('active')
                })
                let identify = $(e.target).attr('data-click')
                $(identify).addClass('active')
            }

            //searchClient
            if($(e.target).is('#search-client-btn'))
            {
                let form = $('#search-client-form')

                let fullname = $.trim($('#fullname', form).val())
                let email = $.trim($('#email', form).val())
                let phone = $.trim($('email', form).val())

                let url = $(form).attr('data-action')
                let _token = $(form).attr('data-token')

                // if(fullname.length < 3)
                // {
                //     this.callToast('error', 'Pole "Nazwisko" powinno mieć 3 lub więcej znaków.')
                // }

                let dataFilter = new FormData
                if(fullname.length >= 3) dataFilter.append('fullname', fullname)
                else dataFilter.append('fullname', '')
                dataFilter.append('_token', _token)
                dataFilter.append('email', email)
                dataFilter.append('phone', phone)

                const request = await fetch(url, {
                    method: 'POST',
                    body: dataFilter
                })
                const result = await request.text()
                console.log(result)
                if(result !== false)
                {
                    let resultArray = JSON.parse(result)
                    let html = ''
                    resultArray.forEach((item) => {
                        html += `<div class="listing-element">
                            <div style="width:40%;">
                                <h6>${item.fullname}</h6>
                            </div>
                            <div style="width:40%;">
                                <h6>${item.email}</h6>
                            </div>
                            <div style="width:10%;">
                                <h6>${item.phone}</h6>
                            </div>
                            <div style="width:10%;display:flex;justify-content:flex-end;" class="width-10">
                                <h6>pokaz</h6>
                            </div>
                        </div>`
                    })
                    $('.block1_wyniki .listing-titlebar').after(html)
                }

            }

        })
    },

    checkEmail: function(email)
    {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    },

    callToast: function (status, message)
    {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: status,
            title: message
        })
    }
}
