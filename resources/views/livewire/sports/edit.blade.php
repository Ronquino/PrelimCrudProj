<div>
    <div class="card">
        <div class="card-header bg-muted bg-info ">
            <h4>Edit Book</h4>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3" >
                <input type="text" class="form-control" wire:model.defer="name">
                <label for="name">Book Name</label>
            </div>
            @error("name")
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div class="form-floating mb-3" >
                <input type="text" class="form-control" wire:model.defer="address">
                <label for="address">Name</label>
            </div>
            @error("address")
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div class="form-floating mb-3" >
                <input type="text" class="form-control" wire:model.defer="contact_number">
                <label for="contact_number">Contact Number</label>
            </div>
            @error("contact_number")
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div class="form-floating mb-3">
                <select name="gender" class="form-select" wire:model.defer="gender">
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
                <button class="btn btn-success" type="submit" wire:click="editSports()">
                    Save Changes
                </button>
                <button class="btn btn-danger" wire:click="back()">
                    back
                </button>
            </div>
        </div>
    </div>
</div>