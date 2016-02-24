<!DOCTYPE html>
<html>
    <head>
        <title>PHP include</title>
        <style>
            body{
                background-color: darkslateblue;
            }
            #container{
                width: 960px;
                min-height: 600px;
                background: ivory;
                color: darkslateblue;
                font-family: sans-serif, "Times New Roman";
                font-size: 18px;
            }
            main{
                min-height: 500px;
            }
            footer{
                min-height: 50px;
            }
        </style>  
        
    </head>
    <body>
    <div id="container">
        <h1> text should go here</h1>
        <main>
        </main>
        <footer>
            <?php include 'footer.php';?>
        </footer>
    </div>
</body>
    
</html>