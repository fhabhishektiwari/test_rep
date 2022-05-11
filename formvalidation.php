<?php
    $nameErr=$emailErr=$websiteErr=$genderErr=$commentErr='';
    $name=$email=$website=$gender=$comment='';

    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        if(empty($_POST['name'])){
            $nameErr="Name is required";
        }else{
            $name=test_input($_POST['name']);
        }
        
        if(empty($_POST['email'])){
            $emailErr="Email is required";
        }else{
            $email=test_input($_POST['email']);
        }
            
        if(empty($_POST['website'])){
            $websiteErr="";
        }else{
            $website=test_input($_POST['website']);
        }
        
        if(empty($_POST['comment'])){
            $commentErr="";
        }else{
            $comment=test_input($_POST['comment']);
        }
        
        if(empty($_POST['gender'])){
            $genderErr="Gender is required";
        }else{
            $gender=test_input($_POST['gender']);
        }
        
    }

    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }



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
            
            .error{
                color: #f00;
            }
            
            .output{
                border: 2px solid #fff;
                width: 450px;
                height: 450px;
                margin: 50px auto;
                padding: 25px;
            }
        </style>
    </head>
    
    <body>
        <h2>Form Validation</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label>Name:</label>
            <span class="error">*<?php echo  $nameErr;?></span>
            <input type="text" name="name" />
            
            <label>Email</label>
            <span class="error">*<?php echo  $emailErr;?></span>
            <input type="email" name="email" />
            
            <label>Website</label>
            <span class="error">*<?php echo  $websiteErr;?></span>
            <input type="text" name="website" />
           
            <label>Comment:</label> 
            <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br>
            <lable>Gender</lable>
             <span class="error">*<?php echo  $genderErr;?></span><br>
            <input type="radio" name="gender" value="Male"><label>Male</label>
            <input type="radio" name="gender" value="Female"><label>Female</label>
            <input type="radio" name="gender" value="Other"><label>Other</label>
            
            <br><br>
            <input type="submit" value="submit" name="submit">
        </form>
        
        <?php
            echo '<div class="output">'. 
            "<h3>Your Inputs:</h1>".
            '<p>Name: '.$name.'</p>'.
            '<p>Email: '.$email.'</p>'.
            '<p>Website Name: '.$website.'</p>'.
            '<p>Gender: '.$gender.'</p>'.
            '<p>Your Comment: '.$comment.'</p>';
        
        ?>
    
    </body>
</html>
