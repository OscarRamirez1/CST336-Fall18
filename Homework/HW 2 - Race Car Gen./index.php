<!DOCTYPE html>

<html>
    <head>
        
        <meta charset = "utf-8"/>
        <title>Race Car Gen.</title>
        <link href = "css/stylesheet.css" rel = "stylesheet" type = "text/css" />
        
    </head>
    
    <body>
        
        <header>
            
            <h1>Welcome to the Car Generator</h1>
            
        </header>
        <br >
        <div>
            <h2>The names of these cars are as follows: </h2>
            <?php
                    $cars = array("1998 Toyota Supra", "1999 Nissan Skyline GT-R34", "1998-1994 Nissan Silvia S15", "2005 Mitsubishi Evo IX Lancer", "2004 Subaru WRX STI", "1998 Acura Integra Type - R", "1972 Datsun 510");
                    
                    sort($cars);
                    
                    for ($i = 0; $i < count($cars); $i++) 
                    {
                        echo $cars[$i]."<br >";
                    }
                    
                    echo "<h2> These are the company emblems: <br ></h2>";
                    
                    $emblems = array("img/8.png", "img/9.png", "img/10.png", "img/11.png", "img/12.png", "img/13.png");
                    
                    if(is_array($emblems))
                    {
                        for ($i = 0; $i < count($emblems); $i++) 
                        {
                            echo "<img class = 'emblem' src = ".$emblems[$i]." /> ";
                        }
                    }

            ?>
            <h3>Images are shown in no particular order.</h3>
        </div>
        <hr>
        <main>
            
            <?php
            
                    $option = rand(1,7);
                    
                    switch($option)
                    {
                        case 1: echo "<img class = 'cars' src = 'img/1.jpg'/>";
                                break;
                        case 2: echo "<img class = 'cars' src = 'img/2.jpg'/>";
                                break;
                        case 3: echo "<img class = 'cars' src = 'img/3.jpg'/>";
                                break;
                        case 4: echo "<img class = 'cars' src = 'img/4.jpg'/>";
                                break;
                        case 5: echo "<img class = 'cars' src = 'img/5.jpg'/>";
                                break;
                        case 6: echo "<img class = 'cars' src = 'img/6.jpg'/>";
                                break;
                        case 7: echo "<img class = 'cars' src = 'img/7.jpg'/>";
                                break;
                    }
            
            ?>
            <hr>
            <form>
                <input id = "button" type="submit" value ="Generate Again"/>
            </form>
            
        </main>
        
    </body>
    
</html>