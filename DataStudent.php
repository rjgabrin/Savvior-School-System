<!DOCTYPE html>
<?php
require_once('HeaderLayout.php');
?>
<body>
<br />
<!--
    Add button & delete button, to be put in top right since only one item will be affected at a time
-->
<div class="btn-group pull-right">
    <button type="button" class="btn btn-primary" data-toggle = "tooltip" data-placement = "top" title = "Add Entry to Table">
        <a data-toggle = "modal" data-target = "#AddModal" style = color:white>Add</a>
    </button>
    <button type="button" class="btn btn-primary" data-toggle = "tooltip" data-placement = "top" title = "Remove Entry from Table">
        <a data-toggle = "modal" data-target = "#RemoveModal" style = color:white onclick = "delete();">Remove</a>
    </button>
</div>

<!--
    Update button -- JQuery search: https://www.w3schools.com/howto/howto_js_filter_dropdown.asp
-->
<div class="dropdown pull-right">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" data-toggle = "tooltip" data-placement = "top" title = "Update Entry in Table">Update
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <li><a href="#" data-toggle = "modal" data-target = "#UpdateStudentNameModal">Student Name</a></li>
        <li><a href="#" data-toggle = "modal" data-target = "#UpdateStudentImageModal">Student Image</a></li>
        <li><a href="#" data-toggle = "modal" data-target = "#UpdateClassTitleModal">Class Title</a></li>
        <li><a href="#" data-toggle = "modal" data-target = "#UpdateBookTitleModal">Book Title</a></li>
        <li><a href="#" data-toggle = "modal" data-target = "#UpdateBookImageModal">Book Image</a></li>
    </ul>
</div>

<br/>
<h2><center><u>Student Data</u></center></h2>
<br/>

<p position = relative top = "200px" align = 'center'>Using the buttons provided, select a function to perform on the data displayed below. Note: Any changes you make to the data below will also be carried over to the master table on the Home Page.</p>
<p position = relative top = "100px" align = 'center'>To update data, utilize the dropdown menu at the bottom of the page.</p>

<!--
    Add Modal
-->

<div class="modal" tabindex="-1" role="dialog" id = "AddModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id = "modalLabel">Add Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method = "get" action = "DataStudent.php">
                    <h2>Name</h2><br>
                    <input type = "text" name = "StudentName"><br>
                    <h2>ID</h2><br>
                    <input type = "text" name = "id"><br>
                    <h2>Class</h2><br>
                    <input type = "text" name = "ClassTitle"><br>
                    <h2>Book</h2><br>
                    <input type = "text" name = "BookTitle"><br>
                    <input class = 'pull-right' type = "submit" value = "Submit" name = "submit">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!--
    Remove Modal
-->

<div class="modal" tabindex="-1" role="dialog" id = "RemoveModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Remove Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method = "get" action = "DataStudent.php">
                    <h2>Name</h2><br>
                    <input type = "text" name = "StudentName"><br>
                    <h2>ID</h2><br>
                    <input type = "text" name = "id"><br>
                    <input href = "DataStudent.php" type = "submit" value = "click" name = "submit1">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--
    Update Student Name Modal
-->

<div class="modal" tabindex="-1" role="dialog" id = "UpdateStudentNameModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Student</h5>
            </div>
            <div class="modal-body">
                <form method = "get" action = "DataStudent.php">
                    <h2>ID</h2><br>
                    <input type = "text" name = "id"><br>
                    <h2>Student Name</h2><br>
                    <input type = "text" name = "StudentName"><br>
                    <input type = "submit" value = "click" name = "submit2">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--
    Update Student Image Modal
-->

<div class="modal" tabindex="-1" role="dialog" id = "UpdateStudentImageModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Student</h5>
            </div>
            <div class="modal-body">
                <form method = "get" action = "DataStudent.php">
                    <h2>ID</h2><br>
                    <input type = "text" name = "id"><br>
                    <h2>Student Image</h2><br>
                    <div id="container">
                        <a id="pickfiles" href="javascript:;">[Select file]</a>
                    </div>
                    <br>
                    <input type = "submit" value = "click" name = "submit2">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--
    Update Class Title Modal
-->

