<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plyr</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/CDNSFree2/Plyr/plyr.css" />
</head>

<body>

    <div class="container">

        <div class="row mt-4">
            <div class="col-md-6">
                <h1 class="text-center">Self-hosted Video</h1>
                <video id="self_hosted_video" data-plyr-config='{"urls":{"download":"https://vimeo.com/76979871"}}'
                    poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
                    <source src=" https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                        type="video/mp4" />
                </video>
            </div>
            <div class="col-md-6">
                <h1 class="text-center">Youtube Video</h1>
                <div id="youtube_player"
                    data-plyr-config='{"urls":{"download":"https://www.youtube.com/watch?v=bTqVqk7FSmY"}}'
                    poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg"
                    data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"></div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h1 class="text-center">vimeo Video</h1>
                <div id="vimeo_player" data-plyr-config='{"urls":{"download":"https://vimeo.com/76979871"}}'
                    poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg"
                    data-plyr-provider="vimeo" data-plyr-embed-id="76979871"></div>
            </div>
            <div class="col-md-6">
                <h1 class="text-center">Self-hosted Audio</h1>
                <audio id="audio_player" controls>
                    <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mp3" />
                </audio>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/CDNSFree2/Plyr/plyr.js"></script>

    <script>
        var controls = [
            'play-large', // The large play button in the center
            //'restart', // Restart playback
            //'rewind', // Rewind by the seek time (default 10 seconds)
            'play', // Play/pause playback
            //'fast-forward', // Fast forward by the seek time (default 10 seconds)
            'progress', // The progress bar and scrubber for playback and buffering
            'current-time', // The current time of playback
            'duration', // The full duration of the media
            'mute', // Toggle mute
            'volume', // Volume control
            //'captions', // Toggle captions
            'settings', // Settings menu
            'pip', // Picture-in-picture (currently Safari only)
            'airplay', // Airplay (currently Safari only)
            'download', // Show a download button with a link to either the current source or a custom URL you specify in your options
            'fullscreen' // Toggle fullscreen
        ];

        var self_hosted_video = new Plyr('#self_hosted_video', {
            controls
        });

        var youtube_player = new Plyr('#youtube_player', {
            controls
        });
        var youtube_player = new Plyr('#vimeo_player', {
            controls
        });
        var fb_player = new Plyr('#fb_player', {
            controls
        });
        var audio_player = new Plyr('#audio_player', {
            controls
        });
    </script>

</body>

</html>