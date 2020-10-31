<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/register.css">
</head>
<body>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="register d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <div class="login-wrap">
	              <div class="login-html">  
                  <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                  <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                  <div class="login-form">
                    <div class="sign-in-htm">
                      <div class="group">
                        <input type="text" id="user" class="input" placeholder="Username" required autofocus>
                       
                      </div>
                      <div class="group">
                        <input type="password" id="pass" class="input" data-type="password" placeholder="Password" required>
                        
                      </div>
                      <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                      </div>
                      <div class="group">
                        <input type="submit" class="button" value="Sign In">
                      </div>
                      <div class="hr"></div>
                      <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                      </div>
                    </div>
                    <div class="sign-up-htm">
                      <div class="group">
                        <input type="text" id="user" class="input" placeholder="Username" required autofocus>
                      </div>
                      <div class="group">
                        <input  type="password"  id="pass" class="input" data-type="password" placeholder="Password" required>
                      </div>
                      <div class="group">
                        <input type="password" id="pass" class="input" data-type="password" placeholder="Confirm Password" required>
                      </div>
                      <div class="group">
                        <input type="email" id="pass" class="input" placeholder="Email address" required>
                      </div>
                      <div class="group">
                        <input type="submit" class="button" value="Sign Up">
                      </div>
                      <div class="hr"></div>
                      <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
