<?php

namespace App\Http\Controllers;



use Jorenvh\Share\Share;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function socialShare()
    {
        $data = [
            'title' => 'Socail Media Sheare',
        ];

        $shareButtons =\Share::page(
            url('/post'),
            'here is the text',

        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->whatsapp()
            ->getRawLinks();

        return view('components.front-end.components.sheare-model', compact('data','shareButtons'));
    }
}
