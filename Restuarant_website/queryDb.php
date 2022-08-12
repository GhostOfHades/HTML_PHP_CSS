<?php

   class MyDB extends SQLite3
   {
      function __construct()
      {
            $this->open('1621ICT.db');
      }
   }

   function getEvents($searchTerm = null) {
      $db = new MyDB();
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }
      
        if(!$searchTerm) {
         $sql ='SELECT * from EVENTS;';
      } else {
         $sql ='SELECT * FROM EVENTS WHERE EVENTNAME LIKE "'.$searchTerm.'" OR DESCRIPTION LIKE "'.$searchTerm.'" OR LOCATION LIKE "'.$searchTerm.'" OR DATE LIKE "'.$searchTerm.'"';
      }
      $ret = $db->query($sql);
      $array = [];
      if(!$ret){
        echo $db->lastErrorMsg();
        return [];
      } else {
         while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $array[] = $row;
         }
         $db->close();
         return $array;
      }
   }

   function addEvent($ename, $loc, $desc, $date) {
      
      $db = new MyDB();
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }

      $sql ='INSERT INTO EVENTS (EVENTNAME, LOCATION, DESCRIPTION, DATE) VALUES ("'.$ename.'", "'.$loc.'", "'.$desc.'", "'.$date.'");';
      $db->query($sql);
   }
?>