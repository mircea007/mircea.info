<!DOCTYPE html>
<html>
<style>
textarea{
  border: 3px solid black;
  background-color: #ddd;
  width: 400px;
  height: 300px;
  margin-bottom: 10px;
}
@media screen and (max-width: 400px) {
  textarea {
    width: 100%;
  }
}
input[type="submit"]{
  border: 3px solid black;
  background-color: #3a3a3a;
  color: white;
}
input[type="submit"]:hover {
  background-color: red;
  border: 3px solid #cb0000;
}
</style>
<body>

<form action = "f-download.php" method = "get">
  <h3>de la:</h3>
  <br>
  <input type = "text" name = "name">
  <h3>Mesaj:</h3>
  <br>
  <textarea name = "mesage" placeholder = "pune mesajul aici!"></textarea>
  <br>
  <input type = "submit">
</form>


</body>
</html>