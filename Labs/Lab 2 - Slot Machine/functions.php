<?php
    $randomV1 = rand(0,3);
    $randomV2 = rand(0,3);
    $randomV3 = rand(0,3);
    
    function play()
    {
        for($i = 1; $i < 4; $i++)
        {
            ${"randomV" . $i} = rand(0,3);
            displayPicture(${"randomV" . $i}, $i);
        }
        displayScore($randomV1, $randomV2, $randomV3);   
    }
            
    function displayScore($randomV1, $randomV2, $randomV3)
    {
        echo "<div id = 'output' > ";
        if($randomV1 == $randomV2 && $randomV2 == $randomV3)
        {
            switch ($randomV1)
            {
                case '0': $totalPoints = 1000;
                          echo "<h1> Jackpot! </h1>";
                          break;
                case '1': $totalPoints = 500;
                          break;
                case '2': $totalPoints = 250;
                          break;
                case '3': $totalPoints = 100;
            }
            echo "<h2> You won $totalPoints points! </h2>";
        }
        else
        {
            echo "<h3> Try Again! </h3>";
        }
        echo "</div>";
    }
    
    function displayPicture($randomV,$pos)
    {
        switch ($randomV)
        {
            case '0': $symbol = "seven";
                    break;
            case '1': $symbol = "cherry";
                    break;
            case '2': $symbol = "lemon";
                    break;
            case '3': $symbol = "orange";
                    break;
        }
        echo "<img id = 'reel$pos' src = 'img/$symbol.png' alt = '$symbol' title = '".ucfirst($symbol)."' width = '70' />";
    }
?>