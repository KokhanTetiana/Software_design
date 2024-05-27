<?php
require_once 'LightHTML.php';

$table = new LightElementNode('table', 'block', 'closing', array('my-table'), array(
    new LightElementNode('tr', 'block', 'closing', array('row-class'), array(
        new LightElementNode('td', 'block', 'closing', array('data-class'), array(
            new LightTextNode('Row 1, Cell 1')
        )),
        new LightElementNode('td', 'block', 'closing', array('data-class'), array(
            new LightTextNode('Row 1, Cell 2')
        ))
    )),
    new LightElementNode('tr', 'block', 'closing', array('row-class'), array(
        new LightElementNode('td', 'block', 'closing', array('data-class'), array(
            new LightTextNode('Row 2, Cell 1')
        )),
        new LightElementNode('td', 'block', 'closing', array('data-class'), array(
            new LightTextNode('Row 2, Cell 2')
        ))
    ))
));


echo "<!DOCTYPE html>\n";
echo "<html>\n";
echo "<head>\n";
echo '<link rel="stylesheet" type="text/css" href="style.css">' . "\n";
echo "</head>\n";
echo "<body>\n";
echo "<h2>Outer HTML:</h2>\n";
echo $table->getOuterHTML() . "\n\n";
echo "<h2>Inner HTML:</h2>\n";
echo $table->getInnerHTML() . "\n\n";
echo "</body>\n";
echo "</html>\n";
