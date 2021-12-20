<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Excel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_excel');
	}

	public function Sertifikat_eksporSemester($ID_SEMESTER){

		$fileName = date("dmy").'_SEMESTER_DATA_PAMERAN.xlsx';
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$SEMESTER = $this->M_excel->check_semester($ID_SEMESTER);
		$sheet->setCellValue('B1', 'DATA KARYA SEMESTER');
		$sheet->setCellValue('C1', $SEMESTER);

		$sheet->setCellValue('A3', 'No');
		$sheet->setCellValue('B3', 'PRODI');
		$sheet->setCellValue('C3', 'KATEGORI');
		$sheet->setCellValue('D3', 'DOSPEM');
		$sheet->setCellValue('E3', 'JUDUL');
		$sheet->setCellValue('F3', 'NAMA ANGGOTA');
		$sheet->setCellValue('G3', 'NRP ANGGOTA');
		$sheet->setCellValue('H3', 'LINK DEMO');
		$sheet->setCellValue('I3', 'GITHUB');
		$sheet->setCellValue('J3', 'VIDEO DEMO');

		$rows = 4;
		$no   = 1;
		// ALAMAT, Diperpanjang
		$sertifikat = $this->M_excel->get_sertifikatSemester($ID_SEMESTER);

		foreach ($sertifikat as $val){
			$sheet->setCellValue('A' . $rows, $no)->getColumnDimension('A')->setAutoSize(true);
			$sheet->setCellValue('B' . $rows, $val->PRODI)->getColumnDimension('B')->setAutoSize(true);
			$sheet->setCellValue('C' . $rows, $val->KATEGORI)->getColumnDimension('C')->setAutoSize(true);
			$sheet->setCellValue('D' . $rows, $val->DOSPEM)->getColumnDimension('D')->setAutoSize(true);
			$sheet->setCellValue('E' . $rows, $val->JUDUL)->getColumnDimension('E')->setAutoSize(true);
			$sheet->setCellValue('F' . $rows, $val->NAMA)->getColumnDimension('F')->setAutoSize(true);
			$sheet->setCellValue('G' . $rows, $val->NRP)->getColumnDimension('G')->setAutoSize(true);
			$sheet->setCellValue('H' . $rows, $val->LINK_DEMO)->getColumnDimension('H')->setAutoSize(true);
			$sheet->setCellValue('I' . $rows, $val->LINK_GITHUB)->getColumnDimension('I')->setAutoSize(true);
			$sheet->setCellValue('J' . $rows, $val->LINK_VIDEO)->getColumnDimension('J')->setAutoSize(true);
			
			$rows++;
			$no++;
		}

		$folder = "berkas/karya/EXCEL/";

		if (!is_dir($folder)) {
			mkdir($folder, 0755, true);
		}

		$writer = new Xlsx($spreadsheet);
		$writer->save($folder.$fileName);
		header("Content-Type: application/vnd.ms-excel");
		redirect(base_url().$folder.$fileName);
	}

	public function Sertifikat_ekspor(){

		$fileName = date("dmy").'_DATA_PAMERAN.xlsx';
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		$sheet->setCellValue('A1', 'No');
		$sheet->setCellValue('B1', 'PRODI');
		$sheet->setCellValue('C1', 'KATEGORI');
		$sheet->setCellValue('D1', 'DOSPEM');
		$sheet->setCellValue('E1', 'JUDUL');
		$sheet->setCellValue('F1', 'NAMA ANGGOTA');
		$sheet->setCellValue('G1', 'NRP ANGGOTA');
		$sheet->setCellValue('H1', 'LINK DEMO');
		$sheet->setCellValue('I1', 'GITHUB');
		$sheet->setCellValue('J1', 'VIDEO DEMO');

		$rows = 2;
		$no   = 1;
		// ALAMAT, Diperpanjang
		$sertifikat = $this->M_excel->get_sertifikat();

		foreach ($sertifikat as $val){
			$sheet->setCellValue('A' . $rows, $no)->getColumnDimension('A')->setAutoSize(true);
			$sheet->setCellValue('B' . $rows, $val->PRODI)->getColumnDimension('B')->setAutoSize(true);
			$sheet->setCellValue('C' . $rows, $val->KATEGORI)->getColumnDimension('C')->setAutoSize(true);
			$sheet->setCellValue('D' . $rows, $val->DOSPEM)->getColumnDimension('D')->setAutoSize(true);
			$sheet->setCellValue('E' . $rows, $val->JUDUL)->getColumnDimension('E')->setAutoSize(true);
			$sheet->setCellValue('F' . $rows, $val->NAMA)->getColumnDimension('F')->setAutoSize(true);
			$sheet->setCellValue('G' . $rows, $val->NRP)->getColumnDimension('G')->setAutoSize(true);
			$sheet->setCellValue('H' . $rows, $val->LINK_DEMO)->getColumnDimension('H')->setAutoSize(true);
			$sheet->setCellValue('I' . $rows, $val->LINK_GITHUB)->getColumnDimension('I')->setAutoSize(true);
			$sheet->setCellValue('J' . $rows, $val->LINK_VIDEO)->getColumnDimension('J')->setAutoSize(true);
			
			$rows++;
			$no++;
		}

		$folder = "berkas/karya/EXCEL/";

		if (!is_dir($folder)) {
			mkdir($folder, 0755, true);
		}

		$writer = new Xlsx($spreadsheet);
		$writer->save($folder.$fileName);
		header("Content-Type: application/vnd.ms-excel");
		redirect(base_url().$folder.$fileName);
	}

	// public function Sertifikat_eksporSemester($ID_SEMESTER){

	// 	$fileName = date("dmy").'_SEMESTER_DATA_PAMERAN.xlsx';
	// 	$spreadsheet = new Spreadsheet();
	// 	$sheet = $spreadsheet->getActiveSheet();
	// 	$SEMESTER = $this->M_excel->check_semester($ID_SEMESTER);
	// 	$sheet->setCellValue('B1', 'DATA KARYA SEMESTER');
	// 	$sheet->setCellValue('C1', $SEMESTER);

	// 	$sheet->setCellValue('A3', 'No');
	// 	$sheet->setCellValue('B3', 'KATEGORI');
	// 	$sheet->setCellValue('C3', 'JUDUL');
	// 	$sheet->setCellValue('D3', 'DOSPEM');
	// 	$sheet->setCellValue('E3', 'DATA ANGGOTA ');

	// 	$rows = 4;
	// 	$no   = 1;
	// 	// ALAMAT, Diperpanjang
	// 	$sertifikat = $this->M_excel->get_sertifikatSemester($ID_SEMESTER);

	// 	foreach ($sertifikat as $val){
	// 		$sheet->setCellValue('A' . $rows, $no)->getColumnDimension('A')->setAutoSize(true);
	// 		$sheet->setCellValue('B' . $rows, $val->KATEGORI)->getColumnDimension('B')->setAutoSize(true);
	// 		$sheet->setCellValue('C' . $rows, $val->JUDUL)->getColumnDimension('C')->setAutoSize(true);
	// 		$sheet->setCellValue('D' . $rows, $val->DOSPEM)->getColumnDimension('D')->setAutoSize(true);
	// 		$anggota = $this->M_excel->get_anggota($val->ID_KARYA);

	// 		$column = 'E';
	// 		foreach ($anggota as $key):
	// 			$sheet->setCellValue($column++ . $rows, ($key->NRP == 0 ? "TIDAK DIISI" : ($key->NRP == "" ? "TIDAK DIISI" : $key->NRP)))->getColumnDimension($column)->setAutoSize(true);
	// 			$sheet->setCellValue($column++ . $rows, $key->NAMA)->getColumnDimension($column)->setAutoSize(true);
	// 		endforeach;
	// 		$rows++;
	// 		$no++;
	// 	}

	// 	$folder = "berkas/karya/EXCEL/";

	// 	if (!is_dir($folder)) {
	// 		mkdir($folder, 0755, true);
	// 	}

	// 	$writer = new Xlsx($spreadsheet);
	// 	$writer->save($folder.$fileName);
	// 	header("Content-Type: application/vnd.ms-excel");
	// 	redirect(base_url().$folder.$fileName);
	// }

	// public function Sertifikat_ekspor(){

	// 	$fileName = date("dmy").'_DATA_PAMERAN.xlsx';
	// 	$spreadsheet = new Spreadsheet();
	// 	$sheet = $spreadsheet->getActiveSheet();
	// 	$sheet->setCellValue('A1', 'No');
	// 	$sheet->setCellValue('B1', 'KATEGORI');
	// 	$sheet->setCellValue('C1', 'JUDUL');
	// 	$sheet->setCellValue('D1', 'DOSPEM');
	// 	$sheet->setCellValue('E1', 'DATA ANGGOTA ');

	// 	$rows = 2;
	// 	$no   = 1;
	// 	// ALAMAT, Diperpanjang
	// 	$sertifikat = $this->M_excel->get_sertifikat();

	// 	foreach ($sertifikat as $val){
	// 		$sheet->setCellValue('A' . $rows, $no)->getColumnDimension('A')->setAutoSize(true);
	// 		$sheet->setCellValue('B' . $rows, $val->KATEGORI)->getColumnDimension('B')->setAutoSize(true);
	// 		$sheet->setCellValue('C' . $rows, $val->JUDUL)->getColumnDimension('C')->setAutoSize(true);
	// 		$sheet->setCellValue('D' . $rows, $val->DOSPEM)->getColumnDimension('D')->setAutoSize(true);
	// 		$anggota = $this->M_excel->get_anggota($val->ID_KARYA);

	// 		$column = 'E';
	// 		foreach ($anggota as $key):
	// 			$sheet->setCellValue($column++ . $rows, ($key->NRP == 0 ? "TIDAK DIISI" : ($key->NRP == "" ? "TIDAK DIISI" : $key->NRP)))->getColumnDimension($column)->setAutoSize(true);
	// 			$sheet->setCellValue($column++ . $rows, $key->NAMA)->getColumnDimension($column)->setAutoSize(true);
	// 		endforeach;
	// 		$rows++;
	// 		$no++;
	// 	}

	// 	$folder = "berkas/karya/EXCEL/";

	// 	if (!is_dir($folder)) {
	// 		mkdir($folder, 0755, true);
	// 	}

	// 	$writer = new Xlsx($spreadsheet);
	// 	$writer->save($folder.$fileName);
	// 	header("Content-Type: application/vnd.ms-excel");
	// 	redirect(base_url().$folder.$fileName);
	// }

}