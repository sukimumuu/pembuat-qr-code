<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function generate(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:255',
        ]);

        $qrCode = QrCode::format('png')->size(300)->generate($request->text);

        $fileName = 'qrcode-by-sukimumuu-' . time() . '.png';
        $filePath = public_path('qrcodes/' . $fileName);

        file_put_contents($filePath, $qrCode);
        return response()->download($filePath)->deleteFileAfterSend(true);
    }
}
