script = {

    pagLimit: '5',
    pagOffset: '0',

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
            // if($(e.target).is('#search-client-btn'))
            // {
            //     let form = $('#search-client-form')
            //
            //     let fullname = $.trim($('#fullname', form).val())
            //     let email = $.trim($('#email', form).val())
            //     let phone = $.trim($('email', form).val())
            //
            //     let url = $(form).attr('data-action')
            //     let url1 = $(form).attr('data-pag')
            //     let _token = $(form).attr('data-token')
            //
            //     let offset = this.pagOffset
            //     let limit = this.pagLimit
            //
            //     let dataFilter = new FormData
            //     if(fullname.length >= 3) dataFilter.append('fullname', fullname)
            //     else dataFilter.append('fullname', '')
            //     dataFilter.append('_token', _token)
            //     dataFilter.append('email', email)
            //     dataFilter.append('phone', phone)
            //     dataFilter.append('offset', offset)
            //     dataFilter.append('limit', limit)
            //
            //     const request = await fetch(url, {
            //         method: 'POST',
            //         body: dataFilter
            //     })
            //     const result = await request.text()
            //
            //     if(result != 'ERROR')
            //     {
            //         let resultArray = JSON.parse(result)
            //         let html = ''
            //         resultArray.forEach((item) => {
            //             html += `<div class="listing-element">
            //                 <div style="width:40%;">
            //                     <h6>${item.fullname}</h6>
            //                 </div>
            //                 <div style="width:40%;">
            //                     <h6>${item.email}</h6>
            //                 </div>
            //                 <div style="width:10%;">
            //                     <h6>${item.phone}</h6>
            //                 </div>
            //                 <div style="width:10%;display:flex;justify-content:flex-end;" class="width-10">
            //                     <h6>pokaz</h6>
            //                 </div>
            //             </div>`
            //         })
            //         $('.block1_wyniki .listing-titlebar').after(html)
            //
            //         const requestPag = await fetch(url1, {
            //             method: 'POST',
            //             body: dataFilter
            //         })
            //         const resultPag = await requestPag.text()
            //
            //         if(resultPag != 'ERROR')
            //         {
            //             console.log(resultPag)
            //             let countLinks = Math.ceil(Number(resultPag) / Number(limit))
            //             let lis = ''
            //             for(let i = 1; i <= countLinks; i++)
            //             {
            //                 let isActive = ''
            //                 if (i == 1) isActive = 'active'
            //                 lis += `<li class="page-item ${isActive}" id="pag-btn" data-id="${i}">
            //                     <a class="page-link" href="#">${i}</a>
            //                 </li>`
            //             }
            //             $('.pagination-wrap').html(`<nav aria-label="Page navigation example" data-form="#search-client-form">
            //                 <ul class="pagination" id="pag">
            //                     <li class="page-item disabled" id="pag-btn" data-id="prev">
            //                         <a class="page-link" href="#">Previous</a>
            //                     </li>
            //                     ${lis}
            //                     <li class="page-item" id="pag-btn" data-id="next">
            //                         <a class="page-link" href="#">Next</a>
            //                     </li>
            //                 </ul>
            //             </nav>`)
            //         }
            //     }
            //
            // }

            //pagination
            // $(
            //     $(e.target).is('#pag-btn')
            //     || $(e.target).closest('#pag-btn').length > 0
            // )
            // {
            //     let item
            //     if($(e.target).is('#pag-btn')) item = $(e.target).is('#pag-btn')
            //     else if($(e.target).closest('#pag-btn').length > 0) item = $(e.target).closest('#pag-btn')
            //     let nav = $(item).closest('nav')
            //     let count = Number($('li', nav).length) - 2
            //
            //
            //     let previousPage = $('.page-item.active', nav).attr('data-id')
            //     let page
            //     if($(item).attr('data-id') == 'prev' && !$(item).hasClass('disabled'))
            //     {
            //         page = String(Number(previousPage) - 1)
            //     }
            //     else if($(item).attr('data-id') == 'next' && !$(item).hasClass('disabled'))
            //     {
            //         page = String(Number(previousPage) + 1)
            //     }
            //     else
            //     {
            //         page = $(item).attr('data-id')
            //     }
            //     function customPag()
            //     {
            //         if(Number(page) == 1)
            //         {
            //             $('li[data-id="next"]', nav).removeClass('disabled')
            //             $('li[data-id="prev"]', nav).addClass('disabled')
            //         }
            //         else if(Number(page) == count)
            //         {
            //             $('li[data-id="prev"]', nav).removeClass('disabled')
            //             $('li[data-id="next"]', nav).addClass('disabled')
            //         }
            //         else
            //         {
            //             $('li[data-id="prev"]', nav).removeClass('disabled')
            //             $('li[data-id="next"]', nav).removeClass('disabled')
            //         }
            //
            //         $(`li[data-id="${previousPage}"]`).removeClass('active')
            //         $(`li[data-id="${page}"]`).addClass('active')
            //     }
            //
            //     if(Number(page) != Number(previousPage))
            //     {
            //         customPag()
            //         let formId = $(nav).attr('data-form')
            //         if(formId == '#search-client-form')
            //         {
            //             let form = $('#search-client-form')
            //
            //             let fullname = $.trim($('#fullname', form).val())
            //             let email = $.trim($('#email', form).val())
            //             let phone = $.trim($('email', form).val())
            //
            //             let url = $(form).attr('data-action')
            //             let _token = $(form).attr('data-token')
            //
            //             let limit = this.pagLimit
            //             let offset = Number(this.pagOffset) + Number(limit) * (Number(page) - 1)
            //
            //
            //             let dataFilter = new FormData
            //             if(fullname.length >= 3) dataFilter.append('fullname', fullname)
            //             else dataFilter.append('fullname', '')
            //             dataFilter.append('_token', _token)
            //             dataFilter.append('email', email)
            //             dataFilter.append('phone', phone)
            //             dataFilter.append('offset', offset)
            //             dataFilter.append('limit', limit)
            //
            //             const request = await fetch(url, {
            //                 method: 'POST',
            //                 body: dataFilter
            //             })
            //             const result = await request.text()
            //
            //             if(result != 'ERROR')
            //             {
            //                 let resultArray = JSON.parse(result)
            //                 let html = ''
            //                 resultArray.forEach((item) => {
            //                     html += `<div class="listing-element">
            //                 <div style="width:40%;">
            //                     <h6>${item.fullname}</h6>
            //                 </div>
            //                 <div style="width:40%;">
            //                     <h6>${item.email}</h6>
            //                 </div>
            //                 <div style="width:10%;">
            //                     <h6>${item.phone}</h6>
            //                 </div>
            //                 <div style="width:10%;display:flex;justify-content:flex-end;" class="width-10">
            //                     <h6>pokaz</h6>
            //                 </div>
            //             </div>`
            //                 })
            //                 $('.block1_wyniki .listing-element').each((e, el) => {
            //                     $(el).remove()
            //                 })
            //                 $('.block1_wyniki .listing-titlebar').after(html)
            //             }
            //         }
            //     }
            // }

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
