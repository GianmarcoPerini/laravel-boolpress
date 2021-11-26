        <p>
            Hai ricevuto un nuovo messaggio inviato tramite il tuo form su Boolpress v3.0, nello specifico: <br>
                Il form è stato inviato da : {{ $lead->nome }} 
                <br>
                La mail inserita per rispondere : {{ $lead->mail }} 
                <br>
                Contenuto del messaggio: 
                <br>
                {{ $lead->testo }}
        </p>

        <p><a href="{{ route('mail.create') }}">Scrivi una mail</a></p>