require.config({
    paths: {
        "jquery": "/js/plugin/jquery-1.7.2.min.bak",
        "about_us": "/js/about_us/about_us",
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
require(["jquery", "hf", "about_us"], function ($, hf, about_us) {


});