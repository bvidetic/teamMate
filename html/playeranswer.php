










TRY TO USE SAME TECHNIQUE THAT WAS USED TO DO REGISTRATION.

<?php
// this information connects us to the database with our db username, password and ip or local direction
    $username = "root";
    $password = "";
    $hostname = "localhost";

    
// this will handle the connection to the database. hostname, password, username references my db registration
    $dbhandle = mysql_connect($hostname, $username) or die ("could not connect to db");
// hooks into the database. findTeammate is the name of the database. dbhandle references variable above.
    $selected = mysql_select_db("findTeammate", $dbhandle);


// these are the variables that reference the register input name entered in html below
            

// php echo $items;
// if(isset($_POST['playerAnsButton'])){
// $panswer = $_POST['playerAnsButton'];
// echo ($playerAnsButton);
// }
// else
// {
// echo ("nothing selected");    
// }
            $myemail = $_POST["email"];
            $myzip = $_POST["zip"];
            $mypassword = $_POST["password"];

            $question_id = $_POST["email"];
            $answer = (isset($_POST['$playerAnsButton'])){
            $user_id = $_POST["id"];






// tells page to insert data into user table. fields in the table, the values of the variables created above to be inserted in the db.
            mysql_query("INSERT INTO answers(question_id, answer, user_id) VALUES ('$question_id', '$answer', '$user_id')");


        mysql_close();
        header("location:user.php");
?>