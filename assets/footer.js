// for sending post to controller
function sendAjax(url, data = {}){
    var res = null
    $.ajax({
        type: 'post',
        url: url,
        data: data,
        cache: false,
        async: false,
        dataType: 'json',
        success: function(response){
            res = response
        },
        error: function(error){
            res = error
        }
    })
    return res
}
// for file upload 
function newForm(url, data){
    var res = null
    $.ajax({
        method: 'post',
        data: data,
        url: url,
        dataType: 'json',
        async: false,
        cache: false,
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        success: function(response){
            res = response
        },
        error: function(err){
            res = err
        }
    })
    return res
}

// for getting data from controller
function getAjax(url){
    var res = null
    $.ajax({
        type: 'get',
        url: url,
        cache: false,
        async: false,
        dataType: 'json',
        success: function(response){
            res = response
        },
        error: function(error){
            res = error
        }
    })
    return res
}
function swal(icon = 'success', title = ''){
    Swal.fire({
    position: 'center',
    icon: icon,
    title: title,
    showConfirmButton: false,
    timer: 1500
    })
}