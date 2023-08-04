<div class="boxinbox" style="background-color: #f0f1f1;">
    {{--    {{route('product.delete')}}--}}
    <form wire:submit.prevent="submitForm">
        <div class="boxinbox-inside">

            <h3> UWAGA! </h3><br>
            <div>
                Czy na pewno chcesz usunąć produkt o nazwie „nazwa”?
            </div>
        </div>
        <div class="listing-actionbar bottom-buttons">

            <button type="submit"  class="btn1" style=""><i class="fas fa-check-circle" aria-hidden="true"></i> Wykonaj</button>
            <button type="button" onclick="location.href='{{url('dashboard/ustawienia')}}'"class="btn1" style=""><i class="fas fa-times" aria-hidden="true"></i> Anuluj</button>
        </div>

    </form>


</div>
