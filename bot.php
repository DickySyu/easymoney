<?php
$fkUsrUserId= "a6e0dff97c8041218357b9ae27f82811";
$time= 5;  //gi芒y.
// id acc c峄 b岷馃槀馃槀馃槀
Echo "       鈥硷笍 馃榿馃榿馃榿Bot Tool Spin Easy Money V1馃榿馃榿馃榿鈥硷笍
馃敎馃敎馃敎馃敎馃敎M岷h Master collapse H膫N C_GAMER 馃敋馃敋馃敋馃敋馃敋\n"; 
Echo " 馃弫 膼ang kh峄焛 膽峄檔g bot ! M岷h Master - H膫N C_GAMER 馃弫\n";
Echo "          馃憠M岷燦H MASTER FB V脌 H膫N C_GAMER馃憟 
鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍鈽笍
YOUTUBE H膫N C_GAMER: HELLO AE 膼脙 膼岷綨 V峄欼 K脢NH M脤NH NH脕 NH峄� SUB K脢NH 膼峄� C脫 TOOL M峄欼 C脕M 茽N AE 膼脙 REF CHO M脤NH -> M脙 REF : 7SX3LS \n"; 
Echo " 鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍鉂わ笍 \n";
$coin = array(0,2,8,10,16,24,40,50,100);
while(1){
$m= file_get_contents("http://39.106.250.13:7500/easy_money/api/gm/gametype/gmGameType/getByUserAndGameType?fkUsrUserId=".$fkUsrUserId."&fkGmGameTypeId=d7e1c39877254d2b8eca3030ec0281be");
$jn = json_decode($m,true); 
$spin = $jn['data']['userResidue'];
$next_time= $jn['data']['nextAddResidueTime']/1000;

if( $spin!=0){
for( $a=0; $a < $spin ; $a++){
$data = "fkUsrUserId=".$fkUsrUserId."&fkGmGameTypeId=d7e1c39877254d2b8eca3030ec0281be&awardAmount=".$coin[rand(0,8)];
$data1  = "fkUsrUserId=".$fkUsrUserId."&fkGmGameTypeId=d7e1c39877254d2b8eca3030ec0281be";
$url = "http://39.106.250.13:7500/easy_money/api/gm/gametype/gmGameType/consumeGameLife";
$url2 = "http://39.106.250.13:7500/easy_money/api/gm/gametype/gmGameType/awardGameRecord";

$curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data1
    ));
echo   curl_exec($curl);                                  
curl_close($curl);
$curl = curl_init();
echo "\n";
$curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url2,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data
    ));
echo   curl_exec($curl);          
echo "\n";                        
curl_close($curl);
$curl = curl_init();
echo "\n";
sleep($time);
 }
 }else {
 	$giay= $next_time  - time() + 1 ;
 	Echo " Next spin sau : ".$giay." gi芒y \n ";
 	sleep($giay);
 }
}
?>
