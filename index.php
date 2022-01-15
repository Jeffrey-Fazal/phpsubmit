<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submit Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
		.aligncenter{
		text-align: center;
		}
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Password Submission Form</h2>
                    </div>
					<p class="aligncenter">
					<img src="https://creativus-design.com/wp-content/uploads/2021/07/logo.png" alt="CD Logo">
					</p>
					
                    <p>Please fill this form and submit it to share your password.</p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>Name of Account</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
				<p class="aligncenter">* Always make sure that you are on a secure network and that your browser shows that <a href="https://www.clickssl.net/blog/how-to-view-ssl-certificate-details-in-every-browser">SSL is enabled</a></p>
            </div>  
		<p class="aligncenter">Submission of data is subject to <a href="https://creativus-design.com/legal/">our terms and conditions</a> </p>	
        </div>
		<p class="aligncenter">Looking for a password managment soluition? <a href="https://bitwarden.com/"> Check out Bitwarden</a> or contact us for our MSP packages</p>
    </div>
	<p class="aligncenter">Creativus Design</p>
</body>
</html>