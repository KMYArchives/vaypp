<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vaypp</title>
    <style>
        body{
            color: #9e9e9e;
            font-family: Arial, Helvetica, sans-serif;
        }
        h3{
            padding: 1em;
            font-size: 1.1em;
            font-weight: 600;
            border-left: .25em solid #eee; 
        }
        a{
            padding: 1em;
            margin: .25em;
            display: block;
            color: inherit;
            text-decoration: none;
            border: .025em solid #fff; 
            text-transform: capitalize;
        }
        a:hover, a:focus{
            border-color: #eee;
            background: #fafafa;
        }
    </style>
</head>
<body>

    <h3>Páginas em desenvolvimento:</h3>
    
    <?php
    
        foreach(scandir(__DIR__) as $file){
            if($file != '.'){
                if($file != '..'){
                    if($file != 'list.php'){
                        $file = explode('.', $file);
                        echo "<a href='$file[0]'>$file[0]</a>";
                    }
                }
            }
        }
    
    ?>

</body>
</html>