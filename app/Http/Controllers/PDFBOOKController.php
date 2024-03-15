<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFBOOKController extends Controller
{
       public  function PDFBook(){
             $pdf = Pdf::loadView('components.front-end.page.book');
             return  $pdf->download('book.pdf');
         }

    // public  function PDFBook()
    // {
    //     // $pdf = Pdf::loadView('components.front-end.page.book');
    //     // return  $pdf->download('book2.pdf');


    //     $pdf = Pdf::loadHtml(view('components.front-end.page.book'));
    //     $pdf->setPaper('A4', 'portrait');
    //     $pdf->render();
    //     return $pdf->stream('document.pdf');
    // }


    public  function PDFPrintBook()
    {
        $pdf = Pdf::loadView('components.front-end.page.book');
        return $pdf->stream('book2.pdf');
    }
}
