<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<script>
    // copy array
    const testArray = ['Apple', 'Banana', 'Pineapple'];
    const arrayNew = [...testArray, 'Tomato', 'beans', 'garlic'];
    console.log(arrayNew);


    const arrayTesting = ['Banana', 'Strawberry'];
    const arrayTesting2 = ['Beefsteak', 'Grill STeak', 'Grill Fish'];
    const arrayTesting3 = ['Garlic', 'Pepper', 'chilli'];

    const arrayConnect = [...arrayTesting, ...arrayTesting2, ...arrayTesting3];
    console.log(arrayConnect);


    const arrayAll = [...arrayConnect, ...arrayNew];
    console.log(arrayAll);



</script>


<script>
    // spreach operator with opbject
    const obj1 = {x: 1, y: 2};
    const obj2 = {z: 4};

    const obj3 = {...obj1, ...obj2};

    console.log(obj3);

    const obj4 = {
        car1: 'Fiat',
        car2: 'VW',
        car3: 'Audi'
    };

    const obj5 = {
        guard1 : 'spider guard',
        guard2 : 'de la Riva',
        guard3 : 'butterfly guard'
    };

    const obj6 = {...obj4, ...obj5};

    console.log(obj6);

    const obj7 = {...obj3, ...obj6};

    console.log(obj7);

</script>


<script>
    // spread operator as parameter (rest parameter)
    let func = function(...args)
    {
        console.log(args);
    }

    func(3);
    func(4,5,6);
</script>

</body>
</html>