🔹 Features
1. User Registration & Login
Secure user registration with username, email, and password.
Login system validates credentials against the database.

2. Internship Application Form
Collects candidate details for internship applications.
Includes input validation using PHP filters and functions.

3. File Upload Handling
Allows candidates to upload their resume and cover letter.
Only PDF file format is accepted.
Uploaded files are stored securely in an uploads/ directory.

4. Database Design
Database: intern_applications
Tables:
useraccount → Stores user credentials (username, email, password).
candidates → Stores internship application details.

5. User Feedback
Displays “Application submitted successfully” after submission.
Shows submitted form data back to the user.

🔹 Tech Stack
Frontend: HTML
Backend: PHP
Database: MySQL

/Internship
│── createDB.php           # Creates the database
│── createTable.php        # Creates required tables
│── RegistrationForm.php   # User registration form
│── login.php              # Login system
│── insertdata.php         # Handles internship form submission
│── applicationForm.php    # Internship application form
│── uploads/               # Stores uploaded resumes (PDF only)

File Handling: PHP file upload with PDF validation

🔹 Project Structure
