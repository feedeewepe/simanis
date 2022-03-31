<?php

namespace App\Controllers;

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Settings;

class CetakSurat extends BaseController
{
    protected $db;
    protected $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function suratPengantarSurvey()
    {
        $path = FCPATH . 'documents';
        $resp = 'SURAT_PENGANTAR_SURVEY.docx';
        // $resp = $this->upload_files($files,$path);
        $docx_path = $path . DIRECTORY_SEPARATOR . $resp;
        $ext = 'docx';
        if (file_exists($docx_path) && $ext == 'docx') {
            //load Docx File
            // die(ROOTPATH.'vendor'.DIRECTORY_SEPARATOR.'tecnickcom'.DIRECTORY_SEPARATOR.'tcpdf'.DIRECTORY_SEPARATOR.'tcpdf.php');
            Settings::setPdfRendererName('TCPDF');
            Settings::setPdfRendererPath(ROOTPATH . 'vendor' . DIRECTORY_SEPARATOR . 'tecnickcom' . DIRECTORY_SEPARATOR . 'tcpdf');
            $phpword = new PhpWord();
            $document = $phpword->loadTemplate($docx_path);

            $data = [
                'nomor' => '1234',
                'smt' => 'Ganjil',
                'thnajaran1' => '2021',
                'thnajaran2' => '2022',
                'kepada' => 'HRD Manager',
                'perusahaan' => 'PT ALIBATA',
                'kota' => 'Surabaya',
                'noketua' => '1',
                'namaketua' => 'Budi',
                'nimketua' => '123456789',
                'prodiketua' => 'Rekayasa Perangkat Lunak',
                'tglsurat' => '26 Oktober 2021',
                'namadekan' => 'Dr. Helmy Widyantara, S.Kom., M. Eng',
                'fakultas' => 'Fakultas Teknologi Informasi dan Bisnis',
            ];
            $dataanggota = [
                ['noanggota' => '2', 'namaanggota' => 'Ani', 'nimanggota' => '234567891', 'prodianggota' => 'Rekayasa Perangkat Lunak'],
                ['noanggota' => '3', 'namaanggota' => 'Sinta', 'nimanggota' => '234567893', 'prodianggota' => 'Rekayasa Perangkat Lunak'],
            ];
            $document->setvalues($data);
            $document->cloneRowAndSetValues('noanggota', $dataanggota);

            $_file_name = explode('.', $resp);
            $orig_name = $_file_name[0];
            $namafile = "{$orig_name}_" . $data['nimketua'] . '.docx';
            // Create html file
            $source = $path . DIRECTORY_SEPARATOR . "{$orig_name}_temp.docx";
            // $source = $path.DIRECTORY_SEPARATOR.$namafile;

            // Saving the document as HTML file...
            try {
                // $phpword = IOFactory::load($source);
                // $writer = IOFactory::createWriter($phpword, 'PDF');
                $mime = [
                    'Word2007' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    'ODText' => 'application/vnd.oasis.opendocument.text',
                    'RTF' => 'application/rtf',
                    'HTML' => 'text/html',
                    'PDF' => 'application/pdf',
                ];
                header('Content-Description: File Transfer');
                header('Content-Disposition: attachment; filename="' . $namafile . '"');
                header('Content-Type: ' . $mime['Word2007']);
                header('Content-Transfer-Encoding: binary');
                header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                header('Expires: 0');
                $namafile = 'php://output'; // Change filename to force download

                // $writer->save($namafile);
                $document->saveAs($namafile);
            } catch (Exception $e) {
                die($e);
            }
            echo $source;

            // $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Uploaded Successfully. URL : '.$source.'</div>');
            // return view('kerjapraktek/pengantar_survey', $data);
        } else {
            die($docx_path . ' File not exist!');
        }
        // $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Something went wrong! try again</div>');
        // redirect('welcome');
    }

    /*
	Tujuan    : Generate pakta integritas mahasiswa
	Parameter : 
	Output    : Pakta Integritas yang telah digenerate
	*/
    public function generate_pakta() 
    {
        $path = FCPATH . 'documents';
        $resp = 'PAKTA_INTEGRITAS_KP.docx';
        $docx_path = $path . DIRECTORY_SEPARATOR . $resp;
        $ext = 'docx';
        if (file_exists($docx_path) && $ext == 'docx') {
            Settings::setPdfRendererName('TCPDF');
            Settings::setPdfRendererPath(ROOTPATH . 'vendor' . DIRECTORY_SEPARATOR . 'tecnickcom' . DIRECTORY_SEPARATOR . 'tcpdf');
            $phpword = new PhpWord();
            $document = $phpword->loadTemplate($docx_path);

            $allowedPostFields = [
                'nama', 'nim', 'telp', 'prodi', 'lokasi'
            ];
            $var = $this->request->getPost($allowedPostFields);

            $data = [
                'nama' => $var['nama'],
                'nim' => $var['nim'],
                'telp' => $var['telp'],
                'prodi' => $var['prodi'],
                'lokasi' => $var['lokasi'],
            ];

            $document->setvalues($data);
            $_file_name = explode('.', $resp);
            $orig_name = $_file_name[0];
            $namafile = "{$orig_name}_" . $data['nim'] . '.docx';
            $source = $path . DIRECTORY_SEPARATOR . "{$orig_name}_temp.docx";

            try {
                header('Content-Description: File Transfer');
                header('Content-Disposition: attachment; filename="' . $namafile . '"');
                header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
                header('Content-Transfer-Encoding: binary');
                header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                header('Expires: 0');
                $document->saveAs('php://output');
            } catch (Exception $e) {
                die($e);
            }
            echo $source;
        } else {
            die($docx_path . ' File not exist!');
        }
    }
}
