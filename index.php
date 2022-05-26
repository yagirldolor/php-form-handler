<html>
  <head>
    <title>PHP Test Page</title>
  </head>
  <body>
    <h1>Form Handler</h1>

    <?php 
      echo "This is PHP!";
      if(isset($_POST["FirstName"])){//show data
        echo $_POST["FirstName"];
        
      }else{//show form
        echo '
        <form method="post" action="">
          <p>First Name:<input type="text" name="FirstName"/></p>
          <p><input type="submit"/></p>
        </form>
      ';
      }
    ?>
<!--  Form Element    -->
<!--     <form method="post" action="">
      <p>First Name:<input type="text" name="FirstName"/></p>
      <p><input type="submit"/></p>
    </form> -->
  </body>
</html>
