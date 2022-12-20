<?php
include "connection.php";

$id = $_GET["id"];

$stmt = $conn->prepare("SELECT content, syntax FROM pastes WHERE id = :id");
$stmt->bindParam(":id", $id);
$stmt->execute();

$result = $stmt->fetch();

include "geshi/geshi.php";

$source = $result["content"];
$syntax = $result["syntax"];

switch ($syntax) {
    case "None":
        $language = 'text';
        break;
    case "PHP":
        $language = 'php';
        break;
    case "HTML":
        $language = 'html4strict';
        break;
    case "CSS":
        $language = 'css';
        break;
    case "SQL":
        $language = 'mysql';
        break;
    case "JavaScript":
        $language = 'javascript';
        break;
    case "Python":
        $language = 'python';
        break;
}

$geshi = new GeSHi($source, $language);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitbin</title>
    <link rel="stylesheet" href="css/paste.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
    <h1 class="logo">
        <span style="color:#000563">B</span>
        <span style="color:#D75065">i</span>
        <span style="color:#333782">t</span>
        <span style="color:#000563">B</span>
        <span style="color:#D75065">i</span>
        <span style="color:#333782">n</span>
    </h1>

    <div class="container">
        <?php echo $geshi->parse_code(); ?>
    </div>

    <div class="buttons-container">
        <p class="message" id="message"></p>

        <div class="button">
            <button onclick="copyFunction()">Share BitBin</button>
            <a href="edit_paste.php?id=<?php echo $id; ?>"><button>Edit BitBin</button></a>
            <a href="https://projects.bit-academy.nl/~arcade_xampp/"><button>Main Page</button></a>
        </div>
    </div>

    <script src="javascript/script.js"></script>
</body>

</html>