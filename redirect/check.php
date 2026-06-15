<?php
$is_logged_in = false;

if($is_logged_in){
    header("Location:./success.php");
    exit; // အောက်က code တွေ ဆက်မအလုပ်လုပ်အောင် ချက်ချင်းရပ်မယ်
}
else{
    header("Location:./failed.php");
    exit; // အောက်က code တွေ ဆက်မအလုပ်လုပ်အောင် ချက်ချင်းရပ်မယ်
}
