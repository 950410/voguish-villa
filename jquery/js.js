$(document).ready(function () {

    $('[data-toggle="tooltip"]').tooltip();

    $('.delete_category').on('click', function (e) {
        e.preventDefault();
        var href = $(this).attr("href");
        var answer = confirm("Are you sure you want to delete?");
        var result = this;
        if (answer) {
            $.ajax({
                type: "GET",
                url: href,
                success: function (response) {
                    if (response == "Success") {
                        alert('success');
                        $(result).find("tr").fadeOut("slow");
                    }
                    else {
                        alert("Delete error!!!");
                    }
                }
            });
        } else {
            return false;
        }
    })

    $(".delete").on('click', function (e) {
        e.preventDefault();
        var href = $(this).attr("href");
        var answer = confirm('Do you want to delete?');
        var image = this;

        if (answer) {
            $.ajax({
                type: "GET",
                url: href,
                success: function (response) {
                    if (response == "Success") {
                        $(image).parent().fadeOut("slow");
                    }
                    else {
                        alert("Error");
                    }
                }
            });
        } else {
            return false;
        }

    })
    $(".del_product_image").on('click', function (e) {
        e.preventDefault();
        var href = $(this).attr("href");
        var answer = confirm('Do you want to delete?');
        var image = this;

        if (answer) {
            $.ajax({
                type: "GET",
                url: href,
                success: function (response) {
                    if (response == "Success") {
                        $(image).parent().fadeOut("slow");
                    }
                    else {
                        alert("Error");
                    }
                }
            });
        } else {
            return false;
        }

    })


    $(".publish_news").on('click', function (e) {
        e.preventDefault();
        var href = $(this).attr("href");
        var status = $(this).attr("data-status");
        var result = this;
        if (status == "publish") {
            var parent = $(this).parent();
            parent.find('.action').slideToggle('slow');
        }
        else {
            var answer = confirm('Do you want to proceed?');
            if (answer) {
                $.ajax({
                    url: href,
                    dataType: "json",
                    success: function (response) {
                        if (response.status == "Success") {
                            $(result).parent().append("<div>UNPUBLISHED</div>");
                            $(result).find("i").removeClass("fa-eye-slash");
                            $(result).find("i").addClass("fa-eye");
                            $(result).attr('title', 'PUBLISH');
                            $(result).attr('data-original-title', 'PUBLISH');
                            console.log($(result).attr("title"));
                            console.log($(result).attr("'data-original-title"));
                        }
                        else {
                            alert("Error");
                        }
                    }
                });
            }
            else {
                return false;
            }
        }
    })

    $(".banner").on('click', function (e) {
        e.preventDefault();
        var href = $(this).attr("href");
        var answer = confirm('Are you sure?');
        var result = this;
        if (answer) {
            $.ajax({
                url: href,
                dataType: "json",
                success: function (response) {
                    if (response.status == "Success") {
                        if (response.action == "add") {
                            $(result).parent().append("<div>Removed from banner</div>");
                            $(result).find("i").removeClass("fa-plus");
                            $(result).find("i").addClass("fa-minus");
                        } else {
                            $(result).parent().append("<div>Added to banner</div>");
                            $(result).find("i").removeClass("fa-minus");
                            $(result).find("i").addClass("fa-plus");
                        }
                    }
                    else {
                        alert("Error");
                    }
                }
            });
        } else {
            return false;
        }

    })

    $(".flag").on('click', function (e) {
        e.preventDefault();
        var href = $(this).attr("href");
        var answer = confirm('Are you sure?');
        var result = this;
        if (answer) {
            $.ajax({
                url: href,
                success: function (response) {
                    if (response == "Success") {
                        $(result).parent().append("<div> DONE</div>");
                    }
                    else {
                        alert("Error");
                    }
                }
            });
        } else {
            return false;
        }

    })

    $(".subscriber").on('click', function (e) {
        e.preventDefault();
        var answer = confirm('Do you want to subscribe?');
        var data = $('#subs').val();
        alert(data);

        if (answer) {
            $.ajax({
                type: "POST",
                url: href,
                data: {"subscribers": data},
                success: function (response) {
                    if (response == "Success") {
                        $('#subs').parent().html("Thanks for subscribing.");
                    }
                    else {
                        $('#subs').parent().html("You have already subscribed");
                    }
                }
            });
        } else {
            return false;
        }

    })

    $(".product_status").on('click', function (e) {
        e.preventDefault();
        var href = $(this).attr("href");
        var answer = confirm('Are you sure?');
        var result = this;
        if (answer) {
            $.ajax({
                url: href,
                dataType: "json",
                success: function (response) {
                    if (response.action == "Success") {
                        if (response.status == "publish") {
                            $(result).parent().append("<div>Unpublished</div>");
                            $(result).find("i").removeClass("fa-eye-slash");
                            $(result).find("i").addClass("fa-eye");
                        } else {
                            $(result).parent().append("<div>Published</div>");
                            $(result).find("i").removeClass("fa-eye");
                            $(result).find("i").addClass("fa-eye-slash");
                        }
                    }
                    else {
                        alert("Error");
                    }
                }
            });
        } else {
            return false;
        }

    })


    $('.check_address_select').on('click', function () {
        var val = this.value;
        var href = baseurl + 'admin/vehicle_network/remove_location_network/'+val;
        var result = this;
        if (this.checked) {
            $('div.address_' + val).slideDown();
        }
        else {
            var answer = confirm('Are you sure?');
            if (answer) {
                $.ajax({
                    type: "GET",
                    url: href,
                    success: function (response) {
                        if (response == "Success") {
                            $('div.address_' + val).slideUp();
                        }
                        else {
                            alert("Error");
                        }
                    }
                });
            } else {
                return false;
            }

        }

    });

});

$('.sub_category').on('click',function(e){
    e.preventDefault();
    var parent = $(this).parent();
    parent.find('.sub_category').slideToggle('slow');
})
