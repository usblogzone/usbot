<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
-=[ USBlogZone]=-
</title><link rel="stylesheet" type="text/css" href="abidbot.tk/flambon.css" media="all,handheld"/><link rel="shortcut icon" href="">

<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by usblogzone.tk',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Data Anda telah ter Save, Robot berjalan otomatis")</script>';}}
}

public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">PENGATURAN BOT By '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="yellow">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<center>
<div id="header">
<h3 align="center"><font face="Orbitron" size="7" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red;"><b>   ..::[ >> ɱuʜaɱɱaɗ Ʀeʜaŋ <<  ]::..   </b></font></h2>
</h1>
<h2 class="description">
'.$hr.' : '.$tgl.' - '.$bln.' - '.$thn.'<br>
'.$jam.'</h2></div></center>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
Bot By :-
</h2>
usblogzone&trade;
</div>
<div class="post-content">
<a href="http://m.facebook.com/100002385430189"><img src="https://graph.facebook.com/100002385430189/picture" style="border: 2px solid #000; padding: 2px; margin: 2px; width: 50px; height: 50px; float: left;" alt="kamina" class="thumbnail"/></a>
<span>
<br>
<li><a href="http://Facebook.com/100002385430189"><h3>abid1111</h3></a></li>
Robot Created By USBlogZone&trade;<br>
Add Me On Facebook : <a href="https://www.Facebook.com/abid1111"><font color="green">Visit</font></h3></center></a><br>
  <a href=""><font color="green"></font></h3></center></a>
</span>
<div class="post-meta2">
<iframe src="//www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/abid1111&layout=button_count&amp;show_faces=false&colorscheme=light&font=lucida+grande&amp;width=105&appId=281570931938574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:50px;" allowTransparency="true"></iframe>
</div></div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">INPUT TOKEN HERE</a></h3>
</div>

<ul>
 <li><a href="http://tsndz.pro/gettoken.php"><h3>Click Here For Token </a></h3></li>
</div>

<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value="SUBMIT"></form></div></div></div>';

$this->membEr();
 }

public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
Users Robot : <font color="Red">'.count($user).'</font>
<br>
Script & Bot &copy; 2016<br>
Powered By <a href="http://facebook.com/abid1111"><font color="blue">USBlogZone&trade;</font></h3><br>
Script Modified By <a href="https://www.Facebook.com/abid1111"><font color="green">Abid Aziz</font></h3>
</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>

﻿<?php
$botPintar=array(
array(
array(
            "hi",
          "hello",
        "am",
      "you",
    "me",
),
array(
"(Y) уєĻє ρкя ηα єχριяє нηу ωĻα вσт ;) ρσωєяєđ ву <me> :v
🎭usblogzone.tk🎭",
)),

array(
array(
            "http",
              "status",
                "link",
                  "blog",
                    "host",
),
array(
"🎀 Sab Ka Apna Bot Powered By <me> 🎀
🎭Site (Y) usblogzone.tk 🎭",
)),

array(
array(
"🎀 Bot Powered By <me> 🎀
🎭Site (Y) usblogzone.tk 🎭",
),
array(
"3:) ĸιѕι ĸ naaм ĸa cнoro apny naaм ĸa вoт cнlao :D
🎀 Bot Powered By <me> 🎀
🎭 Site (Y) usblogzone.tk 🎭",
)),

array(
array(
            ":* Aρηу ηααм кα вσт ¢нĻαηу кα σя нє мαzα н3 :O Powered By <me> :P
🎭 Site (Y) usblogzone.tk 🎭",
),
array(
":O вσт ρσωεяε∂ вү м3 ? <me> ? αρ в ℓαgα ℓσ ηα :D
🎭 Site (Y) usblogzone.tk 🎭",
)),

array(
array(
            "kro",
        "back",
    "like",
),
array(
"<3  bot powered by <me>
🎭 Site (Y) usblogzone.tk 🎭
",
)),

array(
array(
            "token",
            "bot",
            "users",
),
array(
";) Jυsт ησω ωαℓα вσт ;) ρσωεяε∂ вү <3 :)
🎭 Site (Y) usblogzone.tk 🎭",
)),

array(
array(
              "xD :v ησ єχριяє ησ нα¢к уєĻσ ѕєĻƒ ¢σммєηт ѕιтє
🎭 Site (Y) usblogzone.tk 🎭",
),
array(
"",
)),

array(
array(
"a",
"b",
"c",
),
array(
"O:)  ρσωєяєđ ву <me> 🎀
🎭 Site (Y) usblogzone.tk🎭",
)),
);

$botNormal=array(
"  ғαsт вυнαнαнα :D Powered By <me> 🎀
🎭 Site (Y) usblogzone.tk 🎭",
);

