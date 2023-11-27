<!DOCTYPE html>
<html>

<head>
    <title>admin doctor login</title>
    <link rel="stylesheet" href="styles/admin doctor login.css">
</head>

<body>
    <div class="container">
        <table border="1"  align="center" width="50%">
            <tr>
                <th>
        <form action="php/admin.php" method="post"><br>
           <div class="form-group">
                <label>Doctor ID</label><br>
                <input type="number" class="form-control" placeholder="enter your ID" name="DID" required>
            </div>

            <div class="form-group">
                <label>Name</label><br>
                <input type="text" class="form-control" placeholder="enter your name" name="Doctor_Name" required>
            </div>

            <div class="form-group">
                <label>specialization field</label><br>
                <input type="text" class="form-control" placeholder="specialization" name="Specialization" required>
            </div>

            <div class="form-group">
                <label>email</label><br>
                <input type="email" class="form-control" placeholder="enter your email" name="Email" required>
            </div>
            
            <div class="form-group">
                <label>password</label><br>
                <input type="password" class="form-control" placeholder="enter your password" name="Password" required>
            </div>    
            <br><button name="submit" type="submit" class="btn btn-primary">submit</button>
        </form>
    </th>  
    </tr>
    </table>
    </div>

</body>

</html>