<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function produk1()
	{
		$this->template->load('template','produk/produk1');
	}
	public function produk2()
	{
		$this->template->load('template','produk/produk2');
	}
	public function produk3()
	{
		$this->template->load('template','produk/produk3');
	}
	public function produk4()
	{
		$this->template->load('template','produk/produk4');
	}
	public function produk5()
	{
		$this->template->load('template','produk/produk5');
	}
	public function produk6()
	{
		$this->template->load('template','produk/produk6');
	}
}
