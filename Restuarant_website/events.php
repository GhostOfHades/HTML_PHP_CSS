<?php
    require_once "queryDb.php";
    if (isset($_GET['search']))
    {
        $search= $_GET['search'];
    }
    else
    {
        $search="";
    }
    $events = getEvents($search);
    $count=0;
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="appearance.css"> 
        <meta charset="UTF-8">
        <title>Ben's Bar and Grill | Events</title>
    </head>
    <div ID='backdrop'>
        <header>
            <?php include 'nav.php'?>
            <div ID='page_heading'><h1>Events</h1></div>
        </header>
        <body>
            <div ID='body_display'>
                <div ID='inner_display'>
                    <form action="events.php" method="get"> 
                        <label for='firstname'><h3>Insert Event name, date, description or Location</h3></label>
                        <input type='text' id='search' name='search'>
                        <input type='submit' value='Submit'>
                    </form>
                    <table>
                        <thead>
                            <tr>
                                <th>NAME</th>
                                <th>DESCRIPTION</th>
                                <th>LOCATION</th>  
                                <th>DATE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($events as $EVENT)
                                {
                                    echo"<tr>";
                                    echo"<td>" .$EVENT['EVENTNAME']."</td>";
                                    echo"<td>" .$EVENT['DESCRIPTION']."</td>";
                                    echo"<td>" .$EVENT['LOCATION']."</td>";
                                    echo"<td>" .$EVENT['DATE']."</td>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </body>
    </div> 
        <footer>
            <?php include 'footer.php'?>
        </footer>
</html>