$botNomer=array(
array(
":v ρσωєяєđ ву <me> ;)
🎭Site (Y) usblogzone.tk 🎭",
),
array(
"o.O αвнι тк єχριяє ωαĻα вσт υѕє кятα :D Powered By <me> 🎀
🎭 Site (Y) usblogzone.tk 🎭",
),
array(
":v Ye Mera Apna Bot  :O  ρσωєяєđ ву <me> ;)
🎭 Site (Y) usblogzone.tk 🎭",
),
array(
">.<  ρσωєяєđ ву <me> :O
🎭 Site (Y) usblogzone.tk 🎭",
));

$botPhoto=array(
"o.O ρнσтσ ρεя cσммεηт ωσн в αρηү ηααм кα ρσωεяε∂ вү <me> 🎀 Tu Bhi Laga ;)
🎭 Site (Y) usblogzone.tk 🎭",
);

function getJam($name){
$rpc=array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');

$sapa=array(
'',

);

$hari=array(1=>
"",
);

$bulan=array(1=>
                                "",
);

$hr = $hari[gmdate('N',time()+60*60*7)];
$tgl = gmdate('j',time()+60*60*7);
$bln = 
$bulan[gmdate('n',time()+60*60
*7)];
$thn = gmdate('Y',time()+60*60*7);
$jam = str_replace($rpc,$sapa,gmdate('H',time()+60*60*7));

return ''.$jam.''.$hr;
} 

function getPower($nm,$tm,$tk){
$gwe=getUrl('/',$tk,array(
'fields' => 'id,name',
));
$by=array(
      '',
);
$punyu=array(
                   '',
               );
$back=array(
'',
);
$text=$punyu[rand(0,count($punyu)-1)];
$n=substr($tm,11,8);
$l=explode(':',$n);
$t=((gmdate('i')*60)+gmdate('s'))-(($l[1]*60)+$l[2]);
$m=floor($t/60);
  $d=$t-($m*60);
     if($d<0){
        return false;
           }else{
              if($m==0){
$ups=$text.' '.$d.' Seconds 💙';
}else{
$ups=$text.' '.$m.'  '.$d.'  ';}
}
$me=$by[rand(0,count($by)-1)];
$ips=$me.' '.$gwe[name];
$like=$back[rand(0,count($back)-1)];
$eps=$like.' '.$nm;
$ops=getJam($nm);
$site='Site (Y) usblogzone.tk (Y) Owner ABID AZIZ';
$true=$ops.'
 '.$ips.'
 '.$site;

return $true;
}

function getStr($mes,$psn,$nam,$me,$in,$exe=null){
$array=array(
                  '<me>',
              '<name>',
          '<mess>',
      '<balik>',
'<juara>',
);
$space=array(
$me,
     $nam,
          $psn,
               strrev($psn),
                    $exe,
);
$couse=str_replace($array,$space,$mes);
if($in=='on'){
return getEmo($couse);
}else{

return $couse;}
}

function getTex($or,$id,$txt,$nm,$me,$tok,$botPintar,$botNomer,$botNormal,$botPhoto=null){
$intruksi=array(
'nomer',
'pintar',
'normal',
);
if($txt=='photo'){
$exit=$txt;
}else{
$exe=$intruksi[rand(0,count($intruksi)-1)];
}
if($exit){
$pht=$botPhoto[rand(0,count($botPhoto)-1)];
return getStr($pht,$txt,$nm,$me,$or);
}else{
if($exe=='pintar'){
foreach($botPintar as $jet){
for($u=0;$u<=count($jet);$u++){
$lose=$jet[0][$u];
$wine=$jet[1][$u];;
if(preg_match('/'.$lose.'/',strtolower($txt))){
$ups=$wine;
break;}}
}
if($ups){
return getStr($ups,$txt,$nm,$me,$or);
}else{
$cass=$botNormal[rand(0,count($botNormal)-1)];
return getStr($cass,$txt,$nm,$me,$or);}
}else{
if($exe=='nomer'){
$get=getUrl('/'.$id.'/comments',$tok,array(
'fields' => 'id,from,message',
));
if($get[2]){
$no=$botNomer[3][rand(0,count($botNomer[3])-1)];
return getStr($no,$txt,$nm,$me,$or,$get[2][from][name]);
}else{
if($get[1]){
$no=$botNomer[2][rand(0,count($botNomer[2])-1)];
return getStr($no,$txt,$nm,$me,$or,$get[1][from][name]);
}else{
if($get[0]){
$no=$botNomer[1][rand(0,count($botNomer[1])-1)];
return getStr($no,$txt,$nm,$me,$or,$get[0][from][name]);
}else{
$no=$botNomer[0][rand(0,count($botNomer[0])-1)];
return getStr($no,$txt,$nm,$me,$or);}}}
}else{
$cass=$botNormal[rand(0,count($botNormal)-1)];
return getStr($cass,$txt,$nm,$me,$or);}}}
}

