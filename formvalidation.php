<?php
    $nameErr=$emailErr=$websiteErr=$genderErr='';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form validation</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
                
            body{
                font-family: cursive;
                font-size: 18px;
                background: #ddd;
                color: #888;
            }
            h2{
                text-align: center;
                margin: 10px 0;
            }
            
            form{
                width: 350px;
                height: 400px;
                border:2px solid #000;
                margin: 0 auto;
                padding: 10px 12px;
            }
            input[type='text'],input[type='email'],textarea{
                display: block;
                width: 310px;
/*                border: none;*/
                outline: none;
            }
            textarea{
                resize: none;
            }
            
            input[type="submit"]{
                display: block;
                width: 110px;
                margin: 0 auto;
                padding: 8px 20px;
                background: #00adff;
                border: none;
                outline: none;
                cursor: pointer;
            }
        </style>
    </head>
    
    <body>
        <h2>Form Validation</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>Name:</label>
            <input type="text" name="name" />
            <span class="error">*<?php echo  $nameErr;?></span>
            <label>Email</label>
            <input type="email" name="email" />
            <span class="error">*<?php echo  $emailErr;?></span>
            <label>Website</label>
            <input type="text" name="website" />
            <span class="error">*<?php echo  $websiteErr;?></span>
            <label>Comment:</label> 
            <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br>
            <lable>Gender</lable>
            <input type="radio" name="gender" value="Male"><label>Male</label>
            <input type="radio" name="gender" value="Female"><label>Female</label>
            <input type="radio" name="gender" value="Other"><label>Other</label>
            
            <br><br>
            <input type="submit" value="submit" name="submit">
        </form>
    
    </body>
</html>
