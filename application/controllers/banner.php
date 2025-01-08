
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banner extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('banner_model');
	}

	function index() {
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
					$this->load->library('grid');
					$grid = $this->grid->set_properties(array('model' => 'banner_model', 'controller' => 'banner', 'options' => array('id' => 'banner', 'pagination', 'rownumber')))->load_model()->set_grid();
					$view = $this->load->view('banner/index', array('grid' => $grid), true);
					echo json_encode(array('msgType' => 'success', 'msgValue' => $view));
			} else {
					block_access_method();
			}
	}

	function datagrid() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$row = intval($this->input->post('rows')) == 0 ? 20 : intval($this->input->post('rows'));
				$page = intval($this->input->post('page')) == 0 ? 1 : intval($this->input->post('page'));
				$offset = $row * ($page - 1);
				$data = array();
				$params = array('_return' => 'data');
				if (isset($where))
						$params['_where'] = $where;
				$data['total'] = isset($where) ? $this->banner_model->count_by($where) : $this->banner_model->count_all();
				$this->banner_model->limit($row, $offset);
				$order = $this->banner_model->get_params('_order');
				$rows = isset($where) ? $this->banner_model->order_by($order)->get_many_by($where) : $this->banner_model->order_by($order)->get_all();
				$data['rows'] = $this->banner_model->get_selected()->data_formatter($rows);
				echo json_encode($data);
		}
		else {
				block_access_method();
		}
	}

	function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = $this->banner_model->set_validation()->validate();
            if ($data !== false) {
                if ($this->banner_model->check_unique($data)) {

                    if ($this->banner_model->insert($data) !== false) {
                        echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil disimpan !'));
                    } else {
                        echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat disimpan !'));
                    }
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", $this->banner_model->get_validation())));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
            }
        } else {
					$view = $this->load->view('banner/add', array('url' => base_url() . 'banner/upload'), TRUE);
					echo json_encode(array('msgType' => 'success', 'msgValue' => $view));
        }
    }

		function upload() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->banner_model->set_validation()->validate();
            if ($data !== false) {
                if ($this->banner_model->check_unique($data)) {
                    if (isset($_FILES['fileToUpload']['tmp_name']) && !empty($_FILES['fileToUpload']['tmp_name'])) {
                        $data['image_slide'] = base_url() . "assets_tv/images/slide/" . str_replace(' ', '_', $_FILES['fileToUpload']['name']);
                        $config['upload_path'] = substr(__dir__, 0, strpos(__dir__, "application")) . 'assets_tv/images/slide/';
                        $config['allowed_types'] = 'bmp|jpg|png|gif|jpeg';
                        $config['max_size'] = '512000000';

                        $this->load->library('upload', $config);

                        if (!$this->upload->do_upload('fileToUpload')) {
                            echo json_encode(array('msgType' => 'error', 'msgValue' => $this->upload->display_errors()));
                            exit();
                        }
                    } else {
          						$data['image_slide'] = "";
          					}

                    if ($this->banner_model->insert($data) !== false) {
                        echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data Berhasil Disimpan !'));
                    } else {
                        echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat disimpan !'));
                    }
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", strip_tag($this->banner_model->get_validation()))));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
            }
        }
    }

		function edit($id = false) {
        if (!$id) {
            data_not_found();
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->banner_model->set_validation()->validate();
            if ($data !== false) {
                if ($this->banner_model->check_unique($data, intval($id))) {
                    if ($this->banner_model->update(intval($id), $data) !== false) {
                        echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil diubah !'));
                    } else {
                        echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat diubah !'));
                    }
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", $this->banner_model->get_validation())));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
            }
        } else {
            $con_method = $this->banner_model->get(intval($id));
            if (sizeof($con_method) == 1) {

                $data = $this->banner_model->get_single($con_method);
                $view = $this->load->view('banner/edit', array('data' => $data,'url' => base_url() . 'banner/edit_upload/' . $id), TRUE);
                echo json_encode(array('msgType' => 'success', 'msgValue' => $view));
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat ditemukan !'));
            }
        }
    }

    function edit_upload($id = false) {
        if (!$id) {
            data_not_found();
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->banner_model->set_validation()->validate();
            if ($data !== false) {
                if ($this->banner_model->check_unique($data, intval($id))) {
                    if (isset($_FILES['fileToUpload']['tmp_name']) && !empty($_FILES['fileToUpload']['tmp_name'])) {
                        $banner = $this->banner_model->get(intval($id));
                        $data['image_slide'] = rand().str_replace(' ', '_', $_FILES['fileToUpload']['name']);
                        $config['upload_path'] = substr(__dir__, 0, strpos(__dir__, "application")) . 'assets_tv/images/slide/';
                        $config['allowed_types'] = 'bmp|jpg|png|gif|jpeg';
                        $config['file_name'] = $data['foto_banner'];
                        $config['max_size'] = '51200000';

                        $this->load->library('upload', $config);

                        if ($this->upload->do_upload('fileToUpload')) {
                            $current_file = substr(__dir__, 0, strpos(__dir__, "application")) . 'assets_tv/images/slide/' . $banner->foto_banner;
                            if (is_file($current_file)) {
                                unlink($current_file);
                            }
                        } else {
                            echo json_encode(array('msgType' => 'error', 'msgValue' => strip_tags($this->upload->display_errors())));
                            exit();
                        }
                    }else{
                        $data['image_slide'] = $this->input->post('foto_hidden');
                    }

                    if ($this->banner_model->update(intval($id), $data) !== false) {
                        echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil diubah !'));
                    } else {
                        echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat disimpan !'));
                    }
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", $this->banner_model->get_validation())));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
            }
        }
    }

		function delete($id = false) {
        if (!$id) {
            data_not_found();
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $roles = $this->banner_model->get(intval($id));
						$hapusgambar = $this->banner_model->get(intval($id));
            if (sizeof($roles) == 1) {
                if ($this->banner_model->delete(intval($id))) {
										$current_file = substr(__dir__, 0, strpos(__dir__, "application")) . 'assets_tv/images/slide/' . $hapusgambar->foto_banner;
										if (is_file($current_file)) {
												unlink($current_file);
										}
                    echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil dihapus'));
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak berhasil dihapus !'));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat ditemukan !'));
            }
        } else {
            block_access_method();
        }
    }



}
