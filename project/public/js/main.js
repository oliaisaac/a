function changeBack(id,id2,id3) {
    var csrf= $('button#but'+id).attr('csrf');
    $.ajax({
        'url': '/changeBack',
        'type': 'POST',
        'data': {id:id, _token:csrf},
        success: function(res) {
            document.body.style.backgroundImage = 'url(/storage/'+res['path']+')';
        }, error: function(res) {
            console.log();
        }
    });
    $('button#but'+id).css('background-color','#FAB400');
    $('button#but'+id2).css('background-color','rgba(255, 255, 255, 0.8)');
    $('button#but'+id3).css('background-color','rgba(255, 255, 255, 0.8)');
}


function show(id,id2,id3) {
    document.getElementById('editInfo').reset();
    document.getElementById('editBlock').reset();
    document.getElementById('editBack').reset();
    $('div#'+ id).show(300);
    $('div#'+ id2).hide(300);
    $('div#'+ id3).hide(300);

}

$('form#auth').submit(function(e){
    e.preventDefault();
    var info = $(this).serialize();
    console.log(info);
    $.ajax({
       'url': '/auth',
       'type':'POST',
       'data': info,
       success: function(res) {
           console.log(res);
           window.location.href = "/admin";
       }, error: function(res) {
           console.log(res);
       }
   });
});
