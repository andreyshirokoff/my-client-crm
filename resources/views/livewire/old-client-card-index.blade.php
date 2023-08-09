<div class="boxinbox__body">
    <div class="boxinbox-titlebar" style="margin-top:10px;">
        <div class="icon">
            <i class="fas fa-user-friends" aria-hidden="true"></i>
        </div>
        <div style="margin-left:20px;">
            <h3>Stare karty klienta</h3>
        </div>
    </div>
    <div class="boxinbox block1_old_client_cards" style="background: #f0f1f1">
        <form wire:submit.prevent="submitForm">
            <div class="boxinbox-inside">
                <div class="listing-element row-with-input">
                    <div style="width:70%;padding-right:60px;">
                        Nazwa
                    </div>
                    <div style="width:30%;">
                        <input class="formularz" name="logofile" id="logofile" type="text" image="image/png" wire:model.defer="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="listing-element row-with-input">
                    <div style="width:70%;padding-right:60px;">
                        Przesyłanie pliku
                    </div>
                    <div style="width:30%;" class="input-in">
                        <div style="display:flex; width:100%; border: 1px solid #a5a5a5; margin-bottom:5px; padding:10px; border-radius:10px;min-height:100px; align-items:center; justify-content: center;">
                            <img src="http://myclientcrm/storage/salon/xUg7b9ZoPl3GgzUaXrKU1cWnXnVOhiZy2OIV4uXP.jpg" alt="">
                        </div>
                        <input class="formularz" name="logofile" id="logofile" type="file" image="image/png" wire:model.defer="file">
                        @error('file')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


            </div>
            <div class="listing-actionbar flex-wrap btns" style="gap:10px">
                <button type="submit"  class="btn1" style="" onclick="" ><i class="fas fa-check-circle" aria-hidden="true"></i> Wysłać</button>
            </div>
        </form>
        <div class="mar"></div>
        <div class="boxinbox-inside">
            <div class="listing-titlebar">
                <div style="width:33%;">
                    <h6>Nazwa</h6>
                </div>
                <div style="width:33%;">
                    <h6>Data</h6>
                </div>
                <div style="width:33%;">
                    <h6>Działania</h6>
                </div>
            </div>
            @foreach($cards as $card)
                <div class="listing-element">
{{--                    <input class="inp-hid" type="hidden" value="{{$card->id}}">--}}
                    <div style="width:33%;">
                        <h6>{{$card->name}}</h6>
                    </div>
                    <div style="width:33%;">
                        <h6>{{$card->created_at}}</h6>
                    </div>
                    <div style="width:33%;">
                        @if($card->path)
                        <i class="fa-solid fa-download download-btn" wire:click="downloadFile('storage/old_cards/{{$card->path}}')" style="cursor:pointer"></i>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

    </div>
{{--    <script>--}}
{{--        document.addEventListener('click', (e) => {--}}
{{--            if(e.target.classList.contains('download-btn'))--}}
{{--            {--}}
{{--                @this.set('pathFromDb', e.target.getAttribute('data-path'))--}}
{{--            }--}}
{{--        })--}}
{{--    </script>--}}
</div>
