<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link
            href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"
            rel="stylesheet"
        />

        <style>
            body {
                font-family: "Nunito", sans-serif;
            }
        </style>
    </head>
    <body>
     
            
        <div id="player"></div>
        <h1>{{$video->snippet->title}}</h1>
        <p>{{$video->snippet->description}}</p>


        <script>
            var tag = document.createElement('script');

            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

            var player;
            function onYouTubeIframeAPIReady() {
                player = new YT.Player('player', {
                    height: '390',
                    width: '640',
                    videoId: '{{$videoId}}',
                    playerVars: {
                        'playsinline': 1
                    },
                });
            }

        </script>
    </body>
</html>
