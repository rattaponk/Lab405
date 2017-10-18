$('#myForm, #myFormLogin').validator();
$('[data-toggle="tooltip"]').tooltip();

$('#createRow').click(function() {
  var num = $('.product').length;

  var html = '<div class="form-group product has-feedback"> \
    <label class="col-sm-3 col-sm-offset-1 control-label"> productName ' + (num + 1) + ' </label> \
    <div class="col-sm-6"> \
      <input type="text" name="product' + (num + 1) + '" class="form-control valProduct" id="product' + (num + 1) + '" required=true> \
    </div> \
    <div class="col-md-2"> \
      <button type="button" class="btn btn-sm btn-danger deleteElement" data-toggle="tooltip" data-placement="top" title="ลบ"><span class="glyphicon glyphicon-remove"></span></button> \
    </div> \
  </div>';

  $('#place_element').append(html);

  $('#myForm').validator('update');
});

$('.deleteElement').click(function() {
  $(this).parent().parent().remove();

  updateForm();
});

// $(document).on('click', '.deleteElement', function(){
//   $(this).parent().parent().remove();
//
//   updateForm();
// });

$('#myForm').validator().on('submit', function(e) {
  if (e.isDefaultPrevented()) {
    // handle the invalid form...
  } else {
    var arrData = [];
    //
    $('.valProduct').each(function(e) {
      if ($(this).val() != "") arrData.push($(this).val());
    });
    //
    console.log(arrData);

    $.ajax({
        url: "saveFormJs.php",
        type: "POST",
        data: {
          data: JSON.stringify(arrData)
        }
      })
      .done(function(response) {
        console.log("done");
        console.log(response);
      })
      .fail(function(response) {
        console.log("fail");
        console.log(response);
      });

    return false;
  }
});

function uploadImg(blob) {
  var formData = new FormData();
  formData.append('picture', blob);

  $.ajax({
    url: 'saveFormJs.php',
    type: 'POST',
    data: formData,
    async: false,
    cache: false,
    contentType: false,
    enctype: 'multipart/form-data',
    processData: false,
    success: function(response) {
      console.log("success");
      console.log(response);
    },
    error: function(response) {
      console.log("error");
    }
  });
}

function updateForm() {
  var i = 1;

  $('.product').each(function() {
    $(this).find('label').html("productName" + i);
    i++;
  });
}
