<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2>Identitas User</h2>
    <p>Username: {{ $user->username }}</p>
    <p>Level: {{ $user->level_id }}</p>
    <!-- Tampilkan foto jika tersedia -->
    @if ($user->file_foto)
        <img src="{{ asset('storage/' . $user->file_foto) }}" alt="Foto">
    @endif
</body>
</html>
