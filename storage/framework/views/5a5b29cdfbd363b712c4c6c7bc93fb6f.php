


    <div class="listing-titlebar">
        <div style="width:100%;">
            <h6>Wybierz miesiąc i rok do exportu.</h6>
        </div>
    </div>
    <form action="functions/export_pdf_bundle.php" method="post">
        <div class="listing-element">
            <div style="width:40%;display:flex;flex-direction:row;align-items:center;justify-content:flex-start;">
                <select name="miesiac" id="miesiac" class="formularz" style="min-width:150px;">
                    <option value="1">Styczeń</option>
                    <option value="2">Luty</option>
                    <option value="3">Marzec</option>
                    <option value="4">Kwiecień</option>
                    <option value="5">Maj</option>
                    <option value="6">Czerwiec</option>
                    <option value="7">Lipiec</option>
                    <option value="8">Sierpień</option>
                    <option value="9">Wrzesień</option>
                    <option value="10">Październik</option>
                    <option value="11">Listopad</option>
                    <option value="12">Grudzień</option>
                </select>
            </div>

            <div style="width:20%;display:flex;flex-direction:row;align-items:center;justify-content:flex-start;padding-left:15px;">
                <select name="rok" id="rok" class="formularz" style="min-width:150px;">
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                </select>
            </div>

            <div style="width:40%;display:flex;justify-content:flex-end;">
                <button type="submit" class="btn1" style="color:white"><i class="far fa-arrow-alt-circle-down" aria-hidden="true" style="color:white;margin-right:10px"></i> Pobierz</button>
            </div>

        </div></form>

    <div class="listing-ending"></div>





<?php /**PATH D:\Projects\my-client-crm\resources\views/blocks_content/block3_export_dokumentov_do_pdf.blade.php ENDPATH**/ ?>