<!DOCTYPE html>
<html>

<head>
    <title>Pet Clinic Daffa</title>
</head>

<body>
    <h1>Daffa Pet Clinic</h1>
    <hr>
    <h3>Form Login</h3>
    <form method="post" action="login_0014.php">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username_0014" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password_0014" id="pass" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;<input type="checkbox" onclick="show()">Show password</td>
            </tr>
            <td>&nbsp;</td>
            <td>&nbsp;
                <input type="submit" name="login" value="LOGIN">
                <input type="reset" name="reset" value="RESET">
            </td>
            </tr>
        </table>
    </form>
    <script>
    function show() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
    <p><a href="index.php">CANCEL</a></p>
</body>

</html>