function checkSpace(){

    var fileInputs = $('input[type=file]');
    var fileCount = 0;
    
    
    for(var key = 0; key<fileInputs.length; key = key+1){
        if(fileInputs[key].files && fileInputs[key].files.length == 0){
            fileCount = fileCount + 1;
            console.log(fileInputs[key]);
        }
    }

    if(fileCount==0){
        $('.photo_upload-add-b').hide();
    }else {
        $('.photo_upload-add-b').show();
    }

}


function addPhoto(){
    var fileInputs = $('input[type=file]');
    var count = 0;
    for(var key = 0; key<fileInputs.length; key = key+1){
        if(fileInputs[key].files && fileInputs[key].files.length == 0){
            fileInputs[key].click();
            count = count + 1;
            break;
        }
    }

    if(count == 0){
        $('.photo_upload-add-b').hide();
    }

    $('.photo_upload-subs').show();
};

function removeImage(that){
    function resetFormElement(e) {
        e.wrap('<form>').closest('form').get(0).reset();
        e.unwrap();
      
        // Prevent form submission

      }
    var fileInput = $('input[type=file]')[$(that).attr('data')];
    console.log(fileInput);
    resetFormElement($(fileInput));
    $(that).removeAttr("src");
    checkSpace();

    
}

$('.photo_upload-add-b').click(function(){
    addPhoto();
});

$('.photo_upload-prev').click(function(event){
    var that = this;
    removeImage(that);
});






  var loadFile = function(event,i) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = $('.photo_upload-prev-'+i);
      output.attr('src',reader.result);
      checkSpace();
    };
    reader.readAsDataURL(event.target.files[0]);
  };
