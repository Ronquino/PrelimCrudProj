    <div class="card shadow border border-light">
        <div class="card-header ">
            <h5 class="text-black text-center mt-2">Delete Record?</h5>
        </div>
        <div class="card-body">
            <div class="col-md-4 offset-md-4">
                <img src="{{ asset('images/book1.jpg') }}" alt="logo" class="img-fluid mb-3 rounded-circle mt-3 img-responsive center-block d-block mx-auto" style="width: 90px;">
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
                        Book Name
                    </th>
                    <td>
                        {{ $this->sports->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Book Type
                    </th>
                    <td>
                        {{ $this->sports->sports_name }}
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center">
                <button class="btn btn-danger " wire:click="delete()">
                    Delete
                </button>
                <button class="btn btn-success" wire:click="back()">
                    Cancel
                </button>
            </div>
        </div>
    </div>
    <style>
        body {
      font-family: "Righteous", cursive;
      background-color: #a9c9ff;
      background-image: linear-gradient(180deg, #a9c9ff 0%, #ffbbec 100%);}
    
    </style>
    


