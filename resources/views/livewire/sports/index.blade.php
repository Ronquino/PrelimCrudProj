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
                    <option value="Basketball">Netflix Book</option>
                    <option value="Volleyball">Novel</option>
                    <option value="Tennis">School Book</option>
                    <option value="Swimming">Bible</option>
                    <option value="Chess">Drawing Book</option>
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
                <th>Book Title</th>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Gender</th>
                <th>Book Type</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($sports as $sport)
                <tr>
                    <td class="text-white">{{$sport->id}}</td>
                    <td class="text-white">{{$sport->name}}</td>
                    <td class="text-white">{{$sport->address}}</td>
                    <td class="text-white">{{$sport->contact_number}}</td>
                    <td class="text-white">{{$sport->gender}}</td>
                    <td class="text-white">{{$sport->sports_name}}</td>
                    <td>
                        <a href="{{url('edit', ['sport' => $sport->id])}}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="{{url('delete', ['sport' => $sport->id])}}" class="btn btn-danger">Delete</a>
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
