<?php
$animals = [
["commonname"=>"Common Galaxias","class"=>"Actinopterygii","order"=>"Galaxiiformes","genus"=>"Galaxias","species"=>"G. maculatus"],
["commonname"=>"Eastern freshwater cod","class"=>"Actinopterygii","order"=>"Perciformes","genus"=>"Maccullochella","species"=>"M. ikea"],
["commonname"=>"Estuary perch","class"=>"Actinopterygii","order"=>"Perchiformes","genus"=>"Macquaria","species"=>"M. colonorium"],
["commonname"=>"Eel-tailed catfish","class"=>"Actinopterygii","order"=>"Siluriiformes","genus"=>"Tandanus","species"=>"T. tandanus"],
];
$count=0;
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="appearance.css"> 

        <meta charset="UTF-8">
    </head>
    <div id="page">
        <header>
            <title>
                Fish
            </title>
            <h1>
                Fish
            </h1>
            <div class="container">
            <nav>
                    <ul id = "mainlist">
                        <div class="row">
                            <div class="col-lg-1"><li><a href = "Index.html"> <strong>Home</strong></a></li></div>
                            <div class="col-lg-1"><li><a href = "Birds.html"> <strong>Birds</strong></a></li></div>
                            <div class="col-lg-1"><li><a href = "Mammals.html"> <strong>Mammals</strong></a></li></div>
                            <div class="col-lg-1"><li><a href = "Reptiles.html"> <strong>Reptiles</strong></a></li></div>
                            <div class="col-lg-1"><li><a href = "Fish.html"> <strong>Fish</strong></a></li> </div>
                            <div class="col-lg-1"><li><a href = "Amphibians.html"> <strong>Amphibians</strong></a></li></div>
                            <div class="col-lg-1"><li><a href = "Arthropods.html"> <strong>Arthropods</strong></a></li></div>
                            <div class="col-lg-1"><li><a href = "contact.html"> <strong>Contact us</strong></a></li></div>        
                        </div>
                    </ul>
                </nav>
            </div>
        </header>
        <div>
            <body>
                <!--<div class="animalmenu">
                    <div><li><a href = "Cockatoo.html"><img src = "bird-small.jpg" alt = "Sulphur Crested Cockatoo"></a></li></div>
                    <div><li><a href = "Kookaburra.html"><img src = "kookaburra.jpg" alt = "Kookaburra"></a></li></div>
                    <div><li><a href = "PeachFacedParrot.html"><img src = "PeachFacedParakeet.jpg" alt = "Peach Faced Parrot"></a></li></div>
                </div> -->
                <table>
                <thead>
                <tr>
                    <th rowspan = "2">Common Name</th>
                    <th colspan ="3">Taxonomy</th>

                </tr>
                <tr>
                    <th>class</th>
                    <th>order</th>  
                    <th>Genus</th>
                    <th>Species</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($animals as $animal)
                    {
                        echo"<tr>";
                        echo"<td>" .$animal['commonname']."</td>";
                        echo"<td>" .$animal['class']."</td>";
                        echo"<td>" .$animal['order']."</td>";
                        echo"<td>" .$animal['genus']."</td>";
                        echo"<td>" .$animal['species']."</td>";
                        $count+=1;
                    }
                ?>
            </body>
        </div>
        <footer>
            &copy Slater Black
        </footer>
        
    </div>
    
</html>