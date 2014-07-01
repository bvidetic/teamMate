<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    include 'playerHQuestions.php';
    $db = get_db_handle();


    $query = "SELECT * FROM questions";


    $result = $db->query($query);
    $mitems = '';
    while ($question = $result->fetch_assoc()){
        $mitems .= "<li><span><input type='radio' name='mquestion_{$question['id']}' value='yes' id='yes'>yes 
                   <input type='radio' name='mquestion_{$question['id']}' value='no' id='no'>no &nbsp
                   {$question['mquestion_text']}</li>\n</span>";
    }

?>




<!-- TEAM MANAGER SECTION: FLOAT DETERMINED BY USER SELECTION ----------------------- -->
            <div class="teamManager">
                <h2>What are you looking for in a team-mate?</h2>
                <form action="manageranswer.php" method="POST">
                    <div class="registerQuestions">Please answer these questions so we can help you find a player...</div>
                    <ul class="registerQuestions">
                        <li>
                            <?php echo $mitems; ?>
                        </li>
                    <input type="submit" class="mgrAskButton" name="submit" value="mgrAskButton"/>
                    </ul>
                </form>



        </body>
    </main>
</html>


<?php

