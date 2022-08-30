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
        <!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
    </div> 
        <footer>
            <?php include 'footer.php'?>
        </footer>
</html>