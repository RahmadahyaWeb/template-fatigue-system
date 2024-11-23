<div>
    <main>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="min-height: 100vh">
                <div class="col-4">
                    <div class="card">
                        <div class="card__content">
                            <h3 class="text-center">Create your account!</h3>
                            <hr class="my-5" />

                            <form wire:submit="register">
                                <div class="row mb-3">
                                    @csrf
                                    <input type="hidden" wire:model="user_mail" value="{{ $user_mail }}">
                                    <input type="hidden" wire:model="user_name" value="{{ $user_name }}">

                                    <!-- Phone Number Field -->
                                    <div class="col-12 mb-3">
                                        <label for="number" class="form-label">Phone Number</label>
                                        <input type="text" class="@error('number') is-invalid @enderror"
                                            id="number" wire:model.live="number" placeholder="Phone Number">
                                        @error('number')
                                            <div>
                                                <small class="error-text">{{ $message }}</small>
                                            </div>
                                        @enderror
                                    </div>

                                    <!-- Address Field -->
                                    <div class="col-12 mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="@error('address') is-invalid @enderror"
                                            id="address" wire:model.live="address" placeholder="Address">
                                        @error('address')
                                            <div>
                                                <small class="error-text">{{ $message }}</small>
                                            </div>
                                        @enderror
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-12 mt-3" style="display: grid">
                                        <button class="btn btn-primary" type="submit">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12 text-center">
                            <p>Powered by <br> <b><i>Fatigue System</i></b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
