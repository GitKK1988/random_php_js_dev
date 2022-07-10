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

    function getUserInfo({username, birthday})
    {
        console.log(username);
        birthday;
    }

    let user_a = {
        username: "Hans Peter",
        birthday: new Date(1960, 10, 11)
    };

    getUserInfo(user_a);


    function createUser(config)
    {
        config = Object.assign(
            {
                type: "user",
                username: "Hans",
                birthday: new Date(1960, 10, 11)
            },
            config
        );
        return config;
    }

    console.log(createUser(user_a));




    class Penguin
    {
        constructor(parents, subspecies){
            this.parents = parents;
            this.subspecies = subspecies;
        }
        setName(name){
            this.name = name;
        }
        setMate(mate){
            this.mate = mate;
        }
        setLocation(location){
            this.location = location;
        }
        save(){
            console.log(this.parents, this.subspecies, this.name, this.mate, this.location);
        }
    }

    const tux = new Penguin("GNU", "Linux");
    tux.setName("Tux");
    tux.setMate("Arch");
    tux.setLocation("home");
    tux.save();

</script>

</body>
</html>
    