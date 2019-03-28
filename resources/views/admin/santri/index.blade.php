<table>
    <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Created at</th>
        <th>Action</th>
    </tr>
    @php
        $nomor  = 1;
    @endphp
    @foreach ($santri as $row)
        <tr>
            <td>{{$nomor++}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->email}}</td>
            <td>{{($row->gender)?'Laki-laki':'Perempuan'}}</td>
            <td>{{$row->created_at}}</td>
            <td>
                <form action="{{url('admin/santri/'.$row->id.'/delete')}}" method="post">
                    <a href="{{url('admin/santri/'.$row->id.'/edit')}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="button">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    {{$santri->links()}}
</table>
