<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
</head>
<body>
    <form method="post" action="applicationDataInsertion.php" enctype="multipart/form-data">
        <h1>Application Form</h1>
        <h2>Personal Information</h2>
        <label for="name">Name :</label><br>
        <input type="text" id="name" name="appname" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="appemail" required><br><br>
        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="appphone" required><br><br>
        <label for="dob" id="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="appdob" required><br><br>
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="appaddress" required><br><br><br>

        <h2>Education Background</h2>
        <label for="collage">Collage/University:</label><br>
        <input type="text" id="collage" name="appcollage" required><br><br>
        <label for="degree">Degree Pursuing</label><br>
        <input type="text" id="degree" name="appdegree" required><br><br>
        <label for="field">Major/field of Study:</label><br>
        <select id="field" name="appfield">
            <option value="" disabled selected>--select--</option> <!--default option-->
            <option value="DS">Master of Data science</option>
            <option value="ict">ICT</option>
            <option value="bs">Science</option>
        </select><br><br>
        <label for="graduationyear">Current Year:</label><br>
        <input type="number" id="graduationyear" name="appgraduationyear" required><br><br><br>

        <h2>Internship Information</h2>
        <label for="intrest">Department of Interest:</label><br>
        <select id="intrest" name="appIntrest">
            <option value=""disabled seleceted>--select--</option>
            <option value="dsc">Data Science</option>
            <option value="ICT">ICT</option>
            <option value="sci">Science</option>
        </select><br><br>
        <label for="availabel">Availability:</label><br>
        <select id="available" name="available">
            <option value=""disabled selected>--select--</option> <!--default option-->
            <option value="immidiate">Immediate</option>       
            <option value="delay">Delay</option>
        </select><br><br>
        <label for="pdf">Resume (PDF):</label><br>
        <input type="file" name='resume' required><br><br>
        <label for="pdff">Cover Letter(PDF):</label><br>
        <input type="file" name="coverletter"required><br><br>
        <input type="submit" value="Submit Application">

    </form>
</body>
</html>