<div class="modal" tabindex="-1" role="dialog" id = "UpdateClassTitleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Student</h5>
            </div>
            <div class="modal-body">
                <form method = "get" action = "DataStudent.php">
                    <h2>ID</h2><br>
                    <input type = "text" name = "id"><br>
                    <h2>Class Title</h2><br>
                    <input type = "text" name = "ClassTitle"><br>
                    <input type = "submit" value = "click" name = "submit2">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--
    Update Book Title Modal
-->

<div class="modal" tabindex="-1" role="dialog" id = "UpdateBookTitleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Student</h5>
            </div>
            <div class="modal-body">
                <form method = "get" action = "DataStudent.php">
                    <h2>ID</h2><br>
                    <input type = "text" name = "id"><br>
                    <h2>Book Title</h2><br>
                    <input type = "text" name = "BookTitle"><br>
                    <input type = "submit" value = "click" name = "submit2">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--
    Update Book Image Modal
-->

<div class="modal" tabindex="-1" role="dialog" id = "UpdateBookImageModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Student</h5>
            </div>
            <div class="modal-body">
                <form method = "get" action = "DataStudent.php">
                    <h2>ID</h2><br>
                    <input type = "text" name = "id"><br>
                    <h2>Book Image</h2><br>
                    <div id="container">
                        <a id="pickfiles" href="javascript:;">[Select file]</a>
                    </div>
                    <br>
                    <input type = "submit" value = "click" name = "submit2">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php

$continue = include 'LoginCheck.php';

