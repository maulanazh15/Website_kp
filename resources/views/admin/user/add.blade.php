<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset($user) && isset  ($user->id))
                    <form action="/admin/user/{{ isset($user->id) }}" method="POST">
                        @method('put')
                @else
                    <form action="/admin/user" method="POST">
                @endif

                    @csrf
                    <div class="form-group">
                        <label for=""><b>Username</b></label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                        placeholder="Username" value="{{ isset($user) ? $user->name : old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for=""><b>Email</b></label>
                        <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" 
                        placeholder="Email" value="{{ isset($user) ? $user->email : old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for=""><b>Password</b></label>
                        <input type="Password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="******">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>