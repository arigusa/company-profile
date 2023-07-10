<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset($user))
                <form action="/admin/user/{{ $user->id }}" method="POST">
                    @method('PUT')
                @else
                <form action="/admin/user" method="POST">
                @endif
                    <div class="form-group">
        
                        @csrf
                            <div class="form-group">
                                <label for="name">Username</label>
                                <input type="text" name='name' class="form-control @error('name') is-invalid @enderror"  placeholder="Username" value="{{ isset($user) ? $user->name :  old('name')}}">
                                    @error('name')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                        
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name='email' class="form-control @error('email') is-invalid @enderror" placeholder="email" value="{{ isset($user) ? $user->email :  old('email')}}">
                                @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        
                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="Password" name='password' class="form-control @error('password') is-invalid @enderror" placeholder="****">
                                @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        
                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="re_password">Konfirmasi Password</label>
                                <input type="Password" name='re_password' class="form-control @error('re_password') is-invalid @enderror" placeholder="****">
                    @error('re_password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        
                    @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>