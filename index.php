<?php
/*
 * Flicker Leap PHP Engineer Test
 *
 * This is where the magic happens. Run all code in here to show your end result.
 */

require __DIR__ . '/vendor/autoload.php';

use FlickerLeap\Square;
use FlickerLeap\Diamond;
use FlickerLeap\Rectangle;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flicker Leap - PHP Engineer Test</title>
    </head>
    <style type="text/css">
        body{line-height: 1em;}
    </style>
    <body>

        <h1>PHP Engineer Test</h1>

        <h2>Hello World</h2>

        <p>At the end of this test, you should have all the answers on this page.</p>

        <h2>Output a square</h2>

        <?php
            // implement the square class here
            $square = new Square(10);
            $square->draw();
        ?>

        <h2>Output a diamond</h2>

        <?php
            // output your diamond here
            $diamond = new Diamond(10);
            $diamond->draw();
        ?>

        <h2>Output your rectangle</h2>

        <?php
            // output your working rectangle here
            $rectangle = new Rectangle(10);
            $rectangle->draw();
        ?>

        <h2>Output the result of the API</h2>

        <?php
            // Use the Httpful client to output the API results here.
            $uri = "https://pokeapi.co/api/v2/pokemon/mewtwo/";
            $response = \Httpful\Request::get($uri)->send();

            $image = $response->body->sprites->front_default;
            $index = $response->body->id;
            $name =  ucfirst($response->body->name);

            echo "
            <table cellpadding='5'>
                <tr>
                    <th>Image</th>
                    <th>Index</th>
                    <th>Name</th>
                </tr>
                <tr>
                    <td><img src='$image'/></td>
                    <td>$index</td>
                    <td>$name</td>
                </tr>
            </table>";
        ?>

        <h2>Recommendations</h2>

        <p>Include an image of the output needed for the shapes.</p>

    </body>
</html>
