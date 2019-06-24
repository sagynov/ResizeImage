// Resize Image
$('#formSize').on('submit', function(e){
    e.preventDefault();
    // var selectSize = $('#selectSize')[0].value;
    // var image = $('#fileSize').prop('files')[0];
    // console.log(image);
    console.log(this);
    var formData = new FormData(this);
    // formData.append("imageFile", image);
    $.ajax({
        url: 'resize.php',
        data: formData,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function ( data ) {
            console.log(data);
            $('#resultSize').html('<img src="'+data+'" alt="result"><br><a href="'+data+'">Скачать результат</a>');
            
        }
    });
    this.reset();
    return false;
});
// Select Center
$('#formCenter').on('submit', function(e){
    e.preventDefault();
    // var selectSize = $('#selectSize')[0].value;
    // var image = $('#fileSize').prop('files')[0];
    // console.log(image);
    console.log(this);
    var formData = new FormData(this);
    // formData.append("imageFile", image);
    $.ajax({
        url: 'center.php',
        data: formData,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function ( data ) {
            console.log(data);
            $('#resultCenter').html('<img src="'+data+'" alt="result"><br><a href="'+data+'">Скачать результат</a>');
            
        }
    });
    this.reset();
    return false;
});
