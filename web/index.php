<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form test</title>
</head>
<body>
Hello
  <?php if (isset($_GET['submitted'])) { ?>
    <h1>The server had accepted:</h1>
    <p>radio: <?php echo htmlspecialchars($_GET['radio']); ?></p>
    <p>my-text: <?php echo htmlspecialchars($_GET['my-text']); ?></p>
    <p>Try again? <a href="/index.php">Yes!</a></p>
  <?php } ?>

  <?php if (!isset($_GET['submitted'])) { ?>
  
  <h1>Play with the HTML form</h1>
  <form action="/index.php">
    <input type="hidden" name="submitted" value="yes">
    <p>
      <label for="my-radio-yes">radio Yes: </label>
      <input id="my-radio-yes" name="radio" type="radio" required value="Yes">
      <label for="my-radio-no">radio No: </label>
      <input id="my-radio-no" name="radio" type="radio" required value="No"></p>
    <br>
    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
    <textarea name="my-text">Тут будет текст</textarea>
    <input type="text" name="erunda"><br>
    Выбери что-нибудь, всё равно что, главное выбери:<br>
    <!-- <select name="my-select" required>
      <option value=1 selected>Выбрать нужно обязательно</option>
      <option value=2>Что-нибудь раз</option>
      <option value=3>Что-нибудь два</option>
      <option value=4>Что-нибудь три</option>
    </select> -->
  </form>

  <?php } ?>

</body>
</html>
