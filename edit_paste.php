<?php
include "connection.php";

$id = $_GET["id"];

$stmt = $conn->prepare("SELECT content FROM pastes WHERE id = :id");
$stmt->bindParam(":id", $id);
$stmt->execute();

$result = $stmt->fetch();
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

    <form action="update.php?id=<?php echo $id; ?>" method="POST">
        <textarea name="update_content" id="" cols="30" rows="30"><?php echo $result["content"]; ?></textarea>

        <div class="buttons-container">
            <div class="button">
                <a href="update.php?id=<?php echo $id; ?>"><button>Save BitBin</button></a>
            </div>
        </div>
    </form>

    <div class="buttons-container">
        <div class="button">
            <a href="paste.php?id=<?php echo $id; ?>"><button>Back to the paste</button></a>
        </div>
    </div>
</body>

</html>