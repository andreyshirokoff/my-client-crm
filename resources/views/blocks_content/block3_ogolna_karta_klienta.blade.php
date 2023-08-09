


<div class="listing-titlebar">
    <div style="width:100%;">
        <h6>Poniżej znajduje się aktualna, ogólna karta klienta. Ta karta znajduje się zawsze przy imieniu i nazwisku w profilu klienta i w każdej chwili dzięki niej można sprawdzić podstawowe informacje o kliencie. Domyślnie karta klienta zawiera informacje o pochodzeniu klienta, alergiach i chorobach ale możesz dowolnie ją edytować pod swoje potrzeby. <b>Karta wypełniana jest przez klienta jednorazowo przy rejestracji, może być usunięta i wypełniona w przyszłosci ponownie.</b> </h6>
    </div>
</div>

<div class="listing-element flex-wrap justify-content-between">
    <div style="">
        Twoja aktualna karta klienta (edytuj lub usuń).
    </div>
    <div style="display:flex;justify-content:center;flex-wrap: wrap;gap:15px" class="btns">
        <button type="button" onclick="location.href='{{url('functions/document_kartaklienta_edit')}}?groupId={{Auth::user()->group_id}}';" class="btn1" style="color:white"><i class="fas fa-plus-circle" aria-hidden="true"></i> Edytuj</button>
        @if(\App\Models\ServiceCardForm::where('group_id', \Illuminate\Support\Facades\Auth::user()->group_id)
            ->where('is_active', 1)
            ->first())
            <button type="button" onclick="location.href='{{url('functions/card-client-delete')}}'" class="btn1" style="color:white"><i class="fas fa-trash" aria-hidden="true"></i> Usuń</button>
        @endif
    </div>
</div>
<div class="listing-ending"></div>
