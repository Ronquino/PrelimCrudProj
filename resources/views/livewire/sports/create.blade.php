<div>
    <div class="card">
        <div class="card-header bg-muted">
            <h3>Add Sports</h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3" wire:model.defer="name">
                <input type="text" class="form-control">
                <label for="name">Name</label>
            </div>
            @error("name")
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div class="form-floating mb-3" wire:model.defer="address">
                <input type="text" class="form-control">
                <label for="address">Address</label>
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
                    <option hidden="true">Select Sports Name</option>
                    <option selected disabled>Select Sports Name</option>
                    <option value="Basketball">Basketball</option>
                    <option value="Volleyball">Volleyball</option>
                    <option value="Tennis">Tennis</option>
                    <option value="Swimming">Swimming</option>
                    <option value="Chess">Chess</option>
                </select>
                <label for="sports_name">Sports</label>
            </div>
            @error("sports")
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-outline-primary" type="submit" wire:click="addSports()">
                    Add Sports
                </button>
            </div>
        </div>
    </div>
</div>