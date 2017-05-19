<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

        <title>OweUBot - Telegram Debts Managment Bot</title>

    </head>
    <body>
      <div id="app">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    OweUBot
                </div>

                <div class="links">
                  <a href="#start" data-scroll>Getting Started</a>
                  <a href="#commands" data-scroll>Commands</a>
                  <a href="https://github.com/francyrho11/OweUBot">GitHub</a>
                </div>
            </div>
        </div>
        <!-- #start -->
        <div id="start" class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Getting Started
                </div>
            </div>
        </div>
        <!-- #commands -->
        <div id="commands" class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Commands
                </div>
            </div>
        </div>
      </div>

      <!-- scripts -->
      <script src="/js/app.js"></script>
    </body>
</html>
