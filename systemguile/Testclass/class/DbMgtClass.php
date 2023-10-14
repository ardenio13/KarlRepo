<?php
class DbMgtClass
{
    // An array to store database connection settings
    private $setting = array();

    // Method to set database connection settings
    public function connection($dbaddress, $dbuser, $dbpass, $dbname)
    {
        // Store the database settings in the $setting array
        $this->setting['dbaddress'] = $dbaddress;
        $this->setting['dbuser'] = $dbuser;
        $this->setting['dbpass'] = $dbpass;
        $this->setting['dbname'] = $dbname;
    }

    // Method to establish a database connection
    public function ConDB()
    {
        // Connect to the database using stored settings
        $conn = mysql_connect($this->setting['dbaddress'], $this->setting['dbuser'], $this->setting['dbpass']);
        mysql_select_db($this->setting['dbname'], $conn);
    }

    // Method to insert a record into a table
    public function InsertRecord($table, array $data)
    {
        $this->ConDB(); // Establish a database connection
        $ctr = count($data);
        $x = 0;
        $separator = "";

        foreach ($data as $arry => $arryval) {
            $x++;
            if ($x >= 2 && $x <= $ctr) {
                $separator = ",";
            }
            // Build the field names and values for the SQL query
            $fld = $fld . $separator . $arry;
            $val = $val . $separator . $arryval;
        }

        // Create and execute the SQL insert query
        $sql = "insert into " . $table . " (" . $fld . ") value(" . $val . ")";
        mysql_query($sql);
    }

    // Method to delete records from a table based on a condition
    public function DeleteRecord($table, $condition)
    {
        $this->ConDB(); // Establish a database connection
        if ($condition != "") {
            $condition = "where " . $condition;
        }
        // Create and execute the SQL delete query
        $sql = "delete from $table $condition";
        mysql_query($sql);
    }

    // Method to update records in a table based on a condition
    public function UpdateRecord($table, array $data, $condition)
    {
        $this->ConDB(); // Establish a database connection
        if ($condition != "") {
            $condition = "where " . $condition;
        }
        $ctr = count($data);
        $x = 0;
        $separator = "";
        foreach ($data as $arry => $arryval) {
            $x++;
            if ($x >= 2 && $x <= $ctr) {
                $separator = ",";
            }
            // Build the field names and values for the SQL query
            $fld = $fld . $separator . $arry . "=" . $arryval;
        }
        // Create and execute the SQL update query
        $sql = "update $table set $fld $condition";
        mysql_query($sql);
    }

    // Method to fetch a single field value from a query result
    public function FetchRecord($sql, $field)
    {
        $this->ConDB(); // Establish a database connection
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        $fd = $row[$field];
        return $fd;
    }

    // Method to fetch a full query result
    public function FetchRecords($sql)
    {
        $this->ConDB(); // Establish a database connection
        $result = mysql_query($sql);
        return $result;
    }

    // Method to count records based on a query
    public function CountRecord($sql)
    {
        $this->ConDB(); // Establish a database connection
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        if ($row[0] >= 1) {
            $fd = $row[0];
        } else {
            $fd = 0;
        }
        return $fd;
    }

    // Method to check access rights based on group and page
    public function Access($gid, $pid)
    {
        $this->ConDB(); // Establish a database connection
        $sql = "select * from tblaccess where lpage='$pid' and lgroup='$gid'";
        $result = $this->FetchRecord($sql, "laccess");
        return $result;
    }
}
?>