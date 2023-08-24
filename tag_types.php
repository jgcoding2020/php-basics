<?php
// Standard PHP Tags
$name_standard = "John (Standard Tags)";
echo "<p>Hello, $name_standard!</p>";
?>

<?
// Short PHP Tags (Not Recommended)
$name_short = "Jane (Short Tags)";
echo "<p>Hello, $name_short!</p>";
?>

<?php while ($condition_alternative = true) :
    // Alternative Syntax Tags
?>
    <p>Content with Alternative Syntax</p>
<?php endwhile; ?>

<script language="php">
    <?php
    // Script Tags
    $name_script = "Alice (Script Tags)";
    echo "document.write('<p>Hello, " . $name_script . "!</p>');";
    ?>
</script>

<!--
<%
// ASP Tags (Not Recommended for PHP)
$name_asp = "Bob (ASP Tags)";
echo "<p>Hello, $name_asp!</p>";
%>
-->