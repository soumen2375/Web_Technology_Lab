<!-- Build a Form -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form</title>
    <link rel="Stylesheet" href="style.css" >
</head>


<body>
<!--Heding  -->
    <div class="head">
        <img src="logo.png" alt="BRAINWARE UNIVERSITY">
        <div class="address">
            398, Ramkrishnapur Rd <br>
            Near Jagadighata Market<br>
            Barasat, Kolkata-700125
        </div> 
    </div>

    <hr>

    <div id="heading_1">
        <h3>STUDENT REGISTRATION FORM</h3>
    </div>
<!-- Heading End -->

<!-- Form -->
  <div class="form_body">
    <div class="form">
        <form action="data.php" method="POST">
            <div class="line1">
                <table>
                    <tr>
                        <td>First Name</td>
                        <td>Middle Name</td>
                        <td>Last name</td>
                    </tr> 
                    <tr>
                        <div class="name">
                        <th><input name="first_name" type="text" class="sub-level-name"></td>
                        <th><input name="middle_name" type="text" class="sub-level-name"></td>
                        <th><input name="last_name" type="text" class="sub-level-name"></td>
                    
                        </div>
                       </tr>
                </table>
            </div>

            <br>
            
            <div class="line2">
                <table>
                    <tr>
                        <td>Student Code</td>
                        <td>Email</td>
                        <td>
                            <label>
                                Phone Number
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td><input name="student_code" type="text" placeholder="ex:BWU/BTD/22/250"></td>
                        <td>
                            <input name="email" type="email" placeholder="ex:myname@example.com">
                        </td>
                        <td>
                            <input name="ph_no" type="tel" placeholder="+91-0000000000">
                        </td>
                    </tr>
                </table>
            </div>

            <br>

            <div class="line3">
                <table>
                    <tr>
                        <td>Degree Program</td>
                        <td>Year Level</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="degree" class="form-dropdown">
                                <option>Please Select</option>
                                <option value="B.Tech CSE">B.Tech CSE</option>
                                <option value="B.Tech CSE-AI">B.Tech CSE-AI</option>
                                <option value="B.Tech CSE-DS">B.Tech CSE-DS</option>
                                <option value="B.Tech ECE">B.Tech ECE</option>
                                <option value="B.Tech ME">B.Tech ME</option>
                            </select>
                        </td>
                        <td>
                            <select name="year" class="form-dropdown">
                                <option>Please Select</option>
                                <option value="1st Year">1st Year</option>
                                <option value="2nd Year">2nd Year</option>
                                <option value="3rd Year">3rd Year</option>
                                <option value="4th Year">4th Year</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <br>

            <div class="submit_1">
                <input class="submit" type="submit">
            </div>
        </form>
    </div>
</div>
<!--Form End  -->
</body>
</html>