<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: screens/login.php");
}

echo "Welcome, " . $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\style.css">
</head>
<body>
    <a href="../validate/logout-validate.php">Logout</a>

    <div class="container_student">
        <div class="form_student">
            <label for="stud_num">Student Number</label>
            <input type="text" name="stud_num">

            <label for="name">Name</label>
            <input type="text" name="name">

            <label for="college">College</label>
            <select name="college">
                <option hidden>Select College</option>
                <option value="College of Science">College of Science</option>
                <option value="College of Education">College of Education</option>
                <option value="College of Engineering">College of Engineering</option>
                <option value="College of Industrial Teachnology">College of Industrial Teachnology</option>
            </select>

            <label for="course">Course</label>
            <select name="course">
                <option hidden>Select Course</option>
                <optgroup label ="College of Science">
                    <option value="Bachelor of Science in Biology">Bachelor of Science in Biology</option>
                    <option value="Bachelor in Human Services">Bachelor in Human Services</option>
                    <option value="Bachelor of Science in Psychology">Bachelor of Science in Psychology</option>
                    <option value="Bachelor of Science in Mathematics">Bachelor of Science in Mathematics</option>
                    <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                </optgroup>
                <optgroup label="College of Education">
                    <option value="Bachelor of Science in Elementary Education">Bachelor of Science in Elementary Education</option>
                    <option value="Bachelor of Science in Secondary Education">Bachelor of Science in Secondary Education</option>
                    <option value="Bachelor of Science in Industrial Technology">Bachelor of Science in Industrial Technology</option>
                    <option value="Bachelor of Science in Teachnology Education">Bachelor of Science in Teachnology Education</option>
                </optgroup>
                <optgroup label="College of Engineering">
                    <option value="Bachelor of Science in Computer Engineering">Bachelor of Science in Computer Engineering</option>
                    <option value="Bachelor of Science in Electrical Engineering">Bachelor of Science in Electrical Engineering</option>
                    <option value="Bachelor of Science in Civil Engineering">Bachelor of Science in Civil Engineering</option>
                    <option value="Bachelor of Science in Mechanical Engineering">Bachelor of Science in Mechanical Engineering</option>
                </optgroup>
                <optgroup label="College of Industrial Technology">
                    <option value="Bachelor of Technology major in Electrical">Bachelor of Technology major in Electrical</option>
                    <option value="Bachelor of Technology major in Electronics">Bachelor of Technology major in Electronics</option>
                </optgroup>
            </select>

            <hr>

            <label for="total_units">Total Units Enrolled</label>
            <input type="text" name="total_units">
            
            <label for="miscellaneous_fees">Miscellaneous Fees</label>

            <div class="checkbox">
                <input type="checkbox" name="fee1" value="Medical/Dental">
                <label for="fee1">Medical/Dental</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" name="fee2" value="ID/Library">
                <label for="fee2">ID/Library</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" name="fee3" value="Student Development">
                <label for="fee3">Student Development</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" name="fee4" value="Testing Fee">
                <label for="fee4">Testing Fee</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" name="fee5" value="Speech Laboratory">
                <label for="fee5">Speech Laboratory</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" name="fee6" value="Computer Laboratory">
                <label for="fee6">Computer Laboratory</label>
            </div>
            <div class="radio">
                <input type="radio" name="lab" disabled>
                <label for="lab1">IT Student</label>
                
            </div>
            <div class="radio">
                <input type="radio" name="lab" disabled>
                <label for="lab2">Non-IT Student</label>
            </div>

            <label for="mode_payment">Mode of Payment</label>
            <select name="mode_payment">
                <option hidden>Select Payment Type</option>
                <option value="Cash">Cash</option>
                <option value="Installment/Partial">Installment/Partial</option>
            </select>
            <hr>

            <div class="compute">
                <label for="Tuition Fee">Tuition Fee</label>
                <input type="text" name="Tuition Fee" disabled>

                <label for="Miscellaneous Fees">Miscellaneous Fees</label>
                <input type="text" name="Miscellaneous Fees" disabled>

                <label for="Total Fees">Total Fees</label>
                <input type="text" name="Total Fees" disabled>
            </div>
            <hr>
            <div class="payment">
                <label for="Total Amound Due">Total Amound Due</label>
                <input type="text" name="Total Amound Due" disabled>

                <label for="Enter Payment">Enter Payment</label>
                <input type="text" name="Enter Payment">

                <label for="Change">Change</label>
                <input type="text" name="Change" disabled>
            </div>
            <hr>
            <input type="submit" value="Add Payment" name="payment">
        </div>
    </div>
</body>
</html>