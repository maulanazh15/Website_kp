<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset($banner) && isset  ($banner->id))
                    <form action="/admin/banner{{ isset($banner->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                @else
                    <form action="/admin/banner" method="POST" enctype="multipart/form-data">
                @endif

                    @csrf
                    <div class="form-group">
                        <label for=""><b>Headline</b></label>
                        <input type="text" name="headline" class="form-control @error('headline') is-invalid @enderror" 
                        placeholder="Headline" value="{{ isset($banner) ? $banner->headline : old('headline') }}">
                    
                        @error('headline')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for=""><b>Deskripsi</b></label>
                        <input type="text" name="desc" class="form-control  @error('desc') is-invalid @enderror" 
                        placeholder="Deskripsi" value="{{ isset($banner) ? $banner->desc : old('desc') }}">
                        @error('desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for=""><b>Gambar</b></label>
                        <input type="file" name="gambar" class="form-control  @error('gambar') is-invalid @enderror" placeholder="******">

                            

                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        @if (isset($banner))
                        <img src="/{{ $banner->gambar }}" width="100px" class="mt-4" alt="">
                        @endif

                    </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>