<!doctype html>

<html lang="en">
  <head>
  </head>
  <body>
    <table>
<?php

print("      <tr>\n");
print("        <td></td>\n");
for($n = 1; $n < 101; $n++) {
  print("        <td> $n </td>\n");
}
print("      </tr>\n");

for($i = 1; $i < 101; $i++) {
  print("      <tr>\n        <td> $i </td>\n");
  for($j = 1; $j < 101; $j++) {
    $temp = $i * $j;
    print("        <td> $temp </td>\n");
  }
  print("      </tr>\n");
}

?>
    </table>
  </body>
</html>
