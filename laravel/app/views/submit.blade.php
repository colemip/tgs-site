<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Triangle Game Showcase | Raleigh, NC</title>
    <link rel='stylesheet' type='text/css' href='css/common.css'> 
</head>
<body>
    <main>
        Submit here: <br /><br />
            
            
            {{Form::label('First Name')}} {{Form::text('first_name')}}
            {{Form::submit("Register", array("class"=>"btn btn-default"))}}
            {{Form::close()}}
        
        
    </main>
</body>
</html>