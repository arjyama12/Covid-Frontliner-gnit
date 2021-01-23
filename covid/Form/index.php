<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial scale=1">
        <title>USER PROFILE</title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>   
        <body>
            <h1>USER PROFILE</h1>
            <div class="profile">
                <form action="regis.php" method="post" id="profile">
                    <h2>ABOUT USER</h2>
                    <label>FIRST NAME:<span>*</span></label>
                    <input type="text" name="fname" placeholder="Enter Your First Name" id="fname">
                    <br><br>
                    <label>LAST NAME:<span>*</span></label>
                    <input type="text" name="lname" placeholder="Enter Your Last Name" id="lname">
                    <br><br>
                    <label>GENDER:<span>*</span></label></label>
                    <div class="gender">
                    MALE<input type="radio" name="status" value="male"><br>
                    FEMALE<input type="radio" name="status" value="female"><br>
                    OTHERS<input type="radio" name="status" value="others">
                </div>
                    <br><br>
                    <label>AGE:<span>*</span></label></label>
                    <input type="number" name="age" placeholder="Enter Your Age" id="age">
                    <br><br>
                    <label>ADDRESS:<span>*</span></label></label>
                    <input type="text" name="ad" placeholder="Enter Your Address" id="address">
                    <br><br>
                    <label>CONTACT NUMBER:<span>*</span></label></label>
                    <input type="number" name="mob" placeholder="Enter Your Contact No." id="num">
                    </select>
                    <br><br>
                    <label>EMAIL ID:<span>*</span></label></label>
                    <input type="email" name="email" placeholder="Enter Your Email-id" id="name">
                    <br><br>
                    <input type="SUBMIT" value="SUBMIT" id="SUBMIT" name="SUBMIT">
                </form>
            </div>
        </body>
</html>