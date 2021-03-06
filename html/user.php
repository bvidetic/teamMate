<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    include 'playerHQuestions.php';
    $db = get_db_handle();


    $query = "SELECT * FROM questions";

    $result = $db->query($query);
    $items = '';
    $mitems = '';
    $pquestions = '';
    while ($row = $result->fetch_assoc()){


        $items .= "<li><span><input type='radio' name='question_{$row['id']}' value='yes' id='yes'>yes 
                  <input type='radio' name='question_{$row['id']}' value='no' id='no'>no &nbsp
                  {$row['question_text']}</li>\n</span>";

        $mitems .= "<li><span><input type='radio' name='question_{$row['id']}' value='yes' id='yes'>yes 
                   <input type='radio' name='question_{$row['id']}' value='no' id='no'>no &nbsp
                   {$row['mquestion_text']}</li>\n</span>";

        $pquestions .= "<li><span>{$row['question_text']}</li>\n</span>";
    }
?>

<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    include 'process_answers.php';
    $db2 = get_db_handle2();

    $query = "SELECT * FROM answers";

    $result2 = $db2->query($query);
    $panswer = '';
    while ($row = $result2->fetch_assoc()){

        $panswer .= "<li><span>{$row['answer']}'</li>";
    }

?>



<!DOCTYPE html>
<html>
    <head>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>      
        <script src="main.js"></script>
        <link rel="stylesheet" href="styles.css">
    </head>
    
    <main>
        <body>

<!-- LOGGED IN ------------------------------------------------------------------- -->
            <div class="header">
                <h1 class="mainHeader">Welcome to Find a Team-mate!</h1>
                <h2 class="subHeader">Connecting athletes to like-minded athletes!</h2>
                <div class="loggedinField">
                  <form id="login" action="index.php" method="POST" id="">
                      <input type="text" name="email" class="email" placeholder="brian@brian.com"><br>
                                                            <!-- // <?php $user=mysql_fetch_assoc($result); ?> -->
                  <button id="logoutButton" class="logoutButton">Logout</button>
                  </form>
                </div>
            </div>
            <br>

<!-- SELECT THE TYPE OF USER YOU ARE ---------------------------------------------- -->
            <div class="userSelecter">
                <h2>How can we help you?</h2>
                <div class="sportSelect">Step 1: Select a sport.<br>
                  <select>
                    <option class="select">Select</option>
                    <option class="hockey">Hockey</option>
<!--                     <option class="softball">Softball</option>
                    <option class="soccer">Soccer</option><br> -->
                  </select>
                </div>

<!--                 <div class="locationSelect">Step 2: Select a location.<br>
                  <select>
                    <option class="select">Select</option>
                    <option class="phoenix">Phoenix</option>
                    <option class="north valley">North Valley</option>
                    <option class="south valley">South Valley</option>
                    <option class="east valley">East Valley</option>
                    <option class="west valley">West Valley</option>
                  </select>
                </div>     -->            

                <div class="sportSelect">Step 3: Determine your needs.<br>               
                  <form class="radioButtons"name="userSelectionForm" action="" method="POST">
                    <input type="radio" name="role" value="manager" id="manager">Help me find players for my team<br>
                    <input type="radio" name="role" value="player" id="player">Help me find a team to play on<br>
                    <button id="useSelButton" class="useSelButton">Submit</button>
                  </form>
                </div>
            </div>

<!-- TEAM MANAGER SECTION: FLOAT DETERMINED BY USER SELECTION ----------------------- -->
            <div class="teamManager">
              <div class="managerQuestions">
                  <h2>What are you looking for in a team-mate?</h2>
                  <form action="process_answers.php" method="POST">
                      <input type="hidden" value="manager" name="type">
                      <input type="hidden" value="" name="user_id">
                      <div class="registerQuestions">Please answer these questions so we can help you find a player...</div>
                      <ul class="registerQuestions">
                         
                              <?php echo $mitems; ?>
                          
                      <input type="submit" class="mgrAskButton" name="submit" value="mgrAskButton"/>
                      </ul>
                  </form>
              </div>
              <br></br>
              <div class="playerComparison">
                  <h2>Check back regularly to view players that answered your questoins and find the best match!</h2>

                  <div class="mgrComparisonQs">  
                    <?php echo $pquestions; ?>
                  </div>

                  <div class="mgrComparisonAs">
                    <?php echo $panswer; ?>
                  </div>
              </div>
            </div>



<!--                     <table style="width:300px">
                    <tr>
                      <th>questions</th>
                      <th>user1</th>        
                      <th>user2</th>
                      <th>user3</th>
                      <th>user4</th>
                    </tr>
                    <tr>
                      <td>question1</td>
                      <td>yes</td>      
                      <td>yes</td>
                      <td>yes</td>
                      <td>yes</td>
                    </tr>
                    <tr>
                      <td>question2</td>
                      <td>yes</td>      
                      <td>yes</td>
                      <td>yes</td>
                      <td>no</td>
                    </tr>
                    <tr>
                      <td>question3</td>
                      <td>yes</td>      
                      <td>yes</td>
                      <td>no</td>
                      <td>no</td>
                    </tr>
                    <tr>
                      <td>question4</td>
                      <td>yes</td>      
                      <td>no</td>
                      <td>no</td>
                      <td>no</td>
                    </tr>
                    <tr>
                      <td>Player Match</td>
                      <td>100%</td>     
                      <td>75%</td>
                      <td>50%</td>
                      <td>25%</td>
                    </tr>
                    </table> -->

<!-- PLAYER USER ----------------------------------------------------------------- -->
            <div class="playerProfile">
                <h2>Find a team that best suites you best!</h2>
                <form action="process_answers.php" method="POST">
                    <input type="hidden" value="player" name="type">
                    <div class="opening">Please answer these questions so we can help you find a team...</div>
                    <ul class="RegisterQuestions">
                        <li>
                            <?php echo $items; ?>
                        </li>
                    <input type="submit" class="playerAnsButton" name="playerAnsButton" value="playerAnsButtont"/>             
                    </ul>
                </form>
            </div>

        </body>
    </main>
</html>




