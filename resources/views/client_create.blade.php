@extends('layout.app')

@section('content')
    <div class="box">
        <livewire:clients.create-clients-item/>
    </div>
@endsection

@section('addit_js')
    <script>
        document.addEventListener('success-add-client', (e) => {
            Swal.fire(
                'Dodano pomyślnie!',
                'Twój klient został pomyślnie dodany do bazy danych klientów!',
                'success'
            )
        })
        document.addEventListener("DOMContentLoaded", function () {
            var phoneMask = IMask(document.getElementById('tel-client'), {
                mask: '+{48} (000) 000-00-00'
            })
        })
    </script>
@endsection
