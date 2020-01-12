require.config({
    paths: {
        "jquery": "/js/plugin/jquery-1.7.2.min.bak",
        "amz": "/common/AmazeUI-2.7.2/assets/js/amazeui.min",
        "index": "/js/index/index",
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
require(["jquery", "index", "hf"], function ($, index, hf) {

})