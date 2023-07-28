<form wire:submit.prevent="save">

    <div class="listing-titlebar" style="margin-top:10px;">
        <div style="width:40%">

        </div>
        <div style="width:60%">

        </div>
    </div>

    <div class="listing-element input-element">
        <div style="width:40%;">
            Zrób sobie #selfie! ;-)
        </div>
        <div style="width:60%;">
            <input type="file" name="plik" accept="image/*" class="formularz" required="" wire:model="image">
            @error('image') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="listing-ending">

    </div>


    <div class="listing-actionbar">
        <button type="submit" class="btn1"><i class="fas fa-check-circle" aria-hidden="true"></i> Ustaw zdjęcie</button>
    </div>
</form>
