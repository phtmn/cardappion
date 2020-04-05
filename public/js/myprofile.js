$(document).ready(function() {
    // alert("Ready");
    hideLoading();
    toastr.options = {
        closeButton: true,
        progressBar: true,
        showMethod: "slideDown",
        timeOut: 3000
    };

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

});

$("body").on("click", "#btnSaveForm", function(e) {
    e.preventDefault();

    showLoading();

    var request = getFormData();

    $.ajax({
        url: "/api-request",
        method: "POST",
        data: request,
        success: ({ data }) => {
            if (data.error == 1) {
                // toastr.warning(`${data.msg}`, "Notification");
                showPopupNotification('error', 'My Profile', data.msg);
                hideLoading();
                return;
            }
            showPopupNotification('success', 'My Profile', 'Information saved successfully');
            // toastr.success("Information saved successfully!", "Notification");
            syncUserSession();
            hideLoading();
        },
        error: err => {
            // console.log(err);
            showPopupNotification('error', 'My Profile', 'Update failed');
            // toastr.error("Update failed!", "Notification");
            hideLoading();
        }
    });
});

function getFormData() {
    var request = {};
    var ObjData = {};

    //parse form data to array;
    var formData = $("#postForm").serializeArray();

    //parse array of data to Object
    $.each(formData, function(i, item) {
        ObjData[item.name] = item.value;
    });

    //return the request data
    request.data = ObjData;
    request.method = $("#postForm").data("method");
    request.endpoint = $("#postForm").data("endpoint");

    return request;
}

$("body").on("click", ".btnIdecideSavePassword", function(e) {
    var idecide_new_pass = $("#idecide_new_pass").val();

    if (idecide_new_pass == "") {
        alert("password input is required!");
        return;
    }

    var method = $(this).data("method");
    var endpoint = $(this).data("endpoint");

    $.ajax({
        url: "/api-request",
        method: "POST",
        dataType: "json",
        data: {
            method,
            endpoint,
            data: {
                idecide_new_pass
            }
        },
        success: ({ data }) => {
            if (data.error == 1) {
                // toastr.warning(`${data.msg}`, "Notification");
                showPopupNotification('error', 'My Profile', data.msg);
                hideLoading();
                return;
            }
            // toastr.success("Information saved successfully!", "Notification");
            showPopupNotification('success', 'My Profile', 'Information saved successfully');
            hideLoading();
        },
        error: err => {
            // console.log(err);
            // toastr.error("Update failed!", "Notification");
            showPopupNotification('error', 'My Profile', 'Update failed');
            hideLoading();
        }
    });
});

$("body").on("click", ".btnIdecideSaveEmail", function(e) {
    var idecide_email = $("#idecide_email").val();

    if (idecide_email == "") {
        alert("email input is required!");
        return;
    }

    var method = $(this).data("method");
    var endpoint = $(this).data("endpoint");

    $.ajax({
        url: "/api-request",
        method: "POST",
        dataType: "json",
        data: {
            method,
            endpoint,
            data: {
                idecide_email
            }
        },
        success: ({ data }) => {
            if (data.error == 1) {
                // toastr.warning(`${data.msg}`, "Notification");
                showPopupNotification('error', 'My Profile', data.msg);
                hideLoading();
                return;
            }
            // toastr.success("Information saved successfully!", "Notification");
            showPopupNotification('success', 'My Profile', 'Information saved successfully');
            hideLoading();
        },
        error: err => {
            // console.log(err);
            // toastr.error("Update failed!", "Notification");
            showPopupNotification('error', 'My Profile', 'Update failed');
            hideLoading();
        }
    });
});

$("#billingAddressSelect").change(function() {
    var value = $(this)
        .find(":selected")
        .val();

    if (value == -1) {
        $("#addressForm").show();
        $("#btnAddCard").text("Add card & address");
    } else {
        $("#addressForm").hide();
        $("#btnAddCard").text("Add card");
    }
});

$("body").on("click", ".deletePaymentMethodButton", function() {
    $(this).prop("disabled", true);
    $(this).text("Deleting...");

    var payment_method_id = $(this).data("payment");
    var endpoint = $(this).data("endpoint");
    var method = $(this).data("method");

    var row = $(this)
        .parent()
        .parent();

    $.ajax({
        url: "/api-request",
        method: "POST",
        data: {
            endpoint,
            method,
            data: {
                payment_method_id
            }
        },
        success: ({ data }) => {
            if (data.error == 1) {
                // toastr.warning(`${data.msg}`, "Notification");
                showPopupNotification('error', 'My Profile', data.msg);
                hideLoading();
                return;
            }
            // toastr.success("Payment Method has been Deleted!", "Notification");
            showPopupNotification('success', 'My Profile', 'Payment Method has been Deleted');
            row.hide();
            hideLoading();
        },
        error: err => {
            // console.log(err);
            // toastr.error("You Request has failed!", "Notification");
            showPopupNotification('error', 'My Profile', 'You Request has failed');
            hideLoading();
        }
    });
});

function showLoading() {
    $(".loading").fadeIn(500);
}
function hideLoading() {
    $(".loading").fadeOut(500);
}

$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 200,
        height: 200,
        circle:false
    },
    boundary: {
        width: 300,
        height: 300
    },
});


$('#upload').on('change', function () {
    var reader = new FileReader();
    reader.onload = function (e) {
        $uploadCrop.croppie('bind', {
            url: e.target.result
        }).then(function(){
            console.log('jQuery bind complete');
        });
    }
    $('.upload-result').attr('disabled',false)
    reader.readAsDataURL(this.files[0]);
});


$('.upload-result').on('click', function (ev) {
    $(this).html('Uploading...');
    $(this).attr('disabled',true);

    $uploadCrop.croppie('result', {
        type: 'canvas',
        size: 'viewport'
    }).then(function (resp) {
        showLoading();
        $.ajax({
            url: "/profile/upload",
            type: "POST",
            data: {"image":resp},
            success: function (data) {
                hideLoading();
                toastr.success("You Profile Image has been Updated!", "Notification");
                $('#collapseUpload').collapse('hide')
                location.reload()
            }
        });
    });
});

$('#primary-address').on('click', function (ev) {

    var checkbox = $("#primary-address input[type='checkbox']");

    if (checkbox.prop('checked') == true) {
        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (resp) {
            showLoading();
            $.ajax({
                url: "/get-primary-address",
                type: "GET",
                data: {"primary_address":resp},
                success: function (data) {
                    hideLoading();
                    $('#address1').val(data.primary_address.address1);
                    $('#address2').val(data.primary_address.address2);
                    $('#apt').val(data.primary_address.apt);
                    $('#city').val(data.primary_address.city);
                    $('#stateprov').val(data.primary_address.stateprov);
                    $('#postalcode').val(data.primary_address.postalcode);
                    $('#countrycode').val(data.primary_address.countrycode);
                }
            });
        });
    }
});

