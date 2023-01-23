    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ $aset->id_aset }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $aset->nama_barang }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if($aset->gambar)
                    <div style="max-height: 500px; overflow:hidden;">
                      <img src="{{ asset('storage/'.$aset->gambar) }}" alt="" class="img-fluid mt-3">
                    </div>
                    @else
                      <img src="" alt="" class="img-fluid mt-3">
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>