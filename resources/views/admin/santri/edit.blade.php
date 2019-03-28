
    <form action="{{url('admin/santri')}}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$santri->id}}">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{$santri->nama}}"><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{$santri->email}}"><br>
        <label for="gender">Gender</label>
        <input type="radio" name="gender" id="gender" value="1" {{($santri->gender)?'checked':''}}>L
        <input type="radio" name="gender" id="gender" value="0" {{($santri->gender)?'':'checked'}}>P<br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Kirim">
    </form>
