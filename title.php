<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/0.11.9/jquery.velocity.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

        <script>

            var $orbs = $('.orbs span');
            $('.end-right').css('left', '-10%');
            $('.end-left').css('left', '110%');
            $orbs.velocity({'top': '-300px', scaleX: '.2', scaleY: '.2', color: '#990000'}, 0);
            var orb = 0;
            var numOrbs = $orbs.length;

            $('.end-right').velocity({left: '50%'}, 'easeOutExpo', 1200);
            $('.end-left').velocity({left: '50%'}, 'easeOutExpo', 1200);


            dropOrbs = function () {
                $orbs.eq(orb).velocity({top: '70px'}, 400).velocity({scaleX: 1, scaleY: 1, color: '#fff'}, 1000).css('position', 'relative');
                orb = orb + 1;
                if (orb < numOrbs) {
                    setTimeout(dropOrbs, 100);
                }
                else {
                    setTimeout(function () {
                        $('.glow').velocity({opacity: 1}, 1200);
                    }, 1200);

                }

            }

            setTimeout(dropOrbs, 400);</script>
        <style>
            @import "bourbon";

            *{
                box-sizing: border-box;
            }
            body{
                background: black;
            }

            span{
                margin: 0;
                padding: 0;
            }

            .end-left{
                margin-left: -235px;
            }

            .end-right{
                margin-right: -117.5px;
            }
            .outline{
                position: absolute;
                top: 20px;
            }

            .outline{
                color: black;
                -webkit-text-fill-color: transparent; /* Will override color (regardless of order) */
                -webkit-text-stroke-width: 2px;
                -webkit-text-stroke-color: orange;
                font-size: 64px;
                font-family: 'Arvo', serif;
            }

            .orbs{
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                display: block;
                font-size: 128px;


                span{
                    color: red;
                    display: inline-block;
                    text-align: center;
                    border-radius: 50%;
                    text-shadow: 0 0 20px orange, 1px 1px 20px orange, 2px 2px 20px orange, -1px -1px 20px orange, -2px -2px 20px orange;
                    position: absolute;
                    left: 50%;

                    &:first-child{
                        margin-left: -210px;
                    }

                    &:not(:first-child){
                        margin-left: -35px;
                    }
                }
            }

            .glow{
                opacity: 0;
                font-family: 'Arvo', serif;
                font-weight: 300;
                color: orange;
                margin-left: -222.5px;
                font-size: 105px;
                position: absolute;
                top: 200px;
                left: 50%;
            }
        </style>
    </head>
    <body>
        <link href='https://fonts.googleapis.com/css?family=Arvo:700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:300,100' rel='stylesheet' type='text/css'>

        <span class="outline end-right">
            TYGER
        </span>
        <span class="outline end-left">
            TYGER
        </span>

        <span class="orbs">
            <span>b</span>
            <span>u</span>
            <span>r</span>
            <span>n</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
        </span>

        <span class="glow">
            BRIGHT
        </span>
    </body>
</html>