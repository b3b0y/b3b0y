<!DOCTYPE html>
<html>
<head>
   <script src="js/jquery-3.2.0.min.js"></script>
   <script src="js/bootstrap.js"></script>
   <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
   <script src="js/custom.js"></script>
</head>
<body>
  <form id="addform" action="" method="POST">
    <label> Name:</label>
    <br>
    <input type="text"  name="name" placeholder="Name"/>
    <br> <br>
    <label> Description:</label>
    <br>
    <textarea name="description" rows="8" cols="80"></textarea>
    <br> <br>
    <label> Price:</label>
    <br>
    <input type="text"  name="price" placeholder="Price"/>
    <br> <br>
    <input type="submit"  name="submit"/>
  </form>

  <table id="myData">
    <tr>
      <td>Name</td><td>Description</td><td>Price</td><td>Action</td>
    <tr>

  </table>

  </div>
</body>
</html>
