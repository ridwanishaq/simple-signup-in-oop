<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #signupForm{
            margin: auto;
            margin-top: 10%;
            width: 300px;
            height: 370px;
            border-radius: 10px;
            border: 2px solid grey;
            padding: 20px;
            background-color: #eee;
        }
        .form-header{
            text-align: left;
        }
        .form-group{
            width: 100%;
            margin-bottom: 10px;
        }
        .form-group > input {
            width: 97%;
            height: 30px;
            border-radius: 5px;
            border: 1px solid grey;
            padding-left: 6px;
            font-size: 15px;
        }
        .form-footer {
            width: 100%;
            margin-top: 20px;
        }
        .form-footer > button {
            border: 1px solid grey;
            border-radius: 5px;
            background-color: #0000ff;
            font-size: 18px;
            width: 100%;
            height: 35px;
            color: #fff;
            font-weight:bold;
            cursor: pointer;
        }

        /* msg */
        .alert-success {
            margin: auto;
            margin-top: 20px;
            padding: 20px;
            width: 300px;
            height: 20px;
            border-radius: 6px;
            background-color: #4aff6b;
            color: #fff;
        }
        .alert-danger {
            margin: auto;
            margin-top: 20px;
            padding: 20px;
            width: 300px;
            height: 20px;
            border-radius: 6px;
            background-color: #ff504a;
            color: #fff;
        }
        
    </style>
</head>
<body>
    
    <form action="includes/signup.inc.php" method="POST" id="signupForm">
        <div class="form-header">
            <h1>SignUp</h1>
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" >
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" >
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" >
        </div>
        <div class="form-footer">
            <button type="submit">SignUp</button>
            <br><br>
            <p>Already have an account? <a href="#">Login</a> here</p>
        </div>

    </form>    
    
    <?php if (isset($_GET['msg']) && !empty($_GET['msg'])) { ?>
        <div class="alert-success">
            <strong>Success: </strong><?php echo htmlspecialchars($_GET['msg']); ?>
        </div>
    <?php } ?>

    <?php if (isset($_GET['error']) && !empty($_GET['error'])) { ?>
        <div class="alert-danger">
            <strong>Error: </strong><?php echo htmlspecialchars($_GET['error']); ?>
        </div>
    <?php } ?>

    <!-- JavaScript to clear the query string after 2 seconds -->
    <?php
    // Check if there is an error message or a success message in the query string
    if (isset($_GET['error']) || isset($_GET['msg'])) {
        echo '<script>
            setTimeout(function(){
                window.location.href = "index.php";
            }, 2000);
        </script>';
    }
    ?>
</body>
</html>

