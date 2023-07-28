
<div class="listing-titlebar">
    <div style="width:60%">
        <h6>Nazwa zabiegu</h6>
    </div>
    <div style="width:20%">
        <h6>Karta klienta</h6>
    </div>
    <div style="width:20%">
        <h6>Opis zabiegu</h6>
    </div>
</div>
<!-- Wczytanie zabiegów z bazy i ich listing -->


<div class="listing-ending"></div>



<div class="listing-actionbar btns" style="gap: 15px;">
    <button type="button" style="" onclick="location.href='<?php echo e(url('functions/treatment_template')); ?>'" class="btn1"><i class="fas fa-plus-circle" aria-hidden="true"></i> Wybierz z gotowych</button>
    <button type="button" onclick="location.href='<?php echo e(url('functions/treatment_create')); ?>'" class="btn1"><i class="fas fa-plus-circle" aria-hidden="true"></i> Dodaj zabieg</button>
</div>

<?php /**PATH D:\Projects\my-client-crm\resources\views/blocks_content/block3_karty_zabiegowe_i_zabiegi.blade.php ENDPATH**/ ?>