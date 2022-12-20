<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitBin</title>
    <link rel="stylesheet" href="css/index.css">
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

    <h1 class="tagline"> Share your beautiful code in one click </h1>

    <form action="insert.php" method="POST">
        <textarea name="content" id="" cols="30" rows="30"></textarea>

        <div class="container">
            <label for="syntax-highlighting" class="label">Syntax Highlighting:</label>
            <select name="syntax-highlighting">
                <option value="None">None</option>
                <option value="PHP">PHP</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="SQL">SQL</option>
                <option value="JavaScript">JavaScript</option>
                <option value="Python">Python</option>
            </select>

            <button type="submit">Create New Paste</button>
        </div>
    </form>
</body>

</html>