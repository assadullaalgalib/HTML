<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
<fieldset>
    <legend>Sign Up</legend>
    <form action="">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" placeholder="Enter your username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" placeholder="Enter your password"></td>
            </tr>
            <tr>
                <td>Select One:</td>
                <td>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                </td>
            </tr>
            <tr>
                <td>Interests:</td>
                <td>
                    <input type="checkbox" name="interests" value="books"> Books
                    <input type="checkbox" name="interests" value="sports"> Sports
                    <input type="checkbox" name="interests" value="playing_games"> Playing Games
                </td>
            </tr>
            <tr>
                <td>Country:</td>
                <td>
                    <select name="country">
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="India">India</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                    </select>
                </td>  
            </tr>
            <tr>
                <td>Choose a browser:</td>
                <td>
                    <input list="browsers" name="browser">
                    <datalist id="browsers">
                        <option value="Edge">
                        <option value="Firefox">
                        <option value="Chrome">
                        <option value="Opera">
                        <option value="Safari">
                    </datalist>
                </td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>
                    <textarea name="address" cols="30" rows="4" placeholder="Enter your address"></textarea>
                </td>
            </tr>
            <tr>
                <td>Upload File:</td>
                <td><input type="file" name="file"></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>Notification:</td>
                <td>
                    <button type="button" onclick="alert('Hello World!')">Click Me!</button>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" placeholder="Enter your email"></td>
            </tr>
            <tr>
                <td>Actions:</td>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</fieldset>
</body>
</html>
