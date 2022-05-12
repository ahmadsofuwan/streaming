<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Live extends MY_Controller
{


	public function index()
	{
		$this->chanel();
	}
	public function chanel($idLive = '')
	{
		$dataLive =  $this->getDataRow('live', '*', array('status' => '1'));
		if (!empty($idLive))
			$dataLive = $this->getDataRow('live', '*', array('pkey' => $idLive, 'status' => '1'));
		$dataLiveAll = $this->getDataRow('live', '*', array('status' => '1'));
		$ads = $this->getDataRow('ads', '*', array('status' => '1'));
		$menu = $this->getDataRow('menu', '*', array('status' => '1'));
		$brand = $this->getDataRow('brand', '*', array('status' => '1'))[0];
		$head = $this->getDataRow('head', '*', array('status' => '1'))[0];
		$content = $this->getDataRow('content', '*', array('status' => '1'))[0];

		$data['html']['content'] = $content;
		$data['html']['head'] = $head;
		$data['html']['brand'] = $brand;
		$data['html']['menu'] = $menu;
		$data['html']['ads'] = $ads;
		$data['html']['dataLiveAll'] = $dataLiveAll;
		$data['html']['dataLive'] = $dataLive[0];
		$data['html']['title'] = 'Live Streaming Tv';
		$data['url'] = 'public/body';
		$this->templatePublic($data);
	}
}
