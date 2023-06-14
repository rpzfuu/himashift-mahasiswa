<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Mahasiswa;

use Illuminate\Http\Request;
use TCPDF;

class CertificateController extends Controller
{
    public function generatePDF(Request $request)
    {
        $job_desk = $request->input('jdesk');
        $nama_acara = $request->input('acara');
        $tanggal = $request->input('tanggal');
        $nim = Auth::user()->nim;
        $mahasiswa=Mahasiswa::where('nim',$nim)->first();
        // Membuat instance TCPDF
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Mengatur informasi meta
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('HIMASHIFT');
        $pdf->SetTitle('Sertifikat '.$mahasiswa->nama);

        // Mengatur header dan footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Mengatur margin
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

        // Mengatur auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // Menambahkan halaman baru
        $pdf->AddPage();

        // Mengatur font
        $pdf->SetFont('helvetica', '', 20);

        // Menulis teks
        $pdf->Cell(0, 10, 'Sertifikat', 0, 1, 'C');
        $pdf->SetFont('helvetica', '', 16);
        $pdf->Cell(0, 10, 'Nama: '.$mahasiswa->nama, 0, 1, 'C');
        $pdf->Cell(0, 10, 'Acara: '.$nama_acara, 0, 1, 'C');
        $pdf->Cell(0, 10, 'Job Desk : ' . $job_desk, 0, 1, 'C');
        $pdf->Cell(0, 10, 'Tanggal : ' . $tanggal, 0, 1, 'C');
        $pdf->Cell(0, 10, 'Dibuatnya Sertifikat Ini : ' . date('Y-m-d'), 0, 1, 'C');
        
        // Box sertifikat
        $pdf->Rect(10, 20, 190, 110, 'D', array('all' => array('width' => 1)));

        // Menampilkan PDF
        $pdf->Output('sertifikat.pdf', 'I');
    }
    public function generate()
    {
        return view('sertifikat_form');
    }
}