<div class="boxinbox" style="background-color: #f0f1f1;">
    <form method="POST" action="{{route('rodo.reset')}}">
        @csrf
        <div class="boxinbox-inside">

            <h3> UWAGA! </h3><br>
            <div>
                Ta operacja pobierze ze strony internetowej Twoje dane firmy i wygeneruje ponownie warstwę rodo opracowaną przez MyClient. Czynność ta jest nieodwracalna i usunie obecną warstwę RODO. Potwierdź jej wykonanie.
            </div>
        </div>





        <div class="listing-actionbar bottom-buttons">

            <button type="submit"  class="btn1" style=""><i class="fas fa-check-circle" aria-hidden="true"></i> Wykonaj</button>
            <button type="button" onclick="location.href='{{url('dashboard/ustawienia')}}'"class="btn1" style=""><i class="fas fa-times" aria-hidden="true"></i> Anuluj</button>
        </div>

    </form>


</div>
