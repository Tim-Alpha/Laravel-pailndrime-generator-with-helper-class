<!DOCTYPE html>
<html>
<head>
    <title>Generate Palindrome</title>
</head>
<body>
    <h1>Generate Palindrome</h1>
    <form action="{{ route('generate-palindrome') }}" method="post">
        @csrf
        <label for="input_text">Enter a string:</label>
        <input type="text" name="input_text" id="input_text" required>
        <button type="submit">Generate Palindrome</button>
    </form>
</body>
</html>
