<?php
use App\Models\scan;
use App\Http\Controllers\test;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Models\track as blan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome1')->name('welcome');
});

Route::get('/qrcode', function () {
    return view('welcome2');
})->name('qrcodee');
Route::get('vue',function(){
	
    $test=scan::where('id',session('id'))->first();
	$trackk=blan::All()->where('id',session('id'));
    if($test)
   return view('vuee',['data'=>$test,'trackk'=>$trackk]);
})->name('vue');
Route::any('login',[test::class,'login'])->name('login');
Route::any('qrcode',[test::class,'direct'])->name('qrcode');
Route::post('store',[test::class,'store'])->name('store');
// Route::get('vue',function(){
// $test=scan::where('id',session::get('id'))->first();
// Session::put('scancount',$test->scan_count);
// });
Route::get('vue/{id}',function($id){
    $test=scan::where('id',$id)->first();
    //  Session::put('scancount',$test->scan_count);
     Session::put('id',$id);
    return redirect()->route('vue');
});
Route::any('/{id}',function ($id){
	
    $user_agent =  $_SERVER['HTTP_USER_AGENT'];
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
        '/windows nt 10/i'     	=>  'Windows 10',
        '/windows nt 6.3/i'     =>  'Windows 8.1',
        '/windows nt 6.2/i'     =>  'Windows 8',
        '/windows nt 6.1/i'     =>  'Windows 7',
        '/windows nt 6.0/i'     =>  'Windows Vista',
        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
        '/windows nt 5.1/i'     =>  'Windows XP',
        '/windows xp/i'         =>  'Windows XP',
        '/windows nt 5.0/i'     =>  'Windows 2000',
        '/windows me/i'         =>  'Windows ME',
        '/win98/i'              =>  'Windows 98',
        '/win95/i'              =>  'Windows 95',
        '/win16/i'              =>  'Windows 3.11',
        '/macintosh|mac os x/i' =>  'Mac OS X',
        '/mac_powerpc/i'        =>  'Mac OS 9',
        '/linux/i'              =>  'Linux',
        '/ubuntu/i'             =>  'Ubuntu',
        '/iphone/i'             =>  'iPhone',
        '/ipod/i'               =>  'iPod',
        '/ipad/i'               =>  'iPad',
        '/android/i'            =>  'Android',
        '/blackberry/i'         =>  'BlackBerry',
        '/webos/i'              =>  'Mobile'
    );

    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }
    $user_agent= $_SERVER['HTTP_USER_AGENT'] ;

		$browser        =   "Unknown Browser";

		$browser_array  =   array(
			'/msie/i'       =>  'Internet Explorer',
			'/Trident/i'    =>  'Internet Explorer',
			'/firefox/i'    =>  'Firefox',
			'/safari/i'     =>  'Safari',
			'/chrome/i'     =>  'Chrome',
			'/edge/i'       =>  'Edge',
			'/opera/i'      =>  'Opera',
			'/netscape/i'   =>  'Netscape',
			'/maxthon/i'    =>  'Maxthon',
			'/konqueror/i'  =>  'Konqueror',
			'/ubrowser/i'   =>  'UC Browser',
			'/mobile/i'     =>  'Handheld Browser'
		);

		foreach ($browser_array as $regex => $value) {

			if (preg_match($regex, $user_agent)) {
				$browser    =   $value;
			}

		}
        $tablet_browser = 0;
		$mobile_browser = 0;

		if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
			$tablet_browser++;
		}

		if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
			$mobile_browser++;
		}

		if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
			$mobile_browser++;
		}

		$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
		$mobile_agents = array(
			'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
			'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
			'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
			'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
			'newt','noki','palm','pana','pant','phil','play','port','prox',
			'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
			'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
			'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
			'wapr','webc','winw','winw','xda ','xda-');

		if (in_array($mobile_ua,$mobile_agents)) {
			$mobile_browser++;
		}

		if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
			$mobile_browser++;
	            //Check for tablets on opera mini alternative headers
			$stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
			if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
				$tablet_browser++;
			}
		}

		if ($tablet_browser > 0) {
	           // do something for tablet devices
			$device='tablet';
		}
		else if ($mobile_browser > 0) {
	           // do something for mobile devices
			$device='mobile';
		}
		else {
	           // do something for everything else
			$device='computer';
		}   

		$track=new blan();	
		
$test=scan::where('id',$id)->first();
$track->id=$id;
$track->AdressIp=$_SERVER['REMOTE_ADDR'];
$track->Systeme=$os_platform;
$track->Browser=$browser;
$track->Device=$device;
$track->save();


$test->scan_count++;
$test->Adress_ip=$_SERVER['REMOTE_ADDR'];
$test->Systeme=$os_platform;
$test->navigateur=$browser;
$test->device=$device;


$test->save();
return redirect()->away('https://'.$test->qr_code);
});


// Route::get('hh',function () {
//    $users='https://api.beaconstac.com/reporting/2.0/?organization=&method=Products.getPerformance'
 
// dd($users);


