<?php
    require_once "week9.php";
    if (isset($_GET["animalname"]))
    {
        $search= $_GET["animalname"];
    }
    else
    {
        $search="";
    }
    $animals = getAnimals($search);
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
                Birds
            </title>
            <h1>
                Birds
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

                <form action="Birds.php" method="get">
                    <hr>
                    <section>
                        <label for="searchAnimal">Search</label>
                        <input type="text" class="input_box" name="animalname" id="animalname">
                        <input type="submit" value="Search">
                    </section>
                    <hr>
                </form>
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
                                echo"<td>" .$animal['COMMONNAME']."</td>";
                                echo"<td>" .$animal['CLASS']."</td>";
                                echo"<td>" .$animal['SCI_ORDER']."</td>";
                                echo"<td>" .$animal['GENUS']."</td>";
                                echo"<td>" .$animal['SPECIES']."</td>";
                            }
                        ?>
                    </tbody>
                </table>
            </body>
        </div>
        <footer>
            &copy Slater Black
        </footer>
        
    </div>
    
</html>