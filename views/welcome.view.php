
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Welcome, <?= $user->getName(); ?> </h1>

    <a href="/logout"><button>Logout</button></a>

    <h3>Add attributes:</h3>

    <form method="POST" action="/attributes">
      Attribute name: <input type="text" name="attributes-name" required/>
      Attribute value: <input type="text" name="attributes-value" required/>
      <input type="submit" value="Add"/>
    </form>

    <h2> Attributes: </h2>

    <ul>
      <?php foreach ($attributes as $attribute): ?>
        <li> <?= $attribute['attributes_name'] . ': ' . $attribute['attributes_value'] ?> </li>
      <?php endforeach; ?>
    </ul>


  </body>
</html>
