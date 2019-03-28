<form action="{{url('admin/santri')}}" method="post">
    @csrf
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama"><br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email"><br>
    <label for="gender">Gender</label>
    <input type="radio" name="gender" id="gender" value="1">L
    <input type="radio" name="gender" id="gender" value="0">P<br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="Kirim">
</form>
