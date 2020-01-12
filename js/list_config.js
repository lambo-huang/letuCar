require.config({
    paths: {
        "jquery": "/js/plugin/jquery-1.7.2.min.bak",
        "list": "/js/list/list",
        "amz": "/common/AmazeUI-2.7.2/assets/js/amazeui.min",
        "hf": "/js/common/head_foot",
        "jq_form": "/admin/js/jquery.form"
    },
    shim:{
        "amz": ["jquery"]
    },
    packages: [
        {
            name: "plugin",
            location: "/js/plugin",
            main: "plugin"
        }
    ]
})
require(["jquery", "list", "hf"], function ($, list, hf) {


});