<?php
include "db.php";
include "header.php";
$sql = $conn->prepare("SELECT * FROM result");

$sql->execute();

$result = $sql->get_result();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Assesment - Student Grading System</title>
</head>

<body>


    <h2>Student Records</h2>

    <a href="add.php">+Add Result</a>
    <br><br>

    <input type="text" placeholder="Search by name or id">
    <button>Search</button>
    <a href="">Show all</a>

    <table border="1">
        <tr>
            <th>No.</th>
            <th>Student Name</th>
            <th>Matric No.</th>
            <th>Subject Name</th>
            <th>Subject Code</th>
            <th>Test 1 (20%)</th>
            <th>Test 2 (30%)</th>
            <th>Final (50%)</th>
            <th>Total</th>
            <th>Grade</th>
            <th>Actions</th>
        </tr>

        <?php
        $no = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            // concatenate = gabungkan html dgn php
            echo "<td>" . $row['student_name'] . "</td>";
            echo "<td>" . $row['matric_no'] . "</td>";
            echo "<td>" . $row['subject_name'] . "</td>";
            echo "<td>" . $row['subject_code'] . "</td>";
            echo "<td>" . $row['test_1'] . "</td>";
            echo "<td>" . $row['test_2'] . "</td>";
            echo "<td>" . $row['total'] . "</td>";
            echo "<td>" . $row['final'] . "</td>";
            echo "<td>" . $row['grade'] . "</td>";
            echo "<td>";
            echo "<button><a href='edit.php?id= " . $row['id'] . " '>Edit</a></button>";
            echo "<form method='post' action='delete.php' onsubmit='return confirm(\"Delete this?\")'>";
            echo "<input type='hidden' name='delete' value='" . $row['id'] . "' >";
            echo "<input type='submit' value='Delete'>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>

<?php
include "footer.php";
?>