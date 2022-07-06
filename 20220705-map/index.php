<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS MAP</title>
</head>
<body>
    

<script>
    const map1 = new Map();
    console.log(map1);


    let map2 = new Map();
    map2.set('info', {name: 'jack', age: 28});
    map2.set('info1', {name: 'asdf', age: 228});
    map2.set('info2', {name: 'ttt', age: 2833});
    console.log(map2);

    let obj1 = {Name : 'anna', age:34};
    let obj2 = {car1: 'fiat', car2: 'audo'};
    let map3 = new Map();
    map3.set(obj1, obj2);
    console.log(map3);

    console.log(map2.get('info'));

    console.log(map3.get(obj1));

    let map4 = new Map();
    let func = function()
    {
        console.log('works func');
    }
    map4.set('themapfunc', func);
    console.log(map4.get('themapfunc'));



    let map6 = new Map();
    map6.set('info', 'valuestest');
    map6.set('info2', 'valuestest2');
    map6.set('info3', 'valuestest3');

    for (let[key, value] of map6)
    {
        console.log(key  + '- ' + value);
    }


    map6.forEach(function(value,key)
    {
        console.log(key + '- ' + value);
    })


    let map7 = new Map();
    map7.set('info1', 'val1');
    map7.set('info2', 'val2');
    map7.set('info3', 'val3');

    for(let key of map7.keys())
    {
        console.log(key);
    }



    let map8 = new Map();
    map8.set('info1', 'value1');
    map8.set('info2', 'value2');
    map8.set('info3', 'value3');
    map8.set('info4', 'value4');

    for(let values of map8.values())
    {
        console.log(values);
    }
    


    let map9 = new Map();
    map9.set('inf1', 'val1');
    map9.set('inf2', 'val2');
    map9.set('inf3', 'val3');

    for(let elem of map9.entries())
    {
        console.log(`${elem[0]}: ${elem[1]}`);
    }


    const weakMap = new WeakMap();
    console.log(weakMap);
    let obj23 = {};
    weakMap.set(obj23, 'hello objekt');
    console.log(weakMap);
    console.log(weakMap.get(obj23));
    weakMap.delete(obj23);
    console.log(weakMap);

    
</script>

</body>
</html>