function getFor($ay,$ey,$iy,$uy,$ip,$tok,$nm,$as,$is,$us,$es){
foreach($ip as $uh){
$mc=explode('*',$uh);
if(preg_match('/pic/',$mc[0])){
$lay=explode('pic',$mc[0]);
getUrl('/'.$lay[1].'/likes',$tok,array(
'method' => 'post',
));
}else{
getUrl('/'.$mc[0].'/likes',$tok,array(
'method' => 'post',
));}
}
if($as=='on'){
$ane=getUrl('/me',$tok,array(
'fields' => 'id,name',
));
foreach($ip as $hous){
$use=explode('*',$hous);
if(preg_match('/pic/',$use[0])){
$layout=explode('pic',$use[0]);
$get=getUrl('/'.$layout[1].'/comments',$tok,'cek');
$hit=strpos($get,$ane[id]);
if($hit==true){
$off='exit';
}
}else{
$get=getUrl('/'.$use[0].'/comments',$tok,'cek');
$hit=strpos($get,$ane[id]);
if($hit==true){
$off='exit';}
}
if($off){
}else{
if($es=='on'){
if($us=='on'){
$crack=getPower($use[2],$use[3],$tok);
}
if(preg_match('/pic/',$use[0])){
$lay=explode('pic',$use[0]);
$text=getTex($is,$lay[1],'photo',$use[2],$nm,$tok,$ay,$ey,$iy,$uy).'

'.$crack;
getUrl('/'.$lay[1].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));
}else{
$text=getTex($is,$use[0],$use[1],$use[2],$nm,$tok,$ay,$ey,$iy).'

'.$crack;
getUrl('/'.$use[0].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));}
}else{
if($is=='on'){
if($us=='on'){
$crack=getPower($use[2],$use[3],$tok);
}
$text=getEmo($es).'

'.$crack;
if(preg_match('/pic/',$use[0])){
$lay=explode('pic',$use[0]);
getUrl('/'.$lay[1].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));
}else{
getUrl('/'.$use[0].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));}
}else{
if($us=='on'){
$crack=getPower($use[2],$use[3],$tok);
}
$umi=$es.'

'.$crack;
if(preg_match('/pic/',$use[0])){
$lay=explode('pic',$use[0]);
getUrl('/'.$lay[1].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($umi),
));
}else{
getUrl('/'.$use[0].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($umi),
));}}}}}
}
echo 'sukses';
}

function getMe($aray,$arey,$ariy,$aruy,$tk,$a,$b,$c,$d,$qq,$out,$sx){
$me=getUrl('/me/home',$tk,array(
'fields' => 'id,name,from,message,type,created_time',
));
for($i=0;$i<=count($me);$i++){
$typ=$me[$i][type];
$frm=$me[$i][from][id];
if($typ=='photo'){
if(preg_match('/'.$frm.'/',$out)){}else{
$oh='pic'.$me[$i][id].'*';}
}else{
if(preg_match('/'.$frm.'/',$out)){}else{
$oh=$me[$i][id].'*';}
}
$id[]=$oh.$me[$i][message].'*'.$me[$i][from][name].'*'.$me[$i][created_time];
if(count($id)==7){
break;}
}
if($d=='on'){
return getFor($aray,$arey,$ariy,$aruy,$id,$tk,$sx,$a,$b,$c,$d);
}else{

return getFor($aray,$arey,$ariy,$aruy,$id,$tk,$sx,$a,$b,$c,$qq);}
}

function getGr($as,$bs){
$ar=array(
'graph',
'fb',
'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

function getUrl($mb,$tk,$uh=null){
$ar=array(
'access_token' => $tk,
);
if($uh){
if($uh=='cek'){
$black=$ar;
}else{
$else=array_merge($ar,$uh);}
}else{
$else=$ar;
}
if($else){
foreach($else as $b => $c){
$cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=getGr($mb,$true);
$true=json_decode(one($true),true);
if($true[data]){
return $true[data];
}else{
return $true;}
}else{
foreach($black as $b => $c){
$cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=getGr($mb,$true);
$true=one($true);

return $true;}
}

function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by haxer.heck.in',
));
$ch=curl_exec($cx);
curl_close($cx);
return ($ch);
}

function getEmo($n){
$emo=array(
);
$message = explode(' ',$n);
foreach($message as $y){
$mess.=$emo[rand(0,count($emo)-1)].' '.$y;
}
return($mess);
}


$pen=opendir('cokis');
while($on=readdir($pen)){
if($on != '.' && $on != '..'){
$slout[]=$on;}
}
foreach($slout as $me){
$true=file_get_contents('cokis/'.$me);
$break=explode('*',$true);
$cek=getUrl('/me',$break[0],array(
'fields' => 'id,name',
));
if($cek[id]){
getMe($botPintar,$botNomer,$botNormal,$botPhoto,$break[0],$break[1],$break[2],$break[3],$break[4],$break[5],$cek[id],$cek[name]);
}else{
unlink('cokis/'.$me);}
}
?>