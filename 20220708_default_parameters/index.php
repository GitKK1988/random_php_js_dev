<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Parameters</title>
</head>
<body>
    

<script>
    function sum(x = 5, y= 7)
    {
        return x + y;
    }

    console.log(sum());
    console.log(sum(3,4));
    console.log(sum(7));



    function sum2(x = 2, y = x, z = x + y)
    {
        console.log(x + y + z);
    }
    sum2();

    const sum3 = () => 15;
    const calculate = function(x, y = x *sum3())
    {
        return x + y;
    }
    const result = calculate(10);
    console.log(result);

    const sum4 = () => 25;
    function calc4(x, y = sum4() * x)
    {
        return x + y;
    }
    const result4 = calc4(4);
    console.log(result4);


</script>

</body>
</html>