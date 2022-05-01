<div>
    <table class="table table-striped table-bordered table-head-fixed text-nowrap">
        <thead>
            <tr>
                <th><center>NO</center></th>
                <th>NAMA</th>
                <th>UNIT RS</th>
                <th>UNIT KERJA</th>
                <th>RUANG</th>
                <th>USERNAME</th>
                <th>AKSES</th>
                <th><center>AKSI</center></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td align="center" width="20">{{ ($users ->currentpage()-1) * $users ->perpage() + $loop->index + 1 }}.</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->status_user }}</td>
                <td align="center">
                    <button class="btn btn-info btn-sm">EDIT</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- /.card-body -->
    <div class="card-footer" style="margin-bottom: -20px">
        <div class="d-flex justify-content-end">
            {{ $users->links() }}
        </div>
    </div>
    <!-- /.card-footer-->
    
</div>
