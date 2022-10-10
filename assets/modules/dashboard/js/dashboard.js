$(document).ready(function(){

    $('#add_employee_btn').click(function(){
        $('#add_employee_modal').modal('show')
    })

    $('#add_employee').submit(function(e){
        e.preventDefault()
        var data = $(this).serializeArray()
        var res = sendAjax(base_url+'dashboard/addEmployee', data)
        if(res){
            var icon = (res.status) ? 'success' : 'error'
            swal(icon, res.message)
            $(this).find(':input').val('')
        }
    })

})