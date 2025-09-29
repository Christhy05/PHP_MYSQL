<?php 
    include 'connect.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $App_name = $_POST['appname'];
        $App_email = $_POST['appemail'];
        $App_phone = $_POST['appphone'];
        $App_DOB = $_POST['appdob'];
        $App_address = $_POST['appaddress'];
        $App_coll = $_POST['appcollage'];
        $App_degree = $_POST['appdegree'];
        $App_feild = $_POST['appfield'];
        $App_yr = $_POST['appgraduationyear'];
        $App_Intrest = $_POST['appIntrest'];
        $App_available = $_POST['available'];
        //$App_resume = $_POST['resume'];
        //$App_cover = $_POST['coverletter'];

        //where store the uploaded file
        $uploadDir = "CV_files/";

        /*
            is_dir($uploadDir) → checks if the folder CV_files already exists.
            If it does not exist, then mkdir() creates it.
            0777 → permission code (read, write, execute for everyone).
            true → means create parent directories too, if needed.
            👉 This ensures your folder is ready before saving any file.
         */
        if(!is_dir($uploadDir)){
            mkdir($uploadDir,0777,true);
        }
        /*
                $_FILES["resume"] → comes from your HTML <input name="resume">.
                $_FILES["resume"]["name"] → is the original name of the file uploaded by the user (e.g., "MyResume.pdf").
                basename() → removes any path, leaving only the file name itself.
                Example: if user uploaded C:\Users\Me\Desktop\CV.pdf → result will be "CV.pdf".
         */
        //$filename = basename($_FILES["resume"]["name"]);
        $resumeFile = basename($_FILES["resume"]["name"]);
        $coverFile  = basename($_FILES["coverletter"]["name"]);

        $resumeTarget = $uploadDir . $resumeFile;
        $coverTarget  = $uploadDir . $coverFile;

        /*
            This builds the full path where the file will be saved.
            Example: if $uploadDir = "CV_files/" and $fileName = "CV.pdf" →
            $targetFile = "CV_files/CV.pdf".
        */
        //$tragetfile = $uploadDir.$filename;
        $resumeType = strtolower(pathinfo($resumeTarget, PATHINFO_EXTENSION));
        $coverType_ = strtolower(pathinfo($coverTarget, PATHINFO_EXTENSION));

        //validate file type
        
        $sql = "insert into candidate values 
                ('$App_name','$App_email','$App_phone','$App_DOB','$App_address','$App_coll','$App_degree','$App_feild','$App_yr',
                '$App_Intrest','$App_available')";
        if($conn->query($sql)==true){
           // header("location:display.php");
            //exit();
            echo "Application sibmitted Successfully !<br>
                  <h2>----My Application----<br>
                  <h3> Personal Information</h3>
                  Name :".$App_name."<br>
                  Email:".$App_email."<br>
                  Phone:".$App_phone."<br>
                  Date Of Birth:".$App_DOB."<br>
                  Address:".$App_address."<br><br>
                  <h3>Educationl Background</h3>
                  Collage/University:".$App_coll."<br>
                  Degree Puruing:".$App_degree."<br>
                  Major/field of Study:".$App_feild."<br>
                  Current Year:".$App_yr."<br><br>
                  <h3>Internship Information</h3>
                  Department of Interest:".$App_Intrest."<br>
                  Availability:".$App_available;
        }
        else{
            echo "Error : couldn't store the Application Data";
        }

    }
?>