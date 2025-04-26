<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Quiz Form</title>
</head>

<body>
    <h2>Quiz Start Karo</h2>


    <form action="quiz_result.php" method="post">
        <h3>1. PHP ka full form kya hai?</h3>

        <input type="radio" name="q1" value="a">Personal Home Page <br>
        <input type="radio" name="q1" value="b">Private Home Page <br>
        <input type="radio" name="q1" value="c">Programming Home Page <br>

        <h3>2. PHP kis tarah ki language hai?</h3>
        <input type="radio" name="q2" value="a"> Client-Side<br>
        <input type="radio" name="q2" value="b"> Server-Side<br>
        <input type="radio" name="q2" value="c"> Database<br>

        <h3>3. PHP file ka extension kya hota hai?</h3>
        <input type="radio" name="q3" value="a"> .html<br>
        <input type="radio" name="q3" value="b"> .php<br>
        <input type="radio" name="q3" value="c"> .css<br>

        <h3>4. PHP mein variables kis sign se start hote hain?</h3>
        <input type="radio" name="q4" value="a"> @<br>
        <input type="radio" name="q4" value="b"> $<br>
        <input type="radio" name="q4" value="c"> #<br>

        <h3>5. PHP mein data ka output kis command se nikalte hain?</h3>
        <input type="radio" name="q5" value="a"> echo<br>
        <input type="radio" name="q5" value="b"> write<br>
        <input type="radio" name="q5" value="c"> printline<br>

        <br><br>
        <input type="submit" value="Submit Quiz">

    </form>
</body>

</html>