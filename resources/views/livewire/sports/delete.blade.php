<div>

    <div class="card shadow border border-light">
        <div class="card-header bg-danger">
            <h5 class="text-white text-center mt-2">Delete Person?</h5>
        </div>
        <div class="card-body">
            <div class="col-md-4 offset-md-4">
                <img src="{{ asset('images/pers.png') }}" alt="logo" class="img-fluid mb-3 rounded-circle mt-3 img-responsive center-block d-block mx-auto" style="width: 90px;">
            </div>
            <table class="table">
                <tr>
                    <th>
                        Name
                    </th>
                    <td>
                        {{ $this->sports->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Contact Number
                    </th>
                    <td>
                        {{ $this->sports->contact_number }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Sports
                    </th>
                    <td>
                        {{ $this->sports->sports_name }}
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center">
                <button class="btn btn-outline-danger " wire:click="delete()">
                    Delete
                </button>
                <button class="btn btn-outline-success" wire:click="back()">
                    Cancel
                </button>
            </div>
        </div>
    </div>

</div>

