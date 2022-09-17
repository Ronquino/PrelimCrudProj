<div>
    <table class="table table-striped shadow border border-light">
        <thead class="bg-secondary">
            <tr>
                <th>ID No</th>
                <th>Full Name</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Sports</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sports as $sport)
                <tr>
                    <td>{{ $sport->id }}</td>
                    <td>{{ $sport->name }}</td>
                    <td>{{ $sport->contact_number }}</td>
                    <td>{{ $sport->address }}</td>
                    <td>{{ $sport->gender }}</td>
                    <td>{{ $sport->sports_name }}</td>
                    <td>
                        <a href="{{url('edit', ['sports'=> $sport->id] )}}" class="btn btn-outline-success">Edit</a>
                    </td>
                    <td>
                        <a href="{{url('delete', ['sports'=> $sport->id] )}}" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    #ic {
        width: 40px;
    }
</style>
