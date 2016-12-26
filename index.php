<!doctype html public>
<head>
    <meta charset="utf-8">
    <title>Testing Audio</title>

</head>
<body>

            <h2>Choose format and bitrate</h2>
            <audio controls="controls" autoplay="autoplay">
                <source src="<?php echo str_replace(".mp3", ".ogg", $file); ?>" type="audio/ogg" />
                <source src="<?php echo $file; ?>" type="audio/mp3" />
                Your browser does not support the audio tag.
            </audio>


</body>
</html>
