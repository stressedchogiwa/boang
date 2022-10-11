$(document).ready(function(){

    $('#add_materials_btn').click(function(){
        $('#add_materials_modal').modal('show')
    })
    $('#add_materials').submit(function(e){
        e.preventDefault()
        var data = new FormData(this)
        var res = newForm(base_url+'materials/addMaterials', data)
        if(res){
            var icon = (res.status) ? 'success' : 'error'
            swal(icon, res.message)
            table.ajax.reload()
            $(this).find(':input').val('')
            $('#add_materials_modal').modal('hide')
        }
    })

 var table = $('#myTable').DataTable({
    "processing": true,
    "serverSide": true,
    "responsive": true,
    "destroy": true,
    "order": [
      [0, 'desc']
    ],
    "columns": [{
        "data": "id",
        "width": "10%"
      },
      {
        "data": "material_name",
        "width": "15%"
      },
      {
        "data": "file_name",
        "width": "15%"
      },
      {
        "data": "created_at",
        "width": "15%"
      },
      {
        "data": "id",
        "width": "5%",
        "render": function(data, type, row, meta){
          var str = ''
          str += `<a href="${base_url+'materials/downloadMaterial/'+row.file_name}" target="_blank"  class="btn btn-sm btn-primary" id="add_materials_btn"><i class="fas fa-download"></i></a>`;
          return str
        }
      },
    ],
    "language": {
      "search": '',
      "searchPlaceholder": "Search keyword...",
      "infoFiltered": ""
    },
    // Load data for the table's content from an Ajax source
    "ajax": {
      "url": base_url + "materials/getMaterials",
      "type": "POST",
    },
  });

})