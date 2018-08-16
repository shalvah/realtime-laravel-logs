@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Logs</h2>
        <div class="list-group" id="logs">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/4.2/pusher.min.js"></script>

    <script>
        function displayLog(data) {
            let $log = $('<div>').addClass('list-group-item')
                .html(`<pre><code>${JSON.stringify(data, null, 4)}</code></pre>`);
            $('#logs').prepend($log);
        }
    </script>
    <script>
        var socket = new Pusher("your-app-key", {
            cluster: 'your-app-cluster',
        });
        socket.subscribe('{{ config('app.env') }}')
            .bind('log', displayLog);
    </script>
@endsection
