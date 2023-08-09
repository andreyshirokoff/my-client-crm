<div class="modal-dialog" role="document" style="top:50%;transform:translateY(-70%)">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:black">Dodaj pole</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border:none;background:none">
                        <span aria-hidden="true" style="font-size: 20px">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
{{--                            <div style="color:black">{{$type}}</div>--}}
                            <label for="addFieldSelect" style="color:black">Wybierz pole</label>
                            <select class="form-control mt-2" id="addFieldModal" wire:model="type">
                                <option value="input">Input</option>
                                <option value="textarea">Textarea</option>
                                <option value="checkbox">Checkbox</option>
                                <option value="radio">Radio</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="addNameModal" style="color:black">Nazwa</label>
                            <input type="text" class="form-control mt-2" id="addNameModal" wire:model="title">
                        </div>
                        <div class="isError "></div>
                        @error('title')
                            <span class="is-invalid" role="alert" style="color:black">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        <div class="form-group mt-3 d-flex justify-content-between align-items-center" id="last-field">
                            <label for="addOrderModal" style="color:black">Obowiązkowy</label>
                            <label class="switch">
                                <input type="checkbox" class="form-control mt-2" id="addRequiredModal" wire:model="isRequired">
                                <span class="slider round"></span>
                            </label>

                        </div>
                        <div class="form-group mt-3" id="last-field">
                            <label for="addOrderModal" style="color:black">Wybierz pole</label>
                            <input type="number" class="form-control mt-2" id="addOrderModal" wire:model="order">
                        </div>
{{--                        <div style="color:black">{{$showMultiFields}}</div>--}}
                        @if($showMultiFields !== false)
                            <button type="button" class="btn1 mt-2" wire:click="addMultiFields">Add Fields</button>
                            <div class="w-100 d-flex flex-column" id="radios">
                                @foreach($fieldsArr as $key => $sf)
                                    <div class="form-group mt-3" id="last-field">
                                        <label for="addAdditField-{{$key}}" style="color:black">Dodatkowa nazwa pola</label>
                                        <input type="text" class="form-control mt-2" id="addAdditField-{{$key}}" wire:model="fieldsArr.{{$key}}">
                                    </div>
                                    @error('fieldsArr.'.$key)
                                        <span class="is-invalid" role="alert" style="color:black">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                @endforeach
                            </div>
                        @endif
                    </form>
                </div>
                <div class="modal-footer">
{{--                    <a type="button" class="btn1" style="text-decoration: none" id="modal-ok" data-dismiss="modal" wire:click="addNewFields">Add</a>--}}
                    <button type="button" class="btn1" id="modal-ok">Add</button>
{{--                    data-dismiss="modal"--}}
                </div>
            </div>


    <script>
        document.querySelector('#modal-ok').addEventListener('click', function(){
            @this.call('customValidation');
        })
        document.querySelector('#addField').addEventListener('modal-error', function(){
            @if(count($errors->all()) === 0)
            $('.close').trigger('click')
            @this.call('addNewFields');
            @endif
        })
    </script>









</div>



