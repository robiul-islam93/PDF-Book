<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Validate the request
        $request->validate([
            'member' => 'required|string', // Add any validation rules you need
        ]);

        // Retrieve the search term from the request
        $memberName = $request->input('member');

        // Perform your search logic here
        if (
            $memberName === "imtiaz" || 
            $memberName === "Imtiaz" || 
            $memberName === "IMTIAZ AHMED" || 
            $memberName === "imtiaz ahmed"
        ) {
            $result = 'Succses fully'; // Set the result based on your search logic
        } elseif (
            $memberName === "ismail" ||
            $memberName === "Ismail" ||
            $memberName === "Ismail Hossain" ||
            $memberName === "ismail hossain" ||
            $memberName === " Md ismail hossain" ||
            $memberName === "MD ISMAIL HOSSAIN"
        ) {
            $result = 'successfully'; // Set the result based on your search logic
        } else {
            $result = "Not Found Book";
        }

        // Return the result
        return view('components.front-end.components.search-model', ['result' => $result]);
    }
}
