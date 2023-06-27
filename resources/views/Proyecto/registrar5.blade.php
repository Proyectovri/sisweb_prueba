@extends('layouts.app')  
@section('contents')              
<div class="container">
    <div class="d-flex bd-highlight mb-4">
        <div class="p-2 w-100 bd-highlight">
            <h2>Laravel AJAX Example</h2>
        </div>
        <div class="p-2 flex-shrink-0 bd-highlight">
            <a href="javascript:void(0)" class="btn btn-primary" onclick="editaranimal('46516515')"  ></a>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" onclick="abrirmodal()">Open Modal</button>
            <input type="text" id="ver">
        </div>
    </div>
    <div>
        <table class="table table-inverse">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody id="todos-list" name="todos-list">
               
            </tbody>
        </table>
        
    </div>
</div>
 @include('proyecto.BuscarEquipo')
 
    <div class="modal fade" id="userShowModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Show User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" name="busc" id="busc">
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>


@endsection

@section('script')
<script type="text/javascript">
     window.$ = jQuery;
    function editaranimal(id){
        $.get('docente/'+id,function(data)
            {

                let isEmpty = Object.entries(data).length === 0;
                console.log(isEmpty);

              //  console.log(data);               // alert('hola'data);
                 //$('#userShowModal').modal('show');

                 if(isEmpty)
                {
                    console.log(data['Doce_Nombre']);
                    $('#ver').val(data['Doce_Nombre']);
                }else
                {
                     console.log(data['Doce_Nombre']);
                   $('#userShowModal').modal('show');
                    
                }
               // window.$('#modal-id').modal();
                //$('#userShowModal').model('show');
                //$('#userShowModal').css('display');
              //  jQuery.noConflict();$('#prizePopup').modal('show');
            }
        )
    }
    function abrirmodal(id){
       
        $.get('docente/'+id,function(data)
            {
                //alert('hola');
               //  $('#myModal').modal('show');
                window.$('#modal-id').modal();
                let isEmpty = Object.entries(obj).length === 0;

                if(isEmpty)
                {
                   
                }else
                {
                    $('#userShowModal').model('show');
                    
                }
                //$('#userShowModal').model('show');
                //$('#userShowModal').css('display');
              //  jQuery.noConflict();$('#prizePopup').modal('show');
          }
        )
    }
</script>
@endsection