<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    include 'playerHQuestions.php';
    $db = get_db_handle();


    $query = "SELECT * FROM questions";

    $result = $db->query($query);
    $items = '';
    while ($question = $result->fetch_assoc()){
        $items .= "<li><span><input type='radio' name='hockey' value='yes' id='yes'>yes 
                   <input type='radio' name='hockey' value='no' id='no'>no 
                   {$question['question_text']}</li>\n</span>";
    }


?>





<html>
    <main>
        <body>
<!-- PLAYER USER ----------------------------------------------------------------- -->
            <div class="playerProfile">
                <h2>Help me find a team that best suites me!</h2>
                <fieldset>
                    <div class="opening">Please answer these questions so we can help you find a team.</div>
                    <ul class="RegisterQuestions">


                        <li>
                            <?php echo $items; ?>
                        </li>


                    <button id="test" class="playerAnsButtont">Submit</button>                
                    </ul>
                </fieldset>
            </div>
        </body>
    </main>
</html>