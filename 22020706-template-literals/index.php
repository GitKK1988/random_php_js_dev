<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Literals</title>
</head>
<body>
    


<script>
    const str1 = 'this is a string'
    + 'another part';

    const str2 = `Thisd
    sdlfkjsdf
    sdflkjsdf`;

    console.log(str2);

    function tagExample(strings)
    {
        return strings;
    }
    const result = tagExample`Hello String`;
    console.log(result);


    const name = 'Jack';
    const greet = true;
    function tagExample2(strings, nameValue)
    {
        let str01 = strings[0]; //Hello
        let str02 = strings[1];

        if(greet)
        {
            return `${str01}${nameValue}${str02}`;
            // creating tagged literal
            // passing arguement name
        }


    }

    const result2 = tagExample2`Hello ${name}, How are YOU ?`;
        console.log(result2);

</script>


</body>
</html>