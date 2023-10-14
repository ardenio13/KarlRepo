<?php
class GlobalClass
{
    // Function to format a number with 2 decimal places, using "." as the decimal separator and "," as the thousands separator
    function numberformat($number)
    {
        return number_format($number, 2, ".", ",");
    }

    // Function to determine the stock quantity remark based on the provided number
    function QtyRemark($number)
    {
        if ($number <= 0) {
            echo "<font color='#B40404'>Out of Stock</font>";
        } elseif ($number >= 1 && $number <= 10) {
            echo "<font color='#DF7401'>Low Stock</font>";
        } else {
            echo "<font color='#0B610B'>On Stock</font>";
        }
    }

    // Function to generate a SQL condition based on the provided stock status
    function QtySort($status)
    {
        if ($status == "Out of Stock") {
            $ret = " and lqty<=0";
        } elseif ($status == "Low Stock") {
            $ret = " and lqty>=1 and lqty<=10";
        } else {
            $ret = " and lqty>=11";
        }
        return $ret;
    }

    // Function to generate options for selecting hours (00-12) in a dropdown
    function DpHour()
    {
        echo "<option value='00'>00</option>";
        for ($x = 1; $x <= 12; $x++) {
            echo "<option value='" . $x . "'>" . $x . "</option>";
        }
    }

    // Function to generate options for selecting minutes (00-59) in a dropdown
    function DpMin()
    {
        echo "<option value='00'>00</option>";
        for ($x = 1; $x <= 60; $x++) {
            echo "<option value='" . $x . "'>" . $x . "</option>";
        }
    }

    // Function to generate options for selecting AM or PM in a dropdown
    function DpAMPM()
    {
        echo "<option value='AM'>AM</option>";
        echo "<option value='PM'>PM</option>";
    }
}
?>