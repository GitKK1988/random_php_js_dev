<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php GD</title>

    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
    
<form action="image.php" method="post" enctype="multipart/form-data">

<input type="file" name="imagefile" id="imagefile">
<button type="submit">hochladen</button>

</form>



<section class="droparea">
            <i class="far fa-images"></i>
            <p>Drop your .png or .jpg files here!</p>
            <p><small>Up to 20 images, No max file size.</small></p>
        </section>

<script src="main.js" defer></script>
</body>
</html>