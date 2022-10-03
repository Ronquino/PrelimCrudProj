<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <select class="form-select"  wire:model.lazy="gender">
                    <option value="all">All</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="col">
            <select class="form-select"  wire:model.lazy="sports_name">
                    <option value="all">All</option>
                    <option value="Basketball">Basketball</option>
                    <option value="Volleyball">Volleyball</option>
                    <option value="Tennis">Tennis</option>
                    <option value="Swimming">Swimming</option>
                    <option value="Chess">Chess</option>
                 </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Search" wire:model.lazy="search">
            </div>
        </div>
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
            @foreach($sports as $sport)
                <tr>
                    <td>{{$sport->id}}</td>
                    <td>{{$sport->name}}</td>
                    <td>{{$sport->contact_number}}</td>
                    <td>{{$sport->address}}</td>
                    <td>{{$sport->gender}}</td>
                    <td>{{$sport->sports_name}}</td>
                    <td>
                        <a href="{{url('edit', ['sport' => $sport->id])}}" class="btn btn-outline-success">Edit</a>
                    </td>
                    <td>
                        <a href="{{url('delete', ['sport' => $sport->id])}}" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$sports->links() }}
</div>

<style>
    #ic {
        width: 40px;
    }

    
</style>
