<?php
/**
 */

namespace App;

class TradeHelper
{

// Esta é a função a ser chamada no botão de ação, ela chama as demais e salva também os sinais no BD.
public static function generateIA(){
  $url = "https://api.coingecko.com/api/v3/exchanges/binance";
  $data = self::getData($url);
  $data = json_decode($data, false);
  foreach($data->tickers as $key => $value){
      if (($value->target == 'BTC' || $value->target == 'USDT') && ($value->base != 'PSG' && $value-base != 'JUV')){
        if (intval($value->converted_volume->btc) > 500){
          self::crossing($value->base, $value->target);
        }
      }
  }
}
  
public static function Mamae($data, $ma, $mae, $base, $target){
    $selisih = 0;
    $range = 0;
    $prev = 0;
    $close = (float)($data[count($data)-1][4]);
    $text = "error";
    if($mae[count($mae)-1] < $ma[count($ma)-1]){
        $prev = $ma[count($ma)-2] - $mae[count($mae)-2];
        $selisih = $ma[count($ma)-1] - $mae[count($mae)-1];
        if($prev > $selisih){
            $range = $close*0.23/100;
            if($selisih < $range){
                self::gravar($close, $base, $target, 'Media Aritmetica');
            }
        }
    }
}
  
public static function Stochastic($data, $persenK, $persenD, $base, $target){
    $text = "error";
    $close = $data[count($data)-1][4];
    if($persenK[count($persenK)-1] < 20 && $persenD[count($persenD)-1] < 20){
        self::gravar($close, $base, $target, 'Estocastico');
    }
}

public static function ParabolicSAR($data, $parabolicSAR, $base, $target){
    $close = (float)$data[count($data)-1][4];
    $prev = (float)$data[count($data)-2][4];
    if($parabolicSAR[count($parabolicSAR)-2] < $prev){
        if($parabolicSAR[count($parabolicSAR)-1] > $close){
            self::gravar($close, $base, $target, 'ParabolicSAR');
        }
    }
}

public static function crossing($base, $target){
    $coin = $base."".$target;
    $url = "https://api.binance.com/api/v1/klines?symbol=".$coin."&interval=15m";
    $data = getData($url);
    $data = json_decode($data);        

    //PSAR
    $Acc = 0.02;
    $EP = (float)($data[0][3]);
    $hp = (float)($data[0][2]);
    $lp = (float)($data[0][3]);
    $up = true;
    $PSar = 0;

    //Dapatkan setiap data close yang ada
    $persenK = [];
    $persenD = [];
    $ma = [];
    $mae = [];
    $parabolicSAR = [];
    $jml = 0;
    $list = array_slice($data, 50, count($data));
    for ($i=0; $i < count($list); $i++) { 

        //Hitung MA50 dan MAE5 dari data indeks ke-0
        $sum = 0;
        for ($j=$i; $j<($i+50); $j++) { 
            $sum = $sum+((float)($data[$j][4]));
        }
        $sum = $sum/50;
        $ma[] = $sum;

        $close = (float)($list[$i][4]);
        if($i == 0){
            $jml = (($close-$sum)*(2/6))+$sum;
        }else{
            $jml = (($close-$jml)*(2/6))+$jml;
        }
        $mae[] = $jml;

        //Hitung Stochastic
        $max = 0;$min = 0;
        for ($j=($i+37); $j < ($i+51); $j++) { 
            $high = (float)($data[$j][2]);
            $low = (float)($data[$j][3]);
            if($max <= $high){
                $max = $high;
            }
            if($min >= $low || $min == 0){
                $min = $low;
            }
        }
        $persenK[$i] = (100*($close-$min))/($max-$min);
        if($i >= 2){
            $sum = 0;
            for ($j=($i-2); $j <= $i ; $j++) { 
                $sum = $sum+$persenK[$j];
            }
            $persenD[$i] = $sum/3;
        }else{
            $persenD[$i] = $persenK[$i];
        }

        if ($i > 0) {
            $SARn = $PSar;
            if ($up) {
                $PSar = $SARn + $Acc * ($hp - $SARn);
            } else {
                $PSar = $SARn + $Acc * ($lp - $SARn);
            }
            $reverse = false;
            if ($up) {
                if ($list[$i][3] < $PSar) {
                    $up = false;
                    $reverse = true;
                    $PSar = $hp;
                    $lp = (float)($list[$i][3]);
                    $Acc = 0.02;
                }
            } else {
                if ($list[$i][2] > $PSar) {
                    $up = true;
                    $reverse = true;
                    $PSar = $lp;
                    $hp = (float)($list[$i][2]);
                    $Acc = 0.02;
                }
            }
            if (!$reverse && $i > 1) {
                if ($up) {
                    if ($list[$i][2] > $hp) {
                        $hp = (float)($list[$i][2]);
                        $Acc = min($Acc + 0.02, 0.2);
                    }
                    if ($list[$i - 1][3] < $PSar) {
                        $PSar = (float)($list[$i - 1][3]);
                    }
                    if ($list[$i - 2][3] < $PSar) {
                        $PSar = (float)($list[$i - 2][3]);
                    }
                } else {
                    if ($list[$i][3] < $lp) {
                        $lp = $list[$i][3];
                        $Acc = min($Acc + 0.02, 0.2);
                    }
                    if ($list[$i - 1][2] > $PSar) {
                        $PSar = (float)($list[$i - 1][2]);
                    }
                    if ($list[$i - 2][2] > $PSar) {
                        $PSar = (float)($list[$i - 2][2]);
                    }
                }
            }
        } else {
            $PSar = $list[$i][4];
        }
        $PSar = (float)($PSar);
        $parabolicSAR[] = $PSar;
    }
    self::ParabolicSAR($data, $parabolicSAR, $base, $target);
    self::Mamae($data, $ma, $mae, $base, $target);
    self::Stochastic($data, $persenK, $persenD, $base, $target);
}

public static function getData($url){
	$curl_handle = curl_init();
	curl_setopt($curl_handle, CURLOPT_URL,$url);
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl_handle, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl_handle, CURLOPT_SSLVERSION, 'CURL_SSLVERSION_SSLv3');
	$result = curl_exec($curl_handle);
	curl_close($curl_handle);
	return $result;
}

