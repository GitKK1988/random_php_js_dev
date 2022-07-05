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
        <div class="flexboxdiv" id="flexdiv2">
            
        </div>

    </div>

    <script>
        let dragelement = document.getElementById('MyDraggableElement');
        dragelement.addEventListener('dragstart', handleDrag);

       //  let flexboxdiv = document.getElementsByClassName('flexboxdiv');
        let flexdiv2 = document.getElementById('flexdiv2');
        flexdiv2.addEventListener('dragover', handleDragover);
        flexdiv2.addEventListener('dragleave', handleDragleave);
        flexdiv2.addEventListener('drop', handleDrop);
        
        ['dragover', 'dragleave'].forEach(eventName => {
            flexdiv2.addEventListener(eventName, testforfun);
        });

       function testforfun()
        {
            console.log('listening works');
        }

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
            flexboxdivdraggedover = document.getElementById('flexdiv2');
            flexboxdivdraggedover.classList.add('boxdragover');
        }

        function handleDragleave(e)
        {
            flexboxdivdraggedover = document.getElementById('flexdiv2');
            flexboxdivdraggedover.classList.remove('boxdragover');
        }

        function handleDrop(e)
        {

            flexboxdivdrop = document.getElementById('flexdiv2');
            flexboxdivdrop.classList.remove('boxdragover');
        }
    

    </script>

</body>
</html>