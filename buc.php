<?php
// Start Coding 01:02

error_reporting(0);
system('clear');
//color
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[ 1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";


//color
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =	"\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
$res="\033[7m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";

$Color_Off="\033[0m";      
$Black="\033[0;30m";      
$Red= "\033[0;31m";         
$Green="\033[0;32m";      
$Yellow="\033[0;33m";       
$Blue="\033[0;34m";         
$Purple="\033[0;35m";      
$Cyan="\033[0;36m";       
$White="\033[0;37m";       
$IYellow="\033[0;93m";      
$IRed="\033[0;91m";         
$BIRed="\033[1;91m";
$Ijo="\033[1;92m";   
$On_Cyan="\033[46m";
$BIWhite="\033[1;97m";     
$BIBlue="\033[1;94m";      
$BICyan="\033[1;96m";       
$BIBlack="\033[1;90m";     
$BBlack="\033[1;30m";
$IBlack="\033[0;90m";  
$On_White="\033[47m";     
$BIBlue="\033[1;94m";
$On_IRed="\033[0;101m";
$On_Red="\033[41m";   
$On_Blue="\033[44m";
$On_Green="\033[42m";  
$IGreen="\033[0;92m";   
$IYellow="\033[0;93m";
$Icyan="\033[0;96m";
//red to yellow shade ↓

$r3="\033[01;38;5;196m";
$r2="\033[01;38;5;202m";
$r1="\033[01;38;5;208m";
$ry="\033[01;38;5;214m";
$y1="\033[01;38;5;220m";
$y2="\033[01;38;5;226m";
$y3="\033[01;38;5;228m";
/* END COLOR */


function slow($arr){
  $char = str_split($arr);
  foreach($char as $an){
    echo $an;
    usleep(10000);
  }
}

function fast($arr){
  $char = str_split($arr);
  foreach($char as $an){
    echo $an;
    usleep(500);
  }
}


function garis($arry){
  $chari = str_split($arry);
  foreach($chari as $ann){
    echo $ann;
    usleep(1500);
  }
}



// Start Coding 01:02
// Coding by Woylha
  $baner = $red."\n
  oo
     oo     OOOOOOOO:      OOOOOOOO!O
        oOOOO!!!!::::O    OO.......::!O
       OOO!!!::::::::O  O.......:    :!O
       OOO!!!!::::::::.OO........:    :!O
       OO!!!!:::::::..............:   :!O
       OOO!!!:::::::..............:   :!O
        OO!!::::::::.............:   :!O             
         OO!::::::::......oo.....::::!O
           O!!:::::::........oo..:::O
             !!!::::::..........ooO
                !!::::::.......O   oo
                  ::::::.....O        oo  .o
                     :::..O              ooo
                       ::.              oooo
";

slow($baner);
$kbw = "\n";
echo "\n";
slow($red."               [".$BIWhite."   Hallo Sayang".$red."   ]\n\n\n");

$name = " NAMA KAMU SIAPA ?";
slow($red."[".$BIWhite."+".$red."]".$BIWhite.$name);
sleep(2);
$nama=readline($red."\n[".$jsls."🙈🙈🙈".$read."]".$biru." MASUKKAN NAMA KAMU ==> ");
echo "\n\n";

// Kalo mau Ubah Warna Tulisany itu Di atas $kbw

slow($red."[".$BIWhite."+".$red."] ".$BIWhite."Hallo ".$nama." Cantik\n");
garis(str_repeat("\033[1;97m─",60).$kbw);
slow($red."[".$BIWhite."+".$red."] ".$BIWhite."Jujur Aku Menyukaimu\n");
garis(str_repeat("\033[1;97m─",60).$kbw);
slow($red."[".$BIWhite."+".$red."] ".$BIWhite."Aku Mencintai dirimu dan Sexy Mu\n");
garis(str_repeat("\033[1;97m─",60).$kbw);
slow($red."[".$BIWhite."+".$red."] ".$BIWhite."Ke Inget kita. Yang Setiap Malem Minggu Suka Nobar Bokep\n");
garis(str_repeat("\033[1;97m─",60).$kbw);
slow($red."[".$BIWhite."+".$red."] ".$BIWhite."Aku Ingin kita Mengenal Lebih dalam Lagi\n");
garis(str_repeat("\033[1;97m─",60).$kbw);
slow($red."[".$BIWhite."+".$red."] ".$BIWhite."Yang Lebih Serius Yang Tidak Hanya Nobar Bokep\n");
garis(str_repeat("\033[1;97m─",60).$kbw);
slow($red."[".$BIWhite."+".$red."] ".$BIWhite."Tpi Aku ingin Kita Melakukany Dengan Apa yang\n");
garis(str_repeat("\033[1;97m─",60).$kbw);
slow($red."[".$BIWhite."+".$red."] ".$BIWhite."Udah Kita Tonton Di Malam Minggu\n");
garis(str_repeat("\033[1;97m─",60).$kbw);
slow($red."[".$BIWhite."+".$red."] ".$BIWhite."Aku Sangat Ingin Kita Merasahkan Sensasiny Langsung\n");
garis(str_repeat("\033[1;97m─",60).$kbw);
slow($red."[".$BIWhite."+".$red."] ".$BIWhite."Yang Biasany Cuma mengandalkan Mata dan Imajinasi \n");
garis(str_repeat("\033[1;97m─",60).$kbw);
slow($red."[".$BIWhite."+".$red."] ".$BIWhite."Dengan Ini ....\n");
garis(str_repeat("\033[1;97m─",60).$kbw);

system('clear');

garis($baner);
echo "\n";
slow($red."         [".$BIWhite."   Please Terimah ya $nama".$red."   ]\n\n\n");
echo "$kbw";

$cint = " MAUKAH KAMU MENJADI PACARKU .. ?";
slow($red."[".$BIWhite."+".$red."]".$BIWhite.$cint);
sleep(2);
$cnt=readline($red."\n[".$jsls."🙈🙈️".$read."]".$biru." JAWAB YES/NO ==> ");
echo "\n\n";

if ($cnt == "YES") {

   echo " YESSS BISA NGENTODD\n";
   $wh=readline(" KETIK [ YES ] UNTUK CHAT KE WA==> ");
   
} else if($cnt == "NO"){

   echo "ANJG DI KASIH ENAK KAGAK MAU";
} 
else {
 
   echo "MAAF INPUT YANG ANDA MASUKKAN NGK SESUAI";
}
if ($wh == "YES") {

// Ganti link/url menjadi url WhatsApp kalian
   echo "\n\n REDIRECT WHATSAPP";
   system("xdg-open https://youtube.com/channel/UCcFgFUnjhadEzjKAMZuokvw");
} else if ($wh == "NO") {
   echo "YAUDAAH KALO NGK MAU";

} else {
   echo " SALAH INPUT COKK";

}
// End Coding 03:04

?>

