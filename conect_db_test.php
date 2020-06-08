<?php
try {
	    $dbh = new PDO('pgsql:host=10.10.29.147;port=6432;dbname=db', 'postgres','postgres');
	        foreach($dbh->query("SELECT * FROM pg_catalog.pg_tables WHERE  schemaname != 'pg_catalog' AND schemaname != 'information_schema'") as $row) {
			        print_r($row);
				    }
	        $dbh = null;
} catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	        die();
}
?>
