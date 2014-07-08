<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    // print_r($post); 
    // exit("now");

    $username = "root";
    $password = "";
    $hostname = "localhost";

    
    $dbhandle = mysql_connect($hostname, $username) or die ("could not connect to db");
    $selected = mysql_select_db("findTeammate", $dbhandle);
    print_r($_POST);


    $query='SHOW TABLES';
    $result=mysqli_query($findTeammate, )


    for($i=1; $i<100; $i++)
        $key = "answer_".$i;
    if(isset($_POST[$key])){
        $insert = "INSERT INTO answers";

    // $question_id = $_POST['name'];
    // $sport_id = $_POST[''];
    $answer = $_POST['$insert'];
    $user_id = $_COOKIE['user_id'];
    
    $select = "INSERT INTO answers(question_id, sport_id, answer, user_id) VALUES ($answer, $user_id)";

    }
    mysql_close();
       
        // header("location:user.php");
?>




     <!-- mysql_query("INSERT INTO answers(question_id, sport_id, answer, user_id) VALUES ('$question_id', '$sport_id', '$answer', '$user_id')"); -->


<!-- PLAIN ENGLISH LOGIC:
loop over my questions.
find answer to each question.
if value is equal to 1 or 0, insert into new table row.
check next questoin and repeat.
if value is unidentified, echo: answer all questions...... -->


<!--      while ($row = $result->$_POST()){
         $items .= "<li><span><input type='radio' name='question_{$row['id']}' value='1' id='yes'>yes 
                    <input type='radio' name='question_{$row['id']}' value='0' id='no'>no &nbsp
                    {$row['question_text']}</li>\n</span>"; -->




<!-- 
//     error_reporting(E_ALL);
//     ini_set('display_errors', 'on');

//     // print_r($post); 
//     // exit("now");

//     $username = "root";
//     $password = "";
//     $hostname = "localhost";

    
//     $dbhandle = mysql_connect($hostname, $username) or die ("could not connect to db");
//     $selected = mysql_select_db("findTeammate", $dbhandle);

//     $question_id = $_POST['name'];
//     $sport_id = $_POST[''];
//     $answer = $_POST['value'];
//     $user_id = $_POST[''];
    
//     $select = "INSERT INTO answers(question_id, sport_id, answer, user_id) VALUES ('$question_id', '$sport_id', '$answer', '$user_id')"

//     mysql_query();

//         mysql_close();
//         header("location:user.php"); -->

<!-- THIS INSERTS THE CORRECT VALUES IN THE CORRECT ROWS AND COLUMS
mysql_query("INSERT INTO answers(question_id, sport_id, answer, user_id) VALUES (1, 2, 3, 4)");
 -->