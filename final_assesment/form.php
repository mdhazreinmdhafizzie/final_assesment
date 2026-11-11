
<form method="post">
    <label for="">Student Name</label>
    <input type="text" name="student_name" value="<?php echo $student_name ?>"><br><br>

    <label for="">Matric Number</label>
    <input type="text" name="matric_no" value="<?php echo $matric_no ?>"><br><br>

    <label for="">Subject Name</label>
    <input type="text" name="subject_name" value="<?php echo $subject_name ?>"><br><br>

    <label for="">Subject Code</label>
    <input type="text" name="subject_code" value="<?php echo $subject_code ?>"><br><br>

    <label for="">Test 1(20%)</label>
    <input type="text" name="test_1" value="<?php echo $test_1 ?>"><br><br>

    <label for="">Test 2(30%)</label>
    <input type="text" name="test_2" value="<?php echo $test_2 ?>"><br><br>

    <label for="">Final</label>
    <input type="text" name="final" value="<?php echo $final ?>"><br><br>

    <input type="submit" name="submit" value="Submit"><br><br>

</form>

<style>
    label {
        display: inline-block;
        width: 100px;
    }
</style>