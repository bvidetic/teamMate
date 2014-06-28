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
                      <input type="text" name="email" class="email" placeholder="Logged in Email"><br>
                  <button id="logoutButton" class="logoutButton">Logout</button>
                  </form>
                </div>
            </div>
            <br>

<!-- SELECT THE TYPE OF USER YOU ARE ---------------------------------------------- -->
            <div class="userSelecter">
                <h2>How can we help you?</h2>
                <div class="sportSelect">Select a sport.<br>
                    <select>
                      <option class="select">Select</option>
                      <option class="hockey">Hockey</option>
                      <option class="softball">Softball</option>
                      <option class="soccer">Soccer</option><br>
                    </select>
                </div>
                
                <form class="radioButtons"name="userSelectionForm" action="" method="POST">
                  <input type="radio" name="role" value="manager" id="manager">Help me find players for my team<br>
                  <input type="radio" name="role" value="player" id="player">Help me find a team to play on<br>
                  <button id="useSelButton" class="useSelButton">Submit</button>
                </form>

            </div>

<!-- TEAM MANAGER SECTION: FLOAT DETERMINED BY USER SELECTION ----------------------- -->
            <div class="teamManager">
                <fieldset>
                    <h2>What are you looking for in a team-mate?</h2>
                    <ul class="RegisterQuestions">Questions to ask will generate here.
                    </ul>
                <button id="test" class="mgrAskButton">Ask These Questions</button>                
                </fieldset>

                <div class="playerComparison">
                    <h2>Check back regularly to view players that answered your questoins and find the best match!</h2>
                    <table style="width:300px">
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
                    </table>
                </div>
            </div>

<!-- PLAYER USER ----------------------------------------------------------------- -->
            <div class="playerProfile">
                <h2>Help me find a team that best suites me!</h2>
                <fieldset>
                    <div class="opening">Please answer these questions so we can help you find a team.</div>
                    <ul class="RegisterQuestions">Manager questions will generate here.
                    </ul>
                <button id="test" class="playerAnsButtont">Submit</button>                
                </fieldset>
            </div>

        </body>
    </main>
</html>
