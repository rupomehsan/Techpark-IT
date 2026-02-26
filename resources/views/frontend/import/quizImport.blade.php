<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Quiz</title>
</head>

<body>
    <h1>Import Quiz</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    @if (session('warning'))
        <p style="color: orange;">{{ session('warning') }}</p>
    @endif

    @if (session('info'))
        <p style="color: blue;">{{ session('info') }}</p>
    @endif

    <form action="{{ route('quiz.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="file">Choose an Excel file:</label>
        <input type="file" name="file" id="file" required>
        <button type="submit">Import</button>
    </form>
</body>

</html>
