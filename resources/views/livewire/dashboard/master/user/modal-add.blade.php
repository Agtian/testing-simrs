<div wire:ignore.self class="modal fade" id="addModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal">
                    <input type="hidden" name="id" wire:model="ids">
                    <div class="form-group row">
                        <label for="pegawai_id" class="col-sm-2 col-form-label">Pegawai ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('pegawai_id') is-invalid @enderror" name="pegawai_id" wire:model.debounce.1000ms="pegawai_id">
                            @error('pegawai_id') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Usename</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" wire:model.debounce.1000ms="username">
                            @error('username') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" wire:model.debounce.1000ms="email">
                            @error('email') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status_user" class="col-sm-2 col-form-label">Status User</label>
                        <div class="col-sm-10">
                            <select name="status_user" id="status_user" class="form-control @error('status_user') is-invalid @enderror" wire:model.debounce.1000ms="status_user">
                                <option value="">Pilih Status User</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                            @error('status_user') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="level_user" class="col-sm-2 col-form-label">Level User</label>
                        <div class="col-sm-10">
                            <select name="level_user" id="level_user" class="form-control @error('level_user') is-invalid @enderror" wire:model.debounce.1000ms="level_user">
                                <option value="">Pilih Level User</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                            @error('level_user') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-primary" wire:click="store()">Simpan</button>
            </div>
        </div>
    </div>
<div>