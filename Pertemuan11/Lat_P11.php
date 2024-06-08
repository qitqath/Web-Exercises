<!-- Aqilah Qathrunnada Mumtaz
2210511155 -->

<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $comment = $_POST['comment'];
    $gender = $_POST['gender'];

    $nameError="";
    $emailError="";
    $genderError="";
    $websiteError="";
    $error="";

    if(isset($_POST['submit'])){
        if(empty($name)){
            $nameError = "<p style='color:red'>*</p>";
        } else {
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameError = "<p style='color:red'>Nama harus berupa huruf!!</p>";
            }
        }
        if(empty($email)){
            $emailError = "<p style='color:red'>*</p>";
        } else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailError = "<p style='color:red'>Email tidak valid!!</p>";
            }
        }
        if (!empty($website) && !filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteError = "<p style='color:red'>Website tidak valid!!</p>";
        }
        if(empty($gender)){
            $genderError = "<p style='color:red'>*</p>";
        }
        if(empty($name) || empty($email) || empty($gender)){
            $error = "<p style='color:red'>* required field</p>";
        }
    }
?>

<html>
    <h1>PHP Form Validation Example</h1>

    <form action="Latihan.php" method="post">
        <table>
            <tr>
                <td colspan="3"><?php
                    echo $error;
                ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="name"></td>
                <td><?php
                    echo $nameError;
                ?></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td>:</td>
                <td><input type="text" name="email"></td>
                <td><?php
                    echo $emailError;
                ?></td>
            </tr>
            <tr>
                <td>Website</td>
                <td>:</td>
                <td><input type="text" name="website"></td>
                <td><?php echo $websiteError; ?></td>
            </tr>
            <tr>
                <td>Comment</td>
                <td>:</td>
                <td><textarea name="comment"></textarea></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td><input type="radio" id="fem" name="gender" value="Female">
                    <label for="fem">Female</label>
                    <input type="radio" id="male" name="gender" value="Male">
                    <label for="male">Male</label>
                </td>
                <td><?php
                    echo $genderError;
                ?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</html>

<?php
    if(isset($_POST['submit'])){
        if(!empty($name) && !empty($email) && !empty($gender)){
            echo"
                <h1>Form Output</h1>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>$name</td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>:</td>
                        <td>$email</td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td>:</td>
                        <td>$website</td>
                    </tr>
                    <tr>
                        <td>Comment</td>
                        <td>:</td>
                        <td>$comment</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td>$gender</td>
                    </tr>
                </table>
            ";
        }
    }
?>