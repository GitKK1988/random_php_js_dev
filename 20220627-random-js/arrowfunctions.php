<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS arrow functions</title>
</head>
<body>
    

<button id="arrow1">arrow function</button>
<button id="arrow2">arrow function2</button>

<script>
    hello = function(){
        console.log('hello');
    }
    window.addEventListener('load', hello);

    helloarrow = () => {
       console.log('hello arrow1');
    }


    let y = 6;
    let z = 8;

    helloarrowparams = (y, z) => {
        console.log('hellow arrow2');
    }

    let arrow1 = document.getElementById('arrow1');
    arrow1.addEventListener('click', helloarrow);

    let arrow2 = document.getElementById('arrow2');
    arrow2.addEventListener('click', helloarrowparams);

</script>
</body>
</html>