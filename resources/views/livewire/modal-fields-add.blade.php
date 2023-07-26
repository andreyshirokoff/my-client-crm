<div class="modal-dialog" role="document" style="top:50%;transform:translateY(-70%)">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:black">Dodaj pole</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
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
                            <input type="text" class="form-control mt-2" id="addNameModal" wire:model.defer="title">
                        </div>
                        <div class="form-group mt-3" id="last-field">
                            <label for="addOrderModal" style="color:black">Wybierz pole</label>
                            <input type="number" class="form-control mt-2" id="addOrderModal" wire:model.defer="order">
                        </div>
{{--                        <div style="color:black">{{$showMultiFields}}</div>--}}
                        @if($showMultiFields != 'false')
                            <button type="button" class="btn1" data-dismiss="modal" wire:click="addMultiFields">Add Fields</button>
                            <div class="w-100 d-flex flex-column" id="radios">
                                @foreach($fieldsArr as $key => $sf)
                                    <input type="text" wire:change="updateMultiFieldsValue({{$key}}, '123')">
                                @endforeach
                            </div>
                        @endif
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn1" data-dismiss="modal" wire:click.prevent="addNewFields">Add</button>
                </div>
            </div>
        </div>



