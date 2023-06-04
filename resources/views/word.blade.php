<h2>PHP Word</h2>

<form method="POST" action="{{ route('word.index') }}">
    @csrf
<input type="text" name="nama">
<input type="text" name="alamat">

<input type="submit" value="Submit">
</form>