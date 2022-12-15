<div>
    <div class="card">
        <div class="card-header bg-muted">
            <h3>Books</h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3" wire:model.defer="name">
                <input type="text" class="form-control">
                <label for="name">Book Title</label>
            </div>
            @error("name")
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div class="form-floating mb-3" wire:model.defer="address">
                <input type="text" class="form-control">
                <label for="address">Name</label>
            </div>
            @error("address")
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div class="form-floating mb-3" wire:model.defer="contact_number">
                <input type="text" class="form-control">
                <label for="contact_number">Contact Number</label>
            </div>
            @error("contact_number")
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div class="form-floating mb-3">
                <select name="gender" class="form-select" wire:model.defer="gender">
                    <option hidden="true">Select Gender</option>
                    <option selected disabled>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <label for="gender">Gender</label>
            </div>
            @error("gender")
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div class="form-floating mb-3">
                <select name="sports_name" class="form-select" wire:model.defer="sports_name">
                    <option hidden="true">Select Book Type</option>
                    <option selected disabled>Select Book Type</option>
                    <option value="Netflix Book">Netflix Book</option>
                    <option value="Novel">Novel</option>
                    <option value="School Book">School Book</option>
                    <option value="Bible">Bible</option>
                    <option value="Drawing Book">Drawing Book</option>
                </select>
                <label for="sports_name">Book Type</label>
            </div>
            @error("sports")
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" type="submit" wire:click="addSports()">
                    Add
                </button>
            </div>
        </div>
    </div>
</div>
<style>
    #basic-addon1 {
    width: 40px;
    text-align: center;
    background-color: primary;
}
body{
    background-image: url("images/library.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%;
}
.card{
    background-image: url("images/book1.jpg");
    background-size: cover;
    background-position: center;
    height: 98%;
}
</style>