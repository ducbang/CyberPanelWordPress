function GlobalAjax(dataContent) {
    jQuery(document).ready(function ($) {
        $("#WPCPSpinner").show();
        $.post(CPWP.ajax_url, dataContent
            , function (data) {
                $("#WPCPSpinner").hide();

                if (typeof data == "string") {
                    var jsonData = JSON.parse(data);
                }
                {
                    var jsonData = data;
                }

                if (jsonData.status === 1) {
                    $(document).ready(function () {
                        try {
                            $("#jobStatusResult").html(jsonData.result);
                        } catch (e) {
                        }
                        $("#jobsModal").modal('show')
                    });
                }
            });
    });
}

jQuery(document).ready(function ($) {
    $("#WPCPSpinner").hide();
    $("#connectServer").click(function () {
        var dataContent = {
            _ajax_nonce: CPWP.nonce,
            action: 'connectServer',
            hostname: $("#hostname").val(),
            username: $("#username").val(),
            password: $("#password").val()
        }
        GlobalAjax(dataContent);

        dataContent = {
            _ajax_nonce: CPWP.nonce,
            action: 'jobStatus'
        }

        GlobalAjax(dataContent);
    });
    $("#viewJobs").click(function (){

        dataContent = {
            _ajax_nonce: CPWP.nonce,
            action: 'jobStatus'
        }

        GlobalAjax(dataContent);

    });
});

///
