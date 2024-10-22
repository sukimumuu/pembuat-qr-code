<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>QR Code Generator</h1>
        <form action="{{ route('qrcode.generate') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="text">Masukkan text atau urlL:</label>
                <input type="text" name="text" class="form-control" id="text" required>
                @error('text')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Buat QR Code</button>
        </form>
    </div>
</body>
</html>
