<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Niramit:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Itim', cursive;
            background: linear-gradient(45deg, #FCB6B6, #FFF7BA, #BBCFF2, #C1AFE0);
            background-size: 300% 300%;
            font-size: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            animation: gradient-bg 10s infinite;
        }

        @keyframes gradient-bg {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .head {
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 28px;
            font-weight: bold;
            color: #333;
            background-color: #cce7ff;
            width: 90%;
            max-width: 600px;
            padding: 15px 25px;
            border : 2px dotted #B18ABD;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 3;
            animation: fade-in 2s ease-in;
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
                transform: translate(-50%, -70%);
            }
            100% {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }

        .message-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #444;
            animation: slide-up 2s ease-out;
        }

        @keyframes slide-up {
            0% {
                opacity: 0;
                transform: translate(-50%, 10%);
            }
            100% {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }

        .message-box {
            background-color: white;
            border-radius: 10px;
            padding: 15px 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px auto;
            animation: pop-up 1.5s ease-in-out;
        }

        @keyframes pop-up {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .nickname {
            font-size: 20px;
            font-weight: bold;
            color: #555;
            margin-bottom: 10px;
        }

        .sentence {
            font-size: 18px;
            line-height: 1.5;
            color: #666;
        }

        @media (max-width: 500px) {
            .head {
                font-size: 22px;
            }

            .message-box {
                width: 90%;
            }

            .nickname {
                font-size: 18px;
            }

            .sentence {
                font-size: 16px;
            }
        }

        @media (min-width: 501px) and (max-width: 768px) {
            .head {
                font-size: 24px;
            }

            .message-box {
                width: 70%;
            }
        }

        @media (min-width: 769px) {
            .message-box {
                width: 50%;
            }
        }

        button{
            background-color: #cce7ff;
            color: #333;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.2s, background-color 0.3s;
            "onmouseover="this.style.backgroundColor='#bcd6ff';" onmouseout="this.style.backgroundColor='#cce7ff';"
        }
    </style>
</head>
<body>
    <?php
        $jsonContent = file_get_contents('data.json');
        $data = json_decode($jsonContent, true);
    ?>

    <h1 class="head">Nice to meet you! Welcome to my memory</h1>

    <div class="message-container">
    <div class="message-box">
        <div class="nickname">
            <?php echo "To $order->nickname"; ?>
        </div>
        <div class="sentence">
            <?php echo $data[$order->nickname]['sentence']; ?>
        </div>
            <form id="wishForm" method="GET" action="" style="margin-top: 20px;">
                <input type="hidden" name="controller" value="person" />
                <button type="submit" name="action" value="index">
                    Go Back
                </button>
            </form>
        </div>
    </div>


</body>
</html>
