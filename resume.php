<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Bulider</title>
    </head>
<body>
    <h1>Resume Builder</h1>

    <form action="">

        <fieldset>
            <legend>Personal Information</legend>

          
    <table>
         <tr>
            <td> Full name: </td> <td> <input type="text" name="fullname" placeholder = "john doe"></td></tr>
    
         <tr>
            <td> Email: </td> <td> <input type="email" name="email"  placeholder ="email@expample.com"></td></tr>
            <tr>
            <td> Phone : </td> <td> <input type="phone" name="phone"  placeholder="123-456-789"></td></tr>
            <tr>
                    <td> Date of birth :</td>
                    <td>
                        <input type="date" name="date">
                    </td>
                </tr>
                <tr><td> Gender : </td><td>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="others">others
                </td></tr>
                <tr>
    <td>Address :</td>
    <td>
        <textarea name="address" cols="20" rows="5" placeholder="1234 main std, city, country"></textarea>
    </td>
</tr>

        
</table>
</fieldset>
</form>
    
<fieldset>
            <legend>Education</legend>
            <table>
                <tr>
                    <td>Highest Degree:</td>
                    <td>
                        <select name="highest_degree">
                            <option value="">Select Degree</option>
                            <option value="Diploma">Diploma</option>
                            <option value="bachelor">Bachelor's</option>
                            <option value="master">Master's</option>
                            <option value="phd">PhD</option>
                        </select>
                    </td>
                </tr>
                <tr>
                <td>Institution:</td>
                    <td><input type="text" name="institution"  placeholder="university name"></td>
                </tr>
                <tr>
                    <td>Year of Graduation:</td>
                    <td><input type="text" name="graduation_year" size = "5"></td>
                </tr>
            </table>
        </fieldset>
    
         <fieldset>
            <legend>Work Experience</legend>
            <table>
                <tr>
                    <td>Company Name:</td>
                    <td><input type="text" name="company_name"  placeholder="company name "></td>
                </tr>
                <tr>
                    <td>Job Title:</td>
                    <td><input type="text" name="job_title"  placeholder ="job title "></td>
                </tr>
                <tr>
                    <td>Duration:</td>
                    <td>
                        <input type="Month" name="start_date" placeholder="Start Date"> to 
                        <input type="Month" name="end_date" placeholder="End Date">
                    </td>
                </tr>
            </table>
        </fieldset>

        <fieldset>
            <legend>Skills</legend>
            <table>
                <tr>
                    <td>Skills:</td>
                    <td>
                        <input type="checkbox" name="skills" value="html">HTML
                        <input type="checkbox" name="skills" value="css">CSS
                        <input type="checkbox" name="skills" value="javascript">JavaScript
                        <input type="checkbox" name="skills" value="python">Python
                        <input type="checkbox" name="skills" value="java">Java
                    </td>
                </tr>
            </table>
        </fieldset>

        <fieldset>
        <table>
            <tr>
                <td><input type="submit" value="Submit Resume"></td>
                <td><input type="reset" value="Clear Form"></td>
            </tr>
        </table>
</fieldset>
    </form>
</body>
</html>