public static function gravar($buy, $base, $target, $estrategia){

		$pair = $base."/".$target;
		$preco_real = $buy;
		if($target == "USDT" || $target == "USD"){
				$buy = $buy;
				$tp1 = (float)($buy+($buy*0.01));
				$tp2 = (float)($buy+($buy*0.02));
				$tp3 = (float)($buy+($buy*0.03));
				$stop = (float)($buy-($buy*0.03));
		}else{
				$buy = $buy*100000000;
				$tp1 = (int)($buy+($buy*0.01));
				$tp2 = (int)($buy+($buy*0.02));
				$tp3 = (int)($buy+($buy*0.03));
				$stop = (int)($buy-($buy*0.03));
		}
		$now = date("Y-m-d H:i:s");

		$res = $db->where('par', $pair)->where('exchange', 'Binance')->where('status',5,'<')->getValue(BD_ROBO_SINAIS, "count(*)");
		
		if($res < 1 && $buy != 0){
        $sinal = array("id_usuario" => $id, "descricao" => "Sinal IA", "estrategia" => $estrategia, "par" => $pair, "exchange" => "Binance", "preco" => $buy, "preco_real" => $preco_real, "tp1" => $tp1, "tp2" => $tp2, "tp3" => $tp3, "tp4" => $tp4, "tp5" => $tp5, "stop" => $stop, "data_envio" => $now, "data_update" => $now, "status" => 0);

				$r = $db->insert(BD_ROBO_SINAIS, $sinal);
				if($r) { return true; }
        else { return false; }
		}
}
  
}

?>