<?php
// ၁။ ကိုယ့်နိုင်ငံ Timezone ကို အရင်သတ်မှတ်မယ် (မဖြစ်မနေ လုပ်ရမယ်)
date_default_timezone_set("Asia/Yangon");

// ၂။ လက်ရှိနေ့စွဲကို ယူမယ်
$currentDate = date("d-F-Y");

// ၃။ လက်ရှိအချိန်ကနေ နောက်ထပ် ၁၀ ရက်ပေါင်းမယ် ("+10 days" လို့ Space လေးခံရေးရင် ပိုဖတ်ကောင်းတယ်)
// မှတ်ချက် - strtotime ထဲမှာ ဒုတိယ parameter အနေနဲ့ လက်ရှိအချိန်ကို ထပ်မထည့်လည်း ရတယ်။ default က now ကနေ စတွက်တယ်။
$expiredTimestamp = strtotime("+1 month"); 

echo "<pre>";
echo "Current Date: " . $currentDate . "\n";
echo "Expired Date: " . date("d-F-Y", $expiredTimestamp);
echo "</pre>";
?>