if($continue == true) {

    #echo "Current Student Data";
    $i = 0;
    $results = array();
    $reportData = array();

    $servername = "10.99.100.54";
    $username = "sa";
    $password = "capcom5^";
    $dbname = "ryan_intern";

    $q = "
        SELECT
            s.ID,
            s.StudentName,
            s.ClassTitle,
            s.BookTitle
        FROM
            SavviorSchool s
        ";

    $dbh = new PDO('mysql:host=10.99.100.54;dbname=ryan_intern', $username, $password);
    $data = $dbh->query($q, PDO::FETCH_ASSOC);

    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    foreach ($data as $entry) {
        $results [] = $entry;
    }



    /****************************************************************
     *  ADD NEW STUDENT TO THE DATABASE
     ****************************************************************/
    if (isset($_GET['submit'])) {

        $id = $_GET['id'];
        $studName = $_GET['StudentName'];
        $class = $_GET['ClassTitle'];
        $book = $_GET['BookTitle'];

        $username = "sa";
        $password = "capcom5^";

        $changeData[] = $id;

        $sql = "INSERT INTO SavviorSchool(ID, StudentName, ClassTitle, BookTitle) VALUES ('$id', '$studName', '$class', '$book')";

        $dbh = new PDO('mysql:host=10.99.100.54;dbname=ryan_intern', $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->exec($sql);

        if (!isset($_GET['reload'])) {
            echo '<meta http-equiv = Refresh content = "0;url=http://testproject.test/DataStudent.php?reload=1">';
        }
    }


    /****************************************************************
     * REMOVE ALL VALUES ASSOCIATED WITH A GIVEN ID TO BE REMOVED
     ****************************************************************/

    if (isset($_GET['submit1'])) {

        $name = $_GET['StudentName'];
        $id = $_GET['id'];

        $username = "sa";
        $password = "capcom5^";

        /*Delete all data in the table row if specified by the Bootstrap Modal input*/
        $changeData[] = $id;

        $sql = "DELETE FROM SavviorSchool WHERE ID = '$id' AND StudentName = '$name'";

        $dbh = new PDO('mysql:host=10.99.100.54;dbname=ryan_intern', $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->exec($sql);

        if (!isset($_GET['reload'])) {
            echo '<meta http-equiv = Refresh content = "0;url=http://testproject.test/DataStudent.php?reload=1">';
        }
    }



    /****************************************************************
     * EDIT DESIGNATED STUDENT VALUES
     ****************************************************************/

    if (isset($_GET['submit2'])) {

        $q = ("SELECT
                   t.StudentName,
                   t.ClassTitle,
                   t.BookTitle
               FROM
                   SavviorSchool as t
        ");


        $dbh = new PDO('mysql:host=10.99.100.54;dbname=ryan_intern', $username, $password);
        $data = $dbh->query($q, PDO::FETCH_ASSOC);


        if ($_GET['StudentName']) {
            $name = $_GET['StudentName'];
        }else{
            foreach($data as $user){
                if($data['id'] == $_GET['ID']){
                    $name = $data['id']['StudentName'];
                }
            }
        }

        if ($_GET['id']) {
            $id = $_GET['id'];
        } else {
            $id = null;
        }

      /*  if ($_GET['ClassTitle']) {
            $class = $_GET['ClassTitle'];
        }else{
            foreach($data as $user){
                if($data['id'] == 'ID'){
                    $name = $data['id']['ClassTitle'];
                }
            }
        }
      */
       /* if ($_GET['BookTitle']) {
            $book = $_GET['BookTitle'];
        }else{
            foreach($data as $user){
                if($data['id'] == 'ID'){
                    $name = $data['id']['BookTitle'];
                }
            }
        }*/

        $username = "sa";
        $password = "capcom5^";

        $changeData[] = $id;
        $sql = ("UPDATE SavviorSchool 
                    SET StudentName = '$name', ClassTitle = '$class', BookTitle = '$book' 
                    WHERE ID = '$id'");

        $dbh = new PDO('mysql:host=10.99.100.54;dbname=ryan_intern', $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->exec($sql);

        #Refresh page one time after executing
        if (!isset($_GET['reload'])) {
            echo '<meta http-equiv = Refresh content = "0;url=http://testproject.test/DataStudent.php?reload=1">';
        }    }




    echo "<table align = 'center' width = '70%'><tr>";

    echo "<td width = '15%'><u>ID</u></td>";
    echo "<td width = '15%'><u>Student Name</u></td>";
    echo "<td width = '20%'><u>Student Image</u></td>";
    echo "<td width = '15%'><u>Class Title</u></td>";
    echo "<td width = '15%'><u>Book Title</u></td>";
    echo "<td width = '20%'><u>Book Image</u></td>";
    echo "</tr><tr>";

    $j = 0;

    foreach ($results as $val) {
        $j = $j + 1;
        $key = $val['ID'];
        echo "<td>" . $val['ID'] . "</td>";
        if (!array_key_exists($key, $reportData)) {
            $returnData[$key] = array(
                'StudentName' => $val['StudentName'],
                'ClassTitle' => $val['ClassTitle'],
                'BookTitle' => $val['BookTitle']
            );
        }

        $picName = $returnData[$key]['StudentName'];
        $bookName = $returnData[$key]['BookTitle'];

        echo "<td>" . $returnData[$key]['StudentName'] . "</td>";
        echo "<td>" . "<img src = 'StudentPhotos\\" . $picName . ".jpg' />" . "</td>";
        echo "<td>" . $returnData[$key]['ClassTitle'] . "</td>";
        echo "<td>" . $returnData[$key]['BookTitle'] . "</td>";
        echo "<td>" . "<img src = 'BookPhotos\book" . $bookName . ".jpg' />" . "</td>";
        echo "</tr><tr>";
    }
    echo "</tr></table>";


    /*******************************************************
     * Create Class Lists, Ensure 1 Book Per Class
     *******************************************************/
    $classes = array();
    $books = array();

    foreach ($returnData as $entry) {
        $classes[] = $entry['ClassTitle'];
        $books[] = $entry['BookTitle'];
    }

    ksort($classes);
    ksort($books);

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";

    $classBookTie = array();
    $i = 0;
    foreach ($classes AS $class) {
        $key = $class;
        if (!array_key_exists($key, $classBookTie)) {
            $classBookTie[$key] = array(
                'BookTitle' => $books[$i],
            );
        }
        $i = $i + 1;
    }

    foreach ($returnData as $result) {
        $key = $result['ClassTitle'];
        if (!array_key_exists($key, $classBookTie)) {
            if ($classBookTie['BookTitle'] != $result['BookTitle']) {
                $result['BookTitle'] = $classBookTie['BookTitle'];
            }
        }
    }

    /*******************************************
     * Export to text file
     *******************************************/

    if (isset($_GET['TextExport'])) {
        exportTxt();
    }

    function exportTxt()
    {
        //works if ran on load, not when called by the button

        $username = "sa";
        $password = "capcom5^";

        $q = "
              SELECT
                s.ID,
                s.StudentName,
                s.StudentImage,
                s.ClassTitle,
                s.BookTitle,
                s.BookImage
              FROM
                SavviorSchool s
              ";

        $dbh = new PDO('mysql:host=10.99.100.54;dbname=ryan_intern', $username, $password);
        $returnData = $dbh->query($q, PDO::FETCH_ASSOC);

        $fp = fopen('FullData.csv', "w");

        foreach ($returnData as $entry) {
            fputcsv($fp, $entry);
        }

        fclose($fp);
    }


    /*******************************************
     * Logout
     *******************************************/

    if (isset($_GET['Logout'])) {
        endSession();

        header('Location: http://www.testproject.test/LoginPage');
    }

    function endSession()
    {
        session_destroy();
    }


    /*******************************************
     * Export to excel file
     *******************************************/
    if (isset($_POST['ExcelExport'])) {
        exportExcel();
    }

    function exportExcel()
    {
        $DB_Server = '10.99.100.54';
        $DB_Username = "sa";
        $DB_Password = 'capcom5^';
        $DB_DBName = 'ryan_intern';
        $DB_TBLName = 'UsersBase';
        $xls_filename = "excel_full_data" . date('Y-m-d') . ".xlsx";

        /***** DO NOT EDIT BELOW LINES *****/
        // Create MySQL connection
        $sql = "Select * from $DB_TBLName";
        $Connect = @mysql_connect($DB_Server, $DB_Username, $DB_Password) or die("Failed to connect to MySQL:<br />" . mysql_error() . "<br />" . mysql_errno());
        // Select database
        $Db = @mysql_select_db($DB_DBName, $Connect) or die("Failed to select database:<br />" . mysql_error() . "<br />" . mysql_errno());
        // Execute query
        $result = @mysql_query($sql, $Connect) or die("Failed to execute query:<br />" . mysql_error() . "<br />" . mysql_errno());

        // Header info settings
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=$xls_filename");
        header("Pragma: no-cache");
        header("Expires: 0");

        /***** Start of Formatting for Excel *****/
        // Define separator (defines columns in excel &amp; tabs in word)
        $sep = "\t"; // tabbed character

        // Start of printing column names as names of MySQL fields
        for ($i = 0; $i < mysql_num_fields($result); $i++) {
            echo mysql_field_name($result, $i) . "\t";
        }
        print("\n");
        // End of printing column names

        // Start while loop to get data
        while ($row = mysql_fetch_row($result)) {
            $schema_insert = "";
            for ($j = 0; $j < mysql_num_fields($result); $j++) {
                if (!isset($row[$j])) {
                    $schema_insert .= "NULL" . $sep;
                } elseif ($row[$j] != "") {
                    $schema_insert .= "$row[$j]" . $sep;
                } else {
                    $schema_insert .= "" . $sep;
                }
            }
            $schema_insert = str_replace($sep . "$", "", $schema_insert);
            $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
            $schema_insert .= "\t";
            print(trim($schema_insert));
            print "\n";
        }
    }


    /**********************************************************************************************
     * Assignment 6
     *
     *
     * Assignment 7
     *
     * https://www.formget.com/login-form-in-php/     sessions example
     * https://www.johnmorrisonline.com/build-php-login-form-using-sessions/
     *
     * Assignment 8
     *
     * http://php.net/manual/en/function.fputcsv.php -- export student and class data to text files
     * https://stackoverflow.com/questions/15501463/creating-csv-file-with-php
     *
     * Assignment 9
     *
     * https://stackoverflow.com/questions/15699301/export-mysql-data-to-excel-in-php
     *
     * Assignment 10
     *
     *
     *
     * Assignment 11
     *
     * https://getbootstrap.com/docs/4.0/components/carousel/
     * https://codepen.io/grbav/pen/qNZjPy
     * https://owlcarousel2.github.io/OwlCarousel2/demos/responsive.html
     *
     * Assignment 12
     *
     * https://www.w3schools.com/html/html_responsive.asp
     **********************************************************************************************/

}else{
    header('Location: http://testproject.test/LoginPage.php');
}
?>

</body>
</html>