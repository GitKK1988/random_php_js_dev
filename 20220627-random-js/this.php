<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This</title>
</head>
<body>
    

<script>

const car1 = "fiat 500";

    const car = {
        speed : "300",
        weight : "1000",
        price : 2300,
        getSpeed: function(){
            return this.speed;
        }
    };

    console.log(car.getSpeed());
    console.log(this.window);
</script>
</body>
</html>