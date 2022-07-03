<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag & Drop</title>
    <link rel="stylesheet" href="style.css" />

</head>
<body>
    
    <div id="flexboxing">
        <div class="flexboxdiv">
            <div id="MyDraggableElement" draggable="true"></div>
        </div>
        <div class="flexboxdiv">
            
        </div>

    </div>

    <script>
        let dragelement = document.getElementById('MyDraggableElement');
        dragelement.addEventListener('dragstart', handleDrag);

        let flexboxdiv = document.querySelectorAll('flexboxdiv');
        flexboxdiv.addEventListener('dragover', handleDragover);
        

        function handleDrag(e)
        {
            dt = e.dataTransfer;
            console.log(dt);
            console.log(dt.types);
            // assigning datatype and dragelement with setData
            e.dataTransfer.setData("text/plain", dragelement.id);
            console.log(dt);
            console.log(dt.types);
        }

        function handleDragover(e)
        {
            flexboxdivdraggedover = document.getElementsByClassName('flexboxdiv');
            flexboxdivdraggedover.classList.add('boxdragover');
        }
    </script>

</body>
</html>