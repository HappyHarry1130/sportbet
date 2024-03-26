<h1>Preview</h1>
<p>Name: {{ $name }}</p>
<p>Age: {{ $age }}</p>
<form method="POST">
    @csrf
    <input type="hidden" name="name" value="{{ $name }}">
    <input type="hidden" name="age" value="{{ $age }}">
    <button type="submit">Save</button>
</form>