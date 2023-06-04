<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    public function index(Request $request){
        $nama = $request->nama;
        $alamat = $request->alamat;

        //Script PhpWord

// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\TemplateProcessor('myword.docx');

// Edit String
$phpWord->setValues([
    'nama' => $nama,
    'alamat' => $alamat
]);

// Saving the document as HTML file...
$phpWord->saveAs('hasilEdit.docx');

/* Note: we skip RTF, because it's not XML-based and requires a different example. */
/* Note: we skip PDF, because "HTML-to-PDF" approach is used to create PDF documents. */
    }
}
