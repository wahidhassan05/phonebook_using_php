<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phonebook</title>
</head>
<body>

<form action="create.php" method="POST" autocomplete="off">
    
    <label for="name">Name:</label>
    <input type="text" name="name" require><br><br>
    <label for="number">Phone:</label>
    <input type="tel" name="phone" require><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" require><br><br>
    <label for="email">Gender:</label>
    <input type="radio" name="gender" require value="male">
    <label for="male">Male</label>
    <input type="radio" name="gender" require value="female">
    <label for="female">Female</label>
    <input type="radio" name="gender" require value="other">
    <label for="other">Other</label><br><br>
    <label for="birthday">DOB:</label>
    <input type="date"  name="dob" require><br><br>
    <label for="country">Choose a country:</label>
        <select name="country" require>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Pakistan">Pakistan</option>
            <option value="India">India</option>
            <option value="Srilanka">Srilanka</option>
        </select><br><br>
    <button type="submit" name="submit">Add contact</button>   
</form>
<br><br>
<form action="view.php">
    <button type="submit">View Added Contacts</button>
</form>
    
</body>
</html>