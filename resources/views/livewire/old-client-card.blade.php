<div>
    <div class="listing-titlebar">
        <div style="width:50%;">
            <h6>Pytanie</h6>
        </div>
        <div style="width:50%;">
            <h6>Odpowiedź</h6>
        </div>
    </div>
    @foreach($cards as $card)
        <div class="listing-element">
            <div style="width:50%;">
                <h6>{{$card['question']}}</h6>
            </div>
            <div style="width:50%;">
                <h6>{{$card['answer']}}</h6>
            </div>
        </div>
    @endforeach


</div>
