<div>
    <div class="card">
        <div class="card-header bg-muted bg-img ">
            <h3>Edit Sports</h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3" >
                <input type="text" class="form-control" wire:model.defer="name">
                <label for="name">Name</label>
            </div>
            @error("name")
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div class="form-floating mb-3" >
                <input type="text" class="form-control" wire:model.defer="address">
                <label for="address">Address</label>
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
                <button class="btn btn-outline-success" type="submit" wire:click="editSports()">
                    Save Changes
                </button>
                <button class="btn btn-outline-danger" wire:click="back()">
                    back
                </button>
            </div>
        </div>
    </div>
</div>