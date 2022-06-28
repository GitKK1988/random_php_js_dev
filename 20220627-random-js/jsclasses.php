<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>js classes</title>
</head>
<body>
    


<script>
    class Car
    {
        constructor(name, speed, weight, price)
        {
            this.name = name;
            this.speed = speed;
            this.weight = weight;
            this.price = price;
        }
    }

    let car1 = new Car("fiat 500", "200", "3000", 1500);

    console.log(car1.price);
    
    console.log(car1.name);

</script>
</body>
</html>