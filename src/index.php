<?php 
$redis = new Redis();
$redis->pconnect('redis', 6379);
//$redis->delete('visits');
echo "Visits so far: " . $redis->rPush('visits', date(DATE_ISO8601, time()));
?>