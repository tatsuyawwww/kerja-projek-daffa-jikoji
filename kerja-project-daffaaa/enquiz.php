<?php
session_start();
$koneksi = new mysqli("localhost","root","","kanaquiz");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Hiragana Quiz</title>
    <link rel="stylesheet" type="text/css" href="enquiz.css">
</head>

<body>



    <div class="container">
        <h1>Hiragana Quiz</h1>

        
        <div id="instructions-section">
            <div class="instructions">
                <h1>Quiz Instructions</h1>
                <p>Please fill in the corresponding romaji for each hiragana character.</p>
                <p>Click the "Generate Quiz" button to create a quiz.</p>
                <p>After filling out the quiz, click the "Submit" button to see the results.</p>
                <p style="text-wrap:nowrap;">Specify the amount of the questions underneath &lceil; Maximum is 70 | Minimum is 1 &rfloor;</p>
            </div>
        </div>



       
        <div id="settings-section">
            <label for="num-questions">Number of Questions:</label>
            <input type="number" id="num-questions" min="1" max="70" value="1">
        </div>

        
        <div class="buttons">
            <button id="generate-button">Generate Quiz</button>
        </div>

        <div id="quiz-section" style="display: none;">
            <h2 id="quiz-title">Quiz</h2>
            <div id="questions-container"></div>
            <button id="submit-button">Submit</button>

        </div>

       
        <div id="results-section" style="display: none;">
            <h2 id="results-title">Results</h2>
            <table id="results-table"></table>
            <!-- <p style="display: block;">a</p> -->
        </div>
        <h3 id="grade"></h2>
        <p>Username : <?php echo $_SESSION['username']; ?></p>
   
    </div>

   <a href="../enhome.php"><button>logout</button></a> 
    <script src="enquiz.js"></script>
</body>

</html>