<?PHP

function createTable()
{
    global $connection;

    if (isset($_POST['submit'])) {
        $leftButton = $_POST['left'];
        $forwardButton = $_POST['forward'];
        $rightButton = $_POST['right'];



        $query = "INSERT INTO remote_control (leftbutton,forward,rightbutton) 
        VALUES ('$leftButton','$forwardButton','$rightButton')";


        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
        }
    }
}

function ShowDate()
{
    global $connection;


    $query = "SELECT * FROM remote_control";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query FAILED');
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $leftButton = $row['leftbutton'];
        $forwardButton = $row['forward'];
        $rightButton = $row['rightbutton'];


        echo '<tr> 

    <td>' . $leftButton . '</td> 
    <td>' . $forwardButton . '</td> 
    <td>' . $rightButton . '</td> 
    
</tr>';
    }
}

function deleteRows()
{
    if (isset($_POST['delete'])) {

        global $connection;



        $query = "DELETE FROM remote_control WHERE ID =(SELECT MAX(id) FROM remote_control) ";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('QUERY FAILED' . mysqli_error($connection));
        }
    }
}

function map()
{
    if (isset($_POST['start'])) {

        $leftButton = $_POST['left'];
        $forwardButton = $_POST['forward'];
        $rightButton = $_POST['right'];
        for ($i = 1; $i <=  $leftButton; $i++) {
            echo '<h1 style="font-size:48px; color:white ">&larr; </h1>';
        }
        for ($i = 1; $i <= $forwardButton; $i++) {
            echo '<h1 style="font-size:48px;color:white "> &uarr;</br> </h1>';
        }
        for ($i = 1; $i <= $rightButton; $i++) {
            echo '<h1 style="font-size:48px;color:white "> &rarr; </h1>';
        }
        echo "</br>";
    }
}