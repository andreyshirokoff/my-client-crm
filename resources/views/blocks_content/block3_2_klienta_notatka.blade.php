<div>
        <div class="listing-titlebar" style="margin-top:10px;">
            <div style="width:40%">

            </div>
            <div style="width:60%" class="sec-div">

            </div>
        </div>
        <div class="listing-element row-with-input">
            <div style="width:100%;">
                {{\App\Models\Client::where('id', $_GET['clientId'])->first()->description}}
            </div>
        </div>
</div>
