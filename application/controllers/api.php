<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends MY_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('restapi');
		$this->load->model('api_model');
	}


		function index() {

			$this->restapi->response_api('405');

			// echo $barcode;

			// $xxx = $this->config->rest_key_name();
			// var_dump($xxx); die();

		}

    function test(){

			header('Content-Type: application/json');
			echo json_encode($this->db->get('m_provinsi')->result());

				// $data = json_encode($this->db->get('m_provinsi')->result());

				// echo json_decode($this->schedule_all);


				// echo (APPPATH.'.libraries');
    }

    function schedule_all(){
        // header('Access-Control-Allow-Origin:*');
        // header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
        // header('Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding');

				// header('Content-Type: application/json');
				$xxx = "xxxxx";


				$data_provinsi = json_encode($this->db->get('m_provinsi')->result());

				return $xxx;

    }






	

	// function auth_api_key($id) {

	// 	// $id_member = $this->auth->get_user_data()->id_member;

	// 	$data = $this->api_model->get_api_key($id);

	// 	return ($data);
	// 	// var_dump(($data)); die();
	// }


	function test_product() {
		$request_method=$_SERVER["REQUEST_METHOD"];

		$apikey = $this->config->item('rest_key_name');
		$keyval = $_GET[$apikey];

		$rest = $this->restapi->auth_api_key($keyval);

		
		// var_dump(($rest)); die();
		
		if ($rest == true) {

			switch ($request_method) {
				case 'GET':

					$id=$this->uri->segment(3);

					if(!empty($id)) {
						$this->api_model->get_product($id);
					} else {
						$this->api_model->get_product();
					}
					
					// var_dump($this->auth_api_key()->key); die();

					break;
				case 'POST':
					
					date_default_timezone_set("Asia/Bangkok");

					$data = array(
					'kode_merchant' => $this->input->post('kode_merchant'),
					'kode_sku' => $this->input->post('kode_sku'),
					'kondisi' => $this->input->post('kondisi'),
					//    'keterangan' => $this->input->post('keterangan'),
					'min_pembelian' => $this->input->post('min_pembelian'),
					'stok' => $this->input->post('stok'),
					'harga' => $this->input->post('harga'),
					'promo' => $this->input->post('promo'),
					'berat_produk' => $this->input->post('berat_produk'),
					'berat_paket' => $this->input->post('berat_paket'),
					'created_by' => $this->input->post('kode_merchant')
					);

					//   if(!empty($_GET["id"]))
					//   {
						//  $id=intval($_GET["id"]);
						//  $mhs->update_mhs($id);
					$r = $this->api_model->insert_product($data);
					// $this->response($r);

					return $r;

					break;
				case 'DELETE':

					//    $id=intval($_GET["id"]);
					// 	 $mhs->delete_mhs($id);
					$this->restapi->response_api('405');

					break;
				default:
				
				// Invalid Request Method
					header("HTTP/1.0 405 Method Not Allowed");
					break;
				break;
			}

		}else {
			$this->restapi->response_api('405');
		}

	}

	
	
	function detail_toko(){

		header('Content-Type: application/json');

		$rest = $this->config->item('rest_key_name');
		$get_key = $_GET[$rest];

		$apikey = $this->restapi->auth_api_key($get_key);
		$task_id = $_GET['TaskId'];
		$sub_task_id = $_GET['SubTaskId'];
		$status = $_GET['Status'];
		
		$ReturnData = $this->api_model->get_toko($task_id,$sub_task_id,$status,$apikey);

	}

	function product(){
		header('Content-Type: application/json');

		$rest = $this->config->item('rest_key_name');
		$get_key = $_GET[$rest];

		$apikey = $this->restapi->auth_api_key($get_key);
		$task_id = $_GET['TaskId'];
		$sub_task_id = $_GET['SubTaskId'];
		$status = $_GET['Status'];
		$sku = $_GET['KodeSku'];

		$page = $_GET['PageNo'];
		$perpage = $_GET['TotalDataPerPage'];
		
		$ReturnData = $this->api_model->get_product($task_id,$sub_task_id,$status,$page,$perpage,$sku,$apikey);
	}

	function stok_produk_arr(){
		header('Content-Type: application/json');

		$rest = $this->config->item('rest_key_name');
		$get_key = $_GET[$rest];

		$apikey = $this->restapi->auth_api_key($get_key);
		$task_id = $_GET['TaskId'];
		$sub_task_id = $_GET['SubTaskId'];
		$status = $_GET['Status'];

		// $sku_arr = ($_GET['KodeSku']);
		$replace_arr = str_replace(" ","",$_GET['KodeSku']);
		$sku_arr = explode (",",$replace_arr);

		$page = $_GET['PageNo'];
		$perpage = $_GET['TotalDataPerPage'];

		// var_dump(($sku_arr)); die();

		$ReturnData = $this->api_model->get_stok_arr($task_id,$sub_task_id,$status,$sku_arr,$apikey);
	}

	function stok_produk_aktif(){
		header('Content-Type: application/json');

		$rest = $this->config->item('rest_key_name');
		$get_key = $_GET[$rest];

		$apikey = $this->restapi->auth_api_key($get_key);
		$task_id = $_GET['TaskId'];
		$sub_task_id = $_GET['SubTaskId'];
		$status = $_GET['Status'];
		$sku = $_GET['KodeSku'];

		$page = $_GET['PageNo'];
		$perpage = $_GET['TotalDataPerPage'];
		
		$ReturnData = $this->api_model->get_stok_active($task_id,$sub_task_id,$status,$page,$perpage,$sku,$apikey);
	}

	

	function update_status_product(){
		header('Content-Type: application/json');

		date_default_timezone_set("Asia/Bangkok");

		$rest = $this->config->item('rest_key_name');
		$get_key = $_GET[$rest];

		$apikey = $this->restapi->auth_api_key($get_key);

		$task_id = $_GET['TaskId'];
		$sub_task_id = $_GET['SubTaskId'];
		$page = $_GET['PageNo'];
		$perpage = $_GET['TotalDataPerPage'];
		
		$sku 	= $this->input->post('StatusItemDetails');
		$status = '';
		
		// $stts_json_decode = json_decode($stts, true);

		// $colors = array("red", "green", "blue", "yellow");

		// $arr_kalimat = explode ("},",$stts);

		// $this->db->select('kode_product,is_product');
		// $this->db->select('kode_product AS ItemNo,is_product AS Status');
		// $this->db->limit('2');
		// $this->db->where('id_member', '111');
		// $test_data = $this->db->get('tbl007_product')->result();

		// $get_result['TaskId'] = $task_id;
		// // $get_result['StockItemDetails'] = $test_data;
		// $result = $get_result;

		$ReturnData = $this->api_model->get_product($task_id,$sub_task_id,$status,$page,$perpage,$sku,$apikey);

		// $valdata[] = '';
		// foreach ($test_data as $value) {
			// $valdata['ItemNo'] = $value['kode_product'];
			// $valdata['Status'] = $value['is_product'];

			// $hfhf = json_encode($value['kode_product'], TRUE);
			// $hfhf = json_encode($value['kode_product'], TRUE);
		    // echo ($hfhf);
			// echo (json_decode($value['is_product']));
		// }

		// $query_row['ItemNo'] = $test_data->kode_product;
        // $query_row['Status'] = $test_data->is_product;

		// $test_result['StatusItemDetails'] = $valdata;

		// $data_json_encode = json_encode($get_result);
		// $data_json_decode = json_decode($data_json_encode, true);
		
		// var_dump($task_id);

		// foreach ($test_data as $value) {
		// 	$hfhf = json_encode($value['ItemNo'], TRUE);
		// 	echo ($hfhf);
		// }

		// $data = array(
        //    'kode_merchant' => $this->input->post('ItemNo'),
        //    'kode_sku' => $this->input->post('Status'),
        //    'kondisi' => $this->input->post('kondisi'),
        // 	// 'keterangan' => $this->input->post('keterangan'),
        //    'min_pembelian' => $this->input->post('min_pembelian'),
        //    'jumlah' => $this->input->post('jumlah'),
        //    'harga' => $this->input->post('harga'),
        //    'promo' => $this->input->post('promo'),
        //    'berat_produk' => $this->input->post('berat_produk'),
        //    'berat_paket' => $this->input->post('berat_paket'),
        //    'is_product' => '1',
        //    'created_by' => $this->input->post('kode_merchant'),
        //    'created_when' => date("Y-m-d H:i:s")
        //    );

        // $r = $this->api_model->insert($data);
        // // $this->response($r);

		// return $r;

		// $request_method=$_SERVER["REQUEST_METHOD"];

		// var_dump($stts_arr); die();

	}



	// function update_stok_produk(){
		
	// }

	// function harga_produk(){
		
	// }

	// function harga_produk_aktif(){
		
	// }

	// function update_harga_produk(){
		
	// }

	// function update_promosi(){
		
	// }

	// // API POST
	function update_product(){

		date_default_timezone_set("Asia/Bangkok");

		$data = array(
           'kode_merchant' => $this->input->post('kode_merchant'),
           'kode_sku' => $this->input->post('kode_sku'),
           'kondisi' => $this->input->post('kondisi'),
        //    'keterangan' => $this->input->post('keterangan'),
           'min_pembelian' => $this->input->post('min_pembelian'),
           'jumlah' => $this->input->post('jumlah'),
           'harga' => $this->input->post('harga'),
           'promo' => $this->input->post('promo'),
           'berat_produk' => $this->input->post('berat_produk'),
           'berat_paket' => $this->input->post('berat_paket'),
           'is_product' => '1',
           'created_by' => $this->input->post('kode_merchant'),
           'created_when' => date("Y-m-d H:i:s")
           );

        $r = $this->api_model->insert($data);
        // $this->response($r);

		return $r;

		// $request_method=$_SERVER["REQUEST_METHOD"];

		// var_dump($request_method); die();
	}

	function videox(){

		// $url = base_url('restapi/get-video');
		// $data = array('key1' => 'value1', 'key2' => 'value2');

		// // use key 'http' even if you send the request to https://...
		// $options = array(
		// 	'http' => array(
		// 		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		// 		'method'  => 'POST',
		// 		'content' => http_build_query($data)
		// 	)
		// );
		// $context  = stream_context_create($options);
		// $result = file_get_contents($url, false, $context);
		// if ($result === FALSE) { /* Handle error */ }

		// var_dump($result);

		$request = curl_init();

		curl_setopt($request, CURLOPT_URL, base_url('restapi/get-video'));
		curl_setopt($request, CURLOPT_POST, 1);
		curl_setopt($request, CURLOPT_POSTFIELDS,
				"var1=value1&var2=value2");

		// catch the response
		curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

		$response = curl_exec($request);

		curl_close ($request);
	}


	function video(){
		$this->restapi->content_type_json();
		
		// $_SERVER['REQUEST_METHOD'] = 'POST';

		// $data = "ffsdgsdg";

		// $this->input->server('REQUEST_METHOD') == 'POST';
		// $xxx = $this->CI_Input->valid_base64($data);
		// $xxx['data'] = $_POST['api-key'];
		// $xxx['KEY'] = $this->input->post('api-key',true);
		// $xxx['content'] = 'xxx';

		// $rest = $this->config->item('rest_key_name');
		// $apikey = $this->restapi->auth_api_key($rest);

		// $title = $this->input->post('M1TV-API-KEY',true);
		// $content  = 'xxx';

		// $xxx = array(
		// 	'apikey' => $title,
		// 	'content' => $content
		// );

		$xxx = $_POST['M1TV-API-KEY'];

		// $_SERVER['REQUEST_METHOD'] == 'POST';

		// $rest = $this->config->item('rest_key_name');
		$rest = $this->input->post('M1TV-CLIENT-KEY',true);

		if ($rest == TRUE) {
			$apikey = $this->restapi->auth_api_key($rest);
		}
		// else{
		// 	$apikey = '';
		// }
		

		// echo $xxx['xxx'];
		
		$ReturnData = $this->api_model->get_video($apikey);

		// echo $_POST['M1TV-API-KEY'];
		// print_r($rest);
		// var_dump($_POST);
		// var_dump(($apikey)); die();
		// var_dump($apikey); die();
	}

}
