<!DOCTYPE html>
<html>
<body>
    <?php
    $name = $email = $phone = $township = $grade = $subject = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $phone = test_input($_POST["phone"]);
        $township = test_input($_POST["township"]);
        $grade = test_input($_POST["grade"]);
        $subject = test_input($_POST["subjcet"]);
         }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
          ?>
    <form method="post" action = "<?php 
    echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name:<input type ="text" name = "name"><br><br>
        Email:<input type ="text" name = "email"><br><br>
        Phone:<input type ="text" name = "phone"><br><br>
        <label for="township">Township:</label>
        <select>
        <option value = "Monywa">Monywa</option>
        <option value = "Monywa">Chaung U</option>
        <option value = "Monywa">Ayadaw</option>
        <option value = "Monywa">Ye-U</option>
        <option value = "Monywa">Budalin</option><br>
        </select><br><br>
        Grade:
        <input type ="radio" name = "grade" value = "First Year">
        <label for ="grade" id = "g1">First Year</label>
        <input type ="radio" name = "grade" value = "Second Year">
        <label for ="grade" id = "g2">Second Year</label>
        <input type ="radio" name = "grade" value = "Third Year">
        <label for ="grade" id = "g1">Third Year</label>
        <input type ="radio" name = "grade" value = "Fourth Year">
        <label for ="grade" id = "g1">Fourth Year</label>
        <input type ="radio" name = "grade" value = "Fifth Year">
        <label for ="grade" id = "g1">Fifth Year</label><br><br>
        Subject:<br>
        <input type ="checkbox" id = "sbject1" value = "CST">
        <label for = "cst" value = "CST">CST</label><br>
        <input type ="checkbox" id = "sbject2" value = "CS">
        <label for = "cst" value = "CS">CS</label><br>
        <input type ="checkbox" id = "sbject3" value = "CT">
        <label for = "cst" value = "CT">CT</label><br><br>
        <input type ="submit" value = "Submit">
    </form>
    <?php
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $phone;
    echo "<br>";
    echo $township;
    echo "<br>";
    echo $grade;
    echo "<br>";
    echo $subject;
    ?>

</body>
</html>