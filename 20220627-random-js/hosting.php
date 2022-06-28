<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Hoisting</title>
</head>
<body>
    
<button id="butt1">hosting</button>



<script>
"use strict";

const x = 5;

function thex(){
    console.log(x);
}



let button1 = document.getElementById('butt1');
button1.addEventListener('click', function(){
    thex();
})

</script>
</body>
</html>