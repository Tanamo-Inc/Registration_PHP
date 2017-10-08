<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset = "UTF-8" name="viewport" content = "width-device=width, initial-scale=1"/>
        <title>Registration In PHP.</title>
        <link rel = "stylesheet" type = "text/css" href = "css/style.css" />
    </head>

    <body>

        <nav class = "navbar navbar-default">
            <div class="container-fluid">
                <a class="navbar-brand" href = "https://github.com/Tanamo-Inc">TANAMO INC.</a>

            </div>
        </nav>


        <div class = "form">

            <h1>Registration In PHP.</h1>

            <form method = "POST" action = "core/my_query.php">

                <div class="field-wrap">
                    <input type = "text" placeholder = "Username"  name = "username"/>
                </div>

                <div class="field-wrap">
                    <input type = "password" placeholder = "Password"  name = "password">
                </div>

                <div class="field-wrap">
                    <input type = "text" placeholder = "Firstname"  name = "firstname" />
                </div>

                <div class="field-wrap">
                    <input type = "text" placeholder = "Lastname"  name = "lastname" />
                </div>


                <button class="button button-block" name = "signup">Sign up</button>


            </form>

        </div>


        <div id="footer">
            <ul>
                <li><a href="https://www.facebook.com/Tanamo-Inc-204731483344765">About</a></li>
                <li><a href="https://github.com/Tanamo-Inc">Help</a></li>
                <li><a href="https://www.facebook.com/Tanamo-Inc-204731483344765">Contact Us</a></li>
            </ul>
            &copy;2017 Tanamo Inc. All Rights Reserved.

        </div>
    </body>

</html>