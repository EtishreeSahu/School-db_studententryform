# Student Enrollment Form

## Project Overview
This is a web-based **Student Enrollment Form** that allows users to enter and store student details in a database. The form captures essential information such as Roll Number, Full Name, Class, Date of Birth, Address, and Enrollment Date. It utilizes **AJAX** to communicate with a backend database using **JSON Power Database (JPDB)**.

## Features
- Student registration with essential details
- Fetching student records using Roll Number
- Updating student information
- Resetting the form
- Validation of required fields before submission

## Technologies Used
- **Frontend**: HTML, CSS, Bootstrap, JavaScript, jQuery
- **Backend API**: JSON Power Database (JPDB)
- **Tools**: NetBeans, Talend API Tester

## Setup Instructions
1. Clone the repository:
   ```sh
   git clone https://github.com/your-username/student-enrollment-form.git
   ```
2. Navigate to the project folder:
   ```sh
   cd student-enrollment-form
   ```
3. Open `index.html` in a browser.
4. Ensure you have access to the JPDB API.
5. Update `connToken` in `script.js` with your JPDB API token.

## API Endpoints
The project interacts with **JPDB** using these endpoints:
- **PUT Request**: Stores new student data.
- **GET Request**: Retrieves student details by Roll Number.
- **UPDATE Request**: Modifies existing records.

## Possible Issues & Fixes
1. **Data not saving?**
   - Ensure your `connToken` is valid.
   - Verify API endpoints and database configurations.

2. **Enrollment Date not being stored?**
   - Make sure the selector is `$("#stuEnrollDate").val()` instead of `$("stuEnrollDate").val()` in `validateAndGetFormData()`.

## Contributing
If you want to contribute:
- Fork the repository
- Create a new branch (`git checkout -b feature-branch`)
- Commit your changes (`git commit -m "Added a new feature"`)
- Push to the branch (`git push origin feature-branch`)
- Open a Pull Request

## License
This project is **open-source** and available under the MIT License.

---

Feel free to modify the repository URL and add any additional details as required!

