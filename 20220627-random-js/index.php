<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Js</title>
</head>
<style>
    #renderbox2
    {
        transition: color 0.5s ease;
    }
    #renderbox3
    {
        transition: all 0.5s ease;
    }
</style>

<body>
    
<div id="renderbox1" style="background-color: #5a5a5a; min-width: 400px; min-height: 100px; color: white;">


</div>

<div id="renderbox2" style="background-color: yellow; min-width: 400px; min-height: 100px; color: white;">
    <button id="buttonlisten">change Color</button>
    <h2>Chang My Color</h2>
</div>

<div id="renderbox3" style="background-color: blue; width: 100px; height: 100px; color: white; margin-left: auto; margin-right: auto;">
<button id="buttonlisten2">change My Size</button>
 
</div>

<script>
    const car = {type: "Fiat", model: "500", color: "red", price: 6000};

    document.getElementById("renderbox1").innerHTML = "Type: " + car.type + "<br>Model: " + car.model + "<br>Preis: " + car.price;

    let button1 = document.getElementById("buttonlisten");
    button1.addEventListener("click", function(){
        let currentcolor = document.getElementById("renderbox2");
        if(currentcolor.style.color == "white")
        {
            currentcolor.style.color = "pink";
        } else
        {
            currentcolor.style.color = "white";
        }
    });

    let button2 = document.getElementById("buttonlisten2");
    button2.addEventListener("click", function(){
        let currentsize = document.getElementById("renderbox3");
        if(currentsize.style.width == "100px")
        {
            currentsize.style.width = "400px";
            console.log("width was 100px");
        } else
        {
            currentsize.style.width = "100px";
            console.log("width was not 100px");
        }
    });
</script>
</body>
</html>