<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Template</title>
    <style>
        @page {
            margin: 0;
            size: A4 portrait;
        }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #000; /* Add border to the table */
        }
        td {
            width: 50%; /* Two columns per row */
            padding: 5px; /* Adjust spacing between images */
            vertical-align: top; /* Align content to the top of the cell */
        }
        .image {
            width: 200px; /* Occupy full width of cell */
            height: auto; /* Maintain aspect ratio */
            object-fit: cover; /* Maintain aspect ratio and cover container */
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>
                <img src="{{ public_path('paper.jpg') }}" alt="Image 1" class="image">
            </td>
            <td>
                <img src="{{ public_path('pix2.jpg') }}" alt="Image 2" class="image">
            </td>
        </tr>
        <tr>
            <td>
                <img src="{{ public_path('pix3.jpg') }}" alt="Paper Image" class="image">
            </td>
            <td>
                <img src="{{ public_path('pix4.jpg') }}" alt="Image 4" class="image">
            </td>
        </tr>
    </table>
</body>
</html>
