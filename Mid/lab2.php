<!DOCTYPE html>
<head>
    <title>
        Lab 2
    </title>
    <style>
        #reg {
            background-color: lightgray;
            align-items: center;
            width: 300px;
            padding: 10px;
            margin: 0 auto;
        }

        #course {
            background-color: lightgray;
            align-items: center;
            width: 300px;
            padding: 10px;
            margin: 0 auto;
        }
        table {
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="reg">
        <h2>Student Registration</h2>
        <table>
            <tr>
                <td>Full Name</td>
            </tr>
            <tr>
                <td><input type="text" id="Fname"></td>
            </tr>
            <tr>
                <td>Email</td>
            </tr>
            <tr>
                <td><input type="email" id="Email"></td>
            </tr>
            <tr>
                <td>Password</td>
            </tr>
            <tr>
                <td><input type="password" id="Password"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
            </tr>
            <tr>
                <td><input type="password" id="Cpassword"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Register" id="RegisterButton"></td>
            </tr>
        </table>
    </div>
    <div id="course" style="margin-top: 20px;">
        <h2>Course Registration</h2>
        <table>
            <tr>
                <td>Course Name: </td>
            </tr>
            <tr>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Add Course">
                </td>
            </tr>
        </table>
    </div>

    <script>
        function validation(){
            var name = document.getElementById("Fname").value.trim();
        }
    </script>
</body>
</html>