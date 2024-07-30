<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Control Panel</title>
    <link rel="stylesheet" href="/RobotProj1/style.css"> <!-- Update the path as needed -->
    <script>
        let recognition;
        let recognizing = false;

        function startRecognition() {
            if (!('webkitSpeechRecognition' in window)) {
                alert("Speech Recognition not supported.");
                return;
            }

            if (!recognizing) {
                recognition = new webkitSpeechRecognition();
                recognition.continuous = true;
                recognition.interimResults = true;

                recognition.onresult = function(event) {
                    let transcript = '';
                    for (let i = event.resultIndex; i < event.results.length; i++) {
                        transcript += event.results[i][0].transcript;
                    }
                    document.getElementById('transcript').value = transcript;

                    // Send command to speech_to_text.php
                    sendSpeechToText(transcript);
                };

                recognition.onerror = function(event) {
                    console.error('Speech recognition error:', event.error);
                };

                recognition.onend = function() {
                    recognizing = false;
                    document.getElementById('startRecognition').style.display = 'inline';
                    document.getElementById('stopRecognition').style.display = 'none';
                };

                recognition.start();
                recognizing = true;
                document.getElementById('startRecognition').style.display = 'none';
                document.getElementById('stopRecognition').style.display = 'inline';
            }
        }

        function stopRecognition() {
            if (recognizing) {
                recognition.stop();
                recognizing = false;
                document.getElementById('startRecognition').style.display = 'inline';
                document.getElementById('stopRecognition').style.display = 'none';
            }
        }

        function sendSpeechToText(transcript) {
            fetch('speech_to_text.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'transcript=' + encodeURIComponent(transcript)
            })
            .then(response => response.text())
            .then(data => console.log(data))
            .catch(error => console.error('Error:', error));
        }
    </script>
</head>
<body>

    <div class="container">
        <i class="typewriter" style="font-size:27px"><span>/robot.controller</span></i>
        <i class="grey"><br/>•──────────────•°•<i class="grey">❀</i>•°•─────────────•</i>
        <pre><i class="grey">Welcome to my humble robot control panel </i></pre>
    </div>
    <div class="container">
        <form action="" method="post">
            <input type="hidden" name="action" value="submit" />
            <h1>
                <button id="Forward" type="submit" name="Forward" class="other_btn" value="F" formaction="retrieve.php">Forward</button>
            </h1>
            <h2>
                <button id="Left" type="submit" name="Left" class="other_btn" value="L" formaction="retrieve.php">Left</button>
                <button id="Stop" type="submit" name="Stop" class="stopbtn" value="S" formaction="retrieve.php">STOP</button>
                <button id="Right" type="submit" name="Right" class="other_btn" value="R" formaction="retrieve.php">Right</button>
            </h2>
            <h3>
                <button id="Backward" type="submit" name="Backward" class="other_btn" value="B" formaction="retrieve.php">Backward</button>
            </h3>
        </form>
    </div>

    <div class="container">
        <button id="startRecognition" onclick="startRecognition()">Start Speech Recognition</button>
        <button id="stopRecognition" onclick="stopRecognition()" style="display: none;">Stop Speech Recognition</button>
        <div class="container">
            <textarea id="transcript" rows="4" cols="50" placeholder="Transcript will appear here..."></textarea>
        </div>
    </div>

</body>
</html>
