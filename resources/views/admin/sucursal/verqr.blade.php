<div class="modal-dialog" id="divModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">
                  Codigo QR:  {{$qr}}
                   
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        x
                    </span>
                </button>
            </div>
            <div class="modal-body">
              
                   
                <div class="col-12">
                <div class="Overline align-center" >
                    <a href="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate($qr)) !!} " download="QR-{{$establecimiento}} - {{$qr}}"> 
                         <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate($qr)) !!} ">
                    </a>

                   <h3 class="title"> Clic en el QR para descargar</h3>
                 
                </div>
                </div>
                </div>
            
        </div>
    </div>
</div>

