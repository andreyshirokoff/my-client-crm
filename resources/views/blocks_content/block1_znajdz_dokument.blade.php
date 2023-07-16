
<div class="boxinbox-inside">

    <form action="document_search.php" method="get">

        <div id="searchbox-title" style="width:100%;">
            <b>Możesz wyszukać dokument po id lub dacie.</b>
        </div>
        <div style="display:flex;flex-direction:row;width:100%;margin-top:15px;gap:10px" class="input-cont">

            <div class="boxseparator1procent"></div>
            <div style="width:32%; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start;" class="input-cont__item">
                ID dokumentu:<br>
                <input type="number" name="doc_id" class="formularz" style="padding-top:12px;padding-bottom:13px;" value="">
            </div>
            <div class="boxseparator1procent"></div>
            <div style="width:32%; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start;" class="input-cont__item">
                Data od:<br>
                <input type="date" name="doc_date_from" class="formularz" value="">
            </div>
            <div class="boxseparator1procent"></div>
            <div style="width:32%; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start;" class="input-cont__item">
                Data do:<br>
                <input type="date" name="doc_date_to" class="formularz" value="2023-07-16">
            </div>
        </div>
    </form></div>

<div class="listing-actionbar">
    <button type="submit" class="btn1"><i class="fas fa-search" aria-hidden="true"></i> Szukaj</button>
</div>


