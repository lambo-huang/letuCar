require.config({
    paths: {
        "jquery": "/js/plugin/jquery-1.7.2.min.bak",
        "area": "/js/presonal_center/area",
        "presonal_center": "/js/presonal_center/presonal_center",
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
require(["jquery", "hf", "presonal_center"], function ($, hf, presonal_center) {


});