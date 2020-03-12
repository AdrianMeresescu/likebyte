<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font: 400 15px/1.8 "Lato", sans-serif;
            color: #777;
        }

        .bgimg-1, .bgimg-2, .bgimg-3 {
            position: relative;
            opacity: 0.65;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }
        .bgimg-1 {
            background-image: url("assets/likebyte.ro_top.png");
            min-height: 100%;
        }

        .bgimg-2 {
            background-image: url("assets/likebyte.ro_middle.png");
            min-height: 500px;
        }

        .bgimg-3 {
            background-image: url("assets/likebyte.ro_bottom.png");
            min-height: 500px;
        }

        .caption {
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            text-align: center;
            color: #000;
        }

        .caption span.border {
            background-color: #111;
            color: #fff;
            padding: 18px;
            font-size: 25px;
            letter-spacing: 10px;
        }

        h3 {
            letter-spacing: 5px;
            text-transform: uppercase;
            font: 20px "Lato", sans-serif;
            color: #111;
        }

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1024px) {
            .bgimg-1, .bgimg-2, .bgimg-3 {
                background-attachment: scroll;
            }
        }
    </style>
</head>
<body>

<div class="bgimg-1">
    <div class="caption">
        <span class="border">HELLO, I'M BYTE!</span>
    </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
    <h3 style="text-align:center;">Professional good boy</h3>
    <p>
        I am a Jack Russel Terrier. Very decent, responsible dog with a sharp sense of justice. I am a qualified rabbit-hunter and loud-barker.
    </p>
</div>

<div class="bgimg-2">
    <div class="caption">
        <span class="border" style="background-color:#282E34;font-size:25px;color: #f7f7f7;">Family is important</span>
    </div>
</div>

<div style="position:relative;">
    <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
        <p>I live with the greatest human on Earth and go with him to work every day. </p>
    </div>
</div>

<div class="bgimg-3">
    <div class="caption">
        <span class="border" style="background-color:#282E34;font-size:25px;color: #f7f7f7;">I AM JACK RUSSELL</span>
    </div>
</div>

<div style="position:relative;">
    <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
        <p>The Jack Russell Terrier has its origins in fox hunting. Jack Russells are an energetic breed that rely on a high level of exercise and stimulation and are relatively free from serious health complaints. </p>
    </div>
</div>

<div class="bgimg-1">
    <div class="caption">
        <span class="border">I AM COOL!</span>
    </div>
</div>

</body>
</html>