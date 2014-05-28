<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Triangle Game Showcase | SPARKcon 2014 | Raleigh, NC</title>     
        <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
        <link rel="stylesheet" href="css/common.css">   
    </head>
    <body>
        <header>
            <img id='logo' src='images/logo.png' />
            <nav id='tgs-main-nav' class=''>
                <ul>
                    <li><a href='index'>HOME</a></li>
                    <li><a href='about'>ABOUT</a></li>
                    <li><a href='submit'>SUBMIT</a></li>
                </ul>
            </nav>
        </header>
        
        <main>
            @yield('content')
        </main>
        
        <footer class=''>
            &copy; 2014 Triangle Game Showcase
        </footer>
    </body>                
</html>