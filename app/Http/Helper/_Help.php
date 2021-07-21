<?php

namespace App\Http\Helper;

use Illuminate\Support\Facades\Config;

class _Help
{
  public static function captcha()
  {
    //Капча
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
      'secret' => env('RECAPTCHA_KEY_SECRET'),
      'response' => request('recaptcha')
    ];

    $options = [
      'http' => [
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
      ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $resultJson = json_decode($result);
    return $resultJson;
  }

  public static function Url($url)
  {
    $url_origin = explode('/', $_SERVER['REQUEST_URI']);

    if($url_origin[1] == $url || (isset($url_origin[2]) && $url_origin[2] == $url))
      echo "active";
  }

  public static function Lang($lang)
  {
    if( $lang == Config::get('app.locale') ) echo "active";
  }
	
	public static function format_date($mysql_date, $case)
	{
		if ($mysql_date && ($mysql_date != "0000-00-00 00:00:00")) {
			$array = explode(' ',$mysql_date); //Разбиваем MySQL на дату и время
			
			$array_date = explode('-',$array[0]); //Разбиваем дату на массив
			$array_time = explode(':',$array[1]); //Разбиваем время на массив
			
			//Создаем русские названия месяцев для последующей замены
			$month['ru']['01'] = 'января';
			$month['ru']['02'] = 'февраля';
			$month['ru']['03'] = 'марта';
			$month['ru']['04'] = 'апреля';
			$month['ru']['05'] = 'мая';
			$month['ru']['06'] = 'июня';
			$month['ru']['07'] = 'июля';
			$month['ru']['08'] = 'августа';
			$month['ru']['09'] = 'сентября';
			$month['ru']['10'] = 'октября';
			$month['ru']['11'] = 'ноября';
			$month['ru']['12'] = 'декабря';
			
			$month_light['ru']['01'] = 'янв';
			$month_light['ru']['02'] = 'фев';
			$month_light['ru']['03'] = 'мар';
			$month_light['ru']['04'] = 'апр';
			$month_light['ru']['05'] = 'май';
			$month_light['ru']['06'] = 'июн';
			$month_light['ru']['07'] = 'июл';
			$month_light['ru']['08'] = 'авг';
			$month_light['ru']['09'] = 'сен';
			$month_light['ru']['10'] = 'окт';
			$month_light['ru']['11'] = 'ноя';
			$month_light['ru']['12'] = 'дек';
			
			//Создаем английские названия месяцев для последующей замены
			$month['en']['01'] = 'января';
			$month['en']['02'] = 'февраля';
			$month['en']['03'] = 'марта';
			$month['en']['04'] = 'апреля';
			$month['en']['05'] = 'мая';
			$month['en']['06'] = 'june';
			$month['en']['07'] = 'июля';
			$month['en']['08'] = 'августа';
			$month['en']['09'] = 'сентября';
			$month['en']['10'] = 'октября';
			$month['en']['11'] = 'ноября';
			$month['en']['12'] = 'декабря';
			
			$month_light['en']['01'] = 'янв';
			$month_light['en']['02'] = 'фев';
			$month_light['en']['03'] = 'мар';
			$month_light['en']['04'] = 'апр';
			$month_light['en']['05'] = 'май';
			$month_light['en']['06'] = 'июн';
			$month_light['en']['07'] = 'июл';
			$month_light['en']['08'] = 'авг';
			$month_light['en']['09'] = 'сен';
			$month_light['en']['10'] = 'окт';
			$month_light['en']['11'] = 'ноя';
			$month_light['en']['12'] = 'дек';
			
			//Если день месяца меньше десяти, то убераем ноль перед числом
			if ($array_date[2]<10) {
				$array_date[2] = str_replace(0, '', $array_date[2]);
			}
			
			$day = date('D', mktime(0,0,0,$array_date[1],$array_date[2],$array_date[0])); //Получаем день недели для данной даты
			
			$weekday['ru']['Mon'] = 'Понедельник';
			$weekday['ru']['Tue'] = 'Вторник';
			$weekday['ru']['Wed'] = 'Среда';
			$weekday['ru']['Thu'] = 'Четверг';
			$weekday['ru']['Fri'] = 'Пятница';
			$weekday['ru']['Sat'] = 'Суббота';
			$weekday['ru']['Sun'] = 'Воскресенье';
			
			$weekday['en']['Mon'] = 'Понедельник';
			$weekday['en']['Tue'] = 'Вторник';
			$weekday['en']['Wed'] = 'Среда';
			$weekday['en']['Thu'] = 'Четверг';
			$weekday['en']['Fri'] = 'Пятница';
			$weekday['en']['Sat'] = 'Суббота';
			$weekday['en']['Sun'] = 'Воскресенье';
			
			$lang = Config::get('app.locale');
			
			// Пятница, 27 января 2006 года.
			if ($case == 1) {
				$date = $weekday[$lang][$day] .', '. $array_date[2] .' '. $month[$lang][$array_date[1]] .' '. $array_date[0].' года';
			}
			
			// 27.01.2006
			if ($case == 2) {
				$date = $array_date[2] .'.'. $array_date[1] .'.'. $array_date[0];
			}
			
			// 27.01.2006 в 17:15
			if ($case == 3) {
				$date = $array_date[2] .'.'. $array_date[1] .'.'. $array_date[0] .' в '. $array_time[0] .':'. $array_time[1];
			}
			
			// 27 января 2006 в 17:15
			if ($case == 4) {
				$date = $array_date[2] .' '. $month[$lang][$array_date[1]] .' '. $array_date[0].' в '.$array_time[0] .':'. $array_time[1];
			}
			
			// 27 января 2006
			if ($case == 5) {
				$date = $array_date[2] .' '. $month[$lang][$array_date[1]] .' '. $array_date[0];
			}
			
			// 27 янв
			if ($case == 6) {
				$date = $array_date[2] .' '. $month_light[$lang][$array_date[1]];
			}
		} else {
			return $date = '';
		}
		//Возвращаем отформатированную дату
		return $date;
